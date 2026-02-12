<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Grupo Apoena</title>
    <meta name="description" content="Entre em contato com o Grupo Apoena.">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <div class="logo">GRUPO APOENA</div>
                <ul class="nav-links">
                    <li><a href="<?php echo BASE_URL; ?>">Home</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero" style="padding: 60px 0;">
            <div class="container">
                <h1>Fale Conosco</h1>
                <p>Estamos prontos para ouvir suas dúvidas e propostas.</p>
            </div>
        </section>

        <section class="content-section">
            <div class="container" style="max-width: 600px;">
                <?php if (isset($success)): ?>
                    <p style="color: green; text-align: center; padding: 15px; background: #f0fdf4; border-radius: 5px;">Mensagem enviada com sucesso! Entraremos em contato em breve.</p>
                <?php endif; ?>
                
                <form action="<?php echo BASE_URL; ?>/contato" method="POST" class="contact-form">
                    <div class="form-group">
                        <label>Nome *</label>
                        <input type="text" name="name" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label>E-mail *</label>
                        <input type="email" name="email" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <input type="tel" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Assunto *</label>
                        <input type="text" name="subject" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Mensagem *</label>
                        <textarea name="message" required class="form-control" rows="6"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                </form>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Grupo Apoena. Desenvolvido por Rodrigo Marchi Gonella.</p>
        </div>
    </footer>

    <style>
        .contact-form { margin-top: 30px; }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; font-weight: 600; }
        .form-control { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-family: inherit; }
        .form-control:focus { outline: none; border-color: var(--accent-blue); }
        .content-section { padding: 80px 0; }
    </style>
</body>
</html>
