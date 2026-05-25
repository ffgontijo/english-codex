<div align="center">

# Contributing to The English Codex

### Help people study English with clarity, structure, practice, and fewer chaotic notes scattered across the internet.

Thank you for considering a contribution to **The English Codex**.

This project exists to help English learners build a personal study system: read, understand, copy by hand, create examples, correct mistakes, review, and actually use the language.

Contributions are welcome when they make the Codex clearer, more accurate, more accessible, or more useful for real learners.

</div>

---

## Project mission

**The English Codex** is a public, open learning project for English learners, especially people who want a structured path from **A0 to C2**.

The goal is not to create another passive website where learners scroll forever and hope fluency appears through browser magic. The goal is active study.

Every useful contribution should support at least one of these outcomes:

- help learners understand English more clearly;
- help learners write better sentences;
- help learners speak with more confidence;
- help learners understand real listening and reading input;
- help learners avoid repeated mistakes;
- help learners prepare for Cambridge exams;
- help learners build their own notebook, binder, or digital codex;
- help teachers, tutors, and self-taught learners reuse the material responsibly.

If your contribution helps someone study better, it probably belongs here.

If your contribution adds confusion, noise, copyrighted material, or “learn English in 7 days” nonsense, it probably belongs in the educational landfill.

---

## Ways to contribute

You can contribute in many ways. Code is welcome, but this project is not only about code.

### Content contributions

You can help by adding or improving:

- grammar explanations;
- learner-friendly examples;
- common mistakes;
- Brazilian learner traps;
- pronunciation notes;
- vocabulary systems;
- speaking drills;
- writing drills;
- reading strategies;
- listening strategies;
- Cambridge preparation notes;
- review exercises;
- notebook-ready summaries;
- study routines;
- teacher notes.

### Technical contributions

You can also help by improving:

- accessibility;
- layout and readability;
- search behavior;
- navigation;
- mobile responsiveness;
- performance;
- content structure;
- documentation;
- Docker or deployment setup.

### Small contributions matter

Small fixes are welcome.

A typo fix, a clearer example, a better explanation, or a more natural sentence can genuinely help a learner. Not every contribution needs to be a heroic trilogy with a map and a doomed mentor.

---

## Before contributing

Before opening a pull request, please check:

1. The contribution fits the mission of the project.
2. The content is written in clear English.
3. The explanation is useful for learners.
4. The examples are natural and correct.
5. No copyrighted text, lyrics, book passages, scripts, proprietary course material, or protected exam content was copied.
6. No private or personal information was added.
7. Cambridge-related information is general, respectful, and does not reproduce official exam materials.
8. The contribution does not make unrealistic promises about language learning.

This project should help people study English properly, not sell them magical fluency dust in a Markdown bottle.

---

## Content philosophy

The English Codex follows a simple principle:

> English is not only something learners read.  
> English is something learners produce.

Because of that, good content should usually include:

- a clear explanation;
- a pattern or structure;
- natural examples;
- common mistakes;
- a short learner-friendly summary;
- practice prompts;
- something the learner can copy by hand;
- a connection to real use.

A page is not finished just because it explains a rule. It should help the learner use the rule.

---

## Writing style

Please write in clear, simple English.

The ideal tone is:

- friendly;
- direct;
- practical;
- learner-focused;
- slightly nerdy when useful;
- never childish;
- never arrogant;
- never fake-academic.

Avoid explanations that sound like they escaped from a dusty grammar crypt.

### Good style

```text
Use the present simple to talk about routines, habits, facts, and repeated actions.

I work from Monday to Friday.
She studies English every day.
The system updates automatically.
```

### Weak style

```text
The present simple is a verbal construction whose semantic domain may include habituality, gnomic truth, and non-progressive temporal framing.
```

Technically impressive. Pedagogically cursed.

---

## Language guidelines

### Use English for project content

Main project content should be written in English.

Portuguese can be used when the page specifically explains common mistakes made by Portuguese-speaking learners, especially Brazilian learners.

Example:

```text
Wrong: I have 26 years.
Correct: I am 26 years old.
Portuguese interference: In Portuguese, we say “tenho 26 anos,” but English uses “be” for age.
```

### Prefer natural examples

Examples should sound like something a real person would say or write.

Good:

```text
I need more time to review the report.
Could you send me the updated file?
She works with data and automation.
```

Weak:

```text
The elephant drinks coffee under the administrative moon.
```

Memorable, yes. Useful, no. Unless the elephant works in finance, which somehow would not surprise anyone anymore.

---

## Level guidelines

