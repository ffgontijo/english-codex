<?php
require_once __DIR__ . '/config.php';

$pageTitle = 'Comece aqui · English Codex';
$pageDescription = 'Guia prático para começar a usar o English Codex, escolher seu nível, montar seu caderno e criar uma rotina de estudo.';
$activePage = 'start';
$activeLevel = '';

require __DIR__ . '/partials/page-start.php';
?>

<main id="conteudo">

<section class="hero">
  <div class="container">
    <span class="eyebrow">Comece aqui</span>

    <h1>Seu ponto de partida</h1>

    <p class="lead">
      Esta página é o manual rápido do English Codex. Em vez de sair clicando em tudo como um goblin perdido numa biblioteca, siga a ordem abaixo: escolha seu nível, prepare seu caderno, faça a primeira sessão e mantenha uma rotina simples.
    </p>

    <div class="hero-actions">
      <a class="button primary" href="#diagnostico">Descobrir meu ponto de partida</a>
      <a class="button secondary" href="#primeira-sessao">Fazer primeira sessão</a>
    </div>
  </div>
</section>

<section class="section soft" id="diagnostico">
  <div class="container">
    <div class="section-head">
      <h2>1 · Descubra por onde começar</h2>
      <p>
        Antes de escolher uma página, seja minimamente honesto com seu nível. Não adianta entrar no C1 se o passado simples ainda parece uma entidade hostil.
      </p>
    </div>

    <div class="table-wrap">
      <table>
        <caption>Escolha inicial recomendada</caption>
        <thead>
          <tr>
            <th>Se você...</th>
            <th>Comece</th>
            <th>Seu foco agora</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Não sabe formar frases básicas ou ainda trava no alfabeto e sons.</td>
            <td><strong>A0</strong></td>
            <td>Alfabeto, pronúncia inicial, frases essenciais e confiança básica.</td>
          </tr>
          <tr>
            <td>Consegue se apresentar, mas depende muito de frases decoradas.</td>
            <td><strong>A1</strong></td>
            <td>Rotina, perguntas simples, presente, vocabulário básico e respostas curtas.</td>
          </tr>
          <tr>
            <td>Entende coisas simples, mas se enrola com passado, futuro e descrições.</td>
            <td><strong>A2</strong></td>
            <td>Passado, planos, comparações, situações do dia a dia e pequenas conversas.</td>
          </tr>
          <tr>
            <td>Consegue conversar, mas falta estrutura para explicar ideias e contar histórias.</td>
            <td><strong>B1</strong></td>
            <td>Storytelling, opinião, conectores, experiências e independência.</td>
          </tr>
          <tr>
            <td>Já entende bastante, mas quer escrever, argumentar e falar com mais clareza.</td>
            <td><strong>B2</strong></td>
            <td>Argumentação, textos reais, listening natural, essays e precisão gramatical.</td>
          </tr>
          <tr>
            <td>Quer soar mais natural, sofisticado e preciso em contextos complexos.</td>
            <td><strong>C1/C2</strong></td>
            <td>Nuance, registro, estilo, subtexto, leitura densa e comunicação avançada.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <h2>2 · Prepare seu caderno</h2>
      <p>
        O Codex foi feito para virar anotação. Não precisa transformar isso num grimório medieval com couro de dragão. Um caderno simples, bem organizado, já resolve.
      </p>
    </div>

    <div class="cards three-col">
      <article class="card">
        <h3>Divida por nível</h3>
        <p>
          Separe o caderno em A0, A1, A2, B1, B2, C1 e C2. Mesmo que você ainda esteja no começo, essa divisão cria visão de progresso.
        </p>
      </article>

      <article class="card">
        <h3>Use páginas curtas</h3>
        <p>
          Cada assunto deve caber em uma página ou duas. Se virou tratado filosófico, você provavelmente está copiando demais e entendendo de menos.
        </p>
      </article>

      <article class="card">
        <h3>Escreva com suas palavras</h3>
        <p>
          Copiar o texto inteiro do site pode até deixar bonito, mas aprendizado não é caligrafia ritualística. Resuma, reorganize e crie seus próprios exemplos.
        </p>
      </article>
    </div>
  </div>
