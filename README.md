<div align="center">

# The English Codex

### A handwritten study companion for English learners, from A0 to C2.

A public, static, open learning project designed to help people study English with structure, clarity, practice, review, and a little nerdy dignity, because apparently language learning was not chaotic enough already.

[![Static Site](https://img.shields.io/badge/static%20site-HTML%20%2B%20CSS%20%2B%20JS-2d6847?style=for-the-badge)](#)
[![No Build](https://img.shields.io/badge/build-none%20required-235b7a?style=for-the-badge)](#)
[![Docker Ready](https://img.shields.io/badge/docker-ready-526274?style=for-the-badge)](#)
[![License MIT](https://img.shields.io/badge/license-MIT-8a650d?style=for-the-badge)](#license)

**Read. Copy by hand. Create examples. Correct mistakes. Review. Repeat.**

</div>

---

## What is The English Codex?

**The English Codex** is a public website created to help English learners build their own personal study notebook, binder, digital notebook, or handwritten reference system.

The project combines:

- grammar explanations;
- vocabulary systems;
- listening, speaking, reading, and writing practice;
- pronunciation notes;
- Cambridge exam preparation;
- common mistakes made by Brazilian learners;
- review cycles;
- notebook-ready summaries;
- nerdy memory hooks inspired by RPGs, fantasy, science fiction, games, and pop culture.

The idea is simple:

> The screen teaches.  
> The notebook remembers.  
> Practice turns knowledge into skill.

This is not meant to be another passive content site where learners scroll forever and magically become fluent through vibes, hope, and educational hallucination. The goal is active study.

You read the explanation, copy the essential notes by hand, write your own examples, correct mistakes, and review over time.

---

## Why this project exists

Most language learners do not fail because English is impossible.

They fail because their study system is a disaster.

They collect random videos, screenshots, notes, grammar tables, teacher corrections, app streaks, podcasts, PDFs, and motivational lies. Then everything becomes scattered, forgotten, and impossible to review.

**The English Codex** exists to solve that problem.

It gives learners a structured path and a repeatable study method:

1. **Understand** the topic.
2. **Copy** the essential version by hand.
3. **Create** original examples.
4. **Practice** the topic actively.
5. **Correct** mistakes.
6. **Review** after spaced intervals.
7. **Use** the language in real contexts.

The project is especially useful for learners who want to build a long-term English reference system instead of depending on scattered notes like a raccoon organizing a library.

---

## Core concept

The English Codex is based on one main learning principle:

> English is not only something you read.  
> English is something you produce.

That means every topic should help the learner do at least one of these things:

- write better sentences;
- speak with more confidence;
- understand real input;
- avoid repeated mistakes;
- build useful vocabulary;
- prepare for formal exams;
- communicate better in personal, academic, or professional contexts.

The site is only the starting point.

The real learning happens when the learner transforms the content into a personal codex.

---

## Who is this for?

This project is designed for:

- complete beginners;
- self-taught learners;
- Brazilian learners of English;
- students preparing for Cambridge exams;
- people who like handwritten notes;
- teachers looking for structured study references;
- nerds who enjoy turning learning into a quest system;
- anyone who wants a clearer path from basic English to advanced English.

The content is written to be simple enough for beginners, but structured enough to remain useful for intermediate and advanced learners.

No fake academic fog. No grammar worship. No “just watch Netflix and absorb English through spiritual osmosis.”

---

## Learning path

The project follows a practical **A0 to C2** progression.

| Level | Codex Region | Focus |
| --- | --- | --- |
| **A0** | The Prologue | Alphabet, spelling, numbers, basic phrases, sentence skeletons, survival English. |
| **A1** | The Shire | Verb to be, pronouns, articles, plurals, basic questions, routines, simple descriptions. |
| **A2** | Bree | Past, future, comparatives, modals, everyday communication, basic storytelling. |
| **B1** | Rivendell | Present perfect, opinions, connected ideas, work situations, narrative control. |
| **B2** | Moria | Argumentation, complex grammar, formal writing, accuracy, Cambridge B2 First. |
| **C1** | Minas Tirith | Nuance, register, advanced grammar, professional and academic English, C1 Advanced. |
| **C2** | The Undying Lands | Precision, rhetoric, implication, idiomatic control, C2 Proficiency. |

The fantasy labels are memory hooks, not copyrighted franchise content. The project uses nerd culture as a learning metaphor, not as a legal speedrun toward disaster.

---

## Main features

### Static and easy to deploy

The site is built with plain:

- HTML;
- CSS;
- JavaScript;
- JSON content files.

No mandatory framework.  
No build step.  
No dependency graveyard.  
No `node_modules` folder large enough to develop its own weather system.

---

### Light reading-first design

The visual identity is designed around:

- light background;
- dark readable text;
- soft paper-like colors;
- clear cards;
- comfortable spacing;
- accessible contrast;
- long-form reading comfort.

The goal is not to look like a cyberpunk terminal. Dark themes are great, but long grammar explanations on a dark screen can slowly cook the human soul.

---

### Sidebar navigation

Content is grouped by section and level, making it easy to move through the learning path.

Current level filters include:

```text
START · A0 · A1 · A2 · B1 · B2 · C1 · C2 · CAMBRIDGE
```

---

### Search

The site includes local search by:

- title;
- summary;
- tags;
- page content.

This helps learners quickly find topics such as:

- articles;
- verb to be;
- pronunciation;
- Cambridge;
- writing;
- error log;
- speaking practice.

---

### Copy Mode

**Copy Mode** highlights notebook-ready sections.

These sections are designed to be copied into a personal notebook or digital codex.

The point is not to copy everything like a cursed medieval printer. The point is to copy the essential rule, create personal examples, and review later.

---

### Local progress tracking

The site stores completed pages in the browser using `localStorage`.

This means:

- no account is needed;
- progress is private to the device/browser;
- learners can mark pages as done;
- progress remains available locally.

This is intentionally simple. Not every project needs authentication, a database, six microservices, and a DevOps priest.

---

### Cambridge Forge

The project includes a Cambridge-focused section for:

- **B2 First**;
- **C1 Advanced**;
- **C2 Proficiency**.

The goal is not to replace official Cambridge materials. The goal is to help learners understand the path, organize study routines, and connect grammar and skills to exam tasks.

Learners should always check official Cambridge resources before booking exams or making decisions based on exam format, fees, dates, or requirements.

---

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

---

## Quick start

Clone the repository:

```bash
git clone https://github.com/ffgontijo/english-codex.git
cd english-codex
```

Run a simple local server:

```bash
python -m http.server 8080
```

Open:

```text
http://localhost:8080
```

Do not open `index.html` directly by double-clicking it if the content does not load correctly. The site reads JSON files, and browsers can block local file access because apparently even your own files are suspicious now.

---

## Run with Docker

Build and start the container:

```bash
docker compose up -d --build
```

Open:

```text
http://localhost:8085
```

Stop the container:

```bash
docker compose down
```

---

## Deploy

Because this is a static site, it can be deployed almost anywhere:

- GitHub Pages;
- Cloudflare Pages;
- Netlify;
- Vercel;
- Nginx;
- Apache;
- Caddy;
- a VPS;
- a home server;
- a Docker-based setup.

For a simple server deployment with Docker:

```bash
git clone https://github.com/ffgontijo/english-codex.git
cd english-codex
docker compose up -d --build
```

For GitHub Pages, use the included workflow under:

```text
.github/workflows/pages.yml
```

---

## Content system

The site content lives mainly in:

```text
data/pages.json
```

Each page follows this general structure:

```json
{
  "id": "a1-verb-to-be",
  "title": "Verb To Be",
  "level": "A1",
  "section": "A1: The Shire",
  "summary": "Express identity, age, location, feeling, profession and description.",
  "tags": ["a1", "grammar", "notebook"],
  "kind": "Lesson",
  "html": "<section class='block rule-card'><h3>Main idea</h3><p>...</p></section>"
}
```

### Recommended page blocks

Use consistent card classes to keep the content readable:

| Class | Purpose |
| --- | --- |
| `rule-card` | Main grammar rule or core explanation. |
| `info-card` | Useful context or supporting explanation. |
| `example-card` | Natural examples. |
| `trap-card` | Common mistakes and learner traps. |
| `pt-card` | Portuguese to English interference notes. |
| `upgrade-card` | More advanced or natural alternatives. |
| `nerd-card` | Memory hooks using nerd culture. |
| `copy-card` | Notebook-ready content to copy by hand. |
| `practice-card` | Exercises and active practice. |
| `exam-card` | Cambridge exam connection. |
| `warning-card` | Important caution or study warning. |

---

## Content principles

Every page should follow these principles:

### 1. Explain clearly

Use simple English when possible. Explain the topic directly before adding nuance.

Bad:

```text
The present perfect is a temporally hybridized structure denoting relevance across reference points.
```

Better:

```text
Use the present perfect when a past action is connected to the present.
```

Academic fog is not intelligence. It is usually just poor writing wearing a tiny hat.

---

### 2. Show patterns

Learners need visible structures.

Example:

```text
Subject + have/has + past participle
```

Then show real sentences:

```text
I have finished the report.
She has studied English for three years.
They have never visited Canada.
```

---

### 3. Include natural examples

Examples should sound usable in real life.

Prefer:

```text
I have a meeting at 3 PM.
Could you send me the file?
I need more time to finish this task.
```

Avoid examples that feel like a haunted grammar book from 1974.

---

### 4. Include Brazilian learner traps

When useful, add notes about common mistakes caused by Portuguese interference.

Examples:

| Wrong | Better | Why |
| --- | --- | --- |
| I have 26 years. | I am 26 years old. | English uses `be` for age. |
| I have a doubt. | I have a question. | `Doubt` is not used like `dúvida` in this context. |
| She work here. | She works here. | Third person singular needs `-s`. |

---

### 5. Add Copy by Hand sections

Every important page should include a `copy-card` section.

This section should be short enough to copy into a notebook and useful enough to review later.

Example:

```html
<section class="block copy-card">
  <h3>Copy by hand</h3>
  <ul>
    <li>Main idea: Use the present perfect for past actions connected to the present.</li>
    <li>Pattern: Subject + have/has + past participle.</li>
    <li>Example: I have finished the report.</li>
    <li>Trap: I have 26 years → I am 26 years old.</li>
    <li>Review: 1 day / 7 days / 30 days.</li>
  </ul>
</section>
```

---

### 6. Keep pop-culture references transformative

The project may use general references to:

- RPGs;
- quests;
- spellbooks;
- maps;
- skill trees;
- fantasy regions;
- sci-fi missions;
- boss fights;
- inventory systems;
- guilds;
- codices.

Do not use protected images, logos, long quotes, lyrics, or copyrighted franchise text.

In other words: use nerd culture as a teaching metaphor, not as a legal self-destruct button.

---

## Study method

The recommended study cycle is:

```text
Read → Copy → Create → Correct → Review → Use
```

### 1. Read

Read the page once without copying anything.

### 2. Copy

Turn on **Copy Mode** and copy only the notebook-ready section.

### 3. Create

Write original examples connected to your life, work, hobbies, or studies.

### 4. Correct

Check mistakes and rewrite the sentence correctly.

### 5. Review

Review after:

- 1 day;
- 7 days;
- 30 days.

### 6. Use

Use the topic in writing, speaking, messages, work situations, or exam practice.

---

## Roadmap

Possible future improvements:

- [ ] Expand all A0 and A1 lessons.
- [ ] Add full A2 grammar path.
- [ ] Add B1 writing and speaking drills.
- [ ] Add B2 First preparation pages.
- [ ] Add C1 Advanced preparation pages.
- [ ] Add C2 Proficiency strategy pages.
- [ ] Add downloadable study templates.
- [ ] Add optional pronunciation audio references.
- [ ] Add better mobile navigation.
- [ ] Add topic difficulty indicators.
- [ ] Add learner self-assessment pages.
- [ ] Add more Brazilian Portuguese interference notes.
- [ ] Add contribution guidelines.

---

## Contributing

Contributions are welcome, especially if they improve clarity, structure, examples, accessibility, or study usefulness.

Good contributions may include:

- grammar explanations;
- better examples;
- corrections;
- Brazilian learner traps;
- Cambridge study notes;
- accessibility improvements;
- UI improvements;
- documentation improvements;
- content organization.

Before contributing content, follow these rules:

1. Keep explanations clear.
2. Avoid copyrighted text and images.
3. Prefer original examples.
4. Keep the tone useful and friendly.
5. Do not add random links that will die in three months.
6. Do not turn the project into a dumping ground for grammar trivia.

A future `CONTRIBUTING.md` file may define a more formal contribution process.

---

## Accessibility and readability

The project aims to be:

- readable on desktop and mobile;
- comfortable for long study sessions;
- easy to navigate;
- friendly to learners with different levels;
- visually calm;
- structured enough for consistent review.

Accessibility improvements are always welcome.

---

## Disclaimer

This project is an independent learning resource.

It is not affiliated with Cambridge, any exam board, or any referenced pop-culture property.

Cambridge exam information should always be checked against official Cambridge sources before making decisions about registration, preparation, fees, exam dates, or requirements.

The English Codex is meant to support study organization, not replace teachers, official books, exam preparation materials, or actual language practice with real humans, horrifying as that last part may sound.

---

## License

This project is released under the **MIT License**.

You may use it, adapt it, fork it, and improve it.

Just do not turn it into a soulless content farm, a fake fluency miracle product, or another “learn English in 7 days” scam. Civilization has suffered enough.

---

<div align="center">

**The English Codex**  
A public learning project for people who want to study English with structure, practice, and a notebook that actually becomes useful.

</div>
