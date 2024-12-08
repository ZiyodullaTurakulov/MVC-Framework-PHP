<?php
use App\Core\Application;

$title = 'Portfolio - PHP MVC Framework';
$currentPage = 'portfolio';
ob_start();
?>

<!-- Hero Section with Animated Background -->
<div class="relative min-h-screen bg-gradient-to-br from-blue-600 to-purple-700 dark:from-blue-900 dark:to-purple-900 overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,...')] opacity-10 animate-pulse"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative max-w-7xl mx-auto px-4 py-32">
        <div class="flex flex-col md:flex-row items-center justify-between gap-12">
            <!-- Text Content -->
            <div class="flex-1 text-center md:text-left">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    <span class="block">Abdulaziz</span>
                    <span class="block text-blue-200">Full Stack Developer</span>
                </h1>
                <p class="text-xl text-blue-100 mb-8 max-w-2xl">
                    Zamonaviy web ilovalar yaratish bo'yicha 5+ yillik tajribaga ega dasturchiman. 
                    Men mijozlar uchun innovatsion yechimlar yaratishga ixtisoslashganman.
                </p>
                <div class="flex flex-wrap gap-4 justify-center md:justify-start">
                    <a href="#contact" class="px-8 py-3 bg-white text-blue-600 rounded-full font-semibold hover:bg-blue-50 transition duration-300">
                        Bog'lanish
                    </a>
                    <a href="#projects" class="px-8 py-3 border-2 border-white text-white rounded-full font-semibold hover:bg-white hover:text-blue-600 transition duration-300">
                        Loyihalar
                    </a>
                </div>
            </div>

            <!-- Profile Image -->
            <div class="relative">
                <div class="w-64 h-64 md:w-80 md:h-80 rounded-full overflow-hidden border-4 border-white shadow-xl">
                    <img src="/assets/images/profile.jpg" alt="Abdulaziz" class="w-full h-full object-cover">
                </div>
                <!-- Floating Badges -->
                <div class="absolute -top-4 -right-4 bg-white dark:bg-gray-800 rounded-full p-3 shadow-lg">
                    <span class="text-2xl">🚀</span>
                </div>
                <div class="absolute -bottom-4 -left-4 bg-white dark:bg-gray-800 rounded-full p-3 shadow-lg">
                    <span class="text-2xl">💻</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Stats Section -->
<div class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2">50+</div>
                <div class="text-gray-600 dark:text-gray-300">Loyihalar</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2">30+</div>
                <div class="text-gray-600 dark:text-gray-300">Mijozlar</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2">5+</div>
                <div class="text-gray-600 dark:text-gray-300">Yillik tajriba</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2">100%</div>
                <div class="text-gray-600 dark:text-gray-300">Mijoz mamnuniyati</div>
            </div>
        </div>
    </div>
</div>

<!-- Skills Section with Animation -->
<div class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 dark:text-white mb-16">Texnologiyalar</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <!-- Skill Cards with Hover Effects -->
            <div class="group bg-white dark:bg-gray-700 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                <div class="text-4xl mb-4 group-hover:scale-110 transition duration-300">🚀</div>
                <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Backend</h3>
                <p class="text-gray-600 dark:text-gray-300">PHP, Laravel, MySQL, Node.js</p>
                <div class="mt-4 space-y-2">
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-blue-600 h-2 rounded-full" style="width: 95%"></div>
                    </div>
                </div>
            </div>
            <!-- More skill cards... -->
        </div>
    </div>
</div>

<!-- Featured Projects -->
<div id="projects" class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 dark:text-white mb-16">Tanlangan loyihalar</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project Card with Hover Effects -->
            <div class="group bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden">
                <div class="relative overflow-hidden">
                    <img src="project1.jpg" alt="Project 1" class="w-full h-48 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">E-commerce Platform</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Zamonaviy onlayn do'kon platformasi</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">Laravel</span>
                        <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-sm">Vue.js</span>
                        <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-sm">Tailwind</span>
                    </div>
                    <a href="#" class="inline-flex items-center text-blue-500 hover:text-blue-600 font-semibold">
                        Batafsil
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <!-- More project cards... -->
        </div>
    </div>
</div>

<!-- Contact Section with Animation -->
<div id="contact" class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-4xl mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 dark:text-white mb-16">Bog'lanish</h2>
        
        <?php if ($success = Application::$app->session->getFlash('success')): ?>
            <div class="mb-8 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                <span class="block sm:inline"><?= $success ?></span>
            </div>
        <?php endif; ?>

        <div class="bg-white dark:bg-gray-700 rounded-xl shadow-xl p-8">
            <form action="/contact" method="POST" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 dark:text-gray-300 mb-2">Ismingiz</label>
                        <input 
                            type="text" 
                            name="name"
                            required
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white"
                        >
                    </div>
                    <div>
                        <label class="block text-gray-700 dark:text-gray-300 mb-2">Email</label>
                        <input 
                            type="email" 
                            name="email"
                            required
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white"
                        >
                    </div>
                </div>
                <div>
                    <label class="block text-gray-700 dark:text-gray-300 mb-2">Xabar</label>
                    <textarea 
                        name="message"
                        rows="4"
                        required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white"
                    ></textarea>
                </div>
                <button 
                    type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    Yuborish
                </button>
            </form>
        </div>

        <!-- Social Links -->
        <div class="mt-12 flex justify-center space-x-6">
            <a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-500 transition duration-200">
                <span class="sr-only">GitHub</span>
                <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                </svg>
            </a>
            <a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-500 transition duration-200">
                <span class="sr-only">LinkedIn</span>
                <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                </svg>
            </a>
            <a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-500 transition duration-200">
                <span class="sr-only">Twitter</span>
                <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                </svg>
            </a>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once __DIR__ . '/../layouts/main.php';
?> 