The project follows a practical A0 to C2 learning path.

| Level | Focus | Contribution style |
| --- | --- | --- |
| **A0** | Absolute beginning | Very short explanations, survival phrases, spelling, numbers, basic sentence structure. |
| **A1** | Basic communication | Simple grammar, short examples, everyday language, clear patterns. |
| **A2** | Everyday independence | Past, future, comparison, quantity, basic opinions, simple narratives. |
| **B1** | Connected communication | Stories, opinions, work situations, paragraph building, intermediate accuracy. |
| **B2** | Complex communication | Argumentation, formal writing, precision, advanced sentence control. |
| **C1** | Advanced control | Register, nuance, professional and academic English, advanced grammar. |
| **C2** | Sophisticated control | Rhetoric, implication, style, idiomatic precision, advanced interpretation. |

Do not overload beginner pages with advanced theory.

Do not make advanced pages painfully shallow.

Every level deserves respect. Even A1. Especially A1. That is where many grammatical crimes are born.

---

## Page structure

Most learning pages should follow this general structure:

```json
{
  "id": "unique-page-id",
  "title": "Page Title",
  "level": "A1",
  "section": "A1: The Shire",
  "summary": "Short description of what the page teaches.",
  "tags": ["grammar", "a1", "notebook"],
  "html": "<section class=\"block rule-card\">...</section>",
  "kind": "Lesson"
}
```

### Recommended content blocks

Use existing card classes whenever possible:

```html
<section class="block rule-card">
  <h3>Main idea</h3>
  <p>Explain the core rule clearly.</p>
</section>

<section class="block info-card">
  <h3>Structure / pattern</h3>
  <p>Show the form or pattern.</p>
</section>

<section class="block example-card">
  <h3>Natural examples</h3>
  <ul>
    <li>Example sentence one.</li>
    <li>Example sentence two.</li>
  </ul>
</section>

<section class="block trap-card">
  <h3>Common traps</h3>
  <ul>
    <li>Wrong: ...</li>
    <li>Correct: ...</li>
  </ul>
</section>

<section class="block copy-card">
  <h3>Copy by hand</h3>
  <ul>
    <li>Notebook-ready summary.</li>
    <li>Pattern to memorize.</li>
    <li>One correction to review.</li>
  </ul>
</section>

<section class="block practice-card">
  <h3>Practice in your notebook</h3>
  <ol>
    <li>Write five personal examples.</li>
    <li>Turn two examples into questions.</li>
    <li>Say three examples aloud.</li>
  </ol>
</section>
```

The `copy-card` block matters a lot. It is the bridge between the website and the learner's personal Codex.

---

## Copy by hand sections

Every major learning page should include a **Copy by hand** section.

This section should be short, clean, and notebook-ready.

A good Copy by hand section should include:

- the main idea;
- one useful structure;
- two or three examples;
- one common mistake;
- one short instruction for personal practice.

Avoid turning Copy by hand into an entire textbook page. If learners wanted hand pain as a lifestyle, they would become medieval scribes.

---

## Practice sections

Practice should make the learner produce English.

Good practice prompts:

```text
Write five sentences about your routine.
Turn three sentences into questions.
Record yourself answering one question.
Correct one mistake and rewrite the sentence.
Write one professional example using this structure.
```

Weak practice prompts:

```text
Understand the rule.
Read more.
Study it.
```

That is not practice. That is educational fog wearing a fake mustache.

---

## Cambridge notes

The project may include general support for:

- B2 First;
- C1 Advanced;
- C2 Proficiency.

When contributing Cambridge-related content:

- keep it general and educational;
- do not copy official exam tasks;
- do not reproduce protected materials;
- do not claim to replace official preparation books or official Cambridge resources;
- prefer strategy, structure, study planning, and learner guidance.

Good:

```text
For B2 writing, learners should practise organizing ideas into clear paragraphs with a visible introduction, development, and conclusion.
```

Not good:

```text
Here is a copied official exam task from a paid book.
```

That second one is not contribution. That is a legal side quest with poor rewards.

---

## Pop culture and nerd references

The English Codex uses nerd culture as a memory tool.

References to RPGs, fantasy, science fiction, games, comics, quests, skill trees, maps, bosses, inventory, and codex systems are welcome when they help learning.

However:

- do not copy protected text;
- do not use copyrighted logos;
- do not reproduce long quotes;
- do not paste song lyrics;
- do not rely on a specific franchise to explain the lesson;
- keep references broad and transformative.

Good:

```text
Think of modal verbs as tools in your inventory. Each one gives your sentence a different function: ability, permission, advice, obligation, or possibility.
```

