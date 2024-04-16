<x-head></x-head>
<x-header page='home' />

<body class="bg-gray-100">
    <div class="ml-24 ">
    <a href="">
        <i class="fa-solid fa-backward fa-2xl"></i>
    </a>
</div>
    <div class="max-w-4xl mx-auto p-8">
        <form action="{{ route('recipe.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg"enctype="multipart/form-data">
            @csrf
            
            <div class="flex justify-between items-center mb-6">
          
                
                <h1 class="text-xl font-bold text-gray-700">Add a New Recipe</h1>
                <div>
                    @if (session('success'))
                    <div class="p-3 bg-green-300 text-green-800 rounded shadow-sm mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="p-3 bg-red-300 text-red-800 rounded shadow-sm mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <a href="/" class="text-red-500 hover:text-red-600 mr-4">
                        <i class="fas fa-home fa-lg"></i> Home  /
                    </a>
                    <a href="{{ route('recipe')}}" class="text-red-500 hover:text-red-600">
                        <i class="fas fa-utensils fa-lg"></i>My Recipes
                    </a>
                </div>
            </div>

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="title" name="title" required
                    class="focus:ring-red-300 focus:border-red-300 block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md"
                    placeholder="Delicious Lasagna">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="4" required
                    class="focus:ring-red-300 focus:border-red-300 block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md"
                    placeholder="Describe your recipe"></textarea>
            </div>

            <div class="mb-4">
                <label for="theme" class="block text-sm font-medium text-gray-700">Theme</label>
                <select id="theme" name="theme_id" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-300 focus:border-red-300">
                    <option value="">Select a Theme</option>
                    @foreach ($themes as $theme)
                        <option value="{{ $theme->id }}">{{ $theme->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="list_ingredients" class="block text-sm font-medium text-gray-700">Liste
                    d'ingrédients</label>
                <textarea id="list_ingredients" name="list_ingredients"
                    class="focus:ring-red-300 focus:border-red-300 block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md"
                    placeholder="Listez les ingrédients, séparés par des virgules ou sauts de ligne"></textarea>
            </div>

            <div class="mb-4">
                <div class="mb-4">
                    <label for="ingredients" class="block text-sm font-medium text-gray-700">Ingredients</label>
                    <div class="grid grid-cols-3 gap-4">
                        @foreach ($ingrediants as $index => $ingredient)
                            <div>
                                <!-- Utilisez l'ID de l'ingrédient comme valeur -->
                                <input type="checkbox" id="ingredient{{ $index }}" name="ingredients[]"
                                    value="{{ $ingredient->id }}">
                                <label for="ingredient{{ $index }}">{{ $ingredient->name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>


            </div>

            <div class="mb-4">
                <label for="steps" class="block text-sm font-medium text-gray-700">Steps</label>
                <textarea id="steps" name="steps" rows="4" required
                    class="focus:ring-red-300 focus:border-red-300 block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md"
                    placeholder="Enter the steps"></textarea>
            </div>
            <div class="font-[sans-serif] max-w-md mx-auto">
                <label class="text-sm text-black mb-2 block">Upload file</label>
                <input type="file" name="image"
                    class="w-full text-black text-sm bg-white border file:cursor-pointer cursor-pointer file:border-0 file:py-2.5 file:px-4 file:bg-gray-100 file:hover:bg-gray-200 file:text-black rounded" />
                <p class="text-xs text-gray-400  mb-5 mt-2">PNG, JPG SVG, WEBP, and GIF are Allowed.</p>
            </div>

            <div class="mb-4">
                <label for="duration_preparation" class="block text-sm font-medium text-gray-700">Durée de préparation
                    (en minutes)</label>
                <input type="number" id="duration_preparation" name="duration_preparation" 
                    class="focus:ring-red-300 focus:border-red-300 block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md"
                    placeholder="Entrez la durée de préparation en minutes">
            </div>
            <div class="mb-4">
                <label for="level" class="block text-sm font-medium text-gray-700">Difficulty Level</label>
                <select id="level" name="level" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-300 focus:border-red-300">
                    <option value="easy">Easy</option>
                    <option value="average">Average</option>
                    <option value="advance">Advanced</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="season" class="block text-sm font-medium text-gray-700">Season</label>
                <select id="season" name="season" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-300 focus:border-red-300">
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