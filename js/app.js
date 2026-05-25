const STORAGE_KEY = 'english_codex_progress_v1';
const COPY_MODE_KEY = 'english_codex_copy_mode_v1';
const LEVELS = ['ALL', 'START', 'A0', 'A1', 'A2', 'B1', 'B2', 'C1', 'C2', 'CAMBRIDGE'];

const dom = {
  article: document.querySelector('#article'),
  nav: document.querySelector('#navigation'),
  filters: document.querySelector('#filters'),
  search: document.querySelector('#searchInput'),
  progressFill: document.querySelector('#progressFill'),
  progressText: document.querySelector('#progressText'),
  doneButton: document.querySelector('#doneButton'),
  copyModeButton: document.querySelector('#copyModeButton'),
  resetButton: document.querySelector('#resetButton'),
  sidebar: document.querySelector('#sidebar'),
  menuButton: document.querySelector('#menuButton'),
  errorTemplate: document.querySelector('#loadErrorTemplate')
};

const state = {
  pages: [],
  current: decodeURIComponent(location.hash.replace('#', '')) || 'home',
  filter: 'ALL',
  query: '',
  done: loadProgress()
};

function loadProgress() {
  try {
    return JSON.parse(localStorage.getItem(STORAGE_KEY) || '{}');
  } catch {
    return {};
  }
}

function saveProgress() {
  localStorage.setItem(STORAGE_KEY, JSON.stringify(state.done));
}

function normalizeText(value = '') {
  return value
    .replace(/<[^>]*>/g, ' ')
    .replace(/&[^;]+;/g, ' ')
    .replace(/\s+/g, ' ')
    .trim()
    .toLowerCase();
}

function pageMatches(page) {
  const query = state.query.trim().toLowerCase();
  const levelOk = state.filter === 'ALL'
    || page.level === state.filter
    || (state.filter === 'CAMBRIDGE' && /cambridge/i.test(page.section + ' ' + page.title + ' ' + page.tags.join(' ')));

  const haystack = normalizeText([
    page.title,
    page.summary,
    page.level,
    page.section,
    page.kind,
    page.tags.join(' '),
    page.html
  ].join(' '));

  return levelOk && (!query || haystack.includes(query));
}

function visiblePages() {
  return state.pages.filter(pageMatches);
}

function escapeHtml(value = '') {
  return String(value)
    .replaceAll('&', '&amp;')
    .replaceAll('<', '&lt;')
    .replaceAll('>', '&gt;')
    .replaceAll('"', '&quot;')
    .replaceAll("'", '&#039;');
}

function renderFilters() {
  dom.filters.innerHTML = LEVELS.map(level => `
    <button class="filter" type="button" data-level="${level}" aria-pressed="${state.filter === level}">${level}</button>
  `).join('');

  dom.filters.querySelectorAll('button').forEach(button => {
    button.addEventListener('click', () => {
      state.filter = button.dataset.level;
      renderFilters();
      renderNavigation();
    });
  });
}

function renderNavigation() {
  const pages = visiblePages();

  if (!pages.length) {
    dom.nav.innerHTML = '<p class="empty-state">No pages found. The Codex is silent. Terrifying.</p>';
    return;
  }

  const sections = [...new Set(pages.map(page => page.section))];
  dom.nav.innerHTML = sections.map(section => {
    const items = pages
      .filter(page => page.section === section)
      .map(page => {
        const active = page.id === state.current ? ' is-active' : '';
        const done = state.done[page.id] ? ' is-done' : '';
        return `
          <button class="nav-item${active}" type="button" data-page-id="${escapeHtml(page.id)}">
            <span class="badge ${escapeHtml(page.level)}">${escapeHtml(page.level)}</span>
            <span class="nav-title">${escapeHtml(page.title)}</span>
            <span class="done-dot${done}" aria-label="${state.done[page.id] ? 'Done' : 'Not done'}">✓</span>
          </button>
        `;
      }).join('');

    return `<div class="nav-section">${escapeHtml(section)}</div>${items}`;
  }).join('');

  dom.nav.querySelectorAll('.nav-item').forEach(button => {
    button.addEventListener('click', () => {
      showPage(button.dataset.pageId);
      closeSidebarOnMobile();
    });
  });
}

function renderProgress() {
  const count = Object.values(state.done).filter(Boolean).length;
  const total = state.pages.length || 1;
  const percent = Math.round((count / total) * 100);
  dom.progressFill.style.width = `${percent}%`;
  dom.progressText.textContent = `${count}/${state.pages.length} pages complete · ${percent}%`;
}

