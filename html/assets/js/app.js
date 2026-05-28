(function () {
  const toggle = document.querySelector('[data-menu-toggle]');
  const nav = document.querySelector('#main-navigation');

  if (!toggle || !nav) return;

  function setMenuState(isOpen) {
    nav.classList.toggle('open', isOpen);
    toggle.setAttribute('aria-expanded', String(isOpen));
    toggle.setAttribute('aria-label', isOpen ? 'Fechar menu' : 'Abrir menu');
  }

  toggle.addEventListener('click', function (event) {
    event.stopPropagation();

    const isOpen = !nav.classList.contains('open');
    setMenuState(isOpen);
  });

  nav.addEventListener('click', function (event) {
    const clickedLink = event.target.closest('a');

    if (clickedLink) {
      setMenuState(false);
    }
  });

  document.addEventListener('click', function (event) {
    const clickedOutside =
      !nav.contains(event.target) &&
      !toggle.contains(event.target);

    if (clickedOutside) {
      setMenuState(false);
    }
  });

  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') {
      setMenuState(false);
    }
  });

  const desktopQuery = window.matchMedia('(min-width: 901px)');

  desktopQuery.addEventListener('change', function () {
    if (desktopQuery.matches) {
      setMenuState(false);
    }
  });
})();