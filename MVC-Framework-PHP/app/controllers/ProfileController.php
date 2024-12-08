<?php

namespace App\Controllers;

use App\Core\Application;
use App\Core\Middlewares\AuthMiddleware;
use App\Models\User;

class ProfileController extends \App\Core\Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    public function profile()
    {
        $userId = Application::$app->session->get('user');
        $user = User::findOne(['id' => $userId]);
        
        if (Application::$app->request->getMethod() === 'post') {
            $data = Application::$app->request->getBody();
            
            $user->name = $data['name'];
            $user->email = $data['email'];
            
            if (!empty($data['password'])) {
                if ($data['password'] !== $data['confirmPassword']) {
                    Application::$app->session->setFlash('error', 'Parollar mos kelmadi');
                    return $this->render('profile', ['user' => $user]);
                }
                $user->password = $data['password'];
            }
            
            if ($user->update()) {
                Application::$app->session->setFlash('success', 'Profil yangilandi');
            }
        }
        
        return $this->render('profile', ['user' => $user]);
    }
} 