Risky:

```text
Copying named dialogue from a movie or game.
```

Nerdy is good. Copyright litigation is not a learning objective.

---

## Accessibility guidelines

Please keep the site readable and accessible.

When contributing design or code changes:

- preserve strong contrast;
- keep text readable on light backgrounds;
- avoid tiny font sizes;
- avoid color-only meaning;
- keep buttons and links clear;
- test mobile layouts when possible;
- avoid unnecessary animations;
- respect long-form reading comfort.

This project is for study. It should not look like a nightclub menu designed by a sleep-deprived raccoon.

---

## Technical guidelines

The project is intentionally simple.

Current stack:

- HTML;
- CSS;
- JavaScript;
- JSON;
- optional Docker/Nginx deployment.

Please avoid adding unnecessary complexity.

Before introducing a framework, dependency, build system, or heavy tooling, ask whether the project truly needs it.

Most of the time, it probably does not.

The goal is to let people clone the repository, push it to a server, and run it easily.

---

## Folder structure

The project generally follows this structure:

```text
english-codex/
├── index.html
├── README.md
├── CONTRIBUTING.md
├── LICENSE
├── Dockerfile
├── docker-compose.yml
├── assets/
├── css/
├── js/
├── data/
├── docs/
├── nginx/
└── .github/
```

Content pages usually live in:

```text
data/pages.json
```

Documentation usually lives in:

```text
docs/
```

---

## Pull request process

To contribute:

1. Fork the repository.
2. Create a branch with a clear name.
3. Make your changes.
4. Test the site locally.
5. Review your content for clarity and accuracy.
6. Open a pull request.
7. Explain what you changed and why.

Recommended branch names:

```text
content/a1-present-simple
fix/search-filter
style/readability-cards
docs/study-method
accessibility/sidebar-navigation
```

---

## Local setup

Run the project locally with Python:

```bash
python -m http.server 8080
```

Then open:

```text
http://localhost:8080
```

Or use Docker:

```bash
docker compose up -d --build
```

Then open:

```text
http://localhost:8085
```

If you only opened `index.html` directly from the file system and something behaved strangely, congratulations: you met browser security. Use a local server.

---

## Quality checklist

Before submitting, check:

- [ ] The contribution supports the project mission.
- [ ] The content is clear and useful.
- [ ] Examples are natural.
- [ ] Grammar is accurate.
- [ ] Beginner content is not overloaded.
- [ ] Advanced content is not shallow.
- [ ] No copyrighted material was copied.
- [ ] No private information was included.
- [ ] `copy-card` sections are concise and notebook-ready.
- [ ] Practice prompts require active production.
- [ ] Links, if added, are useful and stable.
- [ ] The site still works locally.
- [ ] The design remains readable on desktop and mobile.

---

## Good first issues

Good first contributions include:

- fixing typos;
- improving awkward examples;
- adding Brazilian learner traps;
- adding notebook-ready summaries;
- improving accessibility labels;
- improving documentation;
- adding missing practice prompts;
- simplifying confusing explanations;
- adding professional English examples;
- improving mobile spacing.

Small improvements are not small to the learner who needed exactly that explanation.

---

## What not to contribute

Please do not contribute:

- copied textbook content;
- copied paid course material;
- copied official exam tasks;
- song lyrics;
- movie, game, or book passages;
- copyrighted images or logos;
- private learner data;
- unrealistic fluency promises;
- spam links;
- AI-generated content that was not reviewed by a human;
- huge technical rewrites without a clear reason.

This project wants useful learning material, not a content landfill with a CSS file.

---

## Using AI responsibly

AI-assisted contributions are allowed, but they must be reviewed.

If you use AI to draft content:

- verify grammar explanations;
- check examples for naturalness;
- remove hallucinated facts;
- simplify inflated wording;
- make sure the content fits the project structure;
- test whether a learner would actually understand it.

AI can help draft. It should not be trusted blindly. Confident nonsense is still nonsense, just wearing a blazer.

---

## Licensing

By contributing to this project, you agree that your contributions will be licensed under the same license as the repository.

This project uses the **MIT License**.

That means people can use, copy, modify, distribute, and adapt the project, as long as the license terms are respected.

The educational spirit is simple:

> Share knowledge. Improve the material. Help learners study better.

Very radical, apparently.

---

## Final note

The English Codex is built for learners who want structure, practice, correction, and long-term progress.

If your contribution makes the path clearer for one learner, it matters.

Thank you for helping turn scattered English study into something organized, usable, and genuinely helpful.
