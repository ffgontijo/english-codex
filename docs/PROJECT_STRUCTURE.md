# Project Structure

This document explains where each major file should live.

## Root

```text
english-codex/
├── README.md
├── CHANGELOG.md
├── CONTRIBUTING.md
├── SECURITY.md
├── .gitignore
├── .editorconfig
├── docker-compose.yml
├── docs/
├── .github/
└── html/
```

## Root files

| File | Purpose |
| --- | --- |
| `README.md` | Main project presentation |
| `.gitignore` | Prevents local junk and secrets from being committed |
| `.editorconfig` | Keeps formatting consistent across editors |
| `CHANGELOG.md` | Tracks important changes |
| `CONTRIBUTING.md` | Explains contribution standards |
| `SECURITY.md` | Documents basic security expectations |
| `docker-compose.yml` | Local/server container setup |

## Documentation folder

```text
docs/
├── PROJECT_OVERVIEW.md
├── TECHNICAL_ARCHITECTURE.md
├── DEPLOYMENT.md
├── CONTENT_GUIDE.md
├── CAMBRIDGE_AND_REFERENCES.md
├── MAINTENANCE.md
├── PROJECT_STRUCTURE.md
└── ROADMAP.md
```

## Website folder

```text
html/
├── config.php
├── index.php
├── start.php
├── notebook.php
├── method.php
├── cambridge.php
├── brasileiros.php
├── pop-culture.php
├── teachers.php
├── resources.php
├── assets/
├── partials/
└── levels/
```

## Partials

```text
html/partials/
├── page-start.php
└── page-end.php
```

These files define shared layout.

## Levels

```text
html/levels/
├── a0.php
├── a1.php
├── a2.php
├── b1.php
├── b2.php
├── c1.php
└── c2.php
```

Each level page should set:

```php
$activePage = '';
$activeLevel = 'a1';
```

## Assets

```text
html/assets/
├── css/
│   └── style.css
├── js/
│   └── main.js
└── icons/
```

## Rule for new pages

New main pages go in:

```text
html/
```

New level pages go in:

```text
html/levels/
```

New documentation goes in:

```text
docs/
```

Do not throw files randomly into the root like a digital junk drawer. GitHub is not a garage.
