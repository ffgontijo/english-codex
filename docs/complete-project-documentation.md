# English Codex — Complete Project Documentation

> Complete technical, educational, structural and operational documentation for the English Codex project.

## 1. Project identity

**Project name:** English Codex  
**Repository:** `ffgontijo/english-codex`  
**Primary language of the website:** Portuguese, focused on Brazilian learners  
**Documentation language:** English  
**Project type:** educational website  
**Current architecture:** PHP pages with reusable partials  
**Hosting model:** Docker-based self-hosting on ZimaOS, exposed through Cloudflare Tunnel  
**Core promise:** guide learners from A0 to C2 while helping them build their own English notebook/codex.

English Codex is a public educational website designed to help Brazilian learners study English with structure, active practice, revision and personal note-taking. It is not meant to be a passive content dump. The site teaches, but the learner consolidates the knowledge by writing, producing examples, correcting mistakes and reviewing over time.

The project is built around this principle:

> Read. Understand. Write by hand. Create examples. Correct mistakes. Review. Use the language.

The notebook is not a decorative object. It is the learner's long-term reference system. Yes, apparently paper and repetition still work, despite humanity's ongoing attempt to replace study with tabs, apps and motivational screenshots.

---

## 2. Mission

The mission of English Codex is to provide a structured, readable and practical English-learning path for Brazilian learners, from the absolute beginning to advanced proficiency.

The project aims to help learners:

- understand English grammar without academic fog;
- build vocabulary in context;
- practice listening, speaking, reading and writing;
- compare Portuguese and English to avoid translation traps;
- prepare for Cambridge exams;
- create a personal notebook system;
- review actively instead of consuming content passively;
- connect English with real life, culture, work, stories, games, books, films, series and music.

---

## 3. Educational philosophy

English Codex is based on active learning, not passive consumption.

The recommended learning cycle is:

```text
Understand → Connect → Write → Produce → Correct → Review → Use
```

### 3.1 Understand

The learner reads a clear explanation and identifies the purpose of the topic.

Example:

- not only “Present Perfect = have/has + past participle”;
- but “Present Perfect connects past experience or action to the present.”

### 3.2 Connect

The learner connects the topic to:

- Portuguese equivalents;
- Portuguese interference;
- real-life situations;
- films, books, series, music, work, games and RPG examples.

### 3.3 Write

The learner transforms the page into a notebook entry. The goal is not blind copying. The goal is synthesis.

### 3.4 Produce

The learner creates original examples. If the page only contains copied examples, the learner has not yet turned the topic into skill.

### 3.5 Correct

Mistakes are recorded in an error log. The error log is not a punishment system. It is a diagnostic tool.

### 3.6 Review

The learner reviews after spaced intervals, ideally:

- same day;
- after 3 days;
- after 1 week;
- after 1 month.

### 3.7 Use

The learner uses the topic in speaking, writing, messages, work, study, stories or exam practice.

---

## 4. Target audience

English Codex is designed for:

- Brazilian learners of English;
- complete beginners;
- self-taught learners;
- students who like handwritten notes;
- learners preparing for Cambridge exams;
- teachers looking for structured reference material;
- people who enjoy pop culture, RPG, fantasy, science fiction and nerdy learning metaphors;
- learners who want a full path from A0 to C2.

The project should remain useful for both independent learners and teachers.

---

## 5. Tone and editorial style

The tone of the site should be:

- clear;
- direct;
- educational;
- friendly;
- lightly sarcastic;
- useful for Brazilian learners;
- structured enough for teachers;
- informal enough to avoid sounding like a dead grammar manual.

The style may include light humor and pop-culture references, but the educational explanation must always remain clear.

### 5.1 What the tone should avoid

Avoid:

- vague motivational fluff;
- academic fog;
- excessive jokes that damage clarity;
- copyrighted text, lyrics, scripts, book passages or protected images;
- relying on franchise names as if the site were fan content;
- making beginners feel stupid;
- using advanced terminology before explaining the basic idea.

