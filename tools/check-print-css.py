#!/usr/bin/env python3
"""Check that the print stylesheet does not hide the CV content.

The hide block in assets/print.css is written against the live theme's markup.
A class that looks like chrome can turn out to wrap the content region, in which
case printing yields a blank page. This asserts that no hide selector matches
.entry-content or any of its ancestors.

    python3 tools/check-print-css.py [url-or-file]

Defaults to https://mark.biek.org/cv/. Exits non-zero on failure.
"""
import re
import sys
import urllib.request
from html.parser import HTMLParser
from pathlib import Path

DEFAULT = 'https://mark.biek.org/cv/'
CSS = Path(__file__).resolve().parent.parent / 'assets' / 'print.css'
VOID = {'area', 'base', 'br', 'col', 'embed', 'hr', 'img',
        'input', 'link', 'meta', 'source', 'track', 'wbr'}


def hide_selectors(css_text):
    """Return the selectors from the `display: none` rule.

    Comments are stripped from the whole stylesheet first. Stripping per
    comma-separated fragment silently loses a selector whenever a comment
    contains a comma, which reads as a pass rather than an error.
    """
    css_text = re.sub(r'/\*.*?\*/', '', css_text, flags=re.S)
    m = re.search(r'([^{}]+)\{\s*display:\s*none[^}]*\}', css_text)
    if not m:
        raise SystemExit('no display:none rule found in print.css')
    return [s.strip() for s in m.group(1).split(',') if s.strip()]


def matches(selector, chain):
    """True if `selector` matches the last element of `chain`.

    Supports class and id selectors joined by descendant combinators, which is
    all the hide block uses.
    """
    parts = selector.split()
    tag, cls, eid = chain[-1]
    classes = set(cls.split())

    def hits(part, tag, classes, eid):
        for token in re.findall(r'[.#][\w-]+', part) or [part]:
            if token.startswith('.') and token[1:] not in classes:
                return False
            if token.startswith('#') and token[1:] != eid:
                return False
            if not token.startswith(('.', '#')) and token != tag:
                return False
        return True

    if not hits(parts[-1], tag, classes, eid):
        return False
    # Walk ancestors right to left for the remaining descendant parts.
    remaining = parts[:-1]
    i = len(chain) - 2
    while remaining and i >= 0:
        atag, acls, aeid = chain[i]
        if hits(remaining[-1], atag, set(acls.split()), aeid):
            remaining.pop()
        i -= 1
    return not remaining


class Collector(HTMLParser):
    def __init__(self):
        super().__init__(convert_charrefs=True)
        self.stack = []
        self.content_chain = None
        self.elements = []

    def handle_starttag(self, tag, attrs):
        if tag in VOID:
            return
        a = dict(attrs)
        node = (tag, a.get('class', '') or '', a.get('id', '') or '')
        self.stack.append(node)
        self.elements.append(list(self.stack))
        if self.content_chain is None and 'entry-content' in node[1].split():
            self.content_chain = list(self.stack)

    def handle_endtag(self, tag):
        if tag in VOID:
            return
        for i in range(len(self.stack) - 1, -1, -1):
            if self.stack[i][0] == tag:
                del self.stack[i:]
                return


def main():
    src = sys.argv[1] if len(sys.argv) > 1 else DEFAULT
    if src.startswith('http'):
        sep = '&' if '?' in src else '?'
        with urllib.request.urlopen(src + sep + 'cachebust=printcheck') as r:
            html = r.read().decode('utf-8', 'replace')
    else:
        html = Path(src).read_text(encoding='utf-8', errors='replace')

    selectors = hide_selectors(CSS.read_text())
    c = Collector()
    c.feed(html)

    if not c.content_chain:
        raise SystemExit('FAIL: .entry-content not found in ' + src)

    failures = []
    for sel in selectors:
        for depth, _ in enumerate(c.content_chain):
            chain = c.content_chain[:depth + 1]
            if matches(sel, chain):
                where = 'the content itself' if depth == len(c.content_chain) - 1 \
                        else f'an ancestor <{chain[-1][0]} class="{chain[-1][1][:60]}">'
                failures.append(f'  {sel}  hides {where}')

    hidden = sum(1 for el in c.elements if any(matches(s, el) for s in selectors))
    print(f'source:     {src}')
    print(f'selectors:  {len(selectors)}')
    print(f'elements hidden: {hidden}')

    if failures:
        print('\nFAIL: the print stylesheet hides the CV content.')
        print('\n'.join(failures))
        return 1
    print('\nok: no hide selector matches .entry-content or its ancestors')
    return 0


if __name__ == '__main__':
    sys.exit(main())
