# Mark Biek

Senior Software Engineer at Automattic. Domains, checkout and commerce
infrastructure for WordPress.com.

- Email: markbiek@duck.com
- Web: https://mark.biek.org
- Location: Louisville, KY, USA

## I don't have accounts on any freelance sites

If you happen to see a Mark Biek with my picture on Upwork or any other
freelance site, that's a fake profile. I don't currently do work through any
freelance sites, though I am occasionally available for contract work.

## Places I've worked

### Senior Software Engineer — Automattic

**Feb 2022 – present.** Domains, checkout and commerce infrastructure for
WordPress.com.

**Selected work**

- Built the contact verification service that keeps every WordPress.com domain
  ICANN-compliant, across all registrars: verification endpoint, event handlers,
  suspension and reminder jobs, nameserver restore, and the suspended-domain
  page customers see. Shipped it inert, every method stubbed and no callers, so
  it landed with no production impact. Built the unsuspend path first.
- Took domain bundling from prototype to launch in 2026: catalog schema and data
  on the backend, grouped line items and discount pricing through cart and
  checkout in Calypso, funnel analytics, and an on/off experiment behind a
  server-side feature flag.
- Member of Automattic's AI Guides group. Helped develop AI-enablement
  curriculum for all roles across the company. Provided AI tooling support and
  led learning sessions.
- Closed an authorization hole that let any logged-in user disconnect any domain
  from any site. The REST route had no permission callback, which WordPress
  treats as public.
- Built the domain capabilities behind WordPress.com's AI support agent: a
  shared trait for turning registrar failures into usable responses, an
  authorization gate across every ability, and read abilities for DNS, WHOIS and
  mail service records.
- Led the white-labeled site migration plugin in 2024, working with an outside
  development partner, design, and engineers from three teams. It replaced the
  old Move to WordPress.com plugin.
- Fixed duplicate signup events in the Calypso stepper that had inflated
  top-of-funnel counts by 8 to 61% depending on the flow, distorting onboarding
  metrics and marketing attribution across the company.
- Traced silent Google Workspace provisioning failures, where customers paid for
  mailboxes that were never created, to a replica lag read in the retry path.
  Fixed it, wrote CLI tooling to remediate the affected accounts, then put that
  in the support UI so support could resolve it without an engineer.
- Wrote simplenote-mcp, an MCP server for Simplenote, published to npm and the
  MCP Registry and picked up by Matt Mullenweg, Automattic's CEO.
- Ran Gutenberg release rotations. Caught and reverted a bad release, then built
  a tool to report Gutenberg versions across Simple and Atomic and changed the
  release bot to deploy each chunk at a time.
- Set up the team's shared Claude Code plugin repository and ran a team session
  on working with coding agents.

**Also**

Reader and Tumblr StreamBuilder implementation on WordPress.com · site migration
and import flows · Commerce in a Box domain infrastructure · WordPress.com theme
and plugin marketplace · Professional Email and Google Workspace · engineering
hiring and code-test review · Calypso development · Jetpack development.

### Development Team Lead — VIA Studio

**Dec 2015 – Feb 2022.**

- Build custom websites using Laravel, WordPress, ReactJS and NextJS. Some
  examples:
  - Product subscription service and parts wishlist for WARE's
    boilerwarehouse.com.
  - Integration from WordPress to Salesforce for the Stave & Thief Society.
  - Backend development and Sanity CMS integration for the redesigned
    via.studio.
  - Developed the Kentucky Performing Arts Center ticketing ReactJS app.
  - Developed the redesigned air quality website for Louisville Air Watch
    (https://airqualitymap.louisvilleky.gov/), including a more efficient API
    layer.
- Design large-scale ecommerce systems for clients.
- Spearheaded the project to sell custom WordPress plugins on
  plugins.viastudio.com (now defunct). This included lead developer on the
  plugins themselves as well as the corresponding sales website.
- Development team manager and member of the company leadership team.
  - Assist with client prospecting; generate new business leads; lead developer
    on large projects; assist project managers with scheduling and sprint
    planning; mentor junior developers.
- Manage internal and cloud servers; manage Vagrant, Docker and Jenkins CI
  projects for internal development.

### Senior Development Consultant — Studymaker, LLC

**2002 – 2022.**

- Development on Studymaker's Recover platform for the CDC.
  - Worked on the web platform and admin website using Laravel PHP and React.
  - Developed the process to pull data from the CDC's Google Cloud instance to
    import into the website.
  - Developed the process to export processed data as Parquet files for CDC
    reporting. This was later replaced by a special database instance which CDC
    connects to directly.
  - Set up and managed the AWS resources for hosting.
- Development on Studymaker's EDC platform for tracking medical research study
  data.
  - Spearheaded the initiative to migrate from PHP 5.6 to PHP 7.x to PHP 8.x.
  - Build tooling improvements, AWS S3 integration for large file storage, email
    sending with Mailgun, SMS sending with Twilio.
- Design and maintain AWS architecture for HIPAA-compliant PHP application
  hosting, including monitoring and deployment scripts.
- Wrote an AngularJS application for calculating Procalcitonin changes
  (https://www.brahms-pct-calculator.com/). Involved close work with the FDA and
  a rapidly changing set of requirements.
- Worked on a data validation website built on top of the Redcap API, for Beth
  Israel Deaconess Medical Center, Harvard University. Wrote a mobile-friendly
  website for collecting patient medical information, used by BIDMC doctors at
  the 2012 Democratic Convention at their mobile treatment stations.
- Custom Laravel site for displaying data dashboards. Included a custom REST API
  so dashboard data could be pulled into other sources.
- Server management, including migration from Rackspace to AWS.

### Earlier roles

Details available upon request.

- **Senior Development Consultant** — Negotiation360. May 2020 – Dec 2020.
- **Senior Development Consultant** — ioVita. Jan 2018 – Aug 2019.
- **Senior Technical Advisor** — MMJ Initiative. Jan 2018 – Sep 2019.
- **Senior Programmer Analyst** — Kindred Healthcare. Sep 2013 – Nov 2015.
- **Senior Interactive Developer** — Power Creative. Aug 2008 – Sep 2013.
- **Senior Programmer Analyst** — The Stevenson Company. Sep 2002 – Aug 2008.
- **Software Developer** — ZFrame Corporation. Jan 2000 – Sep 2002.
- **Software Developer** — PinPoint Corporation. Aug 1998 – Jan 2000.

## Technologies

- **Primary** — PHP (WordPress, Laravel), TypeScript and JavaScript, React,
  Node.js, SQL, REST API design.
- **AI tooling** — Claude Code, Codex, Model Context Protocol (MCP), agent skill
  authoring.
- **Domain and commerce** — ICANN registrar operations, EPP, DNS, WooCommerce,
  Stripe.
- **Also** — Next.js, React Native, C#/.NET, GraphQL, AWS, Docker, HTML/CSS/SCSS.
