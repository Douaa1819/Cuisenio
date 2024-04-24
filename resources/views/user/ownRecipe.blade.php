

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
                                    <span class="ml-2 text-sm text-gray-500">{{ $recipe->updated_at }}s</span>
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
