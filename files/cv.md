# Mark Biek

Senior Software Engineer at Automattic. Domains, checkout and commerce
infrastructure for WordPress.com.

- Email: markbiek@duck.com
- Web: https://mark.biek.org
- Location: Louisville, KY, USA

> If you happen to see a Mark Biek with my picture on Upwork or any other
> freelance site, that is a fake profile.

---

## Employment history

### Senior Software Engineer — Automattic

**Feb 2022 – present.** Domains, checkout and commerce infrastructure for
WordPress.com.

**Selected work**

- Built the registrar-agnostic domain contact verification service that keeps
  every WordPress.com domain compliant with ICANN registrant-verification rules:
  verification endpoint, contact-update / transfer-in / domain-deletion event
  handlers, suspension and reminder async jobs, nameserver swap and restore, and
  the customer-facing suspended-domain page. Landed the subsystem inert — every
  method stubbed, no callers — for a zero-impact deploy, and built the unsuspend
  path before the suspension path.
- Took domain bundling and upsell from prototype to production launch (2026):
  bundle catalogue schema and production data on the backend, grouped line items
  and discount pricing through cart and checkout in Calypso, per-currency
  pricing, funnel analytics, and an on/off experiment behind a server-side
  feature flag. Owned end to end, from database schema to checkout UI to
  measurement.
- Built and hardened the domain capabilities behind WordPress.com's AI support
  agent: a shared error-handling trait that converts raw registrar failures into
  responses the agent can act on, a shared authorization gate across every domain
  ability, and read abilities for DNS, WHOIS and mail-service records.
- Led the white-labelled site migration plugin project (2024), coordinating an
  external development partner, design, and a cross-team group of engineers. The
  plugin replaced the previous "Move to WordPress.com" tool.
- Found and closed an authorization hole that let any authenticated user
  disconnect any domain from any site — a REST route registered with no
  permission callback, which the WordPress REST server treats as public.
- Diagnosed and fixed duplicate signup-funnel events in the Calypso stepper
  framework that inflated top-of-funnel counts by 8–61% depending on flow,
  distorting onboarding measurement and marketing attribution organisation-wide.
- Traced a class of silent Google Workspace provisioning failures — customers
  paid for mailboxes that were never created, with no alert — to a replica-lag
  read in the retry path. Fixed it, built CLI tooling to remediate affected
  customers, then shipped that into the support UI for self-service.
- Ran Gutenberg release rotations for WordPress.com. Caught and reverted a bad
  release, then built the version-visibility tooling and the per-chunk deploy
  change that lowered the risk profile of every release after it.
- Wrote and published simplenote-mcp, an MCP server for Simplenote, to npm and
  the MCP Registry.
- Established the team's shared Claude Code plugin marketplace and ran a team
  session on agent-assisted development workflow.

**Also**

Reader and Tumblr StreamBuilder implementation on WordPress.com · site migration
and import flows · Commerce in a Box domain infrastructure · WordPress.com theme
and plugin marketplace · Professional Email and Google Workspace · engineering
hiring and code-test review.

### Development Team Lead — VIA Studio

**Dec 2015 – Feb 2022.**

- Custom website development in Laravel, WordPress, React and Next.js.
- Designed large-scale ecommerce systems.
- Led the WordPress plugin sales platform.
- Managed and mentored the development team.
- Managed internal and cloud servers.
- Notable projects: product subscriptions for boilerwarehouse.com, a Salesforce
  integration for Stave & Thief Society, a ticketing app for Kentucky Performing
  Arts, and the Louisville Air Watch air-quality site.

### Senior Development Consultant — Studymaker, LLC

**2002 – 2022.**

- Built the CDC Recover platform in Laravel and React.
- Built an EDC platform for tracking medical research data.
- Designed the AWS architecture and handled HIPAA compliance.
- Led a PHP 5.6 to PHP 7.x migration.
- Built mobile-friendly medical data collection sites and data dashboards on
  custom REST APIs.

### Senior Development Consultant — Negotiation360

**May 2020 – Dec 2020.** PHP, Laravel, JavaScript, React, React Native, AWS.

### Senior Development Consultant — ioVita

**Jan 2018 – Aug 2019.** PHP, Laravel, JavaScript, React.

### Senior Technical Advisor — MMJ Initiative

**Jan 2018 – Sep 2019.** PHP, Laravel, JavaScript, React, React Native.

### Senior Programmer Analyst — Kindred Healthcare

**Sep 2013 – Nov 2015.** C#, .NET, ASP.NET.

### Senior Interactive Developer — Power Creative

**Aug 2008 – Sep 2013.** PHP, JavaScript, ASP.NET, C#.

### Senior Programmer Analyst — The Stevenson Company

**Sep 2002 – Aug 2008.** PHP, JavaScript, SAS, Python.

### Software Developer — ZFrame Corporation

**Jan 2000 – Sep 2002.** C++, PalmOS, VBScript, ASP.

### Software Developer — PinPoint Corporation

**Aug 1998 – Jan 2000.** VB6, PHP.

---

## Technologies

- **Primary** — PHP (WordPress, Laravel), TypeScript and JavaScript, React,
  Node.js, SQL, REST API design.
- **Also** — Next.js, React Native, C#/.NET, GraphQL, AWS, Docker,
  HTML/CSS/SCSS.
- **Domain and commerce** — ICANN registrar operations, EPP, DNS, WooCommerce,
  Stripe.
- **AI tooling** — Model Context Protocol, Claude Code, agent skill authoring.
