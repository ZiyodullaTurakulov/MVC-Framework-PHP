<?php

namespace App\Core;

class Controller
{
    public string $action = '';
    public array $middlewares = [];

    public function registerMiddleware($middleware)
    {
        $this->middlewares[] = $middleware;
    }

    protected function render($view, $params = [])
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        return require_once Application::$ROOT_DIR . "/app/views/$view.php";
    }
} 