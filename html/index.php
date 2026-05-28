<?php
require_once __DIR__ . '/config.php';

$pageTitle = 'Home · English Codex';
$pageDescription = 'Um guia de estudo para brasileiros aprenderem inglês do A0 ao C2 criando um caderno próprio, com método, prática, cultura pop e comparação com o português.';
$activePage = 'home';
$activeLevel = '';

require __DIR__ . '/partials/page-start.php';
?>

<main id="conteudo">

<section class="hero">
  <div class="container hero-grid">
    <div>
      <span class="eyebrow">Seu caderno perfeito de estudo</span>

      <h1>English Codex</h1>

      <p class="lead">
        Um guia para brasileiros aprenderem inglês do alfabeto ao C2 enquanto constroem um caderno próprio, organizado por níveis, prática real, comparação com o português e exemplos que fazem sentido.
      </p>

      <div class="hero-actions">
        <a class="button primary" href="<?= url('start.php') ?>">Começar pelo guia</a>
        <a class="button secondary" href="<?= url('notebook.php') ?>">Ver estrutura do caderno</a>
      </div>
    </div>

    <div class="hero-ornament" aria-hidden="true">
      <div class="page-stack">
        <strong>Aprender → Anotar → Praticar → Revisar</strong>
        <span>
          O aluno não baixa um monte de material para esquecer numa pasta. Ele usa o site como trilha e transforma cada assunto em anotação útil.
        </span>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <h2>O que é o English Codex?</h2>
      <p>
        O English Codex é um site para quem quer estudar inglês com método, mas sem depender de apostilas genéricas, listas soltas de regras ou explicações que parecem escritas por uma impressora triste.
      </p>
    </div>

    <div class="cards three-col">
      <article class="card">
        <h3>Um guia de estudo</h3>
        <p>
          Cada página funciona como uma rota: o que estudar, por que aquilo importa, como usar na prática e como transformar o conteúdo em anotação.
        </p>
      </article>

      <article class="card">
        <h3>Um caderno em construção</h3>
        <p>
          A proposta não é copiar tudo sem pensar. É construir um caderno vivo, com explicações, exemplos próprios, erros comuns e revisões.
        </p>
      </article>

      <article class="card">
        <h3>Um mapa do A0 ao C2</h3>
        <p>
          O conteúdo é organizado por progressão: fundamentos, comunicação cotidiana, independência, argumentação, nuance e domínio avançado.
        </p>
      </article>
    </div>
  </div>
</section>

<section class="section soft">
  <div class="container">
    <div class="section-head">
      <h2>Uma jornada do A0 ao C2</h2>
      <p>
        Cada nível reúne gramática, vocabulário, pronúncia, listening, speaking, reading, writing, cultura pop, português vs inglês e prática de caderno.
      </p>
    </div>

    <div class="cards three-col">
      <article class="card">
        <h3>A0-A2 · Fundação</h3>
        <p>
          Aqui entram o alfabeto, sons, frases básicas, rotina, perguntas simples, passado, futuro, descrições e situações do dia a dia.
        </p>
        <p>
          O objetivo é parar de depender de tradução palavra por palavra e começar a montar frases com segurança.
        </p>
      </article>

      <article class="card">
        <h3>B1-B2 · Independência</h3>
        <p>
          Nessa fase, o estudante aprende a explicar ideias, contar histórias, defender opiniões, entender textos reais e escrever com mais estrutura.
        </p>
        <p>
          É onde o inglês deixa de ser só sobrevivência e começa a virar comunicação de verdade.
        </p>
      </article>

      <article class="card">
        <h3>C1-C2 · Domínio</h3>
        <p>
          Aqui entram nuance, precisão, estilo, leitura complexa, escrita sofisticada, fala mais natural e controle de registro.
        </p>
        <p>
          O foco passa a ser escolher melhor as palavras, entender subtexto e soar menos como uma tradução ambulante.
        </p>
      </article>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <h2>Como usar este site</h2>
      <p>
        O English Codex funciona melhor quando você estuda com papel, caneta, revisão e um mínimo de paciência humana, esse recurso escasso da espécie.
      </p>
    </div>

    <div class="cards four-col">
      <article class="card">
        <h3>1. Leia</h3>
        <p>
          Comece pela explicação principal. Entenda a ideia antes de sair decorando regra como se estivesse coletando figurinha gramatical.
        </p>
      </article>

      <article class="card">
        <h3>2. Anote</h3>
        <p>
          Transforme a explicação em uma página do seu caderno: regra simples, exemplos, observações e erros comuns.
        </p>
      </article>

      <article class="card">
        <h3>3. Pratique</h3>
        <p>
          Use frases suas. Fale sobre sua rotina, seus gostos, seus jogos, seus filmes, seu trabalho e sua vida real.
        </p>
      </article>

      <article class="card">
        <h3>4. Revise</h3>
        <p>
          Volte ao conteúdo depois. Inglês não entra na cabeça por osmose, infelizmente. Revisão é parte do processo.
        </p>
      </article>
    </div>
  </div>
