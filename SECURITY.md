# Security Policy

English Codex is a mostly static educational website served through PHP templates and reusable partials.

Even simple projects deserve basic security discipline, because chaos does not need much of an invitation.

## Supported version

The current maintained version is the latest version on the `main` branch.

## Security expectations

Do not commit:

- passwords;
- API keys;
- Cloudflare tokens;
- private SSH keys;
- `.env` files;
- personal credentials;
- server-specific secrets;
- private student data.

## Deployment notes

If the project is deployed through Docker, Cloudflare Tunnel or a self-hosted server:

- keep server credentials outside the repository;
- keep tunnel tokens outside the repository;
- restrict write permissions on the server;
- back up before major updates;
- review file permissions after deployment.

## Reporting issues

If you find a security issue, report it privately to the repository owner instead of opening a public issue with sensitive details.

If this is a personal repository, contact the owner directly.
