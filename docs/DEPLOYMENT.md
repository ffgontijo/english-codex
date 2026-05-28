# Deployment Guide

## Overview

English Codex is designed to be self-hosted as a PHP website.

Current expected deployment model:

```text
ZimaOS / Docker / Cloudflare Tunnel
```

The project can also run locally with PHP's built-in server.

## Local development

From the web root:

```bash
cd html
php -S localhost:8080
```

Open:

```text
http://localhost:8080
```

If your project does not use an `html/` folder, run the command from the actual web root.

## PHP syntax validation

From repository root:

```bash
find html -name "*.php" -print0 | xargs -0 -n1 php -l
```

If PHP files are in the root:

```bash
find . -name "*.php" -not -path "./vendor/*" -print0 | xargs -0 -n1 php -l
```

## Docker deployment

A PHP-capable image is required.

A plain static Nginx container will not execute PHP. It will serve PHP files like dead text, which is not the performance art we want.

### Example Apache + PHP compose

Save as:

```text
docker-compose.yml
```

Example:

```yaml
services:
  english-codex:
    image: php:8.2-apache
    container_name: english-codex
    restart: unless-stopped
    ports:
      - "8084:80"
    volumes:
      - ./html:/var/www/html:ro
```

Start:

```bash
docker compose up -d
```

Logs:

```bash
docker compose logs -f
```

Restart:

```bash
docker compose restart
```

Stop:

```bash
docker compose down
```

## ZimaOS deployment model

Expected server path:

```text
/DATA/Sites/engcodex/
```

Expected structure:

```text
/DATA/Sites/engcodex/
├── docker-compose.yml
└── html/
    ├── config.php
    ├── index.php
    ├── ...
```

Deploy:

```bash
cd /DATA/Sites/engcodex
sudo docker compose up -d
```

Check:

```bash
sudo docker ps
sudo docker compose logs -f
```

## Cloudflare Tunnel

Expected service target:

```text
http://192.168.15.42:8084
```

If the port changes in `docker-compose.yml`, update Cloudflare Tunnel accordingly.

Checklist:

- [ ] container is running;
- [ ] local IP and port load the site;
- [ ] Cloudflare Tunnel points to the correct port;
- [ ] public URL loads the site;
- [ ] CSS loads correctly;
- [ ] level pages load correctly;
- [ ] links between root pages and `/levels` work.

## Updating production

Recommended process:

```bash
git pull origin main
sudo docker compose restart
```

Then test:

- home page;
- one main content page;
- one level page;
- CSS;
- mobile menu;
- Cloudflare URL.

## Rollback

If a deployment breaks:

```bash
git log --oneline
git checkout <previous-commit>
sudo docker compose restart
```

Or revert with Git:

```bash
git revert <commit-sha>
git push origin main
```

Then pull on server and restart.

## Deployment checklist

Before deployment:

- [ ] commit all changes;
- [ ] run PHP syntax check;
- [ ] test locally;
- [ ] verify CSS and JS paths;
- [ ] test links from `/levels`;
- [ ] back up the current server folder if needed.

After deployment:

- [ ] open the local server URL;
- [ ] open the public/tunnel URL;
- [ ] test desktop and mobile;
- [ ] check Docker logs;
- [ ] check for missing assets;
- [ ] confirm no PHP source is being rendered as plain text.

## Common deployment problems

### PHP code appears in browser

The server is not executing PHP.

Use a PHP-capable container, Apache/PHP or Nginx/PHP-FPM.

### CSS missing

Likely path issue.

Use `url('assets/css/style.css')` in the partial instead of fragile relative paths.

### Links broken inside `/levels`

Use the URL helper:

```php
href="<?= url('levels/b2.php') ?>"
```

### Cloudflare works but local IP does not

Check Docker port mapping.

### Local IP works but Cloudflare does not

Check Tunnel public hostname and service URL.

## Recommended production mindset

Keep production boring.

Boring production is good production. Interesting production is usually a haunted forest with logs.
