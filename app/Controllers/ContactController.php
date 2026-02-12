<?php
namespace App\Controllers;

use Core\Database;

class ContactController {
    public function index() {
        require_once __DIR__ . '/../Views/contact.php';
    }

    public function submit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Sanitize inputs
            $name = htmlspecialchars($_POST['name'] ?? '');
            $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
            $phone = htmlspecialchars($_POST['phone'] ?? '');
            $subject = htmlspecialchars($_POST['subject'] ?? '');
            $message = htmlspecialchars($_POST['message'] ?? '');

            // Validate
            if (empty($name) || empty($email) || empty($subject) || empty($message)) {
                die('Todos os campos obrigatórios devem ser preenchidos.');
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                die('E-mail inválido.');
            }

            // Save to database
            $db = Database::getConnection();
            $stmt = $db->prepare("INSERT INTO leads (site_source, name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute(['apoena.com.br', $name, $email, $phone, $subject, $message]);

            // Redirect with success message
            $success = true;
            require_once __DIR__ . '/../Views/contact.php';
        }
    }
}
