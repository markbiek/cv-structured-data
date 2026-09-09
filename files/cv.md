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

- Built the registrar-agnostic domain contact verification service that keeps
  every WordPress.com domain ICANN-compliant (verification endpoint, event
  handlers, suspension and reminder async jobs, nameserver restore, and the
  customer-facing suspended-domain page). Phased rollout for a zero-impact
  deploy; built the unsuspend path before the suspension path for added safety.
- Took domain bundling and upsell from prototype to production launch (2026):
  catalog schema and data on the backend, grouped line items and discount
  pricing through cart and checkout in Calypso, funnel analytics, and an ExPlat
  experiment behind a server-side feature flag. Also built a complete dashboard
  for quickly viewing domain bundling sales metrics. Handled architecture and
  backend and frontend development.
- Member of Automattic's AI Guides group. Helped design AI learning curriculum
  for all roles, lead training and work sessions, and shared personal AI
  workflows.
- Built and hardened the domain capabilities behind WordPress.com's AI support
  agent: shared error-handling trait, shared authorization gate, and read
  abilities for DNS, WHOIS and mail-service records.
- Led the white-labelled site migration plugin project (2024), coordinating an
  external development partner, design, and a cross-team engineering group.
  Replaced the previous "Move to WordPress.com" tool.
- Found and closed an authorization hole that let any authenticated user
  disconnect any domain from any site (a REST route registered with no
  permission callback).
- Diagnosed and fixed duplicate signup-funnel events inflating top-of-funnel
  counts by 8–61% by flow, distorting onboarding measurement and marketing
  attribution organization-wide.
- Traced silent Google Workspace provisioning failures to a replica-lag read,
  then built CLI remediation tooling and shipped it into the support UI for
  self-service.
- Ran Gutenberg release rotations: caught and reverted a bad release, then built
  the version-visibility tooling and per-chunk deploy change that lowered the
  risk of every release after it.
- Wrote and published simplenote-mcp, an MCP server for Simplenote, to npm and
  the MCP Registry. Shared publicly by Automattic's CEO, Matt Mullenweg.
- Established the team's shared Claude Code plugin marketplace and ran a team
  session on agent-assisted development workflow.

**Also**

Reader and Tumblr StreamBuilder implementation on WordPress.com · site migration
and import flows · Commerce in a Box domain infrastructure · WordPress.com theme
and plugin marketplace · Professional Email and Google Workspace · engineering
hiring and code-test review · Calypso development · Jetpack development.

### Development Team Lead — VIA Studio

**Dec 2015 – Feb 2022.**

- Build custom websites using Laravel, WordPress, ReactJS and NextJS. Some
  examples:
  - Product subscription service for WARE's boilerwarehouse.com.
  - Parts wishlist functionality for WARE's boilerwarehouse.com.
  - Integration from WordPress to Salesforce for the Stave & Thief Society.
  - Backend development and Sanity CMS integration for the redesigned
    via.studio.
  - Developed the Kentucky Performing Arts Center ticketing ReactJS app.
  - Developed the redesigned air quality website for Louisville Air Watch
    (https://airqualitymap.louisvilleky.gov/), including a more efficient API
    layer.
- Design large-scale ecommerce systems for clients. Recent examples:
  - ScholarRx — simplified their ecommerce flow by moving to a headless
    ecommerce platform combined with a React SPA for cart and checkout.
  - Ridge Runner — designed a vendor-focused store platform with an eye toward
    rapid vendor store setup.
- Spearheaded the project to sell custom WordPress plugins on
  plugins.viastudio.com (now defunct). Lead developer on the plugins themselves
  as well as the corresponding sales website.
- Development team manager and member of the company leadership team. Assisted
  with client prospecting, generated new business leads, lead developer on large
  projects, assisted project managers with scheduling and sprint planning, and
  mentored junior developers.
- Managed internal and cloud servers. Managed Vagrant, Docker and Jenkins CI
  projects for internal development.

### Senior Development Consultant — Studymaker, LLC

**2002 – 2022.**

- Development on Studymaker's Recover platform for the CDC.
  - Worked on the web platform and admin website using Laravel PHP and React.
  - Developed the process to pull data from the CDC's Google Cloud instance to
    import into the website.
  - Developed the process to export processed data as Parquet files for CDC
    reporting. This was later replaced by a database instance the CDC connects
    to directly.
  - Set up and managed the AWS resources for hosting.
- Development on Studymaker's EDC platform for tracking medical research study
  data, including:
  - Spearheaded the initiative to migrate from PHP 5.6 to PHP 7.x to PHP 8.x.
  - Added a build process for modern JS and CSS.
  - AWS S3 integration for large file storage.
  - Mailgun integration for email sending.
  - Overall refactoring and code cleanup.
- Designed and maintained AWS architecture for HIPAA-compliant PHP application
  hosting, including monitoring and deployment scripts.
- Wrote an AngularJS application for calculating Procalcitonin changes
  (https://www.brahms-pct-calculator.com/). Involved close work with the FDA and
  a rapidly changing set of requirements.
- Worked on a data validation website built on top of the Redcap API, for Beth
  Israel Deaconess Medical Center, Harvard University. Wrote a mobile-friendly
  website for collecting patient medical information, used by BIDMC doctors at
  the 2012 Democratic Convention at their mobile treatment stations.
- Wrote a PHP/Laravel/MySQL website for displaying data dashboards, including a
  custom REST API for pulling data together from multiple sources.
- Wrote a variety of PHP/MySQL websites for data collection. The data collected
  was used for studies to improve patient care through more efficient and
  accurate record keeping, and to measure the effectiveness of new drugs.
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
