<?php
require_once __DIR__ . '/config.php';

$pageTitle = 'Cambridge Path · English Codex';
$pageDescription = 'Entenda os exames Cambridge English Qualifications e como se preparar por nível, habilidade, caderno e simulados.';
$activePage = 'cambridge';
$activeLevel = '';

require __DIR__ . '/partials/page-start.php';
?>

<main id="conteudo">

<section class="hero">
  <div class="container">
    <span class="eyebrow">Cambridge Path</span>

    <h1>Preparação sem estudar no escuro</h1>

    <p class="lead">
      A trilha Cambridge do English Codex ajuda o aluno a entender qual exame combina com seu nível, quais habilidades precisa desenvolver e como transformar preparação em estudo real. A prova não recompensa só quem sabe explicar regra gramatical com voz triste. Ela cobra leitura, escrita, escuta, fala, estratégia e consistência.
    </p>

    <div class="hero-actions">
      <a class="button primary" href="#mapa-exames">Ver mapa dos exames</a>
      <a class="button secondary" href="#plano-estudo">Ver plano de estudo</a>
    </div>
  </div>
</section>

<section class="section soft" id="mapa-exames">
  <div class="container">
    <div class="section-head">
      <h2>Mapa dos exames Cambridge</h2>
      <p>
        Cada exame mira um nível do CEFR e exige um tipo diferente de preparação. A ideia aqui não é decorar o nome da prova, mas entender o que ela espera que você consiga fazer em inglês.
      </p>
    </div>

    <div class="table-wrap">
      <table>
        <caption>Visão geral da trilha Cambridge English Qualifications</caption>
        <thead>
          <tr>
            <th>Exame</th>
            <th>Nível-alvo</th>
            <th>Perfil do aluno</th>
            <th>O que precisa treinar</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>A2 Key</strong></td>
            <td>A2</td>
            <td>Aluno que já entende frases simples e consegue lidar com situações básicas.</td>
            <td>Mensagens curtas, diálogos cotidianos, listening simples, speaking pessoal e vocabulário funcional.</td>
          </tr>

          <tr>
            <td><strong>B1 Preliminary</strong></td>
            <td>B1</td>
            <td>Aluno que consegue se comunicar em situações familiares, mas ainda precisa ganhar estrutura.</td>
            <td>Experiências, opiniões simples, e-mails, histórias curtas, leitura cotidiana e conversas sobre temas conhecidos.</td>
          </tr>

          <tr>
            <td><strong>B2 First</strong></td>
            <td>B2</td>
            <td>Aluno independente que quer provar boa comunicação em estudo, trabalho e vida real.</td>
            <td>Use of English, essay, article, review, report, listening com opinião e speaking comparativo.</td>
          </tr>

          <tr>
            <td><strong>C1 Advanced</strong></td>
            <td>C1</td>
            <td>Aluno avançado que precisa usar inglês em contextos acadêmicos, profissionais ou complexos.</td>
            <td>Inferência, registro, nuance, argumentação, proposals, reports, essays e vocabulário avançado.</td>
          </tr>

          <tr>
            <td><strong>C2 Proficiency</strong></td>
            <td>C2</td>
            <td>Aluno que busca domínio refinado, flexibilidade e controle de estilo.</td>
            <td>Textos densos, subtexto, retórica, precisão lexical, escrita sofisticada e speaking natural em temas complexos.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <h2>Qual exame faz sentido para você?</h2>
      <p>
        Escolher exame não é escolher fantasia de nível. É olhar para o que você consegue fazer hoje e para o que precisa comprovar. Vaidade linguística é um péssimo orientador acadêmico, por mais confiante que ela pareça.
      </p>
    </div>

    <div class="cards three-col">
      <article class="card">
        <h3>A2 Key</h3>
        <p>
          Faz sentido se você está consolidando a base e quer provar que consegue lidar com comunicação simples: apresentações, informações pessoais, instruções, mensagens curtas e situações previsíveis.
        </p>
        <a class="button" href="<?= url('levels/a2.php') ?>">Estudar A2</a>
      </article>

      <article class="card">
        <h3>B1 Preliminary</h3>
        <p>
          Faz sentido se você já entende o básico, consegue falar sobre rotina e experiências, mas ainda precisa organizar melhor frases, textos e opiniões.
        </p>
        <a class="button" href="<?= url('levels/b1.php') ?>">Estudar B1</a>
      </article>

      <article class="card">
        <h3>B2 First</h3>
        <p>
          Faz sentido se você quer demonstrar independência: argumentar, escrever textos claros, entender conteúdo real e participar de conversas com mais segurança.
        </p>
        <a class="button" href="<?= url('levels/b2.php') ?>">Estudar B2</a>
      </article>

      <article class="card">
        <h3>C1 Advanced</h3>
        <p>
          Faz sentido se você precisa de inglês avançado para universidade, carreira, reuniões, textos complexos, escrita formal e comunicação com nuance.
        </p>
        <a class="button" href="<?= url('levels/c1.php') ?>">Estudar C1</a>
      </article>

      <article class="card">
        <h3>C2 Proficiency</h3>
        <p>
          Faz sentido se você quer demonstrar domínio muito alto: estilo, precisão, subtexto, leitura densa e flexibilidade em praticamente qualquer contexto.
        </p>
        <a class="button" href="<?= url('levels/c2.php') ?>">Estudar C2</a>
      </article>

      <article class="card">
        <h3>Não sei meu nível</h3>
        <p>
          Comece revisando A2 e B1. Se estiver fácil demais, avance. Se estiver difícil, ótimo: você achou o buraco antes da prova achar por você.
        </p>
        <a class="button" href="<?= url('start.php') ?>">Voltar ao diagnóstico</a>
      </article>
    </div>
  </div>