</section>

<section class="section paper">
  <div class="container">
    <div class="section-head">
      <h2>3 · Modelo de página do caderno</h2>
      <p>
        Sempre que estudar um assunto, transforme ele neste formato. Simples, repetível e funcional. Quase ofensivo de tão sensato.
      </p>
    </div>

    <div class="notebook-page">
      <h3>Template de anotação</h3>

      <div class="notebook-lines">
        <p><strong>Assunto:</strong> nome do tema estudado.</p>
        <p><strong>Para que serve:</strong> explique em uma frase o uso real desse assunto.</p>
        <p><strong>Regra simples:</strong> escreva a estrutura com suas palavras.</p>
        <p><strong>Exemplos:</strong> crie pelo menos três frases suas.</p>
        <p><strong>Português vs inglês:</strong> anote uma diferença importante entre as duas línguas.</p>
        <p><strong>Erro comum:</strong> registre uma armadilha típica de brasileiro.</p>
        <p><strong>Mini prática:</strong> escreva uma pergunta, uma resposta e uma frase negativa.</p>
        <p><strong>Revisão:</strong> marque quando revisar: amanhã, em uma semana e em um mês.</p>
      </div>
    </div>
  </div>
</section>

<section class="section soft" id="primeira-sessao">
  <div class="container">
    <div class="section-head">
      <h2>4 · Faça sua primeira sessão</h2>
      <p>
        Comece pequeno. Uma boa primeira sessão não precisa durar três horas e terminar com você encarando a parede como um personagem derrotado de RPG.
      </p>
    </div>

    <div class="cards four-col">
      <article class="card">
        <h3>10 min · Escolha</h3>
        <p>
          Escolha seu nível inicial usando a tabela acima. Não pule etapas por vaidade acadêmica.
        </p>
      </article>

      <article class="card">
        <h3>15 min · Leia</h3>
        <p>
          Abra a primeira página do nível escolhido e leia a explicação principal sem tentar decorar tudo.
        </p>
      </article>

      <article class="card">
        <h3>20 min · Anote</h3>
        <p>
          Monte uma página no seu caderno usando o template. Escreva exemplos próprios.
        </p>
      </article>

      <article class="card">
        <h3>10 min · Pratique</h3>
        <p>
          Leia seus exemplos em voz alta, crie variações e marque o que ficou confuso.
        </p>
      </article>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <h2>5 · Escolha sua rota</h2>
      <p>
        O Codex pode ser usado de formas diferentes. Escolha uma rota principal e pare de tentar estudar tudo ao mesmo tempo como se fosse desbloquear uma conquista secreta.
      </p>
    </div>

    <div class="cards two-col">
      <article class="card">
        <h3>Rota do iniciante</h3>
        <p>
          Para quem está começando ou sente que a base está fraca.
        </p>
        <ul class="check-list">
          <li>Comece no A0.</li>
          <li>Faça A1 e A2 sem pressa.</li>
          <li>Monte páginas curtas no caderno.</li>
          <li>Revise toda semana.</li>
        </ul>
        <a class="button" href="<?= url('levels/a0.php') ?>">Ir para A0</a>
      </article>

      <article class="card">
        <h3>Rota do intermediário travado</h3>
        <p>
          Para quem entende inglês, mas sente que não consegue falar ou escrever bem.
        </p>
        <ul class="check-list">
          <li>Revise A2 rapidamente.</li>
          <li>Estude B1 com calma.</li>
          <li>Use B2 para argumentação e escrita.</li>
          <li>Grave áudios curtos para treinar speaking.</li>
        </ul>
        <a class="button" href="<?= url('levels/b1.php') ?>">Ir para B1</a>
      </article>

      <article class="card">
        <h3>Rota Cambridge</h3>
        <p>
          Para quem quer estudar pensando em provas, critérios e evolução mensurável.
        </p>
        <ul class="check-list">
          <li>Use os níveis como trilha CEFR.</li>
          <li>Leia a página Cambridge.</li>
          <li>Treine reading, writing, listening e speaking.</li>
          <li>Compare sua produção com critérios claros.</li>
        </ul>
        <a class="button" href="<?= url('cambridge.php') ?>">Ver Cambridge</a>
      </article>

      <article class="card">
        <h3>Rota professor</h3>
        <p>
          Para usar o Codex como apoio em aula, reforço ou organização de conteúdo.
        </p>
        <ul class="check-list">
          <li>Use cada nível como unidade didática.</li>
          <li>Transforme cards em atividades.</li>
          <li>Peça páginas de caderno como entrega.</li>
          <li>Use erros de brasileiros como revisão.</li>
        </ul>
        <a class="button" href="<?= url('teachers.php') ?>">Ver professores</a>
      </article>
    </div>
  </div>
