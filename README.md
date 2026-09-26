<p align="center"><img src="./banner.png" alt="ArchStudent" width="100%"></p>

<h1 align="center">ArchStudent</h1>
<p align="center"><i>The process school for architecture students.</i></p>

<p align="center">
  <a href="https://archstudent.com/"><img src="https://img.shields.io/badge/Live%20site-archstudent-12b76a?style=for-the-badge&logo=googlechrome&logoColor=white"></a>
  <a href="https://jeemmo.com/"><img src="https://img.shields.io/badge/Built%20by-Jeemmo-111111?style=for-the-badge"></a>
</p>

## About

ArchStudent is a content platform I designed and built for architecture students worldwide. It combines a global schools directory, an encyclopedia of famous architecture and architects, and a moderated community wall — all built on a custom PHP stack with a strong focus on technical SEO and automated media pipelines.

## Key features

- **World schools directory** — 260+ architecture schools across 70+ countries, with campus photos auto-fetched and cached from Wikimedia Commons
- **Famous architecture** — per-country pages of notable buildings with verified imagery and structured data
- **Architects encyclopedia** — profiles across many countries with portraits and their built work
- **Moderated community wall** — students post feedback; entries stay private until approved via a private moderation dashboard
- **Automated media pipeline** — a scheduled job keeps imagery fresh without manual work
- **Engineered for SEO** — clean URLs, JSON-LD, sitemaps and fast, cache-friendly pages

## Built with

![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white) ![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black) ![SEO](https://img.shields.io/badge/SEO-1a7f37?style=flat) ![Linux](https://img.shields.io/badge/Linux-FCC624?style=flat&logo=linux&logoColor=black)

## Public source and local setup

This repository contains a PHP/JavaScript source snapshot, JSON reference datasets and static assets. It may differ from the live deployment. Subscriber records, community records, credentials and backups are excluded from public source. Public visibility does not grant an open-source license; no general reuse license is provided here.

The community wall uses private JSON storage, reviewed posts and authenticated moderation. Changes require POST requests and CSRF validation. Runtime records live outside the web document root.

**Before deploying to an existing installation, read [DEPLOYMENT.md](DEPLOYMENT.md).** Migrate existing records before updating files, and configure a new administrator password hash. Existing data must not be replaced with an empty store.

For public-page inspection with PHP 8.2+:

```sh
php -S 127.0.0.1:8080 -t .
```

The PHP development server is not a production deployment. See the deployment guide for required extensions, HTTPS, mail delivery, server access rules and rollback.

## Verification

GitHub Actions checks PHP syntax on PHP 8.3/8.4/8.5 and runs private-storage, data-migration, authentication and CSRF regressions using synthetic records. Run them locally with the commands in [DEPLOYMENT.md](DEPLOYMENT.md).

## Engineering notes

The shared header builds canonical links and structured metadata; country/person pages reuse renderers and JSON datasets. These keep content changes separate from templates. Private runtime records use locked updates and atomic replacement, avoiding partial JSON writes. The deployment's trusted proxy configuration is responsible for establishing the client IP.

No production traffic, uptime, or performance benchmark is asserted by this repository. Report security concerns privately using [SECURITY.md](SECURITY.md).

Built by [Azeem Javed / Jeemmo](https://jeemmo.com/) · [LinkedIn](https://www.linkedin.com/in/azeem-javed-7666861a/).
