<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Admin</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/style.css">
    <style>
        .admin-layout { display: flex; min-height: 100vh; }
        .sidebar { width: 250px; background: #1a365d; color: #fff; padding: 20px; }
        .main-content { flex: 1; padding: 40px; background: #f8fafc; }
        .sidebar-nav { list-style: none; margin-top: 30px; }
        .sidebar-nav li { margin-bottom: 15px; }
        .sidebar-nav a { color: #cbd5e0; text-decoration: none; display: block; padding: 10px; border-radius: 4px; }
        .sidebar-nav a:hover { background: #2d3748; color: #fff; }
        .stat-card { background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
    </style>
</head>
<body>
    <div class="admin-layout">
        <aside class="sidebar">
            <h2>CMS Apoena</h2>
            <ul class="sidebar-nav">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Páginas</a></li>
                <li><a href="#">Blog / Posts</a></li>
                <li><a href="#">Leads / Contatos</a></li>
                <li><a href="<?php echo BASE_URL; ?>/admin/logout">Sair</a></li>
            </ul>
        </aside>
        <main class="main-content">
            <header style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 40px;">
                <h1>Olá, <?php echo $_SESSION['user_name']; ?></h1>
                <a href="<?php echo BASE_URL; ?>" target="_blank" class="btn-link">Ver Site</a>
            </header>
            
            <div class="grid">
                <div class="stat-card">
                    <h3>Leads Recebidos</h3>
                    <p style="font-size: 2rem; font-weight: 700;">12</p>
                </div>
                <div class="stat-card">
                    <h3>Posts no Blog</h3>
                    <p style="font-size: 2rem; font-weight: 700;">8</p>
                </div>
                <div class="stat-card">
                    <h3>Páginas Ativas</h3>
                    <p style="font-size: 2rem; font-weight: 700;">5</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
