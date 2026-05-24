# Content Guide

This document explains how to write pages for The English Codex.

## Voice and tone

The Codex should be:

- simple, but never childish;
- clear, direct, and honest;
- useful for beginners without talking down to adults;
- light and human, but not silly;
- written in English, except short Portuguese comparison notes when useful.

Avoid hype, fake shortcuts, vague motivation, and complicated grammar jargon unless it is explained.

## Page structure

Every grammar page should follow the same structure:

1. **Title** — the topic name.
2. **Level badge** — A0 to C2.
3. **Explanation** — what the rule is and when to use it.
4. **Structure** — the reusable pattern.
5. **Examples** — natural sentences.
6. **Common errors** — wrong version, right version, and reason.
7. **Portuguese comparison** — optional contrast for Brazilian learners.
8. **Copy by Hand** — the essential notebook summary.
9. **Quick exercises** — optional short practice.
10. **Cambridge note** — optional exam connection.

## Explanation

Start with use, not terminology.

A learner first needs to know when to use a structure. The grammar label can come later.

Keep explanations short. Two or three clear paragraphs are usually enough.

## Structure

Write structures as reusable patterns:

```text
Subject + am / is / are + complement
```

Keep the pattern visual and easy to copy.

## Examples

Examples should be natural and direct.

Good examples:

```text
I am tired.
She is my sister.
They are at school.
```

Avoid robotic examples that nobody would actually say.

## Common errors

This is one of the most useful parts of the project.

Each error should include:

- the wrong version;
- the correct version;
- a short reason.

Prioritize errors that learners really make, especially Portuguese speakers.

## Portuguese comparison

Use this field only when it helps.

It should be short and practical. It is not a translation of the whole page.

Example:

```text
Em português, dizemos "eu tenho 20 anos". Em inglês, usamos "I am 20 years old", não "I have 20 years".
```

## Copy by Hand

This is the heart of the page.

The Copy by Hand block should be:

- short;
- self-contained;
- useful without the full explanation;
- easy to copy into a notebook;
- focused on patterns, model examples, and common mistakes.

Do not copy the whole explanation into this block. Distill the essence.

## Quick exercises

Exercises should check understanding, not become a full workbook.

A few short items are enough.

## Cambridge note

Use this only when relevant.

The note should explain how the topic connects to B2 First, C1 Advanced, or C2 Proficiency in general terms.

Do not reproduce official Cambridge tasks or copyrighted material.

## JSON template

```json
{
  "topic-id": {
    "title": "Topic Name",
    "level": "a1",
    "explanation": "Plain-language explanation. Lead with when to use it.",
    "structure": "The rule as a clear, reusable pattern.",
    "examples": [
      { "en": "A natural example sentence.", "note": "Optional short note." }
    ],
    "commonErrors": [
      {
        "wrong": "The mistake learners make.",
        "right": "The correct version.",
        "why": "One short line explaining the fix."
      }
    ],
    "ptComparison": "Optional short contrast in Portuguese for Brazilian learners.",
    "copyByHand": [
      "The pattern, written for the notebook.",
      "One or two model examples."
    ],
    "exercises": [
      { "prompt": "A sentence with a ___ gap.", "answer": "the answer" }
    ],
    "cambridge": "Optional one-line note on the exam connection."
  }
}
```

## Checklist before publishing

- [ ] The explanation starts with use, not jargon.
- [ ] The structure is reusable.
- [ ] The examples sound natural.
- [ ] Common errors include wrong, right, and why.
- [ ] The Copy by Hand block is short and useful.
- [ ] The page belongs to one clear CEFR level.
- [ ] The page is tagged correctly.
- [ ] The content is original.
- [ ] No protected text, images, logos, or official exam material were copied.
