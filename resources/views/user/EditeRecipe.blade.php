<x-head></x-head>
<x-header page='home' />

<body class="bg-gray-100">
    @if (session('success'))
        <div class="bg-green-500 text-white flex items-center w-max max-w-sm px-4 py-4 rounded" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 shrink-0 fill-white inline mr-2" viewBox="0 0 512 512">
                <ellipse cx="256" cy="256" fill="#fff" data-original="#fff" rx="256" ry="255.832" />
                <path class="fill-green-500"
                    d="m235.472 392.08-121.04-94.296 34.416-44.168 74.328 57.904 122.672-177.016 46.032 31.888z"
                    data-original="#ffffff" />
            </svg>
            <span class="block sm:inline text-sm font-semibold mr-4">Add successfully</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 cursor-pointer shrink-0 fill-white ml-auto"
                viewBox="0 0 320.591 320.591">
                <path
                    d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                    data-original="#000000" />
                <path
                    d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                    data-original="#000000" />
            </svg>
        </div>
        </div>
    @endif
    @if ($errors->any())
        <div class="bg-red-500 text-white flex items-center w-max max-w-sm px-4 py-4 rounded" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 shrink-0 fill-white inline mr-2" viewBox="0 0 32 32">
                <path
                    d="M16 1a15 15 0 1 0 15 15A15 15 0 0 0 16 1zm6.36 20L21 22.36l-5-4.95-4.95 4.95L9.64 21l4.95-5-4.95-4.95 1.41-1.41L16 14.59l5-4.95 1.41 1.41-5 4.95z"
                    data-original="#ea2d3f" />
            </svg>
            <span class="block sm:inline text-sm font-semibold mr-4">Something went wrong</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 cursor-pointer shrink-0 fill-white ml-auto"
                viewBox="0 0 320.591 320.591">
                <path
                    d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                    data-original="#000000" />
                <path
                    d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                    data-original="#000000" />
            </svg>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="ml-24 ">
        <a href="">
            <i class="fa-solid fa-backward fa-2xl"></i>
        </a>
    </div>
    <div class="max-w-4xl mx-auto p-8">
        <form action="{{ route('recipes.update', $recipe) }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex justify-between items-center mb-6">


                <h1 class="text-xl font-bold text-gray-700">Edite Recipe</h1>
                <div>
                    <a href="/" class="text-red-500 hover:text-red-600 mr-4">
                        <i class="fas fa-home fa-lg"></i> Home /
                    </a>
                    <a href="{{ route('My.recipe') }}" class="text-red-500 hover:text-red-600">
                        <i class="fas fa-utensils fa-lg"></i>My Recipes
                    </a>
                </div>
            </div>

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="title" name="title" required
                    class="focus:ring-red-300 focus:border-red-300 block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md"
                    value="{{ $recipe->title }}" placeholder="Delicious Lasagna">
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
                        @if ($recipe->theme->id == $theme->id)
                            <option value="{{ $theme->id }}" selected>{{ $theme->name }}</option>
                        @endif
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
                            @if (in_array($recipe->ingredient->name, $ingredient->name))
                                <div>
                                    <!-- Utilisez l'ID de l'ingrédient comme valeur -->
                                    <input type="checkbox" id="ingredient{{ $index }}" name="ingredients[]"
                                        value="{{ $ingredient->id }}" checked>
                                    <label for="ingredient{{ $index }}">{{ $ingredient->name }}</label>
                                </div>
                            @endif
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
                    <option></option>
                    <option value="easy">Easy</option>
                    <option value="average">Average</option>
                    <option value="advance">Advanced</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="season" class="block text-sm font-medium text-gray-700">Season</label>
                <select id="season" name="season" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-300 focus:border-red-300">
                    <option></option>
                    <option value="All season">All Season</option>
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