The project may use pop culture as metaphor and context, not as copyright bait wearing a wizard hat.

---

## 6. Technical architecture

The current version of the project uses PHP to avoid repeating the same header, navigation and footer across every page.

### 6.1 Core idea

Every page defines metadata variables and then loads the shared layout partials.

Example:

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
  <!-- Page content here -->

<?php require __DIR__ . '/partials/page-end.php'; ?>
```

For level pages inside the `levels/` directory, the relative paths go one level up:

```php
<?php
require_once __DIR__ . '/../config.php';

$pageTitle = 'A1 · Beginner · English Codex';
$pageDescription = 'Study English A1 with routines, basic questions and communication.';
$activePage = '';
$activeLevel = 'a1';

require __DIR__ . '/../partials/page-start.php';
?>

<main id="conteudo">
  <!-- Level content here -->

<?php require __DIR__ . '/../partials/page-end.php'; ?>
```

### 6.2 Important layout rule

The `page-end.php` partial closes the main document structure. Because of that, individual pages should not manually duplicate the closing layout markup handled by the partial.

In short:

- each page opens `<main id="conteudo">`;
- the page content is written normally;
- `page-end.php` is required at the end;
- do not duplicate footer/body/html closing logic already handled by the partial.

This prevents the site from becoming a nesting disaster, the natural destiny of HTML when left unsupervised.

---

## 7. Recommended current file structure

The project should follow this structure:

```text
english-codex/
├── docker-compose.yml
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
└── docs/
    └── complete-project-documentation.md
```

If the repository root is used directly as the web root instead of `html/`, keep the same logical structure but adjust the deployment path accordingly. The server setup currently uses an `html/` folder, so documentation should assume that model unless the project is reorganized.

---

## 8. Configuration

The `config.php` file centralizes site-level settings.

It should contain at least:

```php
<?php
$siteName = 'English Codex';
$defaultDescription = 'Um companheiro de estudo para brasileiros criarem seu próprio caderno de inglês, com metodologia, cultura pop e progressão CEFR.';
$baseUrl = '/';

