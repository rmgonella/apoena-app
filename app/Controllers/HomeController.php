<?php
namespace App\Controllers;

class HomeController {
    public function index() {
        $title = "Grupo Apoena - Hub Institucional";
        $description = "Bem-vindo ao Grupo Apoena, transformando o futuro através da biotecnologia, agronegócio e personal care.";
        
        // Data for the view
        $sites = [
            [
                'name' => 'Apoena Biotech',
                'description' => 'Ciência, inovação e autoridade técnica em bioprocessos.',
                'url' => 'https://biotech.apoena.com.br',
                'color' => 'blue'
            ],
            [
                'name' => 'Apoena Agro',
                'description' => 'Soluções sustentáveis para o agronegócio moderno.',
                'url' => 'https://agro.apoena.com.br',
                'color' => 'green'
            ],
            [
                'name' => 'Apoena BioCare',
                'description' => 'Inovação em personal care e bem-estar.',
                'url' => 'https://biocare.apoena.com.br',
                'color' => 'pink'
            ]
        ];

        require_once __DIR__ . '/../Views/home.php';
    }
}
