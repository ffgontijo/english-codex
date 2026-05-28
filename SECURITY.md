# Security Policy

English Codex is a mostly static educational website served through PHP templates and reusable partials.

Even simple projects deserve basic security discipline, because chaos does not need much of an invitation.

---

## Table of contents

- [Supported version](#supported-version)
- [Security expectations](#security-expectations)
- [Deployment notes](#deployment-notes)
- [Reporting issues](#reporting-issues)

---

## Supported version

The current maintained version is the latest commit on the `main` branch.

No versioned releases are published. Security fixes are applied directly to `main`.

---

## Security expectations

> **Never commit sensitive information to this repository.**

The following must always remain outside version control:

| Category | Examples |
|---|---|
| Credentials | Passwords, API keys, Cloudflare tokens |
| Keys and certificates | Private SSH keys, `.pem`, `.key`, `.crt` files |
| Environment files | `.env`, `.env.*` (except `.env.example`) |
| Server secrets | Private deployment configs, tunnel tokens |
| Personal data | Private student data, personal credentials |

The `.gitignore` already excludes these patterns. Review it before committing if you are unsure.

---

## Deployment notes

If the project is deployed through Docker, Cloudflare Tunnel or a self-hosted server:

- keep server credentials outside the repository;
- keep tunnel tokens outside the repository;
- restrict write permissions on the server;
- back up before major updates;
- review file permissions after deployment.

---

## Reporting issues

If you find a security issue, **do not open a public GitHub issue** with sensitive details.

Report it privately to the repository owner instead.

If this is a personal repository, contact the owner directly through GitHub or the contact method listed on the repository profile.
