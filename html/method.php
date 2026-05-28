<?php
require_once __DIR__ . '/config.php';

$pageTitle = 'Método de estudo · English Codex';
$pageDescription = 'Entenda o método do English Codex: aprendizagem ativa, revisão, input compreensível, produção real, caderno e prática por habilidades.';
$activePage = 'method';
$activeLevel = '';

require __DIR__ . '/partials/page-start.php';
?>

<main id="conteudo">

<section class="hero">
  <div class="container">
    <span class="eyebrow">Método</span>

    <h1>Aprender inglês não é consumir conteúdo</h1>

    <p class="lead">
      O método do English Codex combina explicação clara, comparação com o português, prática ativa, revisão espaçada, input compreensível, produção real e construção de caderno. A ideia é simples: entender, registrar, usar e revisar. Sim, estudar dá trabalho. Chocante, eu sei.
    </p>

    <div class="hero-actions">
      <a class="button primary" href="<?= url('notebook.php') ?>">Ver método do caderno</a>
      <a class="button secondary" href="<?= url('start.php') ?>">Voltar ao Comece aqui</a>
    </div>
  </div>
</section>

<section class="section soft">
  <div class="container">
    <div class="section-head">
      <h2>O método em uma frase</h2>
      <p>
        O English Codex transforma conteúdo em estudo ativo: você lê, entende, compara, anota, pratica, revisa e usa inglês em situações reais.
      </p>
    </div>

    <div class="quote-card">
      <h2>Menos acúmulo. Mais uso.</h2>
      <p>
        Estudar inglês não é colecionar PDF, abrir vinte abas, salvar vídeos para “ver depois” e chamar isso de progresso. O método aqui existe para transformar conteúdo em memória, prática e autonomia.
      </p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <h2>Os pilares do English Codex</h2>
      <p>
        Cada página do site foi pensada para trabalhar pelo menos um destes pilares. Eles são simples, mas funcionam melhor do que a tradicional estratégia humana de “vou estudar quando der”.
      </p>
    </div>

    <div class="cards three-col">
      <article class="card">
        <h3>1 · Clareza antes de regra</h3>
        <p>
          Primeiro você entende para que o assunto serve. Depois vem a estrutura. Regra sem função vira decoração gramatical.
        </p>
      </article>

      <article class="card">
        <h3>2 · Português como ponte</h3>
        <p>
          O português ajuda a perceber semelhanças, diferenças e armadilhas. A ponte é útil; morar nela é que vira problema.
        </p>
      </article>

      <article class="card">
        <h3>3 · Active recall</h3>
        <p>
          Depois de estudar, feche o material e tente lembrar: o que entendi? O que consigo explicar? Onde travei?
        </p>
      </article>

      <article class="card">
        <h3>4 · Revisão espaçada</h3>
        <p>
          O conteúdo precisa voltar em intervalos: no mesmo dia, depois de alguns dias, depois de semanas. Memória gosta de reencontro.
        </p>
      </article>

      <article class="card">
        <h3>5 · Input compreensível</h3>
        <p>
          Você precisa ler e ouvir inglês um pouco acima do seu nível, mas ainda compreensível. Se não entende nada, é tortura com legenda.
        </p>
      </article>

      <article class="card">
        <h3>6 · Output real</h3>
        <p>
          Falar e escrever fazem parte do estudo. Inglês parado na cabeça vira enfeite mental. Bonito, talvez. Útil, nem tanto.
        </p>
      </article>
    </div>
  </div>
</section>

