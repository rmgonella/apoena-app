<?php
namespace App\Controllers\Admin;

class DashboardController {
    public function index() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header('Location: ' . BASE_URL . '/admin/login');
            exit;
        }
        
        require_once __DIR__ . '/../../Views/admin/dashboard.php';
    }
}
