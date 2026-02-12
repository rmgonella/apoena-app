<?php
namespace App\Controllers;

class PageController {
    public function about() {
        require_once __DIR__ . '/../Views/about.php';
    }

    public function solutions() {
        require_once __DIR__ . '/../Views/solutions.php';
    }
}
