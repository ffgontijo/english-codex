<?php
require_once __DIR__ . '/config.php';

$pageTitle = 'Recursos · English Codex';
$pageDescription = 'Referências, fontes oficiais, estudos científicos, metodologias e materiais recomendados para estudar inglês com qualidade.';
$activePage = 'resources';
$activeLevel = '';

require __DIR__ . '/partials/page-start.php';
?>

<main id="conteudo">

<section class="hero">
  <div class="container">
    <span class="eyebrow">Referências e recursos</span>

    <h1>Fontes para sustentar o English Codex</h1>

    <p class="lead">
      O English Codex é um projeto original, mas não é um projeto solto no vazio. Ele se apoia em referências oficiais, descritores de nível, exames reconhecidos, materiais de ensino confiáveis, ciência da aprendizagem e boas práticas de estudo. Porque “eu acho que funciona” não é metodologia; é superstição com layout.
    </p>

    <div class="hero-actions">
      <a class="button primary" href="#referencias-centrais">Ver referências centrais</a>
      <a class="button secondary" href="#metodologia">Ver base metodológica</a>
    </div>
  </div>
</section>

<section class="section soft">
  <div class="container">
    <div class="section-head">
      <h2>Como ler esta página</h2>
      <p>
        Esta página mostra de onde vêm as principais ideias do projeto. Ela não é uma lista jogada para parecer acadêmica. Cada fonte tem uma função: organizar níveis, orientar ensino, apoiar preparação, melhorar prática ou justificar decisões pedagógicas.
      </p>
    </div>

    <div class="cards three-col">
      <article class="card">
        <h3>Fontes oficiais</h3>
        <p>
          Usadas para orientar níveis, exames, descritores de competência, atividades e vocabulário por estágio de aprendizagem.
        </p>
      </article>

      <article class="card">
        <h3>Estudos e metodologia</h3>
        <p>
          Usados para apoiar decisões sobre revisão, recuperação ativa da memória, prática distribuída, leitura extensiva e aprendizagem ativa.
        </p>
      </article>

      <article class="card">
        <h3>Recursos práticos</h3>
        <p>
          Usados por alunos e professores para estudar grammar, vocabulary, listening, reading, writing, pronunciation e exam preparation.
        </p>
      </article>
    </div>
  </div>
</section>

<section class="section" id="referencias-centrais">
  <div class="container">
    <div class="section-head">
      <h2>Núcleo de referências oficiais</h2>
      <p>
        Estas são as fontes principais para estruturar níveis, competências, exames e progressão. Em outras palavras: a espinha dorsal, não o glitter acadêmico.
      </p>
    </div>

    <div class="cards two-col source-list">
      <article class="card">
        <h3>CEFR · Council of Europe</h3>
        <p>
          Referência internacional para descrever proficiência linguística em níveis como A1, A2, B1, B2, C1 e C2. Ajuda a organizar o que o aluno consegue fazer em cada etapa.
        </p>
        <a href="https://www.coe.int/en/web/common-european-framework-reference-languages/level-descriptions" target="_blank" rel="noopener">Abrir referência</a>
      </article>

      <article class="card">
        <h3>CEFR Companion Volume</h3>
        <p>
          Complementa o CEFR com descritores atualizados e ampliados, incluindo novas formas de pensar mediação, interação e competência comunicativa.
        </p>
        <a href="https://www.coe.int/en/web/common-european-framework-reference-languages/cefr-descriptors" target="_blank" rel="noopener">Abrir referência</a>
      </article>

      <article class="card">
        <h3>Cambridge English Qualifications</h3>
        <p>
          Referência para exames como A2 Key, B1 Preliminary, B2 First, C1 Advanced e C2 Proficiency, com foco em habilidades reais.
        </p>
        <a href="https://www.cambridgeenglish.org/exams-and-tests/qualifications/" target="_blank" rel="noopener">Abrir referência</a>
      </article>

      <article class="card">
        <h3>Cambridge English Preparation</h3>
        <p>
          Materiais oficiais de preparação, incluindo practice tests, exam guides e recursos por exame.
        </p>
        <a href="https://www.cambridgeenglish.org/exams-and-tests/qualifications/preparation/" target="_blank" rel="noopener">Abrir referência</a>
      </article>

      <article class="card">
        <h3>British Council LearnEnglish</h3>
        <p>
          Recurso confiável para grammar, vocabulary, listening, reading, writing, speaking e atividades organizadas por nível e habilidade.
        </p>
        <a href="https://learnenglish.britishcouncil.org/" target="_blank" rel="noopener">Abrir referência</a>
      </article>

      <article class="card">
        <h3>English Profile</h3>
        <p>
          Ajuda professores e estudantes a entender como vocabulário e gramática se relacionam aos níveis CEFR no inglês.
        </p>
        <a href="https://englishprofile.org/" target="_blank" rel="noopener">Abrir referência</a>
      </article>
    </div>
  </div>