<section class="section paper">
  <div class="container">
    <div class="section-head">
      <h2>Como estudar uma página do Codex</h2>
      <p>
        Cada página deve virar uma pequena sessão de estudo. Não é para ler correndo como quem aceita termos de uso.
      </p>
    </div>

    <div class="cards four-col">
      <article class="card">
        <h3>1 · Leia com objetivo</h3>
        <p>
          Antes de anotar, entenda o tema. Pergunte: “quando eu usaria isso numa conversa, texto, aula ou situação real?”
        </p>
      </article>

      <article class="card">
        <h3>2 · Marque o essencial</h3>
        <p>
          Separe a regra principal, dois ou três exemplos e uma armadilha comum. O resto pode esperar, sem drama teatral.
        </p>
      </article>

      <article class="card">
        <h3>3 · Crie exemplos próprios</h3>
        <p>
          Use sua rotina, trabalho, jogos, filmes, RPG, estudos e interesses. Exemplo pessoal fixa mais que frase genérica de apostila.
        </p>
      </article>

      <article class="card">
        <h3>4 · Revise depois</h3>
        <p>
          Volte ao assunto e tente explicar sem olhar. Se não consegue explicar, você reconheceu o texto, mas ainda não aprendeu.
        </p>
      </article>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <h2>As quatro habilidades</h2>
      <p>
        Inglês não é só gramática. O método trabalha listening, speaking, reading e writing. Sim, todas. Aparentemente uma língua precisa ser usada em mais de uma dimensão.
      </p>
    </div>

    <div class="cards four-col">
      <article class="card">
        <h3>Listening</h3>
        <p>
          Ouça por camadas: primeiro a ideia geral, depois detalhes, intenção, expressões, ritmo e pronúncia.
        </p>
        <ul class="check-list">
          <li>Ouça uma vez sem pausar.</li>
          <li>Ouça de novo procurando palavras-chave.</li>
          <li>Anote expressões úteis.</li>
          <li>Repita pequenos trechos em voz alta.</li>
        </ul>
      </article>

      <article class="card">
        <h3>Speaking</h3>
        <p>
          Fale antes de estar pronto. Esperar a fluência perfeita para começar a falar é o plano preferido de quem nunca fala.
        </p>
        <ul class="check-list">
          <li>Grave respostas curtas.</li>
          <li>Repita a mesma resposta melhorada.</li>
          <li>Use chunks e frases prontas úteis.</li>
          <li>Registre erros recorrentes.</li>
        </ul>
      </article>

      <article class="card">
        <h3>Reading</h3>
        <p>
          Leia procurando sentido, estrutura e pistas. Não traduza palavra por palavra como se estivesse desarmando uma bomba medieval.
        </p>
        <ul class="check-list">
          <li>Use skimming para ideia geral.</li>
          <li>Use scanning para informação específica.</li>
          <li>Marque conectores e palavras repetidas.</li>
          <li>Infira antes de correr para o dicionário.</li>
        </ul>
      </article>

      <article class="card">
        <h3>Writing</h3>
        <p>
          Escrever é processo: planejar, escrever, revisar, corrigir e reescrever. O primeiro rascunho raramente é bom. Que surpresa devastadora.
        </p>
        <ul class="check-list">
          <li>Planeje antes de escrever.</li>
          <li>Use frases claras.</li>
          <li>Revise conteúdo e organização.</li>
          <li>Depois revise gramática e vocabulário.</li>
        </ul>
      </article>
    </div>
  </div>
</section>

