<?php
require_once __DIR__ . '/config.php';

$pageTitle = 'Caderno · English Codex';
$pageDescription = 'Aprenda como montar seu próprio caderno de inglês do alfabeto ao C2, com páginas por nível, revisão ativa, exemplos próprios e registro de erros.';
$activePage = 'notebook';
$activeLevel = '';

require __DIR__ . '/partials/page-start.php';
?>

<main id="conteudo">

<section class="hero">
  <div class="container">
    <span class="eyebrow">Caderno vivo</span>

    <h1>Monte seu próprio caderno de inglês</h1>

    <p class="lead">
      A proposta do English Codex é que cada estudante construa um caderno físico ou digital com explicações, exemplos próprios, prática e revisão. O site orienta a estrutura, mas não força downloads nem modelos engessados. Caderno bom é ferramenta de estudo, não vitrine de caneta colorida.
    </p>

    <div class="hero-actions">
      <a class="button primary" href="#pagina-padrao">Ver página padrão</a>
      <a class="button secondary" href="#exemplos">Ver exemplos preenchidos</a>
    </div>
  </div>
</section>

<section class="section soft">
  <div class="container">
    <div class="section-head">
      <h2>O que é um caderno vivo?</h2>
      <p>
        Um caderno vivo muda conforme você aprende. Ele registra explicações, erros, exemplos, dúvidas, revisões e progresso. Não é um lugar para copiar tudo mecanicamente e fingir que isso é estudo. Essa ilusão já causou sofrimento suficiente.
      </p>
    </div>

    <div class="cards three-col">
      <article class="card">
        <h3>É pessoal</h3>
        <p>
          As melhores páginas têm exemplos da sua vida: trabalho, rotina, estudos, hobbies, filmes, jogos, RPG, viagens e opiniões reais.
        </p>
      </article>

      <article class="card">
        <h3>É revisável</h3>
        <p>
          Uma anotação boa permite voltar depois e entender rapidamente o assunto, recriar exemplos e corrigir erros recorrentes.
        </p>
      </article>

      <article class="card">
        <h3>É prático</h3>
        <p>
          Cada página precisa levar a alguma ação: escrever frases, falar, responder perguntas, revisar, ouvir, ler ou corrigir algo.
        </p>
      </article>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <h2>Divisões recomendadas</h2>
      <p>
        Organize por nível, não por skill. Assim você encontra tudo do B1 junto, em vez de abrir cinco seções diferentes para lembrar onde colocou uma explicação. Um pequeno ato contra o caos.
      </p>
    </div>

    <div class="cards three-col">
      <article class="card">
        <h3>Parte 1 · Guia de estudo</h3>
        <p>
          Como estudar, como revisar, como registrar erros, como montar páginas e como usar o caderno durante a semana.
        </p>
        <p>
          Leia uma vez; releia quando a motivação cair e você começar a achar que só assistir vídeos conta como estudo.
        </p>
      </article>

      <article class="card">
        <h3>Parte 2 · Níveis</h3>
        <p>
          A0, A1, A2, B1, B2, C1 e C2. Cada nível reúne gramática, vocabulário, pronúncia, habilidades, cultura pop e português vs inglês.
        </p>
        <p>
          Cada tópico vira uma página curta, completa e revisável.
        </p>
      </article>

      <article class="card">
        <h3>Parte 3 · Revisão</h3>
        <p>
          Error log, review tracker, vocabulary cards, pronunciation notes, Cambridge practice e checklists.
        </p>
        <p>
          A parte mais importante e, como manda a tradição humana, a mais ignorada.
        </p>
      </article>
    </div>
  </div>
</section>