</section>

<section class="section paper" id="metodologia">
  <div class="container">
    <div class="section-head">
      <h2>Base metodológica</h2>
      <p>
        O método do Codex não depende de “motivação” como combustível principal. Felizmente. Ele usa estratégias que ajudam memória, prática e autonomia.
      </p>
    </div>

    <div class="cards three-col source-list">
      <article class="card">
        <h3>Retrieval practice</h3>
        <p>
          A prática de recuperar informação da memória fortalece o aprendizado. No Codex, isso aparece quando o aluno fecha a explicação e tenta responder, explicar ou produzir sem olhar.
        </p>
        <a href="https://www.science.org/doi/10.1126/science.1152408" target="_blank" rel="noopener">Karpicke & Roediger</a>
      </article>

      <article class="card">
        <h3>Distributed practice</h3>
        <p>
          Revisar em intervalos tende a funcionar melhor do que concentrar tudo em uma única sessão. No Codex, isso aparece nas revisões de 1, 3, 7, 15 e 30 dias.
        </p>
        <a href="https://pubmed.ncbi.nlm.nih.gov/16719566/" target="_blank" rel="noopener">Cepeda et al.</a>
      </article>

      <article class="card">
        <h3>Effective learning techniques</h3>
        <p>
          Estudos de psicologia educacional apontam técnicas como practice testing e distributed practice como estratégias de alta utilidade.
        </p>
        <a href="https://journals.sagepub.com/doi/abs/10.1177/1529100612453266" target="_blank" rel="noopener">Dunlosky et al.</a>
      </article>

      <article class="card">
        <h3>Extensive reading</h3>
        <p>
          Leitura extensiva e graded readers ajudam estudantes a desenvolver fluência, vocabulário e contato repetido com estruturas em contexto.
        </p>
        <a href="https://www.wgtn.ac.nz/lals/resources/paul-nations-resources/paul-nations-publications/publications/documents/2005-Extensive-reading-RELC.pdf" target="_blank" rel="noopener">Nation</a>
      </article>

      <article class="card">
        <h3>Active learning</h3>
        <p>
          O aluno precisa fazer algo com o conteúdo: explicar, comparar, produzir, revisar, corrigir e aplicar. Só consumir conteúdo cria conforto, não domínio.
        </p>
        <a href="https://www.psychologicalscience.org/publications/journals/pspi/learning-techniques.html" target="_blank" rel="noopener">Ver visão geral</a>
      </article>

      <article class="card">
        <h3>Error log</h3>
        <p>
          Registrar erros recorrentes transforma falhas em diagnóstico. No Codex, o erro não é vergonha; é dado. Que conceito perigoso: aprender com evidência.
        </p>
        <a href="<?= url('brasileiros.php') ?>">Ver página Brasileiros</a>
      </article>
    </div>
  </div>
</section>

