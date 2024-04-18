<x-head></x-head>

<x-main-layout>
  @section("douaaa")



  @endsection

</x-main-layout>
<x-header page='home' />

</head>

<body class="bg-gray-50">
    <main class="container mx-auto px-4 py-8">
        

        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="flex flex-col lg:flex-row gap-8">
                <div class="lg:w-3/4">
                    <h2 class="text-3xl font-bold text-center mb-4">{{ $recipe->title }}</h2>
                    @foreach ($recipe->images as $image)
                    <img src="{{ Storage::url($image->url) }}" alt="Recipe Image"
                        class="w-full rounded-lg mb-6 h-56 object-cover">
                @endforeach
                    
                    <div class="flex justify-between items-center mb-4 text-gray-700">
                        <div>
                            <button class="text-red-500 hover:text-red-600">
                                <i class="fas fa-heart"></i> Favoris
                            </button>
                            <button class="text-red-500 hover:text-red-600 ml-4">
                                <i class="fas fa-comment-alt"></i> Commenter
                            </button>
                        </div>
                        <div>
                            <button class="text-red-500 hover:text-red-600 ml-4">
                                <i class="fas fa-print"></i> Imprimer
                            </button>
                        </div>
                    </div>
                    <div class="flex gap-2 mb-4">
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a3c7ef5181ee5c1ad23c7937e6ea4baf3a77710354bfd433e5c0a0cc919391c9?apiKey=93bb9bcd81d443648999334442ead41e&" alt="Author avatar" class="w-10 h-10 rounded-full">
                        <div>
                            <p class="font-bold">John Smith</p>
                            <p class="text-sm text-gray-500">15 March 2022</p>
                        </div>
                    </div>
    

                    <h3 class="text-xl mb-2  font-semibold">description</h3>
                    <p class="text-gray-600 mb-8 text-sm">
                        {{ $recipe->description }}
                    </p>
                    
                    </ul>
                    <h3 class="text-xl font-semibold">Ingredients</h3>
                    <ul class="list-disc pl-5 mb-4">
                        {{ $recipe->list_ingredients}}
                    </ul>
    
                    <h3 class="text-xl font-semibold">steps</h3>
                    <ol class="list-decimal pl-5 mb-4">
                        <li> {{ $recipe->steps}}</li>
                    </ol>
    
                    <div class="flex justify-end items-center">
                        <div class="flex items-center text-gray-700">
                            <i class="fas fa-star text-yellow-500 mr-2"></i>
                            <span>4.8 (250)</span>
                        </div>
                    </div>
                </div>
                
                <aside class="lg:w-1/4 bg-gray-100 p-4 rounded-lg">
                    <h4 class="font-semibold text-lg mb-2">Nutritional Information</h4>
                    <p>Approximate calories per serving: 250 kcal</p>
                    
                    <h4 class="font-semibold text-lg mt-4 mb-2">Other Recipes</h4>
                    <ul>
                        <li><a href="#" class="text-red-500 hover:text-red-600">Vegetable Stir Fry</a></li>
                        <!-- More recipes -->
                    </ul>
                </aside>
            </div>
        </div>
    </main>
    
    <footer class="bg-white shadow-md py-4 mt-8">
        <div class="container mx-auto text-center">
            <p class="text-gray-700">© 2023 Recettes Gourmandes. All rights reserved.</p>
        </div>
    </footer>
    
    </body>
    </html>