# The English Codex

> **A free, open-source study companion for learning English — from your very first word to full fluency.**  
> **A Handwritten Study Companion from A0 to C2.**

![Status](https://img.shields.io/badge/status-in%20development-yellow)
![License](https://img.shields.io/badge/license-CC%20BY--NC--SA%204.0-blue)
![Built with](https://img.shields.io/badge/built%20with-HTML%20%7C%20CSS%20%7C%20JavaScript-orange)

## What is The English Codex?

The English Codex is a public study website for English learners who want a clear, active, and organized path from **A0 to C2**.

It started as a personal study notebook idea and is now being shaped into a free, open-source project. The goal is simple: help learners understand English, copy the essential parts by hand into their own notebook, create personal examples, correct mistakes, and review with method.

The project is **not** a magic fluency method, a full course, or a replacement for a teacher. It is a structured study companion that reduces guesswork and turns passive reading into active practice.

## The Method

The Codex is built around one principle:

> The screen teaches.  
> The notebook fixes it.  
> Practice turns knowledge into skill.

A learner opens the site, studies a page, copies the *Copy by Hand* block into a personal notebook, creates original examples, speaks some of them out loud, logs mistakes, and reviews after 1 day, 7 days, and 30 days.

## Features

- **CEFR Path** — a clear learning path from A0 to C2.
- **Grammar Path** — grammar organized by level and teaching order.
- **Skill Labs** — Listening, Speaking, Reading, Writing, Vocabulary, and Pronunciation.
- **Cambridge Forge** — study orientation for B2 First, C1 Advanced, and C2 Proficiency.
- **Copy by Hand** — every content page includes a distilled section for the learner's notebook.
- **Copy Mode** — a focused view for copying only the essential notes.
- **Local Progress** — completed pages are saved in the learner's browser using `localStorage`.
- **Reading-first design** — a clean, light interface built for long study sessions.
- **Optional print support** — useful, but not the center of the project.

## Learning Path

| Level | Codex Name | Focus |
|---|---|---|
| A0 | The Prologue | Alphabet, sounds, numbers, dates, survival phrases, basic sentence shape |
| A1 | The Shire | `to be`, pronouns, articles, plurals, present simple and continuous, basic questions |
| A2 | Bree | Past simple, future forms, comparatives, quantifiers, everyday conversation |
| B1 | Rivendell | Present perfect, basic conditionals, reported speech, opinions, storytelling |
| B2 | Moria | Advanced tenses, relative clauses, passive voice, essay structure, argumentation |
| C1 | Minas Tirith | Inversion, cleft sentences, hedging, register, collocations, academic style |
| C2 | The Undying Lands | Rhetorical style, implication, idiomatic precision, literary tone |

## Project Structure

```text
english-codex/
├── index.html
├── README.md
├── LICENSE
├── .gitignore
│
├── assets/
│   ├── icons/
│   └── images/
│
├── css/
│   ├── reset.css
│   ├── variables.css
│   ├── base.css
│   ├── layout.css
│   ├── components.css
│   ├── codex.css
│   └── responsive.css
│
├── js/
│   ├── app.js
│   ├── data-loader.js
│   ├── navigation.js
│   ├── search.js
│   ├── progress.js
│   └── copy-mode.js
│
├── data/
│   ├── levels.json
│   ├── pages.json
│   ├── grammar.json
│   ├── skills.json
│   ├── cambridge.json
│   └── resources.json
│
└── docs/
    ├── VISION.md
    ├── TECHNICAL.md
    ├── CONTENT-GUIDE.md
    ├── NOTEBOOK-METHOD.md
    ├── CAMBRIDGE-NOTES.md
    ├── CONTRIBUTING.md
    └── READING-EXPERIENCE.md
```

## Documentation

| Document | Purpose |
|---|---|
| [VISION.md](docs/VISION.md) | Why the project exists, who it serves, and what principles guide it |
| [TECHNICAL.md](docs/TECHNICAL.md) | Architecture, folder structure, data schemas, and code standards |
| [CONTENT-GUIDE.md](docs/CONTENT-GUIDE.md) | How to write a Codex page and keep the voice consistent |
| [NOTEBOOK-METHOD.md](docs/NOTEBOOK-METHOD.md) | The handwritten study method in detail |
| [CAMBRIDGE-NOTES.md](docs/CAMBRIDGE-NOTES.md) | Scope and approach for Cambridge Forge |
| [CONTRIBUTING.md](docs/CONTRIBUTING.md) | How to contribute content, fixes, and code |
| [READING-EXPERIENCE.md](docs/READING-EXPERIENCE.md) | Reading-first design, accessibility, Copy Mode, and optional printing |

## Roadmap

- [x] Project concept and prototype
- [x] Project foundation: README and documentation
- [ ] Define the final light visual identity
- [ ] Build the static site shell
- [ ] Create CSS design tokens and layout system
- [ ] Create JSON schemas for levels, pages, grammar, skills, and Cambridge
- [ ] Build navigation, search, progress, and Copy Mode
- [ ] Add Start Here pages
- [ ] Add Codex Method pages
- [ ] Add Grammar Path: A0
- [ ] Add Grammar Path: A1
- [ ] Add Skill Labs: first version
- [ ] Add Cambridge Forge: B2 First
- [ ] Add Grammar Path: A2 to B1
- [ ] Add Grammar Path: B2 to C2
- [ ] Review accessibility and mobile experience
- [ ] Publish first public version on GitHub Pages

## Tech

The English Codex is a deliberately simple static website: plain **HTML**, **CSS**, and **JavaScript**. No backend, no database, no account system, no tracking, no framework by default.

Content lives in readable JSON files under `data/`. The website reads that content and renders it into consistent study pages. Progress is saved locally in the browser with `localStorage`.

The project is **site-first and notebook-friendly**: the web experience is the main product, while printing and PDF export are optional support features.

## License

The English Codex is released under the **Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License (CC BY-NC-SA 4.0)**.

You may share and adapt the material for non-commercial purposes, as long as you give credit and share derivative work under the same license. See [LICENSE](LICENSE) for details.

## Respect for external material

The English Codex uses the feeling of RPGs, fantasy, quests, levels, skill trees, and codices as memory hooks. It does not reproduce copyrighted images, logos, brand assets, or long protected quotations.

Official exams, dictionaries, textbooks, and course materials belong to their publishers. This project can point learners toward official resources, but it does not copy or replace them.
