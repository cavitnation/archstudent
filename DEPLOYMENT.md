# Deployment and private-data migration

The public repository is a source snapshot; the live server may contain newer changes. Compare it with this revision before deploying. Do not overwrite a running installation blindly.

## Requirements

PHP 8.2 or newer with mbstring, curl and SimpleXML, an HTTPS web server, and a configured mail transport. PHP 8.3, 8.4 and 8.5 are exercised by CI. The public pages use PHP, JSON datasets and local assets; the community and subscriber stores are private JSON files.

## Existing installation: migrate before updating

1. Back up the current deployment and its runtime data to private storage. Stop community/subscriber writes during migration. Never upload the backup to GitHub.
2. Copy the new `_private.php` and `scripts/migrate-private-data.php` into the old deployment before a checkout/deploy removes the tracked JSON files.
3. Set `ARCHSTUDENT_DATA_DIR` to an absolute directory outside every served document root, owned by the PHP worker. Default: `archstudent-private` beside this checkout. Use mode 0700.
4. Run `php scripts/migrate-private-data.php --apply` from that deployment. It copies records privately, strips old moderation tokens, verifies the copy, then removes each old public file. It refuses to overwrite a destination. Resolve any conflict manually from the private backup before proceeding.
5. Set `ARCHSTUDENT_ADMIN_PASSWORD_HASH` to a PHP `password_hash(..., PASSWORD_DEFAULT)` hash of a new strong random password. Set it in the PHP worker environment or private server configuration; never commit the password or hash. The old embedded key and old email tokens are no longer accepted. Restart/reload PHP workers to apply the environment.
6. Deploy the remaining source changes. Visit `/community/manage.php` over HTTPS and sign in. Credentials absent or invalid: moderation fails closed with HTTP 503. Existing sessions expire after 20 minutes and are invalidated when the configured hash changes.
7. Verify that old JSON URLs return 403/404, pending posts are not public, a new synthetic post can be approved through the dashboard, and subscriber delivery works. Remove the synthetic records afterward.

Secure session cookies intentionally require HTTPS; the PHP development server is suitable for public-page inspection, not browser testing of administrative login. The automated HTTP tests use an isolated synthetic session.

Cloudflare deployments should configure the web server's trusted proxy module so `REMOTE_ADDR` is the verified client IP. Never trust a caller-supplied forwarding header directly. Add edge rate limiting on the login and subscription routes.

## Server rules

Apache: enable the provided `.htaccess` rules and deny dotfiles, `/tests/`, `/scripts/`, and the two legacy private JSON paths. Directory listings must be disabled.

Nginx: `.htaccess` is ignored. Add equivalent locations before general routing:

```nginx
location ~ (^|/)\.(?!well-known/) { deny all; }
location ~ ^/(tests|scripts)(/|$) { deny all; }
location ~ ^/data/(subscribers|community)\.json { deny all; }
```

The PHP worker needs write access only to the private data directory and any explicitly configured generated-media directories, not the application source.

## Fresh local checkout

```sh
php -S 127.0.0.1:8080 -t .
```

Use `/community/index.php` for the community page. No subscriber or community records ship with the source. Configure private storage before exercising form writes. Mail delivery requires local/server mail configuration; a successful PHP page does not verify email delivery.

## Verification and rollback

```sh
find . -name '*.php' -not -path './.git/*' -print0 | xargs -0 -n1 php -l
php tests/storage.php
python3 tests/http-security.py
python3 tests/migration.py
python3 tests/source-hygiene.py
```

Roll back rendering changes separately from authentication/storage changes. Never restore the embedded credential, legacy token endpoints, or private files under the web root. Restore private records only from a verified private backup if migration reconciliation is needed.

## Historical exposure

Removing files in a new commit does not remove older public versions. Rotate/revoke deployed credentials first, coordinate a history rewrite with collaborators, and request GitHub removal of cached sensitive objects where applicable. Other people's clones cannot be recalled. Review access logs and affected records with the account owner; this repository does not establish whether the old credential was used.