</section>

<section class="section paper">
  <div class="container">
    <div class="section-head">
      <h2>6 · Rotina semanal simples</h2>
      <p>
        O segredo não é uma rotina perfeita. É uma rotina que você realmente faz. Revolucionário, eu sei.
      </p>
    </div>

    <div class="table-wrap">
      <table>
        <caption>Sugestão de rotina de estudo</caption>
        <thead>
          <tr>
            <th>Dia</th>
            <th>Atividade</th>
            <th>Objetivo</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Dia 1</td>
            <td>Estudar uma explicação nova e montar uma página no caderno.</td>
            <td>Entender e registrar.</td>
          </tr>
          <tr>
            <td>Dia 2</td>
            <td>Criar frases próprias e ler em voz alta.</td>
            <td>Transformar conteúdo em uso.</td>
          </tr>
          <tr>
            <td>Dia 3</td>
            <td>Ouvir algo curto relacionado ao nível.</td>
            <td>Treinar escuta sem depender só de legenda.</td>
          </tr>
          <tr>
            <td>Dia 4</td>
            <td>Escrever um pequeno texto usando o tema estudado.</td>
            <td>Praticar writing com intenção.</td>
          </tr>
          <tr>
            <td>Dia 5</td>
            <td>Revisar erros, refazer exemplos e ajustar o caderno.</td>
            <td>Corrigir falhas antes que virem tradição familiar.</td>
          </tr>
          <tr>
            <td>Fim de semana</td>
            <td>Revisão leve, cultura pop, leitura ou vídeo em inglês.</td>
            <td>Manter contato real com a língua.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="section soft">
  <div class="container">
    <div class="section-head">
      <h2>7 · Regras de sobrevivência</h2>
      <p>
        Estas regras evitam que seu estudo vire aquele projeto bonito que dura quatro dias e depois desaparece junto com a motivação.
      </p>
    </div>

    <div class="cards three-col">
      <article class="card">
        <h3>Estude pouco, mas volte</h3>
        <p>
          Trinta minutos consistentes vencem três horas heroicas uma vez por mês. Disciplina chata ganha de empolgação teatral.
        </p>
      </article>

      <article class="card">
        <h3>Produza desde cedo</h3>
        <p>
          Escreva e fale mesmo errando. Esperar ficar pronto para usar inglês é como esperar ficar forte antes de começar academia.
        </p>
      </article>

      <article class="card">
        <h3>Revise sem drama</h3>
        <p>
          Esquecer faz parte. Revisar não é fracasso; é manutenção. O cérebro, infelizmente, não vem com sincronização automática.
        </p>
      </article>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="quote-card">
      <h2>Comece pequeno, mas comece direito.</h2>
      <p>
        Escolha seu nível, abra a primeira página, monte uma anotação curta, crie exemplos próprios e revise depois. O English Codex serve como trilha; o caderno transforma a trilha em aprendizado.
      </p>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/page-end.php'; ?>