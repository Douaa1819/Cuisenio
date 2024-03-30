<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Cuisénio Dashboard</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 dark:bg-gray-800">
    <main class="relative min-h-screen flex flex-col">


     <!-- Sidebar -->
<aside id="sidebar" class="hidden lg:block shadow-lg w-80  h-screen bg-white dark:bg-gray-900 py-4 px-6">
    <div class="mb-8">
        <p class="text-xl font-bold text-gray-800 dark:text-white">Cuisénio</p>
    </div>
    <nav class="mt-10">
        <a href="#" class="flex items-center mt-4 py-2 px-6 bg-orange-500 text-white rounded-md">
            <i class="fas fa-chart-pie mr-3"></i>
            Dashboard
        </a>

        <a href="#" class="flex items-center mt-4 py-2 px-6 text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 rounded-md transition-colors duration-200">
            <i class="fas fa-utensils mr-3"></i>
            Recipes
        </a>

        <a href="#" class="flex items-center mt-4 py-2 px-6 text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 rounded-md transition-colors duration-200">
            <i class="fas fa-pepper-hot mr-3"></i>
            Ingredients
        </a>

        <a href="#" class="flex items-center mt-4 py-2 px-6 text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 rounded-md transition-colors duration-200">
            <i class="fas fa-users mr-3"></i>
            Users
        </a>

        <a href="#" class="flex items-center mt-4 py-2 px-6 text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 rounded-md transition-colors duration-200">
            <i class="fas fa-cog mr-3"></i>
            Settings
        </a>
    </nav>
    
</aside>
<header class="flex items-center justify-between w-full h-16 bg-red-300 text-gray-600 dark:text-gray-300 px-6 shadow-lg fixed top-0 left-0 right-0 z-50">
    <div class="flex items-center">
        <!-- Enhanced Cuisénio title with an icon -->
        <i class="fas fa-utensils text-white mr-2"></i>
        <h1 class="text-white text-2xl hover:text-gray-200 cursor-pointer">Cuisénio</h1>
    </div>

    <!-- Profile Dropdown -->
    <div class="relative">
        <button id="profileDropdown" class="flex items-center space-x-2 bg-pink-500 rounded-full p-1 hover:bg-pink-600 focus:outline-none">
            <img class="w-8 h-8 rounded-full" src="https://i.pravatar.cc/300" alt="Profile">
            <p class="hidden lg:block text-white">profile</p>
            <i class="fas fa-chevron-down text-white"></i>
        </button>
        <div id="dropdownContent" class="hidden absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
        </div>
    </div>
</header>