function url(string $path = ''): string
{
    global $baseUrl;
    return rtrim($baseUrl, '/') . '/' . ltrim($path, '/');
}
```

### 8.1 BASE_URL

For the current deployment, `BASE_URL` should remain:

```text
/
```

This is because the site is served from the root of its domain or tunnel route.

---

## 9. Shared partials

### 9.1 `partials/page-start.php`

This file should contain:

- `<!doctype html>`;
- opening `<html>`;
- `<head>` metadata;
- page title;
- description;
- CSS link;
- favicon/icon references;
- opening `<body>`;
- skip link;
- site header;
- main navigation;
- level navigation bar.

It uses variables defined by each page:

```php
$pageTitle
$pageDescription
$activePage
$activeLevel
```

### 9.2 Active navigation

The header should use `$activePage` for main pages and `$activeLevel` for level pages.

Example logic:

```php
class="nav-link <?= $activePage === 'home' ? 'active' : '' ?>"
```

For levels:

```php
class="level-pill <?= $activeLevel === 'a1' ? 'active' : '' ?>"
```

### 9.3 `partials/page-end.php`

This file should contain:

- footer;
- JavaScript include;
- closing layout markup;
- closing body/html tags if that is how the project is structured.

The exact closing structure should remain consistent across all pages.

---

## 10. Main site pages

### 10.1 `index.php` — Home

Purpose:

- present the project;
- explain the A0 to C2 journey;
- introduce the notebook concept;
- show the main pillars of the site;
- guide the learner to start.

Expected sections:

- hero;
- project concept;
- learning path overview;
- notebook promise;
- Cambridge connection;
- call to action.

### 10.2 `start.php` — Comece aqui

Purpose:

- explain how to use the site;
- guide first-time learners;
- explain the study cycle;
- help learners choose where to begin.

Expected sections:

- who should start where;
- how to study a page;
- how to use the notebook;
- common mistakes in study habits;
- recommended first steps.

### 10.3 `notebook.php` — Caderno

Purpose:

- explain the notebook method;
- show how to create notebook pages;
- provide templates;
- explain error logs and review trackers.

Expected sections:

- what a living notebook is;
- recommended divisions;
- page template;
- example pages;
- review schedule;
- physical vs digital notebook.

### 10.4 `method.php` — Método

Purpose:

- explain the learning methodology;
- show active recall, spaced repetition, noticing and output;
- connect skills to practical study.

Expected sections:

- active study principles;
- study cycle;
- skill-specific methods;
- revision strategy;
- error correction.

### 10.5 `cambridge.php` — Cambridge Path

Purpose:

- explain Cambridge exams;
- connect levels to exam preparation;
- show how to use the Codex for Cambridge.

Expected exams:

- A2 Key;
- B1 Preliminary;
- B2 First;
- C1 Advanced;
- C2 Proficiency.

### 10.6 `brasileiros.php` — Brasileiros

Purpose:

- focus on Portuguese-to-English interference;
- explain common mistakes made by Brazilian learners;
- show pronunciation, grammar and vocabulary traps.

Expected topics:

- false cognates;
- word order;
- prepositions;
- age with `be`;
- `have a question` vs `have a doubt`;
- `make` vs `do`;
- pronunciation challenges.

### 10.7 `pop-culture.php` — Cultura Pop

Purpose:

- connect English learning to films, books, series, games, songs, RPG and stories;
- show how learners can use pop culture actively.

Expected sections:

- how to study with films and series;
- how to study with songs without copying lyrics;
- how to use RPG and games for vocabulary;
- how to analyse scenes;
- how to build personal examples.

### 10.8 `teachers.php` — Para professores

Purpose:

- explain the project to teachers;
- show classroom use;
- position the Codex as a pedagogical support tool;
- explain the student notebook as evidence of learning.

Expected sections:

- project proposal;
- classroom usage;
- student autonomy;
- notebooks as learning evidence;
- extension/project potential.

### 10.9 `resources.php` — Recursos

Purpose:

- show reliable sources;
- document references;
- clarify the project is grounded in serious learning principles and official resources.

Expected references:

- CEFR;
- Cambridge English;
- British Council LearnEnglish;
- English Profile;
- Cambridge Dictionary;
- learning science references;
- copyright and editorial guidelines.

---

## 11. Level pages

The level pages are the core of the project. They should be detailed, structured and useful both for learners and teachers.

### 11.1 `levels/a0.php` — Absolute Beginner

Purpose:

- help learners start from zero;
- build confidence;
- introduce letters, sounds, first words and survival phrases.

Core topics:

- alphabet;
- spelling;
- numbers;
- classroom language;
- first phrases;
- basic pronunciation;
- verb to be introduction;
- simple vocabulary;
- first notebook page.

### 11.2 `levels/a1.php` — Beginner

Purpose:

- build the first real sentences;
- help learners talk about themselves, routine, preferences and basic information.

Core topics:

- verb to be;
- Present Simple;
- negatives and questions;
- question words;
- possessives;
- this/that/these/those;
- there is/there are;
- plurals;
- prepositions of place;
- adverbs of frequency;
- can/can't;
- likes and preferences;
- imperatives.

### 11.3 `levels/a2.php` — Elementary

Purpose:

- move from simple identity/routine to basic independence;
- help learners talk about past, future, comparisons and daily situations.

Core topics:

- Past Simple;
- irregular verbs;
- past questions and negatives;
- there was/there were;
- going to;
- will;
- comparatives and superlatives;
- countable and uncountable nouns;
- quantifiers;
- modals;
- prepositions;
- giving directions;
- A2 Key preparation.

### 11.4 `levels/b1.php` — Intermediate

Purpose:

- build independence;
- help learners narrate, explain, justify and interact more naturally.

Core topics:

- Present Perfect;
- Present Perfect vs Past Simple;
- for/since/already/yet/ever;
- Past Continuous;
- used to;
- First Conditional;
- Second Conditional;
- modals;
- gerunds and infinitives;
- relative clauses;
- too/enough;
- connectors;
- opinions;
- storytelling;
- B1 Preliminary preparation.

### 11.5 `levels/b2.php` — Upper-Intermediate

Purpose:

- consolidate independent use;
- build argumentation, precision and Cambridge B2 readiness.

Core topics:

- strategic tense review;
- Present Perfect Continuous;
- future forms;
- Passive Voice;
- Passive Voice across tenses;
- Reported Speech;
- Reported Questions;
- modals of deduction;
- Third Conditional;
- Mixed Conditionals;
- defining and non-defining relative clauses;
- advanced linking words;
- phrasal verbs;
- collocations;
- word formation;
- B2 First preparation.

### 11.6 `levels/c1.php` — Advanced

Purpose:

- build nuance, precision, register control and advanced expression;
- prepare for C1 Advanced.

Core topics:

- register;
- hedging;
- inversion;
- cleft sentences;
- nominalisation;
- advanced passive/reporting structures;
- participle clauses;
- advanced conditionals;
- concession and contrast;
- discourse markers;
- advanced collocations;
- idiomatic language;
- subtext and implication;
- precision vocabulary;
- advanced paraphrasing;
- C1 Advanced preparation.

### 11.7 `levels/c2.php` — Proficiency

Purpose:

- develop mastery, style, rhetoric, advanced reading and advanced production;
- prepare for C2 Proficiency;
- explain how to continue beyond C2.

Core topics:

- stylistic control;
- rhetorical precision;
- high-level argumentation;
- advanced paraphrasing;
- subtle modality and stance;
- ellipsis and substitution;
- idiomaticity;
- literary and cultural analysis;
- academic synthesis;
- near-synonyms;
- advanced discourse and cohesion;
- humour, irony and understatement;
- advanced editing;
- professional and academic authority;
- naturalness;
- C2 Proficiency preparation;
- beyond C2 maintenance.

---

## 12. Cambridge integration

Cambridge preparation should not dominate every page, but it must be present where relevant.

### 12.1 Level-to-exam map

| Level | Cambridge exam | Purpose |
| --- | --- | --- |
| A2 | A2 Key | Basic everyday communication. |
| B1 | B1 Preliminary | Practical independent communication. |
| B2 | B2 First | Independent English for work/study. |
| C1 | C1 Advanced | Advanced academic/professional use. |
| C2 | C2 Proficiency | High-level mastery and sophistication. |

### 12.2 Cambridge sections should include

Each Cambridge section should explain:

- what the exam evaluates;
- what each paper/skill requires;
- how the Codex helps;
- what the learner should add to the notebook;
- how to diagnose mistakes;
- where to find official Cambridge information.

### 12.3 Official source rule

Exam format, dates, prices and policies can change. Always direct learners to official Cambridge pages for final decisions.

The Codex can guide preparation. It should not pretend to replace official exam documentation, because apparently legal and factual accuracy matter. Annoying, but true.

---

## 13. Notebook system

The notebook is central to the project.

### 13.1 Page template

Every notebook page should include:

```text
Topic:
Level:
Goal:
Core rule or structure:
When to use it:
Examples:
Portuguese helps here:
Portuguese betrays you here:
Teacher tip:
Practice:
Active review questions:
Review date:
```

### 13.2 Error log template

```text
Wrong sentence:
Correct sentence:
Why it was wrong:
Pattern:
New example:
Review date:
```

### 13.3 Cambridge diagnostic template

```text
Exam part:
Task type:
Result:
Main error type:
Correction:
Mini practice:
Next review:
```

### 13.4 Advanced notebook after C2

After C2, the notebook becomes a repertoire system:

```text
Source:
Useful phrase or structure:
Function:
Why it works:
My version:
Real application:
Review:
```

---

## 14. Content writing standards

### 14.1 Every content page should include

- clear purpose;
- explanation;
- examples;
- Portuguese interference warning;
- practice;
- notebook guidance;
- review/checklist section.

### 14.2 Examples should be original

Use original examples inspired by:

- daily life;
- work;
- study;
- films;
- series;
- books;
- music as a study habit, without lyrics;
- RPG;
- games;
- history;
- science;
- culture.

Do not reproduce copyrighted lyrics, book passages, scripts or long quotes.

### 14.3 Brazilian learner notes

Prioritize notes that help Brazilian learners avoid common mistakes:

- false cognates;
- preposition traps;
- literal translations;
- tense differences;
- pronunciation issues;
- word order;
- countable/uncountable differences;
- collocation errors.

---

## 15. UI and UX standards

The visual identity should remain:

- readable;
- light;
- comfortable for long-form study;
- card-based;
- organized;
- mobile-friendly;
- accessible;
- not overloaded with unnecessary interface tricks.

### 15.1 Important UX principles

- The learner should always know where they are.
- Level navigation should be visible and consistent.
- Long pages should have clear section headings.
- Tables should be readable on mobile.
- Buttons should have clear purposes.
- The site should not depend on downloads or copy buttons.
- The learner should read, select if needed, write by hand and practice.

### 15.2 Accessibility

Maintain:

- semantic headings;
- sufficient contrast;
- readable font sizes;
- keyboard-friendly navigation;
- skip link;
- descriptive link text;
- no essential information hidden only in color.

---

## 16. JavaScript behavior

The JavaScript file should be minimal and focused.

Expected behavior:

- mobile menu toggle;
- accessible `aria-expanded` state;
- no heavy dependencies;
- no unnecessary frameworks;
- no user tracking.

Example expected behavior:

```js
const menuToggle = document.querySelector('.menu-toggle');
const navigation = document.querySelector('#main-navigation');

