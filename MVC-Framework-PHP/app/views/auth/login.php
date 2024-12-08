<?php
$title = 'Kirish - PHP MVC Framework';
$currentPage = 'login';
ob_start();
?>

<div class="min-h-screen py-12 bg-gray-100 dark:bg-gray-900">
    <div class="container mx-auto px-4">
        <div class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-lg shadow-md">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-6 text-center">Tizimga kirish</h2>
                
                <?php if ($error = \App\Core\Application::$app->session->getFlash('error')): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline"><?= $error ?></span>
                    </div>
                <?php endif; ?>

                <form action="/login" method="POST" class="space-y-4">
                    <div>
                        <label class="block text-gray-700 dark:text-gray-300 mb-2" for="email">
                            Email
                        </label>
                        <input 
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                            type="email" 
                            id="email" 
                            name="email" 
                            required
                        >
                    </div>

                    <div>
                        <label class="block text-gray-700 dark:text-gray-300 mb-2" for="password">
                            Parol
                        </label>
                        <input 
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                            type="password" 
                            id="password" 
                            name="password" 
                            required
                        >
                    </div>

                    <button 
                        type="submit" 
                        class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-200"
                    >
                        Kirish
                    </button>
                </form>

                <p class="mt-4 text-center text-gray-600 dark:text-gray-400">
                    Akkountingiz yo'qmi? 
                    <a href="/register" class="text-blue-500 hover:text-blue-600">Ro'yxatdan o'tish</a>
                </p>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once __DIR__ . '/../layouts/main.php';
?> 