# Contributing to English Codex

Thank you for considering contributing to English Codex.

This project is an educational website for Brazilian learners of English. Contributions should preserve clarity, accuracy, originality and usefulness.

## Contribution principles

Contributions should be:

- clear for learners;
- useful for Brazilian Portuguese speakers;
- aligned with CEFR progression;
- compatible with the notebook-based method;
- original;
- respectful of copyright;
- easy to maintain.

## Content guidelines

When editing or adding content:

1. Explain the concept clearly.
2. Add original examples.
3. Include common Brazilian learner mistakes when relevant.
4. Include practice or notebook guidance.
5. Avoid unnecessary jargon.
6. Do not reproduce copyrighted lyrics, book passages, scripts or long excerpts.
7. Use pop culture as inspiration, not as copied material.
8. Keep the tone educational, direct and lightly informal.

## Technical guidelines

Before submitting changes:

```bash
find html -name "*.php" -print0 | xargs -0 -n1 php -l
```

Also test:

- main navigation;
- level navigation;
- mobile menu;
- page layout;
- table readability;
- CSS and JS loading;
- relative links from `/levels`.

## File structure

Main pages should remain in `html/`.

Level pages should remain in:

```text
html/levels/
```

Shared partials should remain in:

```text
html/partials/
```

Documentation should remain in:

```text
docs/
```

## Commit message examples

Use clear commit messages:

```bash
docs: improve deployment guide
content: update B2 Cambridge section
fix: correct level navigation link
style: improve mobile table layout
chore: update gitignore
```

## Pull request checklist

Before opening a pull request:

- [ ] PHP syntax passes;
- [ ] content is original;
- [ ] links work;
- [ ] mobile layout is acceptable;
- [ ] documentation is updated if structure changed;
- [ ] no secrets or local files are committed.

## Copyright rule

Do not add:

- song lyrics;
- copied textbook content;
- long book excerpts;
- scripts or subtitles;
- copyrighted images;
- copied exam material.

Use original examples. Apparently copyright law exists. Annoying, but better than receiving a legal slap.
