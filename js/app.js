const STORAGE_KEY = 'english_codex_progress_v1';
const COPY_MODE_KEY = 'english_codex_copy_mode_v1';
const LEVELS = ['ALL', 'START', 'A0', 'A1', 'A2', 'B1', 'B2', 'C1', 'C2', 'CAMBRIDGE'];

const LEVEL_GUIDES = {
  START: {
    title: 'Como usar este codex',
    pt: 'Esta parte explica o método. Leia sem pressa, copie apenas o essencial e transforme cada página em produção real: frases suas, exemplos seus e revisão sua. O site mostra o caminho; o caderno obriga o cérebro a trabalhar, esse funcionário preguiçoso.',
    en: 'Use this section to understand the method: read, handwrite, produce, correct and review.'
  },
  A0: {
    title: 'A0 · O ponto de partida real',
    pt: 'Aqui o português é uma ponte, não uma muleta. Você ainda está aprendendo sons, palavras, frases mínimas e sobrevivência. A meta não é “pensar em inglês” por mágica. A meta é reconhecer padrões, escrever frases simples e começar a falar sem travar completamente.',
    en: 'At A0, Portuguese supports understanding while English becomes familiar through small patterns and repeated production.'
  },
  A1: {
    title: 'A1 · A primeira base',
    pt: 'Neste nível, você começa a dizer quem é, o que faz, onde vive, o que gosta e o que precisa. A explicação deve partir da sua vida real: trabalho, família, estudos, rotina, hobbies. Inglês não é peça de museu. É ferramenta.',
    en: 'At A1, you build the first useful sentences about identity, routine, likes, needs and daily life.'
  },
  A2: {
    title: 'A2 · Sobreviver melhor',
    pt: 'Aqui você começa a falar de passado, planos, quantidade, comparação e situações do dia a dia. Ainda precisa de apoio em português quando a regra pesa, mas cada página deve terminar com frases em inglês criadas por você.',
    en: 'At A2, you expand into past events, future plans, quantity, comparison and common daily situations.'
  },
  B1: {
    title: 'B1 · Explicar o mundo ao seu redor',
    pt: 'Neste ponto, você já consegue contar histórias, justificar opiniões e conectar ideias. A aula precisa provocar conversa: por que você pensa isso? Onde isso aparece na sua vida? Como você diria isso no trabalho?',
    en: 'At B1, you learn to tell stories, explain opinions and connect ideas with more confidence.'
  },
  B2: {
    title: 'B2 · Argumentar sem tropeçar tanto',
    pt: 'Agora inglês vira ferramenta para discutir temas complexos, defender pontos de vista e escrever textos organizados. Cultura pop entra como exemplo: dilemas, escolhas, conflitos, tecnologia, sociedade e personagens ajudam a lembrar estruturas.',
    en: 'At B2, you develop argumentation, structure, nuance and more independent communication.'
  },
  C1: {
    title: 'C1 · Precisão, nuance e presença',
    pt: 'Aqui a meta é controlar tom, formalidade, impacto e estilo. Você aprende a soar profissional, claro e sofisticado sem virar um robô corporativo que fala “synergy” para pedir café.',
    en: 'At C1, you refine nuance, register, advanced grammar and professional or academic expression.'
  },
  C2: {
    title: 'C2 · Domínio expressivo',
    pt: 'No C2, a questão não é saber regra. É escolher efeito: ironia, precisão, implicação, ritmo, elegância e força argumentativa. A língua vira instrumento, não obstáculo.',
    en: 'At C2, you focus on rhetorical control, implication, precision, style and expressive power.'
  },
  CAMBRIDGE: {
    title: 'Cambridge Forge · Exame com método',
    pt: 'Esta área conecta o estudo do codex aos exames Cambridge. A ideia não é decorar truque barato. É entender habilidade, critério, tarefa, tempo e estratégia.',
    en: 'This section connects the Codex method to Cambridge exam skills, task types and strategy.'
  }
};

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

