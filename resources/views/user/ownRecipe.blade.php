<x-head></x-head>
<x-header page='home' />

<body>
    @foreach ($recipes as $recipe)
        <div class="max-w-sm mx-auto my-10 relative">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="absolute right-0 top-0 m-3">
                    <button id="dropdownButton" onclick="toggleDropdown()"
                        class="text-white hover:text-pink-300 rounded-full focus:outline-none focus:ring">
                        <i class="fas fa-ellipsis-v"></i>
                    </button>
                    <div id="dropdown" class="hidden absolute right-0 mt-8 w-44 bg-white rounded-md shadow-lg z-10">
                        <ul class="py-1 text-gray-800">
                            <a href="{{ route('recipes.edit', $recipe->id) }}"
                                class="block px-4 py-2 text-sm hover:bg-green-300">Edit</a>
                            <li>
                                <form action="{{ route('recipes.destroy', $recipe->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this recipe?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-300 w-full text-left">Delete</button>
                                </form>
                            </li>

                        </ul>
                    </div>
                </div>

                @if ($recipe->images->isNotEmpty()) 
                        @foreach ($recipe->images as $image) 
                        <img src="{{ Storage::url($image->url) }}" alt="Recipe Image"  class="w-full h-56 object-cover" >
                        @endforeach
                        @endif
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800 flex items-center">
                        <i class="fas fa-utensils text-gray-500 mr-2"></i>{{ $recipe->title }}
                    </h3>
                    <p class="text-gray-600 text-sm">{{ \Illuminate\Support\Str::limit($recipe->description, 50, '...') }}</p>
                    <div class="flex items-center mt-4">
                        <i class="fas fa-clock text-gray-400"></i>
                        <span class="ml-2 text-sm text-gray-500">{{ $recipe->duration_preparation }} min</span>
                    </div>
                </div>
            </div>
    @endforeach
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"></script>
    <script>
        function toggleDropdown() {
            var dropdown = document.getElementById("dropdown");
            if (dropdown.classList.contains("hidden")) {
                dropdown.classList.remove("hidden");
            } else {
                dropdown.classList.add("hidden");
            }
        }
    </script>
</body>

</html>
