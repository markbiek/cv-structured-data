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

- Built the contact verification service that keeps every WordPress.com domain
  ICANN-compliant, across all registrars: verification endpoint, event handlers,
  suspension and reminder jobs, nameserver restore, and the suspended-domain
  page customers see. Shipped it inert, every method stubbed and no callers, so
  it landed with no production impact. Built the unsuspend path first.
- Took domain bundling from prototype to launch in 2026: catalog schema and
  data on the backend, grouped line items and discount pricing through cart and
  checkout in Calypso, per-currency pricing, funnel analytics, and an on/off
  experiment behind a server-side feature flag.
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
  MCP Registry and picked up by Matt Mullenweg.
- Ran Gutenberg release rotations. Caught and reverted a bad release, then built
  a tool to report Gutenberg versions across Simple and Atomic and changed the
  release bot to deploy each chunk at a time.
- Set up the team's shared Claude Code plugin repository and ran a team session
  on working with coding agents.

**Also**

Reader and Tumblr StreamBuilder on WordPress.com · site migration and import
flows · Commerce in a Box domain infrastructure · theme and plugin marketplace ·
Professional Email and Google Workspace · engineering hiring and code-test
review.

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