<section class="section soft">
  <div class="container">
    <div class="section-head">
      <h2>Recursos por habilidade</h2>
      <p>
        Inglês não é uma habilidade única. Cada recurso abaixo serve para um tipo de prática. Abrir todos ao mesmo tempo e chamar isso de plano é só colecionismo digital.
      </p>
    </div>

    <div class="table-wrap">
      <table>
        <caption>Recursos recomendados por habilidade</caption>
        <thead>
          <tr>
            <th>Habilidade</th>
            <th>Fontes úteis</th>
            <th>Como usar no Codex</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Grammar</td>
            <td>British Council LearnEnglish, Cambridge Dictionary Grammar, Oxford Learner's Dictionaries.</td>
            <td>Consultar explicações, comparar exemplos e transformar regras em páginas curtas no caderno.</td>
          </tr>

          <tr>
            <td>Vocabulary</td>
            <td>English Profile, Cambridge Dictionary, Oxford Learner's Dictionaries, vocabulary lists Cambridge.</td>
            <td>Registrar palavras por contexto, collocations, exemplos próprios e nível aproximado.</td>
          </tr>

          <tr>
            <td>Listening</td>
            <td>British Council, VOA Learning English, BBC Learning English, podcasts para learners.</td>
            <td>Ouvir por camadas: ideia geral, detalhes, expressões, pronúncia e resumo oral.</td>
          </tr>

          <tr>
            <td>Reading</td>
            <td>Graded readers, British Council, VOA Learning English, textos curtos por nível.</td>
            <td>Ler sem traduzir tudo, anotar vocabulário recorrente e resumir o texto em inglês.</td>
          </tr>

          <tr>
            <td>Writing</td>
            <td>Purdue OWL, Cambridge exam guides, modelos de essay, article, review e report.</td>
            <td>Planejar, escrever, revisar, corrigir e reescrever com foco em clareza e estrutura.</td>
          </tr>

          <tr>
            <td>Speaking</td>
            <td>Cambridge speaking samples, prompts de conversa, gravações próprias e atividades guiadas.</td>
            <td>Gravar respostas curtas, repetir melhorando e registrar erros recorrentes.</td>
          </tr>

          <tr>
            <td>Pronunciation</td>
            <td>Cambridge Dictionary, Oxford Learner's Dictionaries, YouGlish e guias de IPA.</td>
            <td>Comparar pronúncia UK/US, repetir palavras, marcar stress e treinar sons difíceis.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <h2>Dicionários e ferramentas linguísticas</h2>
      <p>
        Dicionário bom não serve só para “traduzir palavra”. Serve para ver pronúncia, exemplos, gramática, collocations, registro e uso real. Sim, dá mais trabalho que jogar no tradutor. Bem-vindo ao aprendizado.
      </p>
    </div>

    <div class="cards three-col source-list">
      <article class="card">
        <h3>Cambridge Dictionary</h3>
        <p>
          Definições para learners, exemplos, pronúncia UK/US, gramática e traduções úteis.
        </p>
        <a href="https://dictionary.cambridge.org/" target="_blank" rel="noopener">Abrir referência</a>
      </article>

      <article class="card">
        <h3>Oxford Learner's Dictionaries</h3>
        <p>
          Dicionário criado para estudantes de inglês, com definições claras, exemplos, pronúncia e recursos de vocabulário.
        </p>
        <a href="https://www.oxfordlearnersdictionaries.com/" target="_blank" rel="noopener">Abrir referência</a>
      </article>

      <article class="card">
        <h3>Longman Dictionary of Contemporary English</h3>
        <p>
          Útil para exemplos simples, definições claras e uso frequente de palavras.
        </p>
        <a href="https://www.ldoceonline.com/" target="_blank" rel="noopener">Abrir referência</a>
      </article>

      <article class="card">
        <h3>YouGlish</h3>
        <p>
          Ajuda a ouvir palavras e expressões em vídeos reais, com diferentes sotaques e contextos.
        </p>
        <a href="https://youglish.com/" target="_blank" rel="noopener">Abrir ferramenta</a>
      </article>

      <article class="card">
        <h3>Google Ngram Viewer</h3>
        <p>
          Ferramenta útil para observar frequência histórica de palavras e expressões em livros digitalizados.
        </p>
        <a href="https://books.google.com/ngrams/" target="_blank" rel="noopener">Abrir ferramenta</a>
      </article>

      <article class="card">
        <h3>Skell</h3>
        <p>
          Mostra exemplos de palavras em contexto e pode ajudar a observar padrões de uso.
        </p>
        <a href="https://skell.sketchengine.eu/" target="_blank" rel="noopener">Abrir ferramenta</a>
      </article>
    </div>
  </div>
