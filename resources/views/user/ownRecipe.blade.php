

<x-head></x-head>

<x-main-layout>
    @section('douaaa')
    @endsection

</x-main-layout>
<x-header page='' />

<x-head>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"></script>
    <x-header page='home' />
</x-head>


<body>
    <x-flash/>
                <div class="max-w-6xl mx-auto px-4 py-8">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                        @foreach ($recipes as $recipe)
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden relative">
                            <div class="absolute right-0 top-0 m-3">
                                <button id="dropdownButton{{ $recipe->id }}" onclick="toggleDropdown({{ $recipe->id }})"
                                    class="text-white hover:text-pink-300 rounded-full focus:outline-none focus:ring">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div id="dropdown{{ $recipe->id }}" class="hidden absolute right-0 mt-8 w-44 bg-white rounded-md shadow-lg z-10">
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
                                @if ($recipe->image)
                                <img src="{{ Storage::url($recipe->image->url) }}" alt="Recipe Image" class="w-full h-56 object-cover">
                                @endif
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-gray-800">{{ $recipe->title }}</h3>
                                <p class="text-gray-600 text-sm">
                                    {{ \Illuminate\Support\Str::limit($recipe->description, 50, '...') }}
                                    <a href="{{ route('recipes.more', $recipe->id) }}"
                                        class="text-blue-400 hover:text-green-400 font-semibold cursor-pointer">Read
                                        more...</a>
                                </p>
                                <div class="flex items-center mt-4">
                                    @if ($recipe->theme)
                                        <span
                                            class="inline-block mr-4 bg-red-200 rounded-full px-3 py-1 text-sm font-semibold text-red-800 ">
                                            {{ $recipe->theme->name }}
                                        </span>
                                    @endif
                                </div>
                                <div class="flex items-center mt-4">
                                    <i class="fas fa-clock text-gray-400"></i>
                                    <span class="ml-2 text-sm text-gray-500">{{ $recipe->updated_at->format('M d, Y') }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                

  

   <script>
    function toggleDropdown(recipeId) {
        var dropdown = document.getElementById("dropdown" + recipeId);
        dropdown.classList.toggle("hidden");
    }
</script>

</body>

</html>
