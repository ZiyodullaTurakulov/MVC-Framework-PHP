<?php
use App\Core\Application;
?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'PHP MVC Framework' ?></title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {}
            }
        }
    </script>
    <script>
        // Sahifa yuklanganda joriy rejimni tekshirish
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        function toggleTheme() {
            // Joriy rejimni aniqlash
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }

        // Dropdown menu uchun
        document.addEventListener('DOMContentLoaded', function() {
            const dropdownButton = document.querySelector('.dropdown-button');
            const dropdownMenu = document.querySelector('.dropdown-menu');
            let timeoutId;

            function showDropdown() {
                clearTimeout(timeoutId);
                dropdownMenu.classList.remove('hidden');
            }

            function hideDropdown() {
                timeoutId = setTimeout(() => {
                    dropdownMenu.classList.add('hidden');
                }, 200); // 200ms kechikish
            }

            dropdownButton.addEventListener('mouseenter', showDropdown);
            dropdownButton.addEventListener('mouseleave', hideDropdown);
            dropdownMenu.addEventListener('mouseenter', showDropdown);
            dropdownMenu.addEventListener('mouseleave', hideDropdown);
        });
    </script>
    <style>
        /* Rejim o'zgarishi animatsiyasi */
        * {
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900 min-h-screen">
    <nav class="bg-white dark:bg-gray-800 shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <a href="/" class="flex items-center py-4">
                        <span class="font-semibold text-gray-500 dark:text-gray-300 text-lg">PHP MVC</span>
                    </a>
                    <div class="flex items-center space-x-4">
                        <a href="/" class="py-4 px-2 <?= $currentPage === 'home' ? 'text-blue-500 font-semibold' : 'text-gray-500 dark:text-gray-300 hover:text-gray-700 dark:hover:text-gray-100' ?>">Bosh Sahifa</a>
                        <a href="/portfolio" class="py-4 px-2 <?= $currentPage === 'portfolio' ? 'text-blue-500 font-semibold' : 'text-gray-500 dark:text-gray-300 hover:text-gray-700 dark:hover:text-gray-100' ?>">Portfolio</a>
                        <a href="/docs" class="py-4 px-2 <?= $currentPage === 'docs' ? 'text-blue-500 font-semibold' : 'text-gray-500 dark:text-gray-300 hover:text-gray-700 dark:hover:text-gray-100' ?>">Hujjatlar</a>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <button onclick="toggleTheme()" class="p-2 rounded-lg bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300">
                        <!-- Sun icon -->
                        <svg class="w-6 h-6 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <!-- Moon icon -->
                        <svg class="w-6 h-6 block dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </button>
                    
                    <?php if (Application::$app->session->get('user')): ?>
                        <?php 
                            $userId = Application::$app->session->get('user');
                            $user = \App\Models\User::findOne(['id' => $userId]);
                        ?>
                        <div class="flex items-center space-x-4">
                            <div class="relative group">
                                <button class="dropdown-button flex items-center space-x-2 focus:outline-none">
                                    <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">
                                        <?= strtoupper(substr($user->name, 0, 1)) ?>
                                    </div>
                                    <span class="text-gray-700 dark:text-gray-300"><?= $user->name ?></span>
                                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                
                                <div class="dropdown-menu absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-lg shadow-lg py-2 hidden z-50">
                                    <a href="/profile" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                                        Profil
                                    </a>
                                    <a href="/logout" class="block px-4 py-2 text-red-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                        Chiqish
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="flex items-center space-x-4">
                            <a href="/login" class="py-2 px-4 text-gray-500 dark:text-gray-300 hover:text-gray-700 dark:hover:text-gray-100">
                                Kirish
                            </a>
                            <a href="/register" class="py-2 px-4 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">
                                Ro'yxatdan o'tish
                            </a>
                        </div>
                    <?php endif; ?>

                    <a href="https://github.com/your-username/your-repo" class="py-2 px-4 text-gray-500 dark:text-gray-300 hover:text-gray-700 dark:hover:text-gray-100">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <?= $content ?>

    <footer class="bg-white dark:bg-gray-800 mt-12">
        <div class="max-w-6xl mx-auto px-4 py-8">
            <div class="text-center text-gray-600 dark:text-gray-300">
                <p>&copy; <?= date('Y') ?> PHP MVC Framework. Barcha huquqlar himoyalangan.</p>
            </div>
        </div>
    </footer>
</body>
</html> 