<x-head></x-head>

<x-main-layout>
  @section("douaaa")



  @endsection

</x-main-layout>
<x-headeer page='home' />

</head>

<body class="bg-gray-50">

    <main class="container mx-auto px-4 py-8">
        <article class="flex flex-wrap md:flex-nowrap gap-10">
            <div class="md:flex-1">
                <h2 class="text-3xl font-bold text-center mb-4 text-red-500">Riz Frit Japonais Sain</h2>
                
                <div class="flex justify-between items-center">
                    <div class="flex gap-4">
                        <button class="text-red-500 hover:text-red-600">
                            <i class="fas fa-heart"></i> Add to Favorites
                        </button>
                        <button class="text-red-500 hover:text-red-600">
                            <i class="fas fa-comment"></i> Comment
                        </button>
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-500"></i>
                            <span>4.5 (200)</span>
                        </div>
                    </div>
                    <div class="flex gap-5 justify-end">
                        <a href="#" class="text-red-300 hover:text-red-500">
                            <i class="fas fa-share-alt"></i>
                        </a>
                        <a href="#" class="text-red-300 hover:text-red-500">
                            <i class="fas fa-print"></i>
                        </a>
                    </div>
                </div>
                
                <img src="https://via.placeholder.com/600x400" alt="Riz Frit Japonais" class="w-full rounded-lg mb-6">
                
                <p class="p-5 text-gray-700 mb-6">Commencez votre journée avec ce bol de petit déjeuner énergisant et sain, plein de saveurs fraîches et de nutriments pour démarrer votre matinée. Cette recette apporte une touche japonaise au riz frit classique, la rendant unique.</p>
                
                <!-- Ingredients, Instructions, Nutrition, Comments -->
                <div class="space-y-6">
                    <section>
                        <h3 class="text-2xl font-semibold">Ingredients</h3>
                        <ul class="list-disc pl-5">
                            <li>1 cup of cooked rice</li>
                            <li>1 tablespoon of olive oil</li>
                            <!-- More ingredients -->
                        </ul>
                    </section>
    
                    <section>
                        <h3 class="text-2xl font-semibold">Instructions</h3>
                        <ol class="list-decimal pl-5">
                            <li>Heat olive oil in a large skillet.</li>
                            <!-- More instructions -->
                        </ol>
                    </section>
    
                    <section>
                        <h3 class="text-2xl font-semibold">Nutritional Information</h3>
                        <p>Approximate calories per serving: 250 kcal</p>
                    </section>
    
                    <section>
                        <h3 class="text-2xl font-semibold">Comments</h3>
                        <textarea class="form-textarea mt-1 block w-full rounded-md border-gray-300 shadow-sm" rows="3" placeholder="Write a comment..."></textarea>
                        <button class="mt-2 px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Post Comment</button>
                    </section>
                </div>
            </div>
        </article>
    </main>
    
    <x-footer></x-footer>
    
    </body>
    </html>