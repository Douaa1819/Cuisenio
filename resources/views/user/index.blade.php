<x-head></x-head>

<x-main-layout>
    @section('douaaa')
    @endsection


<x-header page='Home' />

<!-- Sidebar -->
<aside class="relative">

    <div class="container mx-auto">
        <h2 class="text-4xl font-bold text-center  mt-16 mb-16">Featured in Cuisénio</h2>
        <div class="max-w-6xl mx-auto mb-8 px-4">
            <div class="grid md:grid-cols-3 gap-8">
                @foreach ($featuredRecipes as $recipe)
           
                    <div
                        class="bg-white rounded-lg overflow-hidden shadow hover:shadow-2xl transition duration-300 relative">
                        <a href="{{ route('recipes.more', $recipe->id) }}">
                        <div class="absolute right-2 top-2 text-gray-600 hover:text-red-500 cursor-pointer">
                            <i class="fas fa-heart"></i>
                        </div>
                        @if ($recipe->image)
                            <img src="{{ Storage::url($recipe->image->url) }}" alt="Recipe Image"
                                class="w-full h-56 object-cover">
                        @endif
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 flex items-center">
                                <i class="fas fa-utensils text-gray-500 mr-2"></i>{{ $recipe->title }}
                            </h3>


                            <p class="text-gray-600 text-sm">
                                {{ \Illuminate\Support\Str::limit($recipe->description, 50, '...') }}
                                <a href="{{ route('recipes.more', $recipe->id) }}"
                                    class="text-blue-400 hover:text-gray-600 font-semibold cursor-pointer">Read
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
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            
        </div>
        <div class="text-right">
            <button
                class="overflow-hidden  mr-8 px-4 py-2 mt-10 bg-black text-white border-none rounded-md text-md font-semibold cursor-pointer relative z-10 group">
                <a href="{{ route('viewMore') }}">
                    View More <span
                        class="absolute w-36 h-32 -top-8 -left-2 bg-white rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
                    <span
                        class="absolute w-36 h-32 -top-8 -left-2 bg-pink-200 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left"></span>
                    <span
                        class="absolute w-36 h-32 -top-8 -left-2 bg-red-300 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-1000 duration-500 origin-left"></span>
                    <span
                        class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2 left-4 z-10">Let's
                        Goo ! </span>
                </a>
            </button>
        </div>
    </div>
    </section>


    <!-- Inspiration Thematic Section -->
    <section id="inspiration" class="pt-16 pb-20 px-6 bg-white  ">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-8">Thematic Inspiration</h2>
       
            <div class="flex flex-wrap justify-center gap-10">


                <div class="container mx-auto px-4 py-8">
                    <div class="grid grid-cols-6 gap-4">
                        @foreach ($themes as $theme)
                            @if ($theme->image)
                            <a href="{{ route('filtre', ['theme' => $theme]) }}"
                                    class="flex flex-col items-center transition duration-300 ease-in-out hover:scale-110 group">
                                    <img src="{{ Storage::url($theme->image->url) }}" alt="Theme Image" 
                                        class="w-24 h-24 object-cover rounded-full shadow-md hover:shadow-lg">
                                    <h3 class="text-sm font-semibold mt-2 text-gray-700 group-hover:text-gray-800">
                                        {{ $theme->name }}</h3>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-end">
            <button
                class="overflow-hidden px-4 py-2 mt-5 bg-black text-white border-none rounded-md text-md font-semibold cursor-pointer relative z-10 group">
                <a href="{{ route('theme')}}">
                View More <span
                    class="absolute w-36 h-32 -top-8 -left-2 bg-white rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
                <span
                    class="absolute w-36 h-32 -top-8 -left-2 bg-pink-200 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left"></span>
                <span
                    class="absolute w-36 h-32 -top-8 -left-2 bg-red-300 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-1000 duration-500 origin-left"></span>
                <span
                    class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2 left-4 z-10">Let's
                    Goo ! </span>
                </a>
            </button>
        </div>
    </section>







    <div class="container mx-auto">
        <h2 class="text-4xl font-bold text-center mb-16">Top Recipes</h2>
        <div class="max-w-6xl mx-auto mb-8 px-4">
            <div class="grid md:grid-cols-3 gap-8">
                @foreach ($recipes as $recipe)
              
                    <div
                        class="bg-white rounded-lg overflow-hidden shadow hover:shadow-2xl transition duration-300 relative">
                        <a href="{{ route('recipes.more', $recipe->id) }}">
                        <div class="absolute right-2 top-2 text-gray-600 hover:text-red-500 cursor-pointer">
                            <i class="fas fa-heart"></i>
                        </div>
                        @if ($recipe->image)
                            <img src="{{ Storage::url($recipe->image->url) }}" alt="Recipe Image"
                                class="w-full h-56 object-cover">
                        @endif
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 flex items-center">
                                <i class="fas fa-utensils text-gray-500 mr-2"></i>{{ $recipe->title }}
                            </h3>


                            <p class="text-gray-600 text-sm">
                                {{ \Illuminate\Support\Str::limit($recipe->description, 50, '...') }}
                                <a href="{{ route('recipes.more', $recipe->id) }}"
                                    class="text-blue-400 hover:text-gray-600 font-semibold cursor-pointer">Read
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
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>

        <div class="text-right">
            <button
                class="overflow-hidden  mr-8 px-4 py-2 mt-10 bg-black text-white border-none rounded-md text-md font-semibold cursor-pointer relative z-10 group">
                <a href="{{ route('viewMore') }}">
                    View More <span
                        class="absolute w-36 h-32 -top-8 -left-2 bg-white rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
                    <span
                        class="absolute w-36 h-32 -top-8 -left-2 bg-pink-200 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left"></span>
                    <span
                        class="absolute w-36 h-32 -top-8 -left-2 bg-red-300 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-1000 duration-500 origin-left"></span>
                    <span
                        class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2 left-4 z-10">Let's
                        Goo ! </span>
                </a>
            </button>
        </div>
    </div>
    </section>




    <section class="pt-16 pb-10 px-10">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-16">Check out the latest tips</h2>
            <div class="flex justify-around gap-8">
                <div class="w-full lg:w-5/12 flex flex-col gap-4">

                    @foreach ($firstThreeRecipes as $recipe)
                    <a href="{{ route('recipes.more', $recipe->id) }}">
                    <div
                        class="flex items-center border-b border-gray-300 transition-all duration-300 ease-in hover:border-gray-400 hover:shadow-lg p-4 hover:rounded-lg ">
                        <img src="{{ Storage::url($recipe->image->url) }}" alt="Default Image" class="mr-4  w-28 h-28 object-cover">
                        <div>
                            <h3 class="text-xl font-bold">{{ $recipe->title }}</h3>
                            <p class="mb-4">Day of the Week</p>
                        </div>
                    </div>
                    </a>
                    @endforeach
                </div>


                <div class="w-full lg:w-5/12 flex flex-col gap-4 ">
                    @foreach ($nextThreeRecipes as $recipe)
                    <a href="{{ route('recipes.more', $recipe->id) }}">
                    <div class="flex items-center border-b border-gray-300 transition-all duration-300 ease-in hover:border-gray-400 hover:shadow-lg p-4 hover:rounded-lg ">
                        <img src="{{ Storage::url($recipe->image->url) }}" alt="Default Image" class="mr-4 w-28 h-28 object-cover">
                        <div>
                            <h3 class="text-xl font-bold">{{ $recipe->title }}</h3>
                            <p class="mb-4">Day of the Week</p>
                        </div>
                    </div>
                    </a>
                @endforeach

                    
                </div>
            </div>
            <div class="text-right">
                <a href="{{ route('viewMore') }}">
                <button
               
                    class="overflow-hidden px-4 py-2 mt-10 bg-black text-white border-none rounded-md text-md font-semibold cursor-pointer relative z-10 group">
                    View More <span
                        class="absolute w-36 h-32 -top-8 -left-2 bg-white rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
                    <span
                        class="absolute w-36 h-32 -top-8 -left-2 bg-pink-200 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left"></span>
                    <span
                        class="absolute w-36 h-32 -top-8 -left-2 bg-red-300 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-1000 duration-500 origin-left"></span>
                    <span
                        class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2 left-4 z-10">Let's
                        Goo ! </span>
                </a>
                </button>
            </div>
    </section>




    <section id="inspiration" class="pt-16 pb-20 px-6 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-16">Filter by the ingredients you have available</h2>
            <div class="flex flex-wrap justify-center gap-10">

                <div class="container mx-auto px-4 py-8">
                    <div class="grid grid-cols-6 gap-4">
                        @foreach ($ingrediant as $ingrediant)
                        @if ($ingrediant->image)
                        <a href="{{ route('ingrediant',  $ingrediant)}}" class="flex flex-col items-center transition duration-300 ease-in-out hover:scale-110 group">
                            <img src="{{ Storage::url($ingrediant->image->url) }}" alt="Ingredient Image" class="w-24 h-24 object-cover rounded-full shadow-md hover:shadow-lg">
                                            <h3 class="text-sm font-semibold mt-2 text-gray-700 group-hover:text-gray-800">{{ $ingrediant->name }}</h3>
                                        </a>
                            @endif
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
        <div class="text-right">
            <a href="{{ route('ingredients') }}">
            <button
                class="overflow-hidden px-4 py-2 mt-10 bg-black text-white border-none rounded-md text-md font-semibold cursor-pointer relative z-10 group">
                View More <span
                    class="absolute w-36 h-32 -top-8 -left-2 bg-white rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
                <span
                    class="absolute w-36 h-32 -top-8 -left-2 bg-pink-200 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left"></span>
                <span
                    class="absolute w-36 h-32 -top-8 -left-2 bg-red-300 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-1000 duration-500 origin-left"></span>
                <span
                    class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2 left-4 z-10">Let's
                    Goo ! </span>
            </button>
            </a>
        </div>
    </section>


    
    <div class="container mx-auto px-10 py-16 bg-white">
        <h2 class="text-4xl font-bold text-center mb-16">Recipes of the Season</h2>
        
        <div class="grid md:grid-cols-3 gap-8">
            @foreach ($recipeseason as $season )

            <div
                class="relative shadow-lg hover:shadow-xl transition-shadow duration-300 bg-white rounded-lg overflow-hidden">
                <a href="{{ route('recipes.more',  $season->id) }}">
                <div class="absolute top-2 right-2 text-gray-700 hover:text-red-500 cursor-pointer">
                    <i class="fas fa-heart"></i>
                </div>
                @if ($recipe->image)
                            <img src="{{ Storage::url($season->image->url) }}" alt="Recipe Image"
                                class="w-full h-56 object-cover">
                        @endif
                <div class="p-4">
                    <h3 class="text-xl font-bold mb-2">{{ $season->title}}</h3>
                    <div class="text-yellow-400 mb-2">★★★★☆</div>
                
                </div>
            </a>
    
            </div>
            @endforeach
            
        </div>
        <div class="flex justify-end">
        <button
                class="overflow-hidden px-4 py-2 mt-5 bg-black text-white border-none rounded-md text-md font-semibold cursor-pointer relative z-10 group">
                <a href="{{ route('viewMore') }}">
                View More <span
                    class="absolute w-36 h-32 -top-8 -left-2 bg-white rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
                <span
                    class="absolute w-36 h-32 -top-8 -left-2 bg-pink-200 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left"></span>
                <span
                    class="absolute w-36 h-32 -top-8 -left-2 bg-red-300 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-1000 duration-500 origin-left"></span>
                <span
                    class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2 left-4 z-10">Let's
                    Goo ! </span>
                </a>
            </button>
        </div>
    </div>
    <!-- Footer -->
</x-main-layout>
<x-footer/>
