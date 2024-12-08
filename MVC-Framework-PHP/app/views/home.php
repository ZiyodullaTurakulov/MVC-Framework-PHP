<?php
$title = 'Bosh Sahifa - PHP MVC Framework';
$currentPage = 'home';
ob_start();
?>

<div class="py-20 bg-gray-100 dark:bg-gray-900">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-800 dark:text-white mb-4">Oddiy va Tushunarli PHP MVC Framework</h1>
            <p class="text-xl text-gray-600 dark:text-gray-300 mb-8">O'rganish va rivojlantirish uchun qulay, sodda MVC arxitekturasi</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Sodda Tuzilish</h3>
                <p class="text-gray-600 dark:text-gray-300">MVC arxitekturasi asosida qurilgan, tushunarli kod tuzilishi</p>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Routing Tizimi</h3>
                <p class="text-gray-600 dark:text-gray-300">Moslashuvchan va sodda routing tizimi orqali sahifalarni boshqaring</p>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Composer Bilan</h3>
                <p class="text-gray-600 dark:text-gray-300">Zamonaviy PHP autoloading va dependency management</p>
            </div>
        </div>

        <div class="mt-12 text-center">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">Tez Boshlash</h2>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 max-w-2xl mx-auto">
                <pre class="text-left bg-gray-100 dark:bg-gray-700 p-4 rounded text-gray-800 dark:text-gray-300"><code>composer create-project your-vendor/your-project
cd your-project
php -S localhost:8080 -t public</code></pre>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once __DIR__ . '/layouts/main.php'; 