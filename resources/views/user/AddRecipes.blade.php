<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Recipe</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto p-8">
        <form action="/submit-recipe" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-xl font-bold text-gray-700">Add a New Recipe</h1>
                <a href="/" class="text-red-500 hover:text-red-600">
                    <i class="fas fa-home fa-lg"></i> Home
                </a>
            </div>

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="title" name="title" required class="focus:ring-red-300 focus:border-red-300 block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md" placeholder="Delicious Lasagna">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="4" required class="focus:ring-red-300 focus:border-red-300 block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md" placeholder="Describe your recipe"></textarea>
            </div>

            <div class="mb-4">
                <label for="theme" class="block text-sm font-medium text-gray-700">Theme</label>
                <select id="theme" name="theme" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-300 focus:border-red-300">
                    <option value="">Select a Theme</option>
                    <option value="1">Italian</option>
                    <option value="2">Mexican</option>
                    <option value="3">Comfort Food</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="ingredients" class="block text-sm font-medium text-gray-700">Ingredients</label>
                <!-- Placeholder for ingredient checkboxes, dynamically generate based on available ingredients -->
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <input type="checkbox" id="ingredient1" name="ingredients[]" value="Tomatoes">
                        <label for="ingredient1">Tomatoes</label>
                    </div>
                    <div>
                        <input type="checkbox" id="ingredient2" name="ingredients[]" value="Cheese">
                        <label for="ingredient2">Cheese</label>
                    </div>
                    <div>
                        <input type="checkbox" id="ingredient3" name="ingredients[]" value="Basil">
                        <label for="ingredient3">Basil</label>
                    </div>
                    <!-- Add more checkboxes as needed -->
                </div>
            </div>

            <div class="mb-4">
                <label for="steps" class="block text-sm font-medium text-gray-700">Steps</label>
                <textarea id="steps" name="steps" rows="4" required class="focus:ring-red-300 focus:border-red-300 block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md" placeholder="Enter the steps"></textarea>
            </div>

            <div class="mb-4">
                <label for="level" class="block text-sm font-medium text-gray-700">Difficulty Level</label>
                <select id="level" name="level" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-300 focus:border-red-300">
                    <option value="easy">Easy</option>
                    <option value="average">Average</option>
                    <option value="advance">Advanced</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="season" class="block text-sm font-medium text-gray-700">Season</label>
                <select id="season" name="season" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-300 focus:border-red-300">
                    <option value="winter">Winter</option>
                    <option value="spring">Spring</option>
                    <option value="summer">Summer</option>
                    <option value="autumn">Autumn</option>
                </select>
            </div>

            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded shadow">
                <i class="fas fa-paper-plane"></i> Submit Recipe
            </button>
        </form>
    </div>
</body>
</html>
