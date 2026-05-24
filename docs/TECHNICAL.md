# Technical Guide

This document defines how The English Codex is built and how contributors should work on the code.

## Architecture

The English Codex is a static website:

- HTML for structure;
- CSS for layout and visual design;
- vanilla JavaScript for navigation, search, progress, and Copy Mode;
- JSON files under `data/` for content;
- `localStorage` for progress saved in the learner's browser.

There is no backend, no database, no login, no framework, and no build step by default.

## Folder structure

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
```

## Content model

Content should live in `data/`, not be hard-coded into HTML.

This separates responsibilities:

- writers edit structured JSON content;
- developers maintain layout, rendering, behavior, and styling.

## Core JSON files

### `levels.json`

Stores CEFR level metadata.

```json
{
  "levels": [
    {
      "id": "a1",
      "cefr": "A1",
      "codexName": "The Shire",
      "order": 2,
      "summary": "The first foundation: to be, pronouns, articles, and present tenses.",
      "color": "var(--level-a1)"
    }
  ]
}
```

### `pages.json`

Stores the master index of pages.

```json
{
  "pages": [
    {
      "id": "a1-verb-to-be",
      "title": "The Verb To Be",
      "level": "a1",
      "section": "grammar",
      "order": 1,
      "tags": ["verbs", "basics", "to be"],
      "file": "grammar.json"
    }
  ]
}
```

### `grammar.json`

Stores grammar topics by ID.

```json
{
  "a1-verb-to-be": {
    "title": "The Verb To Be",
    "level": "a1",
    "explanation": "Use the verb to be to describe identity, state, age, location, and basic qualities.",
    "structure": "Subject + am / is / are + complement.",
    "examples": [
      { "en": "I am a student.", "note": "Use am with I." },
      { "en": "She is happy.", "note": "Use is with he, she, and it." }
    ],
    "commonErrors": [
      {
        "wrong": "I have 20 years.",
        "right": "I am 20 years old.",
        "why": "English uses to be for age, not have."
      }
    ],
    "ptComparison": "Em português usamos 'ter' para idade. Em inglês, usamos 'to be'.",
    "copyByHand": [
      "am / is / are = the verb to be in the present.",
      "I am · You/We/They are · He/She/It is"
    ]
  }
}
```

## CSS standards

- Store colors, spacing, shadows, and font sizes as tokens in `variables.css`.
- Avoid hard-coded colors outside `variables.css`.
- Use a light, reading-first theme by default.
- Keep the main reading column comfortable and not too wide.
- Use `components.css` for cards, buttons, badges, callouts, and tables.
- Use `codex.css` for Copy by Hand blocks and notebook-related visual patterns.
- Use `responsive.css` for mobile and tablet adjustments.

## JavaScript standards

- Vanilla JavaScript only.
- One responsibility per file.
- Use small named functions.
- Use modern syntax: `const`, `let`, `fetch`, template literals, and modules where practical.
- Keep all `localStorage` operations inside `progress.js`.
- Keep data loading and validation inside `data-loader.js`.

## Progress storage

Progress is stored locally under a namespaced key such as:

```text
english-codex:progress
```

No personal data is collected. No progress data leaves the learner's device.

## Browser support

Target current versions of Chrome, Edge, Firefox, and Safari on desktop and mobile.

The site should also work when opened directly from the filesystem when possible, although GitHub Pages is the main publishing target.

## Publishing

The site is intended for GitHub Pages:

1. Push to GitHub.
2. Enable GitHub Pages from the `main` branch.
3. Publish the static site.

No additional infrastructure is required.

## Code standards summary

- Content belongs in `data/`.
- Styling tokens belong in `variables.css`.
- JavaScript files should have clear responsibilities.
- The project should run without a build step.
- Use English for file names, comments, commit messages, and documentation.
- Follow Conventional Commits.
