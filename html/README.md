# English Codex V6

## O que mudou em relação à V5

### Conteúdo — principal mudança
- Todas as páginas de nível (A0–C2) agora têm **gramática explicada de verdade**: para que serve, fórmula, exemplos reais, armadilhas e dicas — não só uma lista de tópicos.
- `notebook.html` expandido: 6 páginas de caderno preenchidas (A1 a C1) + seção de revisão ativa.
- `pop-culture.html` expandido: exemplos por nível (A0 a C2), por gênero, com progressão de complexidade.
- `brasileiros.html`: tabela de erros expandida de 7 para 10 itens, tabela de falsos cognatos adicionada, seção de como usar o caderno.

### Acessibilidade
- Todas as tabelas agora têm `<caption>` e `scope` nos `<th>`.
- `brand-mark` e `hero-ornament` têm `aria-hidden="true"`.
- Hierarquia de headings revisada em todas as páginas.

### CSS
- Arquivo consolidado, sem hotfix no final.
- Novos seletores: `.grammar-block`, `.formula`, `.ex-list`, `.warn`, `.tip` para o conteúdo de gramática.
- `caption` de tabela estilizado.
- Cache-buster atualizado para `?v=6`.

## Estrutura de pastas
```
engcodex-v6/
├── index.html
├── start.html
├── notebook.html
├── method.html
├── cambridge.html
├── brasileiros.html
├── pop-culture.html
├── teachers.html
├── resources.html
├── assets/
│   ├── css/style.css
│   └── js/app.js
└── levels/
    ├── a0.html
    ├── a1.html
    ├── a2.html
    ├── b1.html
    ├── b2.html
    ├── c1.html
    └── c2.html
```

## Como publicar
Envie todo o conteúdo desta pasta para a raiz do site, mantendo `assets/` e `levels/` no mesmo nível que `index.html`.