</section>

<section class="section paper">
  <div class="container">
    <div class="section-head">
      <h2>O que a prova realmente cobra</h2>
      <p>
        Cambridge não mede só “saber inglês” de forma abstrata. A prova mede desempenho em tarefas. Isso muda tudo: você precisa estudar a língua e também aprender o formato.
      </p>
    </div>

    <div class="cards four-col">
      <article class="card">
        <h3>Reading</h3>
        <p>
          Ler para entender ideia geral, detalhes, opinião, intenção, estrutura e vocabulário em contexto.
        </p>
        <ul class="check-list">
          <li>Pratique skimming.</li>
          <li>Pratique scanning.</li>
          <li>Infira significado pelo contexto.</li>
          <li>Observe conectores e referência textual.</li>
        </ul>
      </article>

      <article class="card">
        <h3>Writing</h3>
        <p>
          Escrever respeitando tarefa, leitor, objetivo, registro, organização e clareza.
        </p>
        <ul class="check-list">
          <li>Planeje antes de escrever.</li>
          <li>Use parágrafos claros.</li>
          <li>Revise conteúdo e linguagem.</li>
          <li>Treine tipos de texto específicos.</li>
        </ul>
      </article>

      <article class="card">
        <h3>Listening</h3>
        <p>
          Entender informação, atitude, opinião, intenção e detalhes mesmo quando o áudio não vem mastigado, veja só que crueldade.
        </p>
        <ul class="check-list">
          <li>Ouça por ideia geral.</li>
          <li>Ouça por detalhes.</li>
          <li>Note tom e intenção.</li>
          <li>Treine com sotaques variados.</li>
        </ul>
      </article>

      <article class="card">
        <h3>Speaking</h3>
        <p>
          Responder, interagir, comparar, desenvolver ideias e manter comunicação com clareza.
        </p>
        <ul class="check-list">
          <li>Grave respostas curtas.</li>
          <li>Treine comparação de imagens ou ideias.</li>
          <li>Use frases de interação.</li>
          <li>Aprenda a ganhar tempo sem travar.</li>
        </ul>
      </article>
    </div>
  </div>
</section>

<section class="section soft">
  <div class="container">
    <div class="section-head">
      <h2>Use of English</h2>
      <p>
        A partir dos exames mais avançados, o Use of English fica especialmente importante. Ele mede controle de estrutura, vocabulário, formação de palavras, collocations e transformação de frases.
      </p>
    </div>

    <div class="cards three-col">
      <article class="card">
        <h3>Grammar in context</h3>
        <p>
          Não basta saber a regra isolada. Você precisa reconhecer como a estrutura funciona dentro de um texto, com sentido, coesão e intenção.
        </p>
      </article>

      <article class="card">
        <h3>Vocabulary depth</h3>
        <p>
          Cambridge cobra diferença entre palavras parecidas, collocations, phrasal verbs, word formation e escolhas naturais.
        </p>
      </article>

      <article class="card">
        <h3>Sentence transformation</h3>
        <p>
          Você precisa dizer a mesma ideia com outra estrutura. É aqui que muita gente descobre que “entender” e “produzir” não são a mesma coisa. Surpresa desagradável, porém educativa.
        </p>
      </article>
    </div>
  </div>
