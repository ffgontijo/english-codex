# Technical Architecture

## Overview

English Codex currently uses a lightweight PHP architecture.

The purpose of PHP in this project is not backend complexity. It is layout reuse.

Instead of copying the same header, navigation and footer into every page, the project uses shared partial files.

## Main concepts

Each page:

1. loads `config.php`;
2. defines page metadata;
3. sets active navigation variables;
4. includes `partials/page-start.php`;
5. writes page content;
6. includes `partials/page-end.php`.

This keeps the project maintainable and prevents the header from becoming a copy-pasted hydra, because apparently one header was not enough suffering.

## Core files

### `config.php`

Central configuration file.

Expected responsibilities:

- define default site metadata;
- define base URL;
- provide helper functions such as `url()`.

Example:

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

### `partials/page-start.php`

Expected responsibilities:

- output `<!doctype html>`;
- open `<html>`;
- define `<head>`;
- output metadata;
- load CSS;
- open `<body>`;
- render skip link;
- render site header;
- render main navigation;
- render level navigation.

It uses these variables:

```php
$pageTitle
$pageDescription
$activePage
$activeLevel
```

### `partials/page-end.php`

Expected responsibilities:

- render footer;
- load JavaScript;
- close layout tags.

Important: if this partial closes `</main>`, `</body>` and `</html>`, individual pages must not duplicate those tags.

## Page metadata pattern

Main pages:

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
  <!-- Content here -->

<?php require __DIR__ . '/partials/page-end.php'; ?>
```

Level pages:

```php
<?php
require_once __DIR__ . '/../config.php';

$pageTitle = 'A1 · Beginner · English Codex';
$pageDescription = 'Estude inglês A1 com primeiras frases reais, rotina, perguntas básicas e vocabulário essencial.';
$activePage = '';
$activeLevel = 'a1';

require __DIR__ . '/../partials/page-start.php';
?>

<main id="conteudo">
  <!-- Content here -->

<?php require __DIR__ . '/../partials/page-end.php'; ?>
```

## Navigation state

Main navigation should use `$activePage`.

Example:

```php
<a class="nav-link <?= $activePage === 'home' ? 'active' : '' ?>" href="<?= url('index.php') ?>">
  Home
</a>
```

Level navigation should use `$activeLevel`.

Example:

```php
<a class="level-pill <?= $activeLevel === 'b2' ? 'active' : '' ?>" href="<?= url('levels/b2.php') ?>">
  B2
</a>
```

## URL helper

Use the `url()` helper for internal links.

Example:

```php
<a href="<?= url('levels/c1.php') ?>">C1</a>
```

This helps avoid broken paths when navigating from nested directories.

## Assets

Expected assets:

```text
html/assets/css/style.css
html/assets/js/main.js
html/assets/icons/
```

CSS should be loaded through the shared partial.

JavaScript should be loaded through `page-end.php`.

## JavaScript

The JavaScript should remain minimal.

Main responsibilities:

- mobile menu toggle;
- accessible `aria-expanded`;
- no heavy framework;
- no tracking.

Expected pattern:

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

## CSS principles

The CSS should prioritize:

- readability;
- contrast;
- responsive layout;
- long-form content comfort;
- readable tables;
- cards and notebook-style blocks;
- accessibility.

Avoid CSS that depends on fragile fixed heights unless truly necessary. Fixed heights are how layouts develop resentment.

## PHP validation

Run:

```bash
find html -name "*.php" -print0 | xargs -0 -n1 php -l
```

If the repository root is the web root:

```bash
find . -name "*.php" -not -path "./vendor/*" -print0 | xargs -0 -n1 php -l
```

## Common problems

### Broken assets in `/levels`

Cause: relative paths like `assets/css/style.css` from inside `levels/`.

Fix: use `url('assets/css/style.css')` in the shared partial.

### Active level not highlighted

Cause: `$activeLevel` missing or wrong.

Fix:

```php
$activeLevel = 'b2';
```

### Duplicate closing tags

Cause: both page and `page-end.php` close the same layout.

Fix: keep closing layout responsibility in one place only.

### PHP not executing

Cause: using a static server or plain Nginx without PHP.

Fix: use Apache with PHP, Nginx + PHP-FPM, or a PHP-capable Docker image.

## Architecture decision

This project intentionally avoids heavy frameworks.

Reason:

- the content is mostly static;
- PHP partials solve the duplication problem;
- the project remains easy to host;
- the learning material stays portable;
- complexity stays low.

A giant framework would be like bringing a forklift to move a notebook. Technically possible, spiritually embarrassing.
