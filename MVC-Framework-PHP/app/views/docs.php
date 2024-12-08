<?php
$title = 'Hujjatlar - PHP MVC Framework';
$currentPage = 'docs';
ob_start();
?>

<div class="py-12 bg-gray-100 dark:bg-gray-900">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-4 gap-6">
            <!-- Sidebar -->
            <div class="col-span-1">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4">
                    <h3 class="font-bold text-lg mb-4 text-gray-800 dark:text-white">Mundarija</h3>
                    <ul class="space-y-2">
                        <li><a href="#installation" class="text-gray-600 dark:text-gray-300 hover:text-blue-500">O'rnatish</a></li>
                        <li><a href="#routing" class="text-gray-600 dark:text-gray-300 hover:text-blue-500">Routing</a></li>
                        <li><a href="#controllers" class="text-gray-600 dark:text-gray-300 hover:text-blue-500">Kontrollerlar</a></li>
                        <li><a href="#models" class="text-gray-600 dark:text-gray-300 hover:text-blue-500">Modellar</a></li>
                        <li><a href="#views" class="text-gray-600 dark:text-gray-300 hover:text-blue-500">Ko'rinishlar</a></li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-span-3">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                    <section id="installation" class="mb-12">
                        <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-white">O'rnatish</h2>
                        <p class="mb-4 text-gray-600 dark:text-gray-300">Composer orqali o'rnatish:</p>
                        <pre class="bg-gray-100 dark:bg-gray-700 p-4 rounded mb-4 text-gray-800 dark:text-gray-300"><code>composer create-project your-vendor/your-project
cd your-project</code></pre>
                        <p class="mb-4 text-gray-600 dark:text-gray-300">Serverni ishga tushirish:</p>
                        <pre class="bg-gray-100 dark:bg-gray-700 p-4 rounded text-gray-800 dark:text-gray-300"><code>php -S localhost:8080 -t public</code></pre>
                    </section>

                    <section id="routing" class="mb-12">
                        <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-white">Routing</h2>
                        <p class="mb-4 text-gray-600 dark:text-gray-300">Yangi route qo'shish:</p>
                        <pre class="bg-gray-100 dark:bg-gray-700 p-4 rounded text-gray-800 dark:text-gray-300"><code>$app->router->get('/hello', function() {
    return 'Hello World';
});</code></pre>
                    </section>

                    <section id="controllers" class="mb-12">
                        <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-white">Kontrollerlar</h2>
                        <p class="mb-4 text-gray-600 dark:text-gray-300">Yangi kontroller yaratish:</p>
                        <pre class="bg-gray-100 dark:bg-gray-700 p-4 rounded text-gray-800 dark:text-gray-300"><code>namespace App\Controllers;

class HomeController
{
    public function index()
    {
        return 'Home Page';
    }
}</code></pre>
                    </section>

                    <section id="models" class="mb-12">
                        <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-white">Modellar</h2>
                        <p class="mb-4 text-gray-600 dark:text-gray-300">Model yaratish:</p>
                        <pre class="bg-gray-100 dark:bg-gray-700 p-4 rounded text-gray-800 dark:text-gray-300"><code>namespace App\Models;

class User
{
    public function getAll()
    {
        // Database logic here
    }
}</code></pre>
                    </section>

                    <section id="views" class="mb-12">
                        <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-white">Ko'rinishlar</h2>
                        <p class="mb-4 text-gray-600 dark:text-gray-300">View fayllardan foydalanish:</p>
                        <pre class="bg-gray-100 dark:bg-gray-700 p-4 rounded text-gray-800 dark:text-gray-300"><code>public function index()
{
    return require_once '../app/views/home.php';
}</code></pre>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once __DIR__ . '/layouts/main.php';
?> 