</section>

<section class="section paper">
  <div class="container">
    <div class="section-head">
      <h2>Recursos para listening e input compreensível</h2>
      <p>
        Input bom precisa estar no ponto certo: fácil o suficiente para entender, difícil o suficiente para ensinar. Se você entende 2%, não é imersão; é afogamento com legenda.
      </p>
    </div>

    <div class="cards two-col source-list">
      <article class="card">
        <h3>VOA Learning English</h3>
        <p>
          Conteúdos com vocabulário, listening, notícias, vídeos e materiais voltados a estudantes de inglês, com opções para níveis iniciais e intermediários.
        </p>
        <a href="https://learningenglish.voanews.com/" target="_blank" rel="noopener">Abrir referência</a>
      </article>

      <article class="card">
        <h3>BBC Learning English</h3>
        <p>
          Aulas, vídeos, podcasts, explicações e séries de aprendizagem para diferentes objetivos.
        </p>
        <a href="https://www.bbc.co.uk/learningenglish" target="_blank" rel="noopener">Abrir referência</a>
      </article>

      <article class="card">
        <h3>British Council Skills</h3>
        <p>
          Atividades para speaking, listening, reading e writing, com prática guiada.
        </p>
        <a href="https://learnenglish.britishcouncil.org/skills" target="_blank" rel="noopener">Abrir referência</a>
      </article>

      <article class="card">
        <h3>Graded Readers</h3>
        <p>
          Livros adaptados por nível. Ótimos para leitura extensiva, vocabulário recorrente e confiança de leitura.
        </p>
        <a href="https://www.cambridge.org/br/cambridgeenglish/catalog/readers" target="_blank" rel="noopener">Ver exemplo de catálogo</a>
      </article>
    </div>
  </div>
</section>

