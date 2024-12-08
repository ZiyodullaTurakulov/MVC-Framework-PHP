<?php

namespace App\Core;

class Router
{
    protected array $routes = [];
    public Request $request;
    public Response $response;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        
        if ($callback === false) {
            $this->response->setStatusCode(404);
            return "Not found";
        }

        if (is_array($callback)) {
            $controller = new $callback[0]();
            Application::$app->controller = $controller;
            Application::$app->controller->action = $callback[1];
            return call_user_func([$controller, $callback[1]]);
        }

        return call_user_func($callback);
    }
}