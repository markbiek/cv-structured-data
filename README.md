# CV Structured Data

A small WordPress plugin that makes [mark.biek.org/cv](https://mark.biek.org/cv)
readable by machines as well as people.

It does four things:

1. Prints a schema.org `Person` JSON-LD block in the `<head>` of the CV page.
2. Serves `/cv.md` and `/llms.txt` from the site root with correct media types.
3. Points `robots.txt` at `/llms.txt`.
4. Adds print styles so the page saves cleanly as a PDF.

Built for a WordPress.com Atomic site (Business plan or higher). Nothing in it is
WordPress.com specific, so it works on any WordPress install.

## Why serve the files through PHP

A static `cv.md` uploaded to the web root comes back as
`application/octet-stream` on WordPress.com Atomic — nginx has no entry for `.md`
in its mime map, and there is no `.htaccess` to override it. Browsers download the
file instead of displaying it, and the `type="text/markdown"` on the alternate
link contradicts what the server sends.

Serving through `parse_request` lets the plugin set `Content-Type` itself. It also
keeps the files in version control with the code, on one deploy path.

The hook only fires when nginx finds no real file at the path and falls through to
`index.php`, which is the case for both paths here.

## Print styles

`assets/print.css` loads with `media="print"` and only on the CV page, so it
cannot affect the screen render. It hides the site header, footer, navigation
and the Jetpack subscription block, drops the block theme's screen width
constraint so the content fills the page, sets `@page` margins, and keeps
headings from stranding at the foot of a page.

Link destinations are deliberately not appended with `a:after`. Most of the link
text in this CV is already a URL, so expanding would print every address twice.

The page header and footer on the printout, the URL, date and page numbers, come
from the browser's print dialog and not from CSS. Turn them off there before
saving the PDF.

### Checking the hide list

The hide selectors are written against the live theme's markup, and a class that
looks like chrome can turn out to wrap the content. `.subscription-block` did:
the theme puts it on two nested groups and the outer one contains
`.entry-content`, so hiding the bare class printed a blank page.

Run this after any theme update, or after editing the hide list:

```sh
python3 tools/check-print-css.py
```

It fetches the CV page, works out which elements each hide selector matches, and
fails if any of them match `.entry-content` or one of its ancestors. Pass a local
HTML file instead of the URL to check a saved copy.

## Install

Copy the directory into `wp-content/plugins/` and activate it, or point
WordPress.com's GitHub deployment integration at this repository.

## Configure

Everything lives in `cv-structured-data.php`:

- `PAGE_SLUG` — the page that gets the JSON-LD. Currently `cv`.
- `SERVED_FILES` — root paths mapped to media type and backing file.
- `person_schema()` — the schema.org record.
- `assets/print.css` — the print stylesheet. Versioned by `filemtime()`, so an
  edit busts the cache without a plugin version bump.

The CV content itself is in `files/cv.md` and `files/llms.txt`.

Two copies of the CV exist: this markdown file and the WordPress page. They do not
sync. Update both.

## On the phone number

`person_schema()` deliberately omits `telephone`. The number is on the
human-readable CV page, but putting it in structured data makes it harvestable at
scale, which is a meaningfully different exposure. The line is present and
commented out if you want it.

## Verify

Validate the JSON-LD at [validator.schema.org](https://validator.schema.org).

Check the media types after deploying:

```sh
curl -sI https://mark.biek.org/cv.md    | grep -i content-type
curl -sI https://mark.biek.org/llms.txt | grep -i content-type
```

Expect `text/markdown; charset=utf-8` and `text/plain; charset=utf-8`.

If either still returns `application/octet-stream`, a real file exists at that
path on disk and nginx is serving it before PHP sees the request. Remove it.

## Note on llms.txt

`llms.txt` is a convention, not a standard. No major crawler has committed to
reading it. It costs one file, so it is worth having, but the JSON-LD block is what
actually makes the CV machine-readable — it uses a vocabulary parsers already
consume.

## License

GPL-2.0-or-later.
