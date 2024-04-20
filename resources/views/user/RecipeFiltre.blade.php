    <!-- component -->
    <x-head></x-head>

    <x-main-layout>
        @section('douaaa')
        @endsection

    </x-main-layout>
    <x-header page='Home' />
        
    <section class="flex flex-col items-center mt-12 px-5 space-y-6">
        <h5 class="text-3xl font-bold text-center text-black">
            Keep up-to-date with everything happening in the culinary world
        </h5>
        <form class="w-full max-w-lg flex items-center space-x-4 bg-gray-100 rounded-md overflow-hidden border border-gray-300">
            <input type="search" id="search" placeholder="Search articles, news, or recipes..."
                   class="flex-1 p-4 text-sm text-gray-700 placeholder-gray-500 bg-transparent focus:outline-none" />
            <button type="submit" class="px-6 py-4 bg-black text-white text-sm font-medium hover:bg-gray-800 transition-colors">
                Search
            </button>
        </form>
    </section>
    
    <div class="max-w-6xl mx-auto mt-8 px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($recipes as $recipe)
            <article class="flex flex-col bg-white rounded-lg overflow-hidden shadow-lg my-4">
                @if ($recipe->image)
                <img src="{{ Storage::url($recipe->image->url) }}" alt="Recipe Image" class="w-full h-56 object-cover">
                @endif
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-2">{{ $recipe->title }}</h2>
                    <p class="text-gray-700 text-sm">{{ \Illuminate\Support\Str::limit($recipe->description, 100, '...') }}</p>
                    <div class="flex justify-between items-center mt-4">
                        <div class="flex items-center">
                            <i class="fas fa-user-circle text-xl text-gray-700 mr-2"></i>
                            <span class="text-sm text-gray-600">{{ $recipe->author }}</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-calendar-alt text-xl text-gray-700 mr-2"></i>
                            <time class="text-sm text-gray-600">{{ $recipe->created_at->toFormattedDateString() }}</time>
                        </div>
                        <div class="flex items-center mt-4">
                            <i class="fas fa-clock text-gray-400"></i>
                            <span class="ml-2 text-sm text-gray-500">{{ $recipe->duration_preparation }} min</span>
                        </div>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>
    </section>
    
    

    {{-- Foter --}}
    <x-footer></x-footer>