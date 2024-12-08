<?php

namespace App\Core\Middlewares;

use App\Core\Application;

class AuthMiddleware extends BaseMiddleware
{
    public array $actions = [];

    public function __construct(array $actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (Application::$app->session->get('user') === false) {
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                Application::$app->session->setFlash('error', 'Iltimos, avval tizimga kiring');
                Application::$app->response->redirect('/login');
            }
        }
    }
} 