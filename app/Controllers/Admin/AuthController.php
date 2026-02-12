<?php
namespace App\Controllers\Admin;

use Core\Database;

class AuthController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $db = Database::getConnection();
            $stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                header('Location: ' . BASE_URL . '/admin/dashboard');
                exit;
            } else {
                $error = "E-mail ou senha inválidos.";
                require_once __DIR__ . '/../../Views/admin/login.php';
            }
        } else {
            require_once __DIR__ . '/../../Views/admin/login.php';
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: ' . BASE_URL . '/admin/login');
        exit;
    }
}
