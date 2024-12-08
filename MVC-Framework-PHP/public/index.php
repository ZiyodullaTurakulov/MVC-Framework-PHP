<?php
require_once '../vendor/autoload.php';
require_once '../app/bootstrap.php';

$config = require_once '../app/config/config.php';
if (!is_array($config)) {
    $config = [
        'db' => [
            'dsn' => 'mysql:host=localhost;port=3306;dbname=mvc_framework',
            'user' => 'root',
            'password' => ''
        ]
    ];
}

$app = new \App\Core\Application(dirname(__DIR__), $config);
$app->applyMigrations();

$app->router->get('/', function() {
    return require_once '../app/views/home.php';
});

$app->router->get('/docs', function() {
    return require_once '../app/views/docs.php';
});

$app->router->get('/register', [\App\Controllers\AuthController::class, 'register']);
$app->router->post('/register', [\App\Controllers\AuthController::class, 'register']);

$app->router->get('/login', [\App\Controllers\AuthController::class, 'login']);
$app->router->post('/login', [\App\Controllers\AuthController::class, 'login']);
$app->router->get('/logout', [\App\Controllers\AuthController::class, 'logout']);

$app->router->get('/profile', [\App\Controllers\ProfileController::class, 'profile']);
$app->router->post('/profile', [\App\Controllers\ProfileController::class, 'profile']);

$app->router->get('/portfolio', [\App\Controllers\PortfolioController::class, 'index']);
$app->router->post('/contact', [\App\Controllers\PortfolioController::class, 'contact']);

$app->run(); 

