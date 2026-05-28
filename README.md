# English Codex

> A structured English-learning codex for Brazilian learners, from A0 to C2, built around active study, handwritten notes, CEFR progression, Cambridge preparation and real-life examples.

[![PHP](https://img.shields.io/badge/PHP-8.3-777BB4?style=flat-square&logo=php&logoColor=white)](https://www.php.net/)
[![Docker](https://img.shields.io/badge/Docker-ready-2496ED?style=flat-square&logo=docker&logoColor=white)](https://www.docker.com/)
[![CEFR](https://img.shields.io/badge/CEFR-A0%20to%20C2-4CAF50?style=flat-square)](https://www.coe.int/en/web/common-european-framework-reference-languages)
[![Cambridge](https://img.shields.io/badge/Cambridge-exam%20prep-003087?style=flat-square)](https://www.cambridgeenglish.org/)

---

## Table of contents

- [Overview](#overview)
- [Main goals](#main-goals)
- [Target audience](#target-audience)
- [Architecture](#architecture)
- [Project structure](#project-structure)
- [Pages](#pages)
- [Cambridge path](#cambridge-path)
- [Development](#development)
- [Documentation](#documentation)
- [Quality checklist](#quality-checklist)
- [License and usage](#license-and-usage)

---

## Overview

**English Codex** is an educational website designed to help Brazilian learners study English with structure, clarity and long-term consistency.

The project is not just a collection of grammar pages. The purpose is to guide learners through a complete study path, from absolute beginner to proficient user, while helping them build their own personal English notebook.

The core idea is simple:

```
Read → Understand → Write → Practice → Correct → Review → Use
```

Because apparently "watching three videos and hoping fluency materializes" is not a learning method. Tragic, I know.

---

## Main goals

English Codex helps learners:

- study English from **A0 to C2**;
- understand grammar through clear explanations;
- avoid common mistakes made by Brazilian Portuguese speakers;
- build a personal English notebook;
- practise listening, speaking, reading and writing;
- prepare for Cambridge exams;
- connect English with real life, work, culture, movies, series, books, RPG, games and music;
- use active recall, spaced review and error correction instead of passive reading.

---

## Target audience

This project is designed for:

- Brazilian learners of English;
- self-taught students;
- teachers looking for structured support material;
- students preparing for Cambridge exams;
- learners who enjoy pop culture and nerdy examples;
- people who want to build a handwritten or digital English notebook.

---

## Architecture

The website uses **PHP** to keep the layout maintainable.

Shared components such as the header, navigation, level bar and footer are handled through reusable partials.

**Typical page structure:**

```php
<?php
require_once __DIR__ . '/config.php';

$pageTitle = 'Home · English Codex';
$pageDescription = $defaultDescription;
$activePage = 'home';
$activeLevel = '';

require __DIR__ . '/partials/page-start.php';
?>

<main id="conteudo">
  <!-- Page content -->
<?php require __DIR__ . '/partials/page-end.php'; ?>
```

**Level pages** inside `/levels` use paths one directory up:

```php
<?php
require_once __DIR__ . '/../config.php';

$pageTitle = 'B2 · Upper-Intermediate · English Codex';
$pageDescription = 'Study English B2 with argumentation, precision and Cambridge preparation.';
$activePage = '';
$activeLevel = 'b2';

require __DIR__ . '/../partials/page-start.php';
?>

<main id="conteudo">
  <!-- Level content -->
<?php require __DIR__ . '/../partials/page-end.php'; ?>
```

---

## Project structure

```text
english-codex/
├── .github/
│   └── workflows/
│       └── validate.yml
├── docs/
│   ├── PROJECT_OVERVIEW.md
│   ├── TECHNICAL_ARCHITECTURE.md
│   ├── DEPLOYMENT.md
│   ├── CONTENT_GUIDE.md
│   ├── CAMBRIDGE_AND_REFERENCES.md
│   ├── MAINTENANCE.md
│   └── ROADMAP.md
├── html/
│   ├── config.php
│   ├── index.php
│   ├── start.php
│   ├── notebook.php
│   ├── method.php
│   ├── cambridge.php
│   ├── brasileiros.php
│   ├── pop-culture.php
│   ├── teachers.php
│   ├── resources.php
│   ├── assets/
│   │   ├── css/
│   │   │   └── style.css
│   │   ├── js/
│   │   │   └── main.js
│   │   └── icons/
│   ├── partials/
│   │   ├── page-start.php
│   │   └── page-end.php
│   └── levels/
│       ├── a0.php
│       ├── a1.php
│       ├── a2.php
│       ├── b1.php
│       ├── b2.php
│       ├── c1.php
│       └── c2.php
├── .editorconfig
├── .gitignore
├── CHANGELOG.md
├── CONTRIBUTING.md
├── README.md
└── SECURITY.md
```

> If your repository uses the project root as the web root instead of `/html`, adjust the paths accordingly. The documentation assumes the current self-hosted model where web files live under `html/`.

---

## Pages

### Main pages

| Page | Purpose |
|---|---|
| `index.php` | Project introduction and main entry point |
| `start.php` | How to start using the Codex |
| `notebook.php` | How to build the personal English notebook |
| `method.php` | Study methodology and learning principles |
| `cambridge.php` | Cambridge exam path |
| `brasileiros.php` | English for Brazilian Portuguese speakers |
| `pop-culture.php` | Learning English with culture, stories and media |
| `teachers.php` | Project explanation for teachers |
| `resources.php` | References, sources and study tools |

### Level pages

| Level | Page | Main focus |
|---|---|---|
| A0 | `levels/a0.php` | Absolute beginner foundation |
| A1 | `levels/a1.php` | First real sentences |
| A2 | `levels/a2.php` | Basic independence |
| B1 | `levels/b1.php` | Narration, opinions and autonomy |
| B2 | `levels/b2.php` | Argumentation, precision and Cambridge B2 First |
| C1 | `levels/c1.php` | Nuance, register and Cambridge C1 Advanced |
| C2 | `levels/c2.php` | Mastery, style, Cambridge C2 Proficiency and post-C2 maintenance |

---

## Cambridge path

The project includes Cambridge-oriented sections from A2 upward:

| Level | Cambridge exam |
|---|---|
| A2 | A2 Key |
| B1 | B1 Preliminary |
| B2 | B2 First |
| C1 | C1 Advanced |
| C2 | C2 Proficiency |

> The project does not replace official Cambridge documentation. Always check official Cambridge sources for current exam format, policies, prices and dates.

---

## Development

### Run locally with PHP

From the web root:

```bash
cd html
php -S localhost:8080
```

Open `http://localhost:8080` in your browser.

### Check PHP syntax

From the repository root:

```bash
find html -name "*.php" -print0 | xargs -0 -n1 php -l
```

### Docker deployment

```bash
# Start
docker compose up -d

# Check logs
docker compose logs -f

# Restart
docker compose restart
```

### Git workflow

```bash
git status
git add .
git commit -m "docs: improve project documentation"
git push origin main
```

---

## Documentation

Technical documentation is available in the `docs/` folder:

| File | Contents |
|---|---|
| [Project Overview](docs/PROJECT_OVERVIEW.md) | Goals, scope, and project philosophy |
| [Technical Architecture](docs/TECHNICAL_ARCHITECTURE.md) | Stack, structure, and design decisions |
| [Deployment Guide](docs/DEPLOYMENT.md) | How to deploy with Docker or a self-hosted server |
| [Content Guide](docs/CONTENT_GUIDE.md) | How to write and format content pages |
| [Cambridge and References](docs/CAMBRIDGE_AND_REFERENCES.md) | Cambridge exam notes and external references |
| [Maintenance Guide](docs/MAINTENANCE.md) | Routine checks and update process |
| [Roadmap](docs/ROADMAP.md) | Planned improvements and future content |

See [CONTRIBUTING.md](CONTRIBUTING.md) for the contribution process and guidelines.

---

## Quality checklist

Before publishing changes:

- [ ] all PHP files pass syntax validation;
- [ ] all main pages load correctly;
- [ ] all level pages load correctly;
- [ ] the header and footer appear consistently;
- [ ] the active navigation state works;
- [ ] the mobile menu works;
- [ ] tables are readable on mobile;
- [ ] links to level pages are correct;
- [ ] Cambridge links point to official sources;
- [ ] no copyrighted lyrics, scripts or long protected excerpts are included;
- [ ] content remains clear for Brazilian learners.

---

## License and usage

This repository currently does not define an open-source license. Unless a license file is added, all rights are reserved by the project owner.

Do not assume the content is free to reuse commercially without permission. GitHub is public, not magical public domain soup.
