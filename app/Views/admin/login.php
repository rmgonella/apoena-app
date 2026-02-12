<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Login Admin - Apoena Biotech</title>

<link rel="icon" type="image/png" sizes="32x32" href="/uploads/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/uploads/img/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="180x180" href="/uploads/img/apple-touch-icon.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="theme-color" content="#166534">

<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/style.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

<style>
body {
    font-family: 'Inter', sans-serif;
    background: linear-gradient(135deg, #166534 0%, #0f3d2e 100%);
    min-height: 100vh;
}

.login-wrapper {
    height: 606px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding-top: 30px;
    padding-bottom: 30px;
}

.login-container {
    max-width: 420px;
    width: 100%;
    padding: 50px;
    background: #ffffff;
    border-radius: 20px;
    box-shadow: 0 30px 60px rgba(0,0,0,0.15);
}

.login-container h2 {
    font-weight: 700;
    color: #166534;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #166534;
}

.form-control {
    width: 100%;
    padding: 12px;
    border: 1px solid #dcdcdc;
    border-radius: 10px;
    transition: 0.3s;
}

.form-control:focus {
    border-color: #166534;
    box-shadow: 0 0 0 0.2rem rgba(22,101,52,0.15);
}

.btn-login {
    background: #166534;
    border: none;
    padding: 12px;
    border-radius: 30px;
    font-weight: 600;
    transition: 0.3s;
}

.btn-login:hover {
    background: #14532d;
}
</style>

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

<!-- ================= LOGIN ================= -->
<div class="login-wrapper">
    <div class="login-container">
        <h2 class="text-center mb-4">Admin CMS</h2>

        <?php if (isset($error)): ?>
            <p style="color: red; text-align: center;"><?php echo $error; ?></p>
        <?php endif; ?>

        <form action="<?php echo BASE_URL; ?>/admin/login" method="POST">
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-login w-100 text-white">
                Entrar
            </button>
        </form>
    </div>
</div>

<!-- ================= FOOTER ================= -->
<footer class="footer">
<div class="container text-center">
<div class="footer-bottom">
© <?= date('Y') ?> | Todos os direitos reservados a Apoena Biotech
</div>
</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/main.js"></script>

</body>
</html>
