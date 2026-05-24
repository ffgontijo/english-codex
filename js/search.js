export function pageMatches(page, state) {
  const query = state.query.trim().toLowerCase();
  const filter = state.filter;

  let levelMatches = false;
  if (filter === 'ALL') levelMatches = true;
  if (page.level === filter) levelMatches = true;
  if (filter === 'CAMBRIDGE' && page.section === 'Cambridge Forge') levelMatches = true;

  const tags = page.tags || [];
  const searchableText = [page.title, page.summary, page.level, page.section].concat(tags).join(' ').toLowerCase();

  if (!levelMatches) return false;
  if (!query) return true;
  return searchableText.includes(query);
}
