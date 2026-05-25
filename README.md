# The English Codex

**A handwritten study companion from A0 to C2.**

The English Codex is a public, static website designed to help learners build their own English notebook by hand. The site explains grammar, study methods, skill practice, Cambridge preparation, common mistakes and review systems in a clear, structured and nerd-friendly way.

The core idea is simple:

> The screen teaches. The notebook remembers. Practice turns knowledge into skill.

## Why this exists

Most English study material is either too shallow, too scattered or weirdly proud of being boring. This project tries to fix that tiny educational crime.

The English Codex helps learners:

- study from **A0 to C2**;
- organize grammar and skill topics by level;
- copy essential notes into a personal notebook;
- create their own examples;
- track completed pages locally;
- prepare for **Cambridge B2 First, C1 Advanced and C2 Proficiency**;
- use RPG, fantasy, sci-fi and pop-culture metaphors as memory hooks without copying protected material.

## Features

- Static website with no build step.
- Light theme for comfortable reading.
- Sidebar navigation grouped by section.
- Level filters: `START`, `A0`, `A1`, `A2`, `B1`, `B2`, `C1`, `C2`, `CAMBRIDGE`.
- Search by title, summary, tags and content.
- Copy Mode to highlight notebook-ready sections.
- Local progress tracking through `localStorage`.
- Mobile responsive layout.
- Docker and Nginx deployment files.
- GitHub Pages workflow included.

## Project structure

```text
english-codex/
├── index.html
├── README.md
├── Dockerfile
├── docker-compose.yml
├── assets/
│   └── icons/
├── css/
│   ├── variables.css
│   ├── base.css
│   ├── layout.css
│   ├── components.css
│   └── responsive.css
├── data/
│   ├── pages.json
│   └── site.json
├── docs/
│   ├── content-style-guide.md
│   ├── deployment-guide.md
│   └── project-overview.md
├── js/
│   └── app.js
└── nginx/
    └── default.conf
```

## Run locally

Because the site loads `data/pages.json`, open it through a local server instead of double-clicking `index.html` like a brave but doomed goblin.

```bash
python -m http.server 8080
```

Then open:

```text
http://localhost:8080
```

## Run with Docker

```bash
docker compose up -d --build
```

Then open:

```text
http://localhost:8085
```

## Deploy to a server

Copy the project files to your web server and serve the folder as a static site. Nginx, Apache, Caddy, Cloudflare Pages, GitHub Pages and similar hosts work well.

For a simple VPS or home server using Docker:

```bash
git clone https://github.com/ffgontijo/english-codex.git
cd english-codex
docker compose up -d --build
```

## Add or edit content

All pages live in:

```text
data/pages.json
```

Each page uses this structure:

```json
{
  "id": "a1-verb-to-be",
  "title": "Verb To Be",
  "level": "A1",
  "section": "A1: The Shire",
  "summary": "Express identity, age, location, feeling, profession and description.",
  "tags": ["a1", "grammar", "notebook"],
  "kind": "Lesson",
  "html": "<section class="block rule-card"><h3>Main idea</h3><p>...</p></section>"
}
```

Keep the HTML small and consistent. Use existing card classes such as `rule-card`, `info-card`, `example-card`, `trap-card`, `copy-card`, `practice-card` and `exam-card`.

## Content principles

- Use clear English.
- Explain topics simply, but not stupidly.
- Add examples that learners can actually use.
- Include Brazilian learner traps when useful.
- Keep Cambridge exam notes linked to official sources.
- Use pop-culture references as metaphors, not copied content.
- Do not include private data, official logos, copyrighted long excerpts or franchise images.

## License

MIT. Use it, adapt it, improve it. Just do not turn it into another soulless content farm. Humanity has done enough damage.