<section class="section paper">
  <div class="container">
    <div class="section-head">
      <h2>Estrutura sugerida do caderno</h2>
      <p>
        Use esta estrutura como ponto de partida. Ela funciona tanto para caderno físico quanto para GoodNotes, OneNote, Notion, Obsidian ou qualquer outro lugar onde humanos fingem que vão se organizar para sempre.
      </p>
    </div>

    <div class="table-wrap">
      <table>
        <caption>Organização recomendada do caderno English Codex</caption>
        <thead>
          <tr>
            <th>Seção</th>
            <th>O que colocar</th>
            <th>Objetivo</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Guia inicial</td>
            <td>Como estudar, rotina semanal, revisão ativa e modelo de página.</td>
            <td>Dar método antes de acumular conteúdo.</td>
          </tr>

          <tr>
            <td>A0-A2</td>
            <td>Base, sons, frases simples, rotina, passado, futuro e vocabulário essencial.</td>
            <td>Criar segurança e estrutura básica.</td>
          </tr>

          <tr>
            <td>B1-B2</td>
            <td>Opinião, storytelling, conectores, essays, listening real e argumentação.</td>
            <td>Ganhar independência e clareza.</td>
          </tr>

          <tr>
            <td>C1-C2</td>
            <td>Nuance, registro, estilo, retórica, vocabulário avançado e textos complexos.</td>
            <td>Refinar precisão e naturalidade.</td>
          </tr>

          <tr>
            <td>Error log</td>
            <td>Erros recorrentes, correções, motivos e frases novas.</td>
            <td>Transformar erro em diagnóstico.</td>
          </tr>

          <tr>
            <td>Review tracker</td>
            <td>Datas de revisão, temas revisitados e pontos ainda fracos.</td>
            <td>Garantir que o conteúdo volte antes de evaporar.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="section" id="pagina-padrao">
  <div class="container">
    <div class="section-head">
      <h2>Página padrão de uma matéria</h2>
      <p>
        Toda página de caderno deve ter esta estrutura. Não precisa ser longa; precisa ser completa. Uma página curta bem feita vale mais que três páginas copiadas com a energia espiritual de uma impressora cansada.
      </p>
    </div>

    <div class="notebook-page">
      <h3>Template mental da página</h3>

      <div class="notebook-lines">
        <ol>
          <li><strong>Tema:</strong> nome da matéria.</li>
          <li><strong>Nível:</strong> A0, A1, A2, B1, B2, C1 ou C2.</li>
          <li><strong>Objetivo:</strong> ao final, eu consigo...</li>
          <li><strong>Fórmula ou regra:</strong> a estrutura básica, sem drama.</li>
          <li><strong>Quando usar:</strong> situação real em que esse conteúdo aparece.</li>
          <li><strong>Exemplos reais:</strong> vida, filmes, livros, RPG, trabalho ou estudos.</li>
          <li><strong>Português ajuda aqui:</strong> semelhanças úteis.</li>
          <li><strong>Português te trai aqui:</strong> erros típicos de brasileiros.</li>
          <li><strong>Dica de professor:</strong> macete, uso real ou alerta importante.</li>
          <li><strong>Prática:</strong> frases, fala, texto, leitura ou listening.</li>
          <li><strong>Revisão ativa:</strong> perguntas para responder sem olhar.</li>
          <li><strong>Data de revisão:</strong> quando vou voltar nessa página?</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<section class="section soft">
  <div class="container">
    <div class="section-head">
      <h2>Como transformar uma aula em página</h2>
      <p>
        O erro clássico é assistir a uma aula, entender na hora e nunca mais tocar no assunto. O caderno serve para impedir esse desaparecimento elegante do conhecimento.
      </p>
    </div>

    <div class="cards four-col">
      <article class="card">
        <h3>1 · Capture</h3>
        <p>
          Durante a aula ou leitura, anote apenas o essencial: regra, exemplos, erros e dúvidas. Não tente registrar cada suspiro do professor.
        </p>
      </article>

      <article class="card">
        <h3>2 · Organize</h3>
        <p>
          Depois, transforme as anotações em uma página clara: título, objetivo, regra, exemplos e prática.
        </p>
      </article>

      <article class="card">
        <h3>3 · Produza</h3>
        <p>
          Crie frases suas. Se a página só tem exemplos copiados, ela ainda não virou aprendizado.
        </p>
      </article>

      <article class="card">
        <h3>4 · Revise</h3>
        <p>
          Volte à página depois e tente explicar o tema sem olhar. O caderno precisa provocar memória, não só reconhecimento visual.
        </p>
      </article>
    </div>
  </div>
