# Security reporting

Report a suspected vulnerability privately to the maintainer through [Jeemmo contact](https://jeemmo.com/contact/). Do not post passwords, tokens, personal records, or exploit details in public issues.

Runtime databases, subscriber lists, moderation tokens, environment configuration and backups do not belong in public source. Use synthetic test records. See [DEPLOYMENT.md](DEPLOYMENT.md) for storage, access and release requirements.

CI verifies specific regressions; passing checks do not constitute a full security audit or establish that the deployed server uses this revision.
