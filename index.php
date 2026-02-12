<?php


ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/config/config.php';

// Simple Autoloader
spl_autoload_register(function ($class) {
    $root = __DIR__ . '/';
    $classPath = str_replace('\\', '/', $class);

    if (strpos($class, 'Core\\') === 0) {
        $file = $root . 'core/' . substr($classPath, 5) . '.php';
    } elseif (strpos($class, 'App\\') === 0) {
        $file = $root . 'app/' . substr($classPath, 4) . '.php';
    } else {
        $file = $root . $classPath . '.php';
    }

    if (file_exists($file)) {
        require_once $file;
    }
});

use Core\Router;
use Core\Security;

// Set Security Headers
Security::setSecurityHeaders();

$router = new Router();

// Frontend Routes
$router->add('GET', '/', 'HomeController@index');
$router->add('GET', '/sobre', 'PageController@about');
$router->add('GET', '/contato', 'ContactController@index');
$router->add('POST', '/contato', 'ContactController@submit');

// Admin Routes
$router->add('GET', '/admin/login', 'Admin\AuthController@login');
$router->add('POST', '/admin/login', 'Admin\AuthController@login');
$router->add('GET', '/admin/logout', 'Admin\AuthController@logout');
$router->add('GET', '/admin/dashboard', 'Admin\DashboardController@index');

$router->dispatch();