<section class="section soft">
  <div class="container">
    <div class="section-head">
      <h2>O papel do caderno</h2>
      <p>
        O caderno não é enfeite. Ele é onde o conteúdo vira memória organizada. Sem anotação ativa, o estudo vira aquela névoa bonita que desaparece na segunda-feira.
      </p>
    </div>

    <div class="notebook-page">
      <h3>Uma boa anotação precisa ter:</h3>

      <div class="notebook-lines">
        <p><strong>Objetivo:</strong> para que esse assunto serve?</p>
        <p><strong>Regra simples:</strong> como funciona, em poucas palavras?</p>
        <p><strong>Exemplos:</strong> três frases suas, não frases genéricas copiadas.</p>
        <p><strong>Comparação:</strong> o que muda entre português e inglês?</p>
        <p><strong>Erro comum:</strong> onde brasileiros costumam tropeçar?</p>
        <p><strong>Prática:</strong> uma pergunta, uma resposta, uma frase negativa e uma frase sobre você.</p>
        <p><strong>Revisão:</strong> quando você vai voltar nesse assunto?</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <h2>Como o método muda por nível</h2>
      <p>
        O jeito de estudar muda conforme o nível. Não faz sentido tratar A1 e C1 como se fossem o mesmo bicho usando chapéus diferentes.
      </p>
    </div>

    <div class="table-wrap">
      <table>
        <caption>Progressão de estudo por nível</caption>
        <thead>
          <tr>
            <th>Nível</th>
            <th>Prioridade</th>
            <th>Como estudar</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>A0</td>
            <td>Sons, alfabeto, primeiras frases e confiança.</td>
            <td>Repetição curta, leitura em voz alta, vocabulário essencial e exemplos simples.</td>
          </tr>
          <tr>
            <td>A1</td>
            <td>Rotina, identidade, perguntas básicas e presente.</td>
            <td>Frases pessoais, diálogos curtos, perguntas e respostas sobre vida cotidiana.</td>
          </tr>
          <tr>
            <td>A2</td>
            <td>Passado, futuro, descrições, comparações e situações reais.</td>
            <td>Pequenos textos, histórias simples, listening curto e revisão de estrutura.</td>
          </tr>
          <tr>
            <td>B1</td>
            <td>Experiências, opinião, storytelling e conectores.</td>
            <td>Resumos, gravações curtas, textos de opinião e prática de fluência.</td>
          </tr>
          <tr>
            <td>B2</td>
            <td>Argumentação, clareza, textos reais e precisão.</td>
            <td>Essays, debates, leitura autêntica, revisão de erros recorrentes e vocabulário por contexto.</td>
          </tr>
          <tr>
            <td>C1</td>
            <td>Nuance, registro, naturalidade e sofisticação.</td>
            <td>Textos longos, reescrita, análise de estilo, collocations e speaking mais elaborado.</td>
          </tr>
          <tr>
            <td>C2</td>
            <td>Controle fino de estilo, subtexto, retórica e flexibilidade.</td>
            <td>Leitura densa, escrita refinada, comparação de registros e produção avançada.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="section paper">
  <div class="container">
    <div class="section-head">
      <h2>Para alunos</h2>
      <p>
        Use o Codex como trilha de estudo. Você não precisa dominar tudo de uma vez. Precisa estudar, produzir, revisar e voltar aos pontos fracos sem fazer uma novela psicológica disso.
      </p>
    </div>

    <div class="cards three-col">
      <article class="card">
        <h3>Estude em blocos curtos</h3>
        <p>
          Sessões de 30 a 60 minutos funcionam bem. Mais importante que estudar muito em um dia é voltar com frequência.
        </p>
      </article>

      <article class="card">
        <h3>Use exemplos da sua vida</h3>
        <p>
          Escreva sobre trabalho, rotina, estudos, hobbies, jogos, séries, família, planos e opiniões reais.
        </p>
      </article>

      <article class="card">
        <h3>Registre seus erros</h3>
        <p>
          Erro recorrente é dado de estudo. Anote o padrão, corrija e revise depois. Fingir que não viu não torna a frase melhor.
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
        O English Codex também pode funcionar como apoio de aula, roteiro de reforço, material complementar ou base para tarefas de caderno.
      </p>
    </div>

    <div class="cards three-col">
      <article class="card">
        <h3>Antes da aula</h3>
        <p>
          Use a página do nível como leitura preparatória. Peça ao aluno para chegar com três exemplos e uma dúvida.
        </p>
      </article>

      <article class="card">
        <h3>Durante a aula</h3>
        <p>
          Trabalhe exemplos, erros comuns, produção oral, mini diálogos e comparação com português.
        </p>
      </article>

      <article class="card">
        <h3>Depois da aula</h3>
        <p>
          Peça uma página de caderno, uma gravação curta, um pequeno texto ou uma revisão dos erros corrigidos.
        </p>
      </article>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <h2>Erros de método que sabotam o estudo</h2>
      <p>
        Às vezes o problema não é falta de inteligência. É só um método ruim repetido com uma confiança comovente.
      </p>
    </div>

    <div class="cards three-col">
      <article class="card">
        <h3>Consumir sem produzir</h3>
        <p>
          Assistir aulas e vídeos ajuda, mas você precisa escrever, falar, responder, resumir e explicar.
        </p>
      </article>

      <article class="card">
        <h3>Copiar sem transformar</h3>
        <p>
          Caderno bom não é cópia bonita. É explicação reorganizada com exemplos próprios e revisão.
        </p>
      </article>

      <article class="card">
        <h3>Pular revisão</h3>
        <p>
          Estudar uma vez e nunca mais voltar é jogar informação no abismo e esperar que ela volte fluente.
        </p>
      </article>

      <article class="card">
        <h3>Traduzir tudo ao pé da letra</h3>
        <p>
          Comparar línguas ajuda. Traduzir cada frase como se inglês fosse português fantasiado atrapalha.
        </p>
      </article>

      <article class="card">
        <h3>Estudar só o que gosta</h3>
        <p>
          Cultura pop é ótima, mas você também precisa lidar com gramática, escrita, escuta e correção.
        </p>
      </article>

      <article class="card">
        <h3>Fingir que entendeu</h3>
        <p>
          Se você não consegue explicar com suas palavras, ainda não entendeu. Reconhecimento não é domínio.
        </p>
      </article>
    </div>
  </div>
</section>

<section class="section paper">
  <div class="container">
    <div class="quote-card">
      <h2>O método é simples: transformar contato em uso.</h2>
      <p>
        Leia e ouça inglês para alimentar repertório. Anote para organizar. Recupere da memória para fixar. Escreva e fale para usar. Revise para não perder. O resto é decoração motivacional com fonte bonita.
      </p>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/page-end.php'; ?>