if (menuToggle && navigation) {
  menuToggle.addEventListener('click', () => {
    const expanded = menuToggle.getAttribute('aria-expanded') === 'true';
    menuToggle.setAttribute('aria-expanded', String(!expanded));
    navigation.classList.toggle('is-open');
  });
}
```

Keep JavaScript boring. Boring JavaScript is reliable JavaScript. Humanity should try it more often.

---

## 17. Deployment documentation

### 17.1 Current server model

Current deployment context:

```text
Server path: /DATA/Sites/engcodex/
Web files: /DATA/Sites/engcodex/html/
Compose file: /DATA/Sites/engcodex/docker-compose.yml
Cloudflare Tunnel target: http://192.168.15.42:8084
BASE_URL: /
```

### 17.2 Requirements

The PHP version requires a PHP-capable web runtime.

A plain static Nginx image will not execute PHP. Use one of these patterns:

- Apache with PHP;
- Nginx + PHP-FPM;
- a PHP built-in server for local testing;
- a Docker image configured to serve PHP.

### 17.3 Local PHP test

From the web root:

```bash
cd html
php -S 0.0.0.0:8080
```

Open:

```text
http://localhost:8080
```

### 17.4 Docker deployment checklist

From the site directory:

```bash
cd /DATA/Sites/engcodex
sudo docker compose up -d
```

Check containers:

```bash
sudo docker ps
```

Check logs:

```bash
sudo docker compose logs -f
```

Restart:

```bash
sudo docker compose restart
```

Stop:

```bash
sudo docker compose down
```

### 17.5 Cloudflare Tunnel checklist

The Cloudflare Tunnel should point to:

```text
http://192.168.15.42:8084
```

If using Docker network service names internally, the tunnel may point to the container service instead. Keep the documentation updated according to the actual tunnel configuration.

---

## 18. Git workflow

### 18.1 Clone repository

```bash
git clone https://github.com/ffgontijo/english-codex.git
cd english-codex
```

### 18.2 Check status

```bash
git status
```

### 18.3 Add changes

```bash
git add .
```

### 18.4 Commit

```bash
git commit -m "docs: update English Codex documentation"
```

### 18.5 Push

```bash
git push origin main
```

### 18.6 Pull latest changes on server

On ZimaOS/server:

```bash
cd /DATA/Sites/engcodex
git pull origin main
sudo docker compose restart
```

If the repository structure and server structure differ, copy or sync the `html/` folder carefully. Do not improvise production changes like a raccoon with root access.

---

## 19. Quality checklist before publishing

Before considering the project stable, test:

### 19.1 Navigation

- Home;
- Start;
- Caderno;
- Método;
- Cambridge;
- Brasileiros;
- Cultura Pop;
- Professores;
- Recursos;
- A0;
- A1;
- A2;
- B1;
- B2;
- C1;
- C2.

### 19.2 Layout

- desktop;
- tablet;
- mobile;
- hamburger menu;
- level bar;
- tables;
- cards;
- long pages;
- footer.

### 19.3 Technical

- no PHP syntax errors;
- no broken includes;
- no broken CSS path;
- no broken JS path;
- no duplicated closing markup;
- correct `BASE_URL`;
- Cloudflare Tunnel loads the site correctly.

### 19.4 Content

- titles are consistent;
- descriptions are clear;
- examples are original;
- Cambridge sections point to official resources;
- no copyrighted lyrics or long quotes;
- no old references to the previous static JSON architecture unless explicitly documented as legacy.

---

## 20. Maintenance routine

### Weekly

- fix typos;
- test one or two pages;
- review mobile layout;
- check recent content edits.

### Monthly

- test all navigation;
- review one level page deeply;
- check external links;
- update documentation if the structure changed.

### Quarterly

- audit all level pages;
- review Cambridge links;
- update roadmap;
- check deployment notes;
- test from a clean browser session.

### Before major updates

- backup current version;
- commit changes;
- test locally;
- deploy;
- verify through the public domain/tunnel;
- document what changed.

---

## 21. Future roadmap

Suggested next improvements:

- add a custom 404 page;
- audit all links;
- add basic SEO metadata per page;
- add Open Graph metadata;
- improve print styles;
- add more pronunciation guidance;
- add teacher lesson plans;
- add self-assessment rubrics;
- add Cambridge practice checklists;
- create a changelog;
- add contribution guidelines for content;
- add accessibility audit notes;
- document server deployment with the exact final Docker Compose file.

---

## 22. Definition of done

The project can be considered stable when:

- every page loads correctly;
- navigation works across main pages and levels;
- the PHP partial system is consistent;
- the server deployment is documented;
- the GitHub repository explains the project clearly;
- level pages A0 to C2 are complete;
- Cambridge sections are included from A2 onward where relevant;
- the post-C2 maintenance path is documented;
- content is original, readable and useful;
- the learner can understand exactly how to use the site and build a notebook.

---

## 23. Final project summary

English Codex is a structured English-learning website for Brazilian learners who want to build a personal notebook from A0 to C2.

It combines:

- CEFR progression;
- Cambridge exam awareness;
- active recall;
- spaced review;
- original examples;
- Portuguese-English comparison;
- pop-culture learning hooks;
- teacher-friendly structure;
- PHP partials for maintainable layout;
- Docker-based self-hosting.

The site is complete as a learning path, but it should remain alive as a maintained project. The goal is not to freeze the Codex as a finished monument. The goal is to keep it useful, clear, accurate and evolving.

Because a learning project that stops evolving becomes exactly what it was created to fight: a dusty pile of content pretending to be a system.
