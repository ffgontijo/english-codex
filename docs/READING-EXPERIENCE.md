# Reading Experience

This document defines how The English Codex should feel and behave as a reading and study website.

The project is **site-first and notebook-friendly**. The website is the main experience. The handwritten codex is the study method. Printing is useful, but optional.

## Goal

A learner should be able to open the site, read for a long time, understand where they are, and copy the essential notes into their own codex without visual fatigue.

The interface should feel calm, clear, and slightly book-like. It should not feel like a dashboard, a game menu, or a medieval parchment simulator.

## Visual direction

The default theme is light:

- warm off-white background;
- dark readable text;
- white or soft cream cards;
- subtle borders;
- restrained accent colors;
- generous spacing;
- no heavy textures;
- no decorative fonts for body text.

The Codex can use a small amount of fantasy or RPG flavor, but readability always wins.

## Recommended design tokens

```css
:root {
  --color-bg: #FAF7F0;
  --color-surface: #FFFFFF;
  --color-surface-soft: #F4EFE6;

  --color-text: #1F2933;
  --color-text-muted: #5B6573;

  --color-border: #E6DDCF;

  --color-primary: #2F6F8F;
  --color-primary-dark: #214F66;

  --color-accent: #B08945;
  --color-accent-soft: #F1E3C4;

  --shadow-soft: 0 8px 24px rgba(31, 41, 51, 0.08);
}
```

## Typography

Use fonts that support long reading sessions.

Recommended stack:

```css
:root {
  --font-body: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
  --font-heading: Georgia, "Times New Roman", serif;
  --font-mono: Consolas, "Courier New", monospace;
}
```

If web fonts are added later, keep fallbacks clean and readable.

## Layout principles

- Keep the reading column comfortable.
- Avoid full-width paragraphs.
- Use clear headings and predictable structure.
- Make the sidebar useful, not dominant.
- Keep search visible but not noisy.
- Give examples, common errors, and Copy by Hand blocks distinct visual styles.
- On mobile, prioritize content over navigation.

## Copy Mode

Copy Mode is one of the most important features of the site. It should show only the essential material a learner needs to copy by hand.

When Copy Mode is active:

- hide long explanations;
- hide navigation clutter;
- keep the page title and level visible;
- show the Copy by Hand block clearly;
- keep model examples readable;
- avoid decorative elements.

Copy Mode is not a print mode. It is a focused study mode.

## Accessibility

The site should support:

- strong color contrast;
- keyboard navigation;
- visible focus states;
- semantic headings;
- readable font sizes;
- clear link styles;
- mobile-friendly tap targets;
- reduced visual noise.

A learner should not need a powerful device or perfect eyesight to use the Codex.

## Optional printing

Printing is allowed, but it is not the center of the project.

If print support is added:

- hide navigation, search, buttons, and interactive controls;
- keep title, explanation, examples, common errors, and Copy by Hand;
- use dark text on white background;
- avoid awkward page breaks inside cards;
- support browser print-to-PDF.

Generated PDFs should not be committed to the repository. The source files are the project.

## Testing checklist

Before publishing a layout or page, check:

- [ ] It is readable on desktop.
- [ ] It is readable on tablet.
- [ ] It is readable on mobile.
- [ ] Copy Mode is clear and useful.
- [ ] Text contrast is comfortable.
- [ ] The sidebar does not dominate the content.
- [ ] The page can be studied without printing.
- [ ] Optional print output does not break the page.
