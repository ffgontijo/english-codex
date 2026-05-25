# Deployment Guide

## Local preview

```bash
python -m http.server 8080
```

Open:

```text
http://localhost:8080
```

## Docker

```bash
docker compose up -d --build
```

Open:

```text
http://localhost:8085
```

## Plain static hosting

Upload these folders and files to your hosting root:

- `index.html`
- `assets/`
- `css/`
- `js/`
- `data/`
- `site.webmanifest`
- `robots.txt`

The site has no backend and no build step.

## GitHub Pages

A GitHub Pages workflow is included in `.github/workflows/pages.yml`.

To use it:

1. Push the repository to GitHub.
2. Open repository settings.
3. Go to Pages.
4. Select GitHub Actions as the source.
5. Push to `main`.

The workflow will publish the static files.