</section>

<section class="section" id="plano-estudo">
  <div class="container">
    <div class="section-head">
      <h2>Como estudar para Cambridge no Codex</h2>
      <p>
        A preparação deve unir três coisas: conteúdo por nível, treino de tarefa e registro de erro. Sem isso, você só faz exercício aleatório e torce para os deuses da múltipla escolha.
      </p>
    </div>

    <div class="cards three-col">
      <article class="card">
        <h3>1 · Estude o nível</h3>
        <p>
          Use as páginas A2, B1, B2, C1 ou C2 para revisar gramática, vocabulário, pronúncia, habilidades e erros comuns.
        </p>
      </article>

      <article class="card">
        <h3>2 · Conheça a tarefa</h3>
        <p>
          Antes de praticar, entenda o formato: tipo de texto, tempo, número de questões, objetivo, critérios e o que a tarefa quer medir.
        </p>
      </article>

      <article class="card">
        <h3>3 · Treine por parte</h3>
        <p>
          Reading, Use of English, Writing, Listening e Speaking exigem estratégias diferentes. Estudar tudo do mesmo jeito é economia burra.
        </p>
      </article>

      <article class="card">
        <h3>4 · Faça simulados</h3>
        <p>
          Simulado serve para medir tempo, estratégia, energia e erro recorrente. Não é só uma nota humilhante para guardar rancor.
        </p>
      </article>

      <article class="card">
        <h3>5 · Corrija com diagnóstico</h3>
        <p>
          Depois do simulado, separe erros por tipo: vocabulário, gramática, interpretação, distração, tempo, formato ou falta de repertório.
        </p>
      </article>

      <article class="card">
        <h3>6 · Volte ao caderno</h3>
        <p>
          Cada erro importante precisa virar anotação, exemplo corrigido e mini prática. Erro ignorado vira tradição familiar.
        </p>
      </article>
    </div>
  </div>
</section>

<section class="section paper">
  <div class="container">
    <div class="section-head">
      <h2>Como transformar Cambridge em páginas de caderno</h2>
      <p>
        O caderno é onde a preparação deixa de ser pilha de exercício e vira repertório organizado. Sim, organização. Essa tecnologia ancestral.
      </p>
    </div>

    <div class="table-wrap">
      <table>
        <caption>Ideias de páginas para o caderno Cambridge</caption>
        <thead>
          <tr>
            <th>Área</th>
            <th>Página do caderno</th>
            <th>O que registrar</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Writing</td>
            <td>Essay Map</td>
            <td>Introdução, tese, dois argumentos, conclusão, conectores e frases úteis.</td>
          </tr>

          <tr>
            <td>Writing</td>
            <td>Text Type Lab</td>
            <td>Diferenças entre essay, article, review, report, proposal, email e letter.</td>
          </tr>

          <tr>
            <td>Use of English</td>
            <td>Transformation Bank</td>
            <td>Estruturas equivalentes, key word transformations e padrões recorrentes.</td>
          </tr>

          <tr>
            <td>Vocabulary</td>
            <td>Collocation Log</td>
            <td>Combinações naturais de palavras, phrasal verbs e expressões por contexto.</td>
          </tr>

          <tr>
            <td>Reading</td>
            <td>Reading Strategy Notes</td>
            <td>Tipos de questão, pistas textuais, conectores, referência e inferência.</td>
          </tr>

          <tr>
            <td>Listening</td>
            <td>Listening Mistake Log</td>
            <td>Palavras não reconhecidas, distrações, connected speech e confusões de detalhe.</td>
          </tr>

          <tr>
            <td>Speaking</td>
            <td>Speaking Response Bank</td>
            <td>Frases para comparar, discordar, ganhar tempo, expandir resposta e interagir.</td>
          </tr>

          <tr>
            <td>Simulado</td>
            <td>Mock Test Diagnosis</td>
            <td>Nota, tempo, erros por categoria, causa provável e plano de correção.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <h2>Plano de preparação por fase</h2>
      <p>
        Preparar-se para Cambridge não deve começar pelo simulado completo no desespero. Primeiro você constrói base, depois estratégia, depois resistência de prova.
      </p>
    </div>

    <div class="cards four-col">
      <article class="card">
        <h3>Fase 1 · Diagnóstico</h3>
        <p>
          Faça uma amostra de reading, writing, listening e speaking. Identifique o que está fraco antes de fingir planejamento.
        </p>
      </article>

      <article class="card">
        <h3>Fase 2 · Fundamentos</h3>
        <p>
          Revise gramática, vocabulário, pronúncia e estruturas do nível. Corrija buracos antigos, aqueles zumbis educacionais.
        </p>
      </article>

      <article class="card">
        <h3>Fase 3 · Tarefas</h3>
        <p>
          Treine cada parte da prova separadamente. Aprenda formato, tempo, estratégia e critérios.
        </p>
      </article>

      <article class="card">
        <h3>Fase 4 · Simulados</h3>
        <p>
          Faça provas cronometradas, corrija com diagnóstico e transforme erro em plano de estudo.
        </p>
      </article>
    </div>
  </div>
