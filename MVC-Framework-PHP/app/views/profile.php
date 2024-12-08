<?php
use App\Core\Application;

$title = 'Profil - PHP MVC Framework';
$currentPage = 'profile';
ob_start();
?>

<div class="min-h-screen py-12 bg-gray-100 dark:bg-gray-900">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto">
            <!-- Profil ma'lumotlari -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 mb-6">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="bg-blue-500 text-white rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold">
                        <?= strtoupper(substr($user->name, 0, 1)) ?>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-white"><?= $user->name ?></h2>
                        <p class="text-gray-600 dark:text-gray-300"><?= $user->email ?></p>
                    </div>
                </div>

                <?php if ($success = Application::$app->session->getFlash('success')): ?>
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                        <span class="block sm:inline"><?= $success ?></span>
                    </div>
                <?php endif; ?>

                <?php if ($error = Application::$app->session->getFlash('error')): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                        <span class="block sm:inline"><?= $error ?></span>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Tahrirlash formasi -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-6">Profil ma'lumotlarini tahrirlash</h3>
                
                <form action="/profile" method="POST" class="space-y-4">
                    <div>
                        <label class="block text-gray-700 dark:text-gray-300 mb-2">
                            To'liq ism
                        </label>
                        <input 
                            type="text" 
                            name="name" 
                            value="<?= $user->name ?>"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                            required
                        >
                    </div>

                    <div>
                        <label class="block text-gray-700 dark:text-gray-300 mb-2">
                            Email
                        </label>
                        <input 
                            type="email" 
                            name="email" 
                            value="<?= $user->email ?>"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                            required
                        >
                    </div>

                    <div class="border-t border-gray-200 dark:border-gray-700 pt-4">
                        <h4 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Parolni o'zgartirish</h4>
                        
                        <div class="space-y-4">
                            <div>
                                <label class="block text-gray-700 dark:text-gray-300 mb-2">
                                    Yangi parol
                                </label>
                                <input 
                                    type="password" 
                                    name="password"
                                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                >
                            </div>

                            <div>
                                <label class="block text-gray-700 dark:text-gray-300 mb-2">
                                    Parolni tasdiqlang
                                </label>
                                <input 
                                    type="password" 
                                    name="confirmPassword"
                                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                >
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end pt-4">
                        <button 
                            type="submit"
                            class="bg-blue-500 text-white py-2 px-6 rounded-lg hover:bg-blue-600 transition duration-200"
                        >
                            Saqlash
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once __DIR__ . '/layouts/main.php';
?> 