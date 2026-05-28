# Maintenance Guide

## Purpose

This guide explains how to keep English Codex healthy after the first full version.

A project is not finished just because it loads. That is the kind of optimism servers punish.

## Weekly maintenance

Recommended weekly checks:

- review one page for typos;
- test the mobile menu;
- open one level page;
- verify CSS loads correctly;
- check if recent edits broke links;
- add small improvements to documentation if needed.

## Monthly maintenance

Recommended monthly checks:

- test all main navigation links;
- test all level links from A0 to C2;
- test Cloudflare/public URL;
- check Docker logs;
- review one level page deeply;
- verify Cambridge official links;
- check mobile layout on at least one phone-sized viewport.

## Quarterly maintenance

Recommended quarterly tasks:

- audit all pages;
- review README accuracy;
- update roadmap;
- check GitHub Actions;
- verify deployment documentation;
- review `.gitignore`;
- check for outdated references;
- review accessibility basics;
- create a backup.

## Before editing content

Ask:

- What page am I editing?
- What level is this for?
- Is the explanation level-appropriate?
- Does this change affect navigation?
- Does documentation need to be updated?

## Before editing structure

Ask:

- Does this affect `page-start.php`?
- Does this affect `page-end.php`?
- Does this affect `config.php`?
- Does this affect links from `/levels`?
- Does this affect the Docker deployment?

## Pre-commit checklist

Run:

```bash
git status
find html -name "*.php" -print0 | xargs -0 -n1 php -l
```

Then check:

- [ ] no secrets;
- [ ] no local backup files;
- [ ] no broken PHP;
- [ ] no accidental `.zip` files;
- [ ] no personal server-only files;
- [ ] documentation updated if needed.

## Deployment checklist

Before deployment:

- [ ] commit changes;
- [ ] push to GitHub;
- [ ] pull on server;
- [ ] restart Docker if needed;
- [ ] test local IP;
- [ ] test public URL;
- [ ] test one page inside `/levels`.

## Common maintenance issues

### Page works locally but not on server

Possible causes:

- case-sensitive filename mismatch;
- PHP version difference;
- missing file on server;
- Docker volume path wrong.

### Main pages work but levels break

Possible causes:

- wrong relative path;
- missing `../` in includes;
- asset path not using `url()`.

### CSS changes do not appear

Possible causes:

- browser cache;
- CSS version query not updated;
- wrong file edited;
- server not updated.

### GitHub Actions fails on PHP syntax

Run the same syntax check locally and fix the file reported.

## Backup recommendation

Before major changes, create a backup:

```bash
tar -czf english-codex-backup-$(date +%Y-%m-%d).tar.gz html docker-compose.yml
```

Do not commit backup archives to GitHub.

## Documentation maintenance

Update documentation when:

- file structure changes;
- deployment port changes;
- Docker setup changes;
- new pages are added;
- Cambridge content changes;
- workflow changes;
- content standards change.

## Long-term content maintenance

Every few months, review:

- A0-A2 for clarity;
- B1-B2 for progression;
- C1-C2 for naturalness and sophistication;
- Cambridge sections for current official links;
- Resources page for broken or outdated references.

## Versioning suggestion

Use `CHANGELOG.md` to document meaningful changes.

Example:

```md
## 2026-06-01

### Added
- New C2 post-proficiency maintenance section.

### Changed
- Improved B2 writing examples.

### Fixed
- Corrected level navigation path from C1 to C2.
```

## Maintenance philosophy

The Codex should remain alive.

Do not let it become a dusty pile of pages pretending to be a system. That would be rude after all this work.