</section>

<section class="section paper">
  <div class="container">
    <div class="section-head">
      <h2>Por que um site para brasileiros?</h2>
      <p>
        Porque brasileiros não erram inglês do mesmo jeito que falantes de espanhol, francês, japonês ou alemão. Cada língua cria seus próprios vícios, atalhos e armadilhas.
      </p>
    </div>

    <div class="cards three-col">
      <article class="card">
        <h3>Português vs inglês</h3>
        <p>
          O site compara estruturas importantes, como tempos verbais, ordem das palavras, preposições, falsos cognatos e frases que não devem ser traduzidas ao pé da letra.
        </p>
      </article>

      <article class="card">
        <h3>Erros comuns</h3>
        <p>
          Cada assunto destaca armadilhas típicas: usar “have” como “tem”, exagerar no “the”, traduzir “make/do” de qualquer jeito e outras pequenas tragédias linguísticas.
        </p>
      </article>

      <article class="card">
        <h3>Exemplos próximos</h3>
        <p>
          Os exemplos usam situações reais, cultura pop, estudo, trabalho, tecnologia, RPG, filmes, séries e temas que ajudam a criar memória.
        </p>
      </article>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <h2>Escolha por onde começar</h2>
      <p>
        Você pode seguir a trilha completa, ir direto para um nível ou começar montando o seu caderno. O importante é estudar com intenção, não só clicar em páginas como quem passeia no mercado sem lista.
      </p>
    </div>

    <div class="cards three-col">
      <article class="card">
        <h3>Sou iniciante</h3>
        <p>
          Comece pelo guia inicial e pelos níveis A0 e A1. Foque em sons, frases básicas, rotina, perguntas e vocabulário essencial.
        </p>
        <a class="button" href="<?= url('start.php') ?>">Começar pelo guia</a>
      </article>

      <article class="card">
        <h3>Já estudo inglês</h3>
        <p>
          Vá para B1 ou B2 e revise estrutura, fluência, leitura, escrita, argumentação e erros que continuam aparecendo mesmo depois de anos.
        </p>
        <a class="button" href="<?= url('levels/b1.php') ?>">Abrir B1</a>
      </article>

      <article class="card">
        <h3>Quero nível avançado</h3>
        <p>
          Explore C1 e C2 para trabalhar nuance, registro, vocabulário sofisticado, escrita mais natural e comunicação profissional ou acadêmica.
        </p>
        <a class="button" href="<?= url('levels/c1.php') ?>">Abrir C1</a>
      </article>
    </div>
  </div>
</section>

<section class="section paper">
  <div class="container">
    <div class="quote-card">
      <h2>Base séria, explicação humana.</h2>
      <p>
        O English Codex organiza o estudo com progressão, prática ativa e revisão. A ideia é simples: entender melhor, anotar melhor, praticar melhor e parar de tratar inglês como uma coleção de regras soltas.
      </p>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/page-end.php'; ?>