function levelGuide(page) {
  const guide = LEVEL_GUIDES[page.level] || LEVEL_GUIDES.START;
  return `
    <section class="level-bridge" aria-label="Brazilian learner guide">
      <strong>${escapeHtml(guide.title)}</strong>
      <p><b>Para brasileiros:</b> ${escapeHtml(guide.pt)}</p>
      <p><b>In English:</b> ${escapeHtml(guide.en)}</p>
    </section>
  `;
}

function studyLoop() {
  return `
    <section class="study-loop" aria-label="Codex study rhythm">
      <div class="study-step"><strong>1 · Ler</strong><span>Entenda a ideia primeiro. Nada de copiar no piloto automático, esse teatro de produtividade.</span></div>
      <div class="study-step"><strong>2 · Escrever</strong><span>Copie à mão só o essencial: regra, exemplo, armadilha e frase sua.</span></div>
      <div class="study-step"><strong>3 · Produzir</strong><span>Crie frases sobre sua vida, trabalho, estudos, jogos, filmes ou rotina.</span></div>
      <div class="study-step"><strong>4 · Falar</strong><span>Leia em voz alta. Inglês que nunca sai da boca vira decoração no caderno.</span></div>
      <div class="study-step"><strong>5 · Revisar</strong><span>Volte em 1, 7 e 30 dias. Memória sem revisão é Wi-Fi de rodoviária.</span></div>
    </section>
  `;
}

function fourSkillsPanel() {
  return `
    <section class="four-skills-panel" aria-label="Four language skills">
      <div class="skill-card"><strong>Audição · Listening</strong><p>Ouça padrões reais: sons, ritmo, contrações, sotaques e frases naturais.</p></div>
      <div class="skill-card"><strong>Fala · Speaking</strong><p>Transforme regra em voz: respostas curtas, exemplos próprios e repetição consciente.</p></div>
      <div class="skill-card"><strong>Leitura · Reading</strong><p>Leia para reconhecer estrutura, contexto, intenção e vocabulário em uso.</p></div>
      <div class="skill-card"><strong>Escrita · Writing</strong><p>Escreva para pensar melhor: frase, parágrafo, e-mail, opinião e revisão.</p></div>
    </section>
  `;
}

function teacherIntro(page) {
  const starterLevels = ['A0', 'A1', 'A2'];
  const isStarter = starterLevels.includes(page.level);
  const ptSupport = isStarter
    ? 'Nos níveis iniciais, a explicação usa português como ponte. A pessoa ainda está aprendendo a ler inglês, então jogar tudo em inglês logo de cara seria inclusivo do mesmo jeito que uma porta trancada é acolhedora.'
    : 'Neste nível, o português aparece menos, mas ainda serve para comparar ideias, evitar armadilhas comuns e explicar nuance quando necessário.';

  return `
    <section class="block teacher-card">
      <h3>Como estudar esta página</h3>
      <p>${escapeHtml(ptSupport)}</p>
      <p>Leia a explicação, conecte com uma situação real da sua vida, copie a parte essencial no caderno e crie pelo menos três exemplos seus. O objetivo é consciência + prática, não decoração mecânica.</p>
    </section>
    <section class="block brazil-card">
      <h3>Ponte para brasileiros</h3>
      <p>Compare inglês e português com cuidado. Algumas estruturas parecem iguais, mas funcionam de outro jeito. Quando uma regra parecer estranha, pergunte: “Que ideia essa estrutura me ajuda a expressar?” Esse é o ponto. Gramática é ferramenta de sentido, não punição medieval.</p>
    </section>
  `;
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

    ${levelGuide(page)}
    ${studyLoop()}
    ${fourSkillsPanel()}

    <div class="article-tools" aria-label="Page controls">
      <button class="btn btn-primary" type="button" data-action="toggle-done">${done ? 'Marked Done' : 'Mark This Page Done'}</button>
      ${previous ? `<button class="btn" type="button" data-action="previous">Previous</button>` : ''}
      ${next ? `<button class="btn" type="button" data-action="next">Next</button>` : ''}
      <button class="btn" type="button" data-action="copy-mode">Toggle Handwriting Mode</button>
    </div>

    <div class="content">
      ${teacherIntro(page)}
      ${page.html}
    </div>
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
  dom.article.scrollIntoView({ behavior: 'smooth', block: 'start' });
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