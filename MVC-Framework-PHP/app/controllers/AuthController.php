<?php

namespace App\Controllers;

use App\Core\Application;
use App\Models\User;

class AuthController
{
    public function register()
    {
        if (Application::$app->request->getMethod() === 'post') {
            $data = Application::$app->request->getBody();
            
            if (User::findOne(['email' => $data['email']])) {
                Application::$app->session->setFlash('error', 'Bu email allaqachon ro\'yxatdan o\'tgan');
                return $this->render('auth/register');
            }
            
            if ($data['password'] !== $data['confirmPassword']) {
                Application::$app->session->setFlash('error', 'Parollar mos kelmadi');
                return $this->render('auth/register');
            }

            $user = new User();
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = $data['password'];
            $user->status = 1;

            if ($user->save()) {
                Application::$app->session->setFlash('success', 'Muvaffaqiyatli ro\'yxatdan o\'tdingiz');
                Application::$app->response->redirect('/login');
            } else {
                Application::$app->session->setFlash('error', 'Xatolik yuz berdi');
                return $this->render('auth/register');
            }
        }
        return $this->render('auth/register');
    }

    public function login()
    {
        if (Application::$app->request->getMethod() === 'post') {
            $data = Application::$app->request->getBody();
            
            $user = User::findOne(['email' => $data['email']]);
            
            if (!$user || !password_verify($data['password'], $user->password)) {
                Application::$app->session->setFlash('error', 'Email yoki parol noto\'g\'ri');
                return $this->render('auth/login');
            }

            Application::$app->session->set('user', $user->id);
            Application::$app->session->setFlash('success', 'Xush kelibsiz!');
            Application::$app->response->redirect('/');
        }
        return $this->render('auth/login');
    }

    public function logout()
    {
        Application::$app->session->remove('user');
        Application::$app->response->redirect('/');
    }

    protected function render($view)
    {
        return require_once Application::$ROOT_DIR . "/app/views/$view.php";
    }
} 