</section>

<section class="section soft">
  <div class="container">
    <div class="section-head">
      <h2>Para professores</h2>
      <p>
        A trilha Cambridge pode ser usada como roteiro complementar: não substitui material oficial, mas ajuda a organizar estudo, caderno, diagnóstico e prática por habilidade.
      </p>
    </div>

    <div class="cards three-col">
      <article class="card">
        <h3>Antes da aula</h3>
        <p>
          Peça ao aluno uma tarefa curta: um texto, um áudio, uma leitura ou uma resposta oral gravada.
        </p>
      </article>

      <article class="card">
        <h3>Durante a aula</h3>
        <p>
          Trabalhe critérios, estratégia e correção. Mostre o motivo do erro, não só a resposta certa, esse luxo pedagógico.
        </p>
      </article>

      <article class="card">
        <h3>Depois da aula</h3>
        <p>
          Peça uma página no caderno: erro, correção, exemplo novo, mini prática e revisão marcada.
        </p>
      </article>
    </div>
  </div>
</section>

<section class="section paper">
  <div class="container">
    <div class="section-head">
      <h2>Erros comuns na preparação</h2>
      <p>
        A maioria dos problemas não vem da prova ser impossível. Vem de estudar do jeito errado por tempo suficiente para criar confiança numa estratégia ruim.
      </p>
    </div>

    <div class="cards three-col">
      <article class="card">
        <h3>Fazer simulado sem corrigir</h3>
        <p>
          Simulado sem análise é só entretenimento punitivo. Corrija, categorize erros e decida o próximo foco.
        </p>
      </article>

      <article class="card">
        <h3>Ignorar o formato</h3>
        <p>
          Saber inglês ajuda, veja só. Mas saber o formato evita perder tempo entendendo a tarefa durante a prova.
        </p>
      </article>

      <article class="card">
        <h3>Treinar só grammar</h3>
        <p>
          Grammar é importante, mas Cambridge cobra desempenho: ler, escrever, ouvir, falar, escolher, inferir e organizar.
        </p>
      </article>

      <article class="card">
        <h3>Não controlar tempo</h3>
        <p>
          Responder certo em tempo infinito é lindo. Pena que a prova não acontece em outra dimensão temporal.
        </p>
      </article>

      <article class="card">
        <h3>Escrever sem revisar</h3>
        <p>
          Writing precisa de planejamento e revisão. O primeiro rascunho geralmente é só o esqueleto usando sapato social.
        </p>
      </article>

      <article class="card">
        <h3>Fugir do speaking</h3>
        <p>
          Speaking melhora falando. Uma descoberta brutal. Grave respostas, repita, ajuste e aprenda frases de interação.
        </p>
      </article>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="quote-card">
      <h2>Cambridge mede preparo, não esperança.</h2>
      <p>
        Use a trilha para escolher o exame certo, entender as tarefas, treinar por habilidade, fazer simulados e transformar cada erro em página de caderno. A prova deixa de ser um monstro misterioso e vira um projeto de estudo com partes claras.
      </p>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/page-end.php'; ?>