</section>

<section class="section paper" id="exemplos">
  <div class="container">
    <div class="section-head">
      <h2>Exemplos de páginas preenchidas</h2>
      <p>
        Estes exemplos mostram o modelo em ação. Use como referência, não como texto para copiar palavra por palavra. Copiar exemplo alheio e chamar de caderno pessoal é só cosplay de estudante.
      </p>
    </div>

    <div class="cards two-col">

      <div class="notebook-page">
        <h3>Present Simple · A1</h3>

        <p><strong>Objetivo:</strong> falar de rotina, hábitos e fatos gerais.</p>

        <p><strong>Fórmula:</strong></p>
        <p class="formula">
          I / You / We / They + verb | He / She / It + verb + -s
        </p>

        <p><strong>Quando usar:</strong> para falar do que acontece normalmente, de hábitos, rotinas, fatos e preferências.</p>

        <p><strong>Exemplos reais:</strong></p>
        <ul class="check-list">
          <li>I work in data management.</li>
          <li>The detective notices every detail.</li>
          <li>The ship arrives at dawn.</li>
          <li>She reads every night before sleeping.</li>
        </ul>

        <p><strong>Português ajuda:</strong> “Eu trabalho” → “I work”. A lógica de rotina é parecida.</p>

        <p><strong>Português te trai:</strong> nunca diga “I am work”. Diga “I work”. E não esqueça o -s em he/she/it: “She works”, não “She work”.</p>

        <p><strong>Prática:</strong> escreva 5 frases sobre sua rotina e 5 frases sobre a rotina de outra pessoa.</p>
      </div>

      <div class="notebook-page">
        <h3>Past Simple · A2</h3>

        <p><strong>Objetivo:</strong> falar de eventos concluídos no passado.</p>

        <p><strong>Fórmula:</strong></p>
        <p class="formula">
          Verb + -ed para regulares | forma irregular para verbos irregulares
        </p>

        <p><strong>Quando usar:</strong> para narrar ações terminadas: ontem, semana passada, em 2020, no último episódio, na última sessão.</p>

        <p><strong>Exemplos reais:</strong></p>
        <ul class="check-list">
          <li>The crew landed on the frozen moon.</li>
          <li>The investigator found a hidden note.</li>
          <li>I visited three cities in one week.</li>
          <li>She wrote the entire report in one night.</li>
        </ul>

        <p><strong>Português ajuda:</strong> “Eu visitei” → “I visited”. Passado concluído funciona de forma parecida.</p>

        <p><strong>Português te trai:</strong> “make a trip” não funciona bem. Diga “go on a trip” ou “travel”.</p>

        <p><strong>Dica:</strong> verbos irregulares exigem repetição. Aprenda em grupos pequenos, com frases, não com listas gigantes criadas para destruir a esperança.</p>

        <p><strong>Prática:</strong> escreva uma microaventura de 5 frases no Past Simple.</p>
      </div>

      <div class="notebook-page">
        <h3>Present Perfect · B1</h3>

        <p><strong>Objetivo:</strong> falar de experiências e ações com conexão ao presente.</p>

        <p><strong>Fórmula:</strong></p>
        <p class="formula">
          have / has + past participle
        </p>

        <p><strong>Quando usar:</strong> experiências de vida, ações recentes, ações que começaram no passado e continuam no presente.</p>

        <p><strong>Exemplos reais:</strong></p>
        <ul class="check-list">
          <li>I have visited that city twice.</li>
          <li>The archaeologist has found a new chamber.</li>
          <li>Have you ever read a book in English?</li>
          <li>She has worked here for three years.</li>
        </ul>

        <p><strong>Português ajuda:</strong> a ideia de experiência existe em português: “Já fui a Londres” → “I have been to London.”</p>

        <p><strong>Português te trai:</strong> “Eu moro aqui há dois anos” → “I have lived here for two years”, não “I live here since two years”.</p>

        <p><strong>Dica:</strong> use <em>for</em> para duração: <em>for three years</em>. Use <em>since</em> para ponto de início: <em>since 2020</em>.</p>

        <p><strong>Prática:</strong> escreva 5 frases com “I have never...” e 5 perguntas com “Have you ever...?”</p>
      </div>

      <div class="notebook-page">
        <h3>Passive Voice · B2</h3>

        <p><strong>Objetivo:</strong> deslocar o foco da ação para o objeto, processo ou resultado.</p>

        <p><strong>Fórmula:</strong></p>
        <p class="formula">
          be conjugado + past participle [+ by + agente]
        </p>

        <p><strong>Quando usar:</strong> quando o agente é desconhecido, irrelevante ou menos importante que o resultado.</p>

        <p><strong>Exemplos reais:</strong></p>
        <ul class="check-list">
          <li>The report was submitted yesterday.</li>
          <li>The message was encrypted by an unknown system.</li>
          <li>Three suspects have been interviewed.</li>
          <li>The data will be analysed next week.</li>
        </ul>

        <p><strong>Português ajuda:</strong> “O sistema foi criado por...” → “The system was created by...”. A estrutura é parecida.</p>

        <p><strong>Português te trai:</strong> cuidado com a concordância do <em>be</em>. “The results was...” está errado. Use “The results were...”.</p>

        <p><strong>Dica:</strong> voz passiva é muito útil em textos formais, relatórios, ciência, notícias e documentação técnica.</p>

        <p><strong>Prática:</strong> reescreva 5 frases ativas na voz passiva.</p>
      </div>

      <div class="notebook-page">
        <h3>Hedging Language · C1</h3>

        <p><strong>Objetivo:</strong> expressar prudência, nuance, possibilidade ou distanciamento de uma afirmação.</p>

        <p><strong>Estruturas principais:</strong></p>
        <ul class="check-list">
          <li>It could be argued that...</li>
          <li>There is some evidence to suggest that...</li>
          <li>This appears to indicate...</li>
          <li>To some extent, this may be...</li>
          <li>It seems likely that...</li>
        </ul>

        <p><strong>Exemplos em contexto:</strong></p>
        <ul class="check-list">
          <li>It could be argued that the policy has had mixed results.</li>
          <li>The data appears to suggest a correlation between the two variables.</li>
          <li>To some extent, the success of the project depended on timing.</li>
        </ul>

        <p><strong>Português ajuda:</strong> “pode-se argumentar que...” também é hedging. A lógica existe; falta aprender as fórmulas em inglês.</p>

        <p><strong>Cuidado:</strong> hedging não é insegurança. É precisão acadêmica. Use em essays, proposals, reports e análises.</p>

        <p><strong>Prática:</strong> pegue 3 afirmações absolutas e reescreva com hedging.</p>
      </div>

      <div class="notebook-page">
        <h3>Error Log · Meu registro pessoal</h3>

        <p><strong>Como usar:</strong> anote cada erro no momento em que ele aparece. Revise a lista uma vez por semana.</p>

        <div class="notebook-lines">
          <ol>
            <li><strong>Erro:</strong> I am agree with you. | <strong>Correto:</strong> I agree with you. | <strong>Motivo:</strong> <em>agree</em> é verbo, não precisa de <em>am</em>.</li>
            <li><strong>Erro:</strong> She is married with him. | <strong>Correto:</strong> She is married to him. | <strong>Motivo:</strong> a preposição correta é <em>to</em>.</li>
            <li><strong>Erro:</strong> I have 26 years. | <strong>Correto:</strong> I am 26 years old. | <strong>Motivo:</strong> idade usa <em>to be</em> em inglês.</li>
            <li><strong>Erro:</strong> I did a mistake. | <strong>Correto:</strong> I made a mistake. | <strong>Motivo:</strong> a collocation natural é <em>make a mistake</em>.</li>
            <li><strong>Erro:</strong> [espaço para o seu próximo erro]</li>
          </ol>
        </div>

        <p style="margin-top:.8rem;color:var(--muted);font-size:.9rem">
          Dica: não use o error log para se punir. Use para mapear padrões. Três erros parecidos indicam seu próximo tema de revisão.
        </p>
      </div>

    </div>
  </div>