<section class="section soft">
  <div class="container">
    <div class="section-head">
      <h2>Recursos para escrita e produção acadêmica</h2>
      <p>
        Writing não melhora só olhando modelo bonito. É preciso planejar, escrever, revisar e reescrever. Um absurdo, eu sei: escrever exige escrever.
      </p>
    </div>

    <div class="cards three-col source-list">
      <article class="card">
        <h3>Purdue OWL</h3>
        <p>
          Recurso clássico para escrita, pesquisa, citações, gramática, estilo e materiais de apoio para estudantes e professores.
        </p>
        <a href="https://owl.purdue.edu/owl/index.html" target="_blank" rel="noopener">Abrir referência</a>
      </article>

      <article class="card">
        <h3>Cambridge Exam Guides</h3>
        <p>
          Úteis para entender tarefas de writing em exames como B2 First, C1 Advanced e C2 Proficiency.
        </p>
        <a href="https://www.cambridgeenglish.org/exams-and-tests/qualifications/preparation/" target="_blank" rel="noopener">Abrir referência</a>
      </article>

      <article class="card">
        <h3>British Council Writing</h3>
        <p>
          Atividades de escrita por nível para praticar organização, clareza e tipos de texto.
        </p>
        <a href="https://learnenglish.britishcouncil.org/skills/writing" target="_blank" rel="noopener">Abrir referência</a>
      </article>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <h2>Para professores e pesquisadores</h2>
      <p>
        Esta seção reúne fontes úteis para justificar decisões didáticas, planejar aulas, organizar trilhas e adaptar o Codex para contextos educacionais.
      </p>
    </div>

    <div class="cards two-col source-list">
      <article class="card">
        <h3>CEFR para planejamento</h3>
        <p>
          Use descritores CEFR para transformar conteúdo em objetivos observáveis: o que o aluno consegue compreender, produzir, interagir ou mediar.
        </p>
        <a href="https://www.coe.int/en/web/common-european-framework-reference-languages/cefr-descriptors" target="_blank" rel="noopener">Abrir referência</a>
      </article>

      <article class="card">
        <h3>Cambridge para avaliação</h3>
        <p>
          Use os exames Cambridge como referência de tarefas, critérios, formatos e progressão por habilidade.
        </p>
        <a href="https://www.cambridgeenglish.org/exams-and-tests/qualifications/" target="_blank" rel="noopener">Abrir referência</a>
      </article>

      <article class="card">
        <h3>English Profile para progressão</h3>
        <p>
          Use English Profile para orientar quais palavras, sentidos e estruturas são mais compatíveis com cada nível.
        </p>
        <a href="https://englishprofile.org/" target="_blank" rel="noopener">Abrir referência</a>
      </article>

      <article class="card">
        <h3>Learning techniques para método</h3>
        <p>
          Use estudos sobre retrieval practice, distributed practice e aprendizagem ativa para justificar revisão, autoavaliação e produção.
        </p>
        <a href="https://journals.sagepub.com/doi/abs/10.1177/1529100612453266" target="_blank" rel="noopener">Abrir estudo</a>
      </article>
    </div>
  </div>
</section>

<section class="section paper">
  <div class="container">
    <div class="section-head">
      <h2>Referências para o próprio site</h2>
      <p>
        O English Codex também precisa ser um site legível, acessível e bem estruturado. Conteúdo bom em página ruim é uma tragédia com CSS.
      </p>
    </div>

    <div class="cards three-col source-list">
      <article class="card">
        <h3>MDN Web Docs</h3>
        <p>
          Referência principal para HTML, CSS, JavaScript e tecnologias abertas da web.
        </p>
        <a href="https://developer.mozilla.org/" target="_blank" rel="noopener">Abrir referência</a>
      </article>

      <article class="card">
        <h3>WCAG 2.2 · W3C</h3>
        <p>
          Diretrizes de acessibilidade para tornar conteúdo web mais perceptível, operável, compreensível e robusto.
        </p>
        <a href="https://www.w3.org/TR/WCAG22/" target="_blank" rel="noopener">Abrir referência</a>
      </article>

      <article class="card">
        <h3>WAI · W3C Accessibility</h3>
        <p>
          Explicações e orientações sobre acessibilidade, critérios de sucesso e boas práticas para web.
        </p>
        <a href="https://www.w3.org/WAI/standards-guidelines/wcag/" target="_blank" rel="noopener">Abrir referência</a>
      </article>
    </div>
  </div>
</section>

<section class="section soft">
  <div class="container">
    <div class="section-head">
      <h2>Como avaliar uma fonte</h2>
      <p>
        Nem toda página bonitinha é confiável. A internet é uma floresta de PDFs órfãos, blogs ressuscitados e opinião fantasiada de ciência.
      </p>
    </div>

    <div class="cards three-col">
      <article class="card">
        <h3>Autoridade</h3>
        <p>
          Prefira instituições reconhecidas, universidades, órgãos oficiais, editoras educacionais, pesquisadores e organizações com histórico na área.
        </p>
      </article>

      <article class="card">
        <h3>Finalidade</h3>
        <p>
          Pergunte: a fonte quer ensinar, informar, vender, entreter ou convencer? Isso muda a forma como você deve usar o conteúdo.
        </p>
      </article>

      <article class="card">
        <h3>Atualização</h3>
        <p>
          Em exames, tecnologia e recursos online, verifique se a informação ainda está atual. Sim, páginas antigas continuam existindo para enganar os desavisados.
        </p>
      </article>

      <article class="card">
        <h3>Evidência</h3>
        <p>
          Uma boa fonte mostra método, referência, exemplos, critérios ou base empírica. “Funciona comigo” não é evidência universal.
        </p>
      </article>

      <article class="card">
        <h3>Aplicabilidade</h3>
        <p>
          Nem todo recurso serve para todo aluno. O melhor material é aquele que combina nível, objetivo, tempo e necessidade.
        </p>
      </article>

      <article class="card">
        <h3>Limites</h3>
        <p>
          Fonte confiável também tem limite. Um dicionário não substitui prática; um exame não define toda proficiência; um estudo não resolve toda didática.
        </p>
      </article>
    </div>
  </div>
