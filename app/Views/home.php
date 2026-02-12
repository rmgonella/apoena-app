<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Apoena Biotech</title>
<link rel="icon" type="image/png" sizes="32x32" href="/uploads/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/uploads/img/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="180x180" href="/uploads/img/apple-touch-icon.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="theme-color" content="#166534">
<link rel="stylesheet" href="/assets/css/style.css">


<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

</head>

<body>

<!-- ================= HEADER ================= -->
<nav class="navbar navbar-expand-lg header-premium fixed-top">
  <div class="container header-grid">

    <!-- LOGO -->
    <div class="header-left">
      <a class="navbar-brand" href="/">
        <img src="/uploads/img/apoena-logo.svg" alt="Apoena" style="height:60px;width:auto;">
      </a>
    </div>

    <!-- MENU CENTRAL -->
    <div class="header-center collapse navbar-collapse justify-content-center" id="menu">
      <ul class="navbar-nav gap-lg-4">
        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/sobre">Quem Somos</a></li>
        <li class="nav-item"><a class="nav-link" href="/biotech">Biotech</a></li>
        <li class="nav-item"><a class="nav-link" href="/bioprospeccao">Bioprospecção</a></li>
        <li class="nav-item"><a class="nav-link" href="/sustentabilidade">Sustentabilidade</a></li>
        <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="/contato">Contato</a></li>
        <br>
      </ul>
    </div>

    <!-- AÇÕES -->
    <div class="header-right d-flex align-items-center gap-3">
      <button class="btn-pill btn-agro">AGRO</button>
      <button class="btn-pill btn-biocare">BIOCARE</button>
      <select class="lang-select">
        <option>PT</option>
        <option>EN</option>
      </select>
    </div>

    <!-- BOTÃO MOBILE -->
    <button class="navbar-toggler ms-3" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

  </div>
</nav>


<!-- ================= HERO ================= -->
<section class="hero">
<div class="container reveal">
<h1>Mais do que Natural,<br> Sustentável</h1>
<p>Descubra como a biotecnologia pode ajudar o seu negócio!</p>
<a href="/contato" class="btn btn-success btn-lg mt-4">Fale Conosco</a>
</div>
</section>

<!-- ================= SOBRE ================= -->
<section class="section-padding section-light">
<div class="container">
<div class="row g-5 align-items-center">
<div class="col-lg-6 reveal">
<img src="/uploads/img/sobre-nos2.png" class="about-img">
</div>
<div class="col-lg-6 reveal">
<h2 class="section-title text-success">Sobre Nós</h2>
<p><br>A Apoena Biotech nasceu em 2018 com o propósito de
impactar positivamente o desenvolvimento sustentável por
meio da biotecnologia.<br><br>
Apoiamos projetos de inovação com tecnologia em bioprocessos e desenvolvimento de produtos 100% biotecnológicos para os mercados agro, de beleza e
cuidados pessoais.<br></p>
<p class="bg-success bg-opacity-10 p-3 border-start border-4 border-success">
Em 2021 nos tornamos a 1ª indústria brasileira em biotech para o setor de Higiene Pessoal, Perfumaria e Cosméticos.</p>
<a href="/sobre" class="btn btn-success mt-3">Saiba Mais</a>
</div>
</div>
</div>
</section>

<!-- ================= UNIDADES ================= -->
<section id="unidades" class="section-padding">
<div class="container">
<h2 class="text-center section-title mb-5">Conheça Nossas Soluções</h2>
<div class="card-grid">
<?php foreach ($sites as $site): ?>
<div class="card reveal" style="color:#fff; text-decoration:none; font-weight:600;">
<h3><?= $site['name'] ?></h3>
<p><?= $site['description'] ?></p>
<a href="<?= $site['url'] ?>" 
   target="_blank"
   style="color:#fff; text-decoration:none; font-weight:600;">
  Acessar →
</a>

</div>
<?php endforeach; ?>
</div>
</div>
</section>

<!-- ================= BIOTECH ================= -->
<section id="biotech" class="section-dark section-padding">
<div class="container reveal">
<h1><b>O que é Biotech?</b></h1>
<p class="mt-3">Conheça a ciência que fundamenta 100% de nosso propósito, produtos e serviços,<br>permitindo o desenvolvimento responsável de matérias-primas derivadas de fontes renováveis,<br>seguras e com o mínimo impacto socioambiental. </p>
<a class="btn btn-light mt-4">Saiba Mais</a>
</div>
</section>

<!-- ================= BIOPROSPECÇÃO ================= -->
<section id="bioprospeccao" class="section-padding section-light">
<div class="container">
<div class="row g-5 align-items-center">
<div class="col-lg-6 reveal">
<h2 class="section-title">Projeto de Bioprospecção</h2>
<br>
<p>A Apoena Biotech iniciou em julho de 2022 suas atividades de bioprospecção sustentável em Fernando de Noronha, arquipélago representante da Amazônia Azul.</p>
<br>
<p class="bg-success bg-opacity-10 p-3 border-start border-4 border-success">Essa escolha valoriza e impulsiona o desenvolvimento da biotecnologia brasileira a partir de um dos ecossistemas mais ricos do mundo.</p>
<a class="btn btn-success">Saiba Mais</a>
</div>
<div class="col-lg-6 reveal">
<img src="/uploads/img/mar2.png" class="about-img">
</div>
</div>
</div>
</section>