</section>

<section class="section soft">
  <div class="container">
    <div class="section-head">
      <h2>Revisão ativa: como usar o caderno depois</h2>
      <p>
        Um caderno não revisado é uma coleção de boas intenções. Bonito, talvez. Útil, discutível.
      </p>
    </div>

    <div class="cards four-col">
      <article class="card">
        <h3>Mesmo dia</h3>
        <p>
          Releia a página anotada. Cubra os exemplos e tente recriá-los de memória.
        </p>
      </article>

      <article class="card">
        <h3>3 dias depois</h3>
        <p>
          Abra o caderno sem reler. Escreva o que você lembra do tema. Depois compare com a página original.
        </p>
      </article>

      <article class="card">
        <h3>1 semana depois</h3>
        <p>
          Use o conteúdo em uma frase real: mensagem, e-mail, texto curto, áudio ou fala.
        </p>
      </article>

      <article class="card">
        <h3>1 mês depois</h3>
        <p>
          Releia o error log. Corrija qualquer item que você ainda comete. Marque o que foi superado.
        </p>
      </article>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <h2>Review tracker</h2>
      <p>
        Use uma tabela simples para acompanhar revisões. Não precisa de sistema complexo, dashboard, gráfico de pizza e um ritual em Power BI. Só precisa funcionar.
      </p>
    </div>

    <div class="table-wrap">
      <table>
        <caption>Modelo simples de controle de revisão</caption>
        <thead>
          <tr>
            <th>Tema</th>
            <th>Nível</th>
            <th>Primeira revisão</th>
            <th>Segunda revisão</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Present Simple</td>
            <td>A1</td>
            <td>Mesmo dia</td>
            <td>1 semana depois</td>
            <td>Consigo usar em frases próprias.</td>
          </tr>

          <tr>
            <td>Past Simple</td>
            <td>A2</td>
            <td>3 dias depois</td>
            <td>1 mês depois</td>
            <td>Preciso revisar verbos irregulares.</td>
          </tr>

          <tr>
            <td>Present Perfect</td>
            <td>B1</td>
            <td>Mesmo dia</td>
            <td>1 semana depois</td>
            <td>Ainda confundo <em>for</em> e <em>since</em>.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="section paper">
  <div class="container">
    <div class="section-head">
      <h2>Físico ou digital?</h2>
      <p>
        Tanto faz, desde que você realmente use. A ferramenta perfeita não salva uma rotina inexistente, infelizmente para quem ama configurar aplicativos.
      </p>
    </div>

    <div class="cards two-col">
      <article class="card">
        <h3>Caderno físico</h3>
        <p>
          Bom para escrever à mão, desenhar esquemas, memorizar com mais presença e reduzir distrações.
        </p>
        <ul class="check-list">
          <li>Use divisórias por nível.</li>
          <li>Reserve páginas para error log.</li>
          <li>Marque revisões com data.</li>
          <li>Use cores com função, não como carnaval pedagógico.</li>
        </ul>
      </article>

      <article class="card">
        <h3>Caderno digital</h3>
        <p>
          Bom para reorganizar, buscar termos, inserir links, duplicar templates e estudar em diferentes dispositivos.
        </p>
        <ul class="check-list">
          <li>Use tags por nível.</li>
          <li>Crie templates reutilizáveis.</li>
          <li>Inclua links para páginas do Codex.</li>
          <li>Faça backup, porque tecnologia também gosta de tragédia.</li>
        </ul>
      </article>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="quote-card">
      <h2>Seu caderno deve mostrar pensamento, não só conteúdo.</h2>
      <p>
        Uma boa página de caderno mostra o que você entendeu, onde você errou, como corrigiu e quando vai revisar. O objetivo não é ter um material bonito para fotografar. É criar uma ferramenta que ajude você a voltar, lembrar, praticar e melhorar.
      </p>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/page-end.php'; ?>