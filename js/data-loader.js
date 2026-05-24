export async function loadJson(path) {
  const response = await fetch(path);
  if (!response.ok) {
    throw new Error(`Could not load ${path}: ${response.status}`);
  }
  return response.json();
}

export async function loadCodexData() {
  const [pagesData, levelsData] = await Promise.all([
    loadJson('data/pages.json'),
    loadJson('data/levels.json')
  ]);

  return {
    pages: pagesData.pages || [],
    levels: levelsData.levels || []
  };
}
