const KEY = 'english-codex:progress';

export function loadProgress() {
  try {
    return JSON.parse(localStorage.getItem(KEY) || '{}');
  } catch {
    return {};
  }
}

export function saveProgress(progress) {
  localStorage.setItem(KEY, JSON.stringify(progress));
}

export function completedCount(progress) {
  return Object.values(progress).filter(Boolean).length;
}

export function toggleDone(progress, pageId) {
  const next = Object.assign({}, progress);
  next[pageId] = !next[pageId];
  return next;
}
