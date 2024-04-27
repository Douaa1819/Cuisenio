

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/licon.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/link.png') }}" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Cuisénio</title>
  
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <x-head/>
    <x-header page="favoris" />

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-8">My Favorite Recipes</h1>
    <div class="grid md:grid-cols-3 gap-6">
        @foreach ($favoriteRecipes as $recipe)
            <div class="bg-white rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 ease-in-out overflow-hidden">
                <img src="{{ Storage::url($recipe->image->url ?? 'default.jpg') }}" alt="Recipe Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">{{ $recipe->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ \Illuminate\Support\Str::limit($recipe->description, 100, '...') }}</p>
                    <a href="{{ route('recipes.more', $recipe->id) }}"
                        class="text-blue-500 hover:text-blue-600 font-semibold">Read more</a>
                </div>
            </div>
            @endforeach
            @if(empty($favoriteRecipes))
                <p class="text-center text-gray-500 text-xl col-span-3">No favorite recipes added yet.</p>
            @endif
    </div>
</div>

