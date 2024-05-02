<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo e(asset('images/link.png')); ?>" type="image/x-icon ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Cuisénio</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 dark:bg-gray-800">
    <header class="flex items-center justify-between w-full h-16 bg-red-300 text-gray-600 dark:text-gray-300 px-6 shadow-lg fixed top-0 left-0 right-0 z-50">
        <div class="flex items-center">
            <i class="fas fa-utensils text-white mr-2"></i>
            <h1 class="text-white text-2xl hover:text-gray-200 cursor-pointer">Cuisénio</h1>
        </div>

        <div class="block lg:hidden">
            <button id="sidebarToggle" class="text-white focus:outline-none">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <div class="relative hidden lg:block">
            <button id="profileDropdown"
                class="flex items-center space-x-2 bg-red-300 rounded-full p-1 hover:bg-pink-200 focus:outline-none">
                <img class="w-8 h-8 rounded-full" src="https://i.pravatar.cc/300" alt="Profile">
                <p class="hidden lg:block text-white">Chef</p>
                <i class="fas fa-chevron-down text-white"></i>
            </button>
            <div id="dropdownContent" class="hidden absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
                <a href="<?php echo e(route('user.profile')); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                    Edit Profile</a>
                <a href="<?php echo e(route('logout')); ?>"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
            </div>
        </div>
    </header>

    <aside id="sidebar"
        class="hidden lg:fixed lg:z-30 lg:left-0 lg:top-0 lg:block shadow-lg w-80  h-screen bg-white dark:bg-gray-900 py-4 px-6">
        <div class="mb-8">
            <p class="text-xl font-bold text-gray-800 dark:text-white">Cuisénio</p>
        </div>
        <nav class="mt-10">
            <a href="<?php echo e(route('dashboard')); ?>"
                class="flex items-center mt-4 py-2 px-6 bg-orange-500 text-gray-600 rounded-md hover:bg-orange-300">
                <i class="fas fa-chart-pie mr-3"></i>
                Dashboard
            </a>

            <a href="<?php echo e(route('themes.index')); ?>"
                class="flex items-center mt-4 py-2 px-6 text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 rounded-md transition-colors duration-200">
                <i class="fas fa-utensils mr-3"></i>
                Theme Management
            </a>

            <a href="<?php echo e(route('ingrediants.index')); ?>"
                class="flex items-center mt-4 py-2 px-6 text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 rounded-md transition-colors duration-200">
                <i class="fas fa-pepper-hot mr-3"></i>
                Ingredients
            </a>

            <a href="<?php echo e(route('user')); ?>"
                class="flex items-center mt-4 py-2 px-6 text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 rounded-md transition-colors duration-200">
                <i class="fas fa-users mr-3"></i>
                Users-Acces
            </a>
        </nav>

    </aside>
    <main class="relative min-h-screen flex flex-col">



        <?php echo e($slot); ?>


    


    </main>




    <script>
        document.getElementById('sidebarToggle').onclick = function() {
            document.getElementById('sidebar').classList.toggle('hidden');
        }
    </script>

    <script>
        document.getElementById('profileDropdown').onclick = function() {
            document.getElementById('dropdownContent').classList.toggle('hidden');
        }
    </script>

</body>

</html>
<?php /**PATH C:\laragon\www\Cuisenio\resources\views/components/dashboard.blade.php ENDPATH**/ ?>