function pageById(id) {
  return state.pages.find(page => page.id === id) || state.pages[0];
}

function renderArticle() {
  const page = pageById(state.current);
  if (!page) return;

  state.current = page.id;
  document.title = `${page.title} · The English Codex`;

  const index = state.pages.findIndex(item => item.id === page.id);
  const previous = state.pages[index - 1];
  const next = state.pages[index + 1];
  const done = Boolean(state.done[page.id]);

  dom.doneButton.textContent = done ? 'Done ✓' : 'Mark Done';
  dom.doneButton.setAttribute('aria-pressed', String(done));

  dom.article.innerHTML = `
    <header class="article-head">
      <div class="kicker">
        <span class="badge ${escapeHtml(page.level)}">${escapeHtml(page.level)}</span>
        <span class="pill">${escapeHtml(page.section)}</span>
        <span class="pill">${escapeHtml(page.kind)}</span>
        ${page.tags.slice(0, 6).map(tag => `<span class="pill">#${escapeHtml(tag)}</span>`).join('')}
      </div>
      <h1>${escapeHtml(page.title)}</h1>
      <p class="summary">${escapeHtml(page.summary)}</p>
    </header>

    <div class="article-tools" aria-label="Page controls">
      <button class="btn btn-primary" type="button" data-action="toggle-done">${done ? 'Marked Done' : 'Mark This Page Done'}</button>
      ${previous ? `<button class="btn" type="button" data-action="previous">Previous</button>` : ''}
      ${next ? `<button class="btn" type="button" data-action="next">Next</button>` : ''}
      <button class="btn" type="button" data-action="copy-mode">Toggle Copy Mode</button>
    </div>

    <div class="content">${page.html}</div>
  `;

  dom.article.querySelector('[data-action="toggle-done"]')?.addEventListener('click', toggleDone);
  dom.article.querySelector('[data-action="previous"]')?.addEventListener('click', () => showPage(previous.id));
  dom.article.querySelector('[data-action="next"]')?.addEventListener('click', () => showPage(next.id));
  dom.article.querySelector('[data-action="copy-mode"]')?.addEventListener('click', toggleCopyMode);
}

function showPage(id) {
  state.current = id;
  history.replaceState(null, '', `#${encodeURIComponent(id)}`);
  renderArticle();
  renderNavigation();
  renderProgress();
  document.querySelector('#content').focus({ preventScroll: true });
  window.scrollTo({ top: 0, behavior: 'smooth' });
}

function toggleDone() {
  state.done[state.current] = !state.done[state.current];
  saveProgress();
  renderArticle();
  renderNavigation();
  renderProgress();
}

function toggleCopyMode() {
  document.body.classList.toggle('copy-mode');
  localStorage.setItem(COPY_MODE_KEY, String(document.body.classList.contains('copy-mode')));
}

function resetProgress() {
  const confirmed = window.confirm('Reset all saved progress on this browser?');
  if (!confirmed) return;
  state.done = {};
  saveProgress();
  renderArticle();
  renderNavigation();
  renderProgress();
}

function closeSidebarOnMobile() {
  if (window.innerWidth > 1020) return;
  dom.sidebar.classList.remove('is-open');
  dom.menuButton?.setAttribute('aria-expanded', 'false');
}

function bindGlobalEvents() {
  dom.search.addEventListener('input', event => {
    state.query = event.target.value;
    renderNavigation();
  });

  dom.doneButton.addEventListener('click', toggleDone);
  dom.copyModeButton.addEventListener('click', toggleCopyMode);
  dom.resetButton.addEventListener('click', resetProgress);

  dom.menuButton.addEventListener('click', () => {
    const isOpen = dom.sidebar.classList.toggle('is-open');
    dom.menuButton.setAttribute('aria-expanded', String(isOpen));
  });

  window.addEventListener('hashchange', () => {
    const id = decodeURIComponent(location.hash.replace('#', '')) || 'home';
    if (id !== state.current) showPage(id);
  });
}

async function init() {
  try {
    const response = await fetch('data/pages.json', { cache: 'no-cache' });
    if (!response.ok) throw new Error(`HTTP ${response.status}`);
    state.pages = await response.json();
  } catch (error) {
    console.error(error);
    dom.article.innerHTML = dom.errorTemplate.innerHTML;
    return;
  }

  if (localStorage.getItem(COPY_MODE_KEY) === 'true') {
    document.body.classList.add('copy-mode');
  }

  bindGlobalEvents();
  renderFilters();
  renderNavigation();
  renderProgress();
  renderArticle();
}

init();