<!-- ================= SUSTENTABILIDADE ================= -->
<section id="sustentabilidade" class="section-padding section-soft">
<div class="container">
<div class="row g-5 align-items-center flex-lg-row-reverse">
<div class="col-lg-6 reveal">
<h2 class="section-title">Sustentabilidade Apoena</h2>
<br>
<p>Como uma empresa que valoriza toda a cadeia de produção sustentável, não incorporamos esse valor apenas em nosso processo, mas também na forma em que nos portamos e conduzimos o dia a dia de nossa companhia.<br><br></p>

<h3 class="section-title">Projeto de Bioprospecção<br>Fernando de Noronha</h3><br>
<p>Iniciamos em julho de 2022 as atividades debioprospecção sustentável da Apoena Biotech em Fernando de Noronha, arquipélago representante da Amazônia Azul. Essa escolha valoriza e impulsiona o desenvolvimento da biotecnologia brasileira a partir de um dos ecossistemas mais ricos do mundo, viabilizando a criação de produtos sustentáveis exclusivos em grau de preservação, abrindo novas oportunidades para o desenvolvimento de soluções inovadoras.<br><br>A solicitação de autorização para coleta de material biológico em Fernando de Noronha, foi concedida via SISBIO (Sistemade Autorização e Informação em Biodiversidade), e aprovada pelo Instituto Chico Mendes de Conservação da Biodiversidade (ICMBio).<br><br>A bioprospecção sustentável é um dos caminhos mais responsáveis para se encontrar novos microrganismos na natureza. Este ramo da biotecnologia ganha ainda mais destaque por meio da elaboração de bancos de microrganismos associados à biodiversidade, a partir de compostos de fonte altamente renovável e exclusiva. Produtos biotecnológicos têm real potencial de contribuição para a Nova Economia, sobretudo a partir do Brasil, país com a maior biodiversidade do mundo e responsável por abrigar mais de 20% do total de espécies do planeta.</p>
<!-- ================= <a class="btn btn-success">Saiba Mais</a> ================= -->
</div>
<div class="col-lg-6 reveal">
<img src="/uploads/img/noronha.png" class="about-img">
</div>
</div>
</div>
</section>

<!-- ================= NÚMEROS ================= -->
<section class="numbers section-padding text-center">
<div class="container">
<div class="row g-4">
<div class="col-md-3"><h1 class="counter" data-target="120">0</h1><p><h2><b>Projetos</b></h2></p></div>
<div class="col-md-3"><h1 class="counter" data-target="15">0</h1><p><h2><b>Anos</b></h2></p></div>
<div class="col-md-3"><h1 class="counter" data-target="98">0</h1><p><h2><b>% Satisfação</b></h2></p></div>
<div class="col-md-3"><h1 class="counter" data-target="100">0</h1><p><h2><b>% Sustentável</b></h2></p></div>
</div>
</div>
</section>

<!-- ================= BLOG CTA ================= -->
<section id="blog" class="section-dark2 section-padding text-center">
<div class="container reveal">
<h2>Fique por dentro do universo Biotech</h2>
<a href="/blog" class="btn btn-light mt-4">Acessar Blog</a>
</div>
</section>

<!-- ================= FOOTER ================= -->
<footer class="footer">
<div class="container">
<div class="row g-4">
<div class="col-lg-3">
<img src="/uploads/img/apoena-logo.svg" alt="Apoena" style="height:60px;width:auto;">
<p class="mt-3">Biotecnologia e sustentabilidade para transformar o futuro.</p>
<br>
<p>Rua Solimões, 121 - Galpão 03<br>
CEP 09930-570<br>Jardim Campanário - Diadema<br><br>
<a href="mailto:contato@apoena.com.br" class="btn btn-light mt-4">contato@apoena.com.br</a></p>
</div>
<div class="col-lg-3">
<h5>Contato</h5>
<p>+55 (11) 4091-7783<br><br>
<b>Comercial Cosmético:</b><br>+55 (11) 99451-3891<br>+55 (11) 99966-9881<br><br>
<b>Comercial Agro:</b><br>+55 (19) 98707-5391<br>+55 (11) 99966-9881</p>
</div>
<div class="col-lg-3">
<h5>Institucional</h5>
<a href="/sobre">Quem Somos</a>
<a href="/blog">Blog</a>
<a href="/contato">Contato</a>
</div>
<div class="col-lg-3">
  <h5>Redes Sociais</h5>

  <a href="#" class="social-link">
    <i class="fa-brands fa-instagram"></i> Instagram
  </a>

  <a href="#" class="social-link">
    <i class="fa-brands fa-linkedin"></i> LinkedIn
  </a>

  <a href="#" class="social-link">
    <i class="fa-brands fa-youtube"></i> YouTube
  </a>
</div>

</div>

<div class="footer-bottom text-center">
© <?= date('Y') ?> | Todos os direitos reservados a Apoena Biotech

<br><br>

<a href="/admin/login" 
   class="btn btn-sm btn-outline-light"
   style="border-radius:20px; padding:6px 18px; font-weight:600;">
   Área Restrita
</a>
</div>



</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/main.js"></script>

</body>
</html>
