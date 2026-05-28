<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta 
    name="description" 
    content="<?= htmlspecialchars($pageDescription ?? $defaultDescription, ENT_QUOTES, 'UTF-8') ?>"
  >

  <title><?= htmlspecialchars($pageTitle ?? 'English Codex', ENT_QUOTES, 'UTF-8') ?></title>

  <link rel="icon" type="image/svg+xml" href="<?= url('assets/img/favicon.svg?v=1') ?>">
  <meta name="theme-color" content="#1d3557">

  <link rel="stylesheet" href="<?= url('assets/css/style.css?v=8') ?>">
</head>

<body>
<a class="skip-link" href="#conteudo">Pular para o conteúdo</a>

<header class="site-header">
  <div class="container header-bar">
    <a class="brand" href="<?= url('index.php') ?>" aria-label="English Codex Home">
      <span class="brand-mark" aria-hidden="true">EC</span>
      <span class="brand-text">
        <strong>English Codex</strong>
        <small>Do alfabeto ao C2</small>
      </span>
    </a>

    <button 
      class="menu-toggle" 
      type="button" 
      aria-label="Abrir menu" 
      aria-controls="main-navigation" 
      aria-expanded="false"
      data-menu-toggle
    >
      <span></span>
      <span></span>
      <span></span>
    </button>

    <nav class="main-nav" id="main-navigation" aria-label="Navegação principal">
      <div class="main-nav-links">
        <a class="nav-link<?= active($activePage ?? '', 'home') ?>" href="<?= url('index.php') ?>"<?= ariaCurrent($activePage ?? '', 'home') ?>>Home</a>
        <a class="nav-link<?= active($activePage ?? '', 'start') ?>" href="<?= url('start.php') ?>"<?= ariaCurrent($activePage ?? '', 'start') ?>>Comece aqui</a>
        <a class="nav-link<?= active($activePage ?? '', 'notebook') ?>" href="<?= url('notebook.php') ?>"<?= ariaCurrent($activePage ?? '', 'notebook') ?>>Caderno</a>
        <a class="nav-link<?= active($activePage ?? '', 'method') ?>" href="<?= url('method.php') ?>"<?= ariaCurrent($activePage ?? '', 'method') ?>>Método</a>
        <a class="nav-link<?= active($activePage ?? '', 'cambridge') ?>" href="<?= url('cambridge.php') ?>"<?= ariaCurrent($activePage ?? '', 'cambridge') ?>>Cambridge</a>
        <a class="nav-link<?= active($activePage ?? '', 'brasileiros') ?>" href="<?= url('brasileiros.php') ?>"<?= ariaCurrent($activePage ?? '', 'brasileiros') ?>>Brasileiros</a>
        <a class="nav-link<?= active($activePage ?? '', 'pop-culture') ?>" href="<?= url('pop-culture.php') ?>"<?= ariaCurrent($activePage ?? '', 'pop-culture') ?>>Cultura pop</a>
        <a class="nav-link<?= active($activePage ?? '', 'teachers') ?>" href="<?= url('teachers.php') ?>"<?= ariaCurrent($activePage ?? '', 'teachers') ?>>Professores</a>
        <a class="nav-link<?= active($activePage ?? '', 'resources') ?>" href="<?= url('resources.php') ?>"<?= ariaCurrent($activePage ?? '', 'resources') ?>>Recursos</a>
      </div>
    </nav>
  </div>

  <div class="level-bar" role="navigation" aria-label="Navegação por níveis">
    <span class="level-bar-label">Nível</span>
    <a class="level-pill<?= active($activeLevel ?? '', 'a0') ?>" href="<?= url('levels/a0.php') ?>"<?= ariaCurrent($activeLevel ?? '', 'a0') ?>>A0</a>
    <a class="level-pill<?= active($activeLevel ?? '', 'a1') ?>" href="<?= url('levels/a1.php') ?>"<?= ariaCurrent($activeLevel ?? '', 'a1') ?>>A1</a>
    <a class="level-pill<?= active($activeLevel ?? '', 'a2') ?>" href="<?= url('levels/a2.php') ?>"<?= ariaCurrent($activeLevel ?? '', 'a2') ?>>A2</a>
    <a class="level-pill<?= active($activeLevel ?? '', 'b1') ?>" href="<?= url('levels/b1.php') ?>"<?= ariaCurrent($activeLevel ?? '', 'b1') ?>>B1</a>
    <a class="level-pill<?= active($activeLevel ?? '', 'b2') ?>" href="<?= url('levels/b2.php') ?>"<?= ariaCurrent($activeLevel ?? '', 'b2') ?>>B2</a>
    <a class="level-pill<?= active($activeLevel ?? '', 'c1') ?>" href="<?= url('levels/c1.php') ?>"<?= ariaCurrent($activeLevel ?? '', 'c1') ?>>C1</a>
    <a class="level-pill<?= active($activeLevel ?? '', 'c2') ?>" href="<?= url('levels/c2.php') ?>"<?= ariaCurrent($activeLevel ?? '', 'c2') ?>>C2</a>
  </div>
</header>
