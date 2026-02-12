<?php
namespace Core;

class Router {
    protected $routes = [];

    public function add($method, $path, $callback) {
        $path = trim($path, '/');
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'callback' => $callback
        ];
    }

    public function dispatch() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = trim(str_replace('/grupo-apoena/public', '', $uri), '/');
        $method = $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $this->match($route['path'], $uri, $params)) {
                return $this->call($route['callback'], $params);
            }
        }

        http_response_code(404);
        echo "404 Not Found";
    }

    private function match($path, $uri, &$params) {
        $pattern = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '(?P<$1>[a-zA-Z0-9_-]+)', $path);
        $pattern = "#^" . $pattern . "$#";
        
        if (preg_match($pattern, $uri, $matches)) {
            $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
            return true;
        }
        return false;
    }

    private function call($callback, $params) {
        if (is_callable($callback)) {
            return call_user_func_array($callback, $params);
        }

        if (is_string($callback)) {
            list($controller, $method) = explode('@', $callback);
            $controller = "App\\Controllers\\" . $controller;
            $instance = new $controller();
            return call_user_func_array([$instance, $method], $params);
        }
    }
}