</section>

<section class="section" id="editorial">
  <div class="container">
    <div class="section-head">
      <h2>Regra editorial do English Codex</h2>
      <p>
        O projeto usa referências com responsabilidade. Isso vale para fontes acadêmicas, materiais oficiais, cultura pop e exemplos didáticos.
      </p>
    </div>

    <div class="cards two-col">
      <article class="card">
        <h3>Conteúdo original</h3>
        <p>
          As explicações, exemplos e atividades do Codex devem ser originais, escritos para o contexto do aluno brasileiro e adaptados ao objetivo da página.
        </p>
      </article>

      <article class="card">
        <h3>Referência clara</h3>
        <p>
          Quando uma ideia vem de uma fonte oficial, estudo ou metodologia reconhecida, a página de recursos deve permitir rastrear essa origem.
        </p>
      </article>

      <article class="card">
        <h3>Cultura pop sem cópia</h3>
        <p>
          O Codex pode mencionar obras, gêneros e personagens de forma breve, mas não deve reproduzir letras, diálogos longos, páginas de livros ou imagens protegidas.
        </p>
      </article>

      <article class="card">
        <h3>Adaptação didática</h3>
        <p>
          A fonte inspira, orienta ou sustenta. A atividade final precisa fazer sentido para o aluno, o nível e a proposta do caderno.
        </p>
      </article>
    </div>

    <div class="callout red" style="margin-top:1rem">
      <strong>Regra simples:</strong> cite a fonte, explique com suas palavras, crie exemplos próprios e adapte para o objetivo pedagógico. Copiar não é curadoria. É só preguiça com Wi-Fi.
    </div>
  </div>
</section>

<section class="section paper">
  <div class="container">
    <div class="section-head">
      <h2>Como usar esta página no caderno</h2>
      <p>
        A página de recursos também pode virar uma seção do caderno, especialmente para alunos avançados, professores ou projetos acadêmicos.
      </p>
    </div>

    <div class="notebook-page">
      <h3>Template: minha biblioteca de estudo</h3>

      <div class="notebook-lines">
        <p><strong>Fonte:</strong> nome do recurso, site, estudo ou ferramenta.</p>
        <p><strong>Tipo:</strong> oficial, dicionário, estudo científico, listening, writing, exam prep, acessibilidade etc.</p>
        <p><strong>Para que serve:</strong> qual problema essa fonte resolve?</p>
        <p><strong>Meu nível:</strong> A1, A2, B1, B2, C1 ou C2.</p>
        <p><strong>Como vou usar:</strong> leitura, exercícios, listening, revisão, escrita, pronúncia, pesquisa.</p>
        <p><strong>Frequência:</strong> diário, semanal, mensal ou consulta quando necessário.</p>
        <p><strong>Observação:</strong> o que funcionou, o que não funcionou e o que precisa revisar.</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="quote-card">
      <h2>Fonte boa não substitui método. Método bom não dispensa fonte boa.</h2>
      <p>
        O English Codex tenta unir os dois: referências confiáveis para orientar a estrutura e prática ativa para transformar informação em aprendizado. O objetivo não é parecer acadêmico; é ser útil, rastreável e honesto.
      </p>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/page-end.php'; ?>