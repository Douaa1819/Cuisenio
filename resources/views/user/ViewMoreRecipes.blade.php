<!-- component -->
<x-head></x-head>
<script src="
https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js
"></script>

<x-main-layout>
    @section('douaaa')
    @endsection

</x-main-layout>
<x-header page='Home' />

<section class="flex flex-col items-center mt-12 px-5 space-y-6">
    <h5 class="text-3xl md:text-3xl mb-5 mt-3 font-bold text-center text-black">
        Keep up-to-date with everything happening in the culinary world
    </h5>

    <form class="w-full max-w-lg flex items-center space-x-4 bg-gray-100 rounded-md overflow-hidden border border-gray-300">
        <div class="container mx-auto">
            <input type="search" id="search" placeholder="Search articles, news, or recipes..."
                class="flex-1 p-4 text-sm text-gray-700 placeholder-gray-500 bg-transparent focus:outline-none" />
            <div id="search-results"></div>
        </div>
        <!-- Removed type="submit" from the button to prevent form submission -->
        <button type="button"
            class="px-6 py-4 text-white text-sm font-medium hover:bg-gray-800 transition-colors rounded-md">
            <span id="total_records"></span>Search
        </button>
    </form>
    
</section>


{{-- Blog --}}
<div class="max-w-6xl mx-auto mb-8 px-4">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold text-center mb-16"></h2>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach ($recipes as $recipe)
                <div
                    class="bg-white rounded-lg overflow-hidden shadow hover:shadow-2xl transition duration-300 relative">
                    <div class="absolute right-2 top-2 text-gray-600 hover:text-red-500 cursor-pointer">
                        <i class="fas fa-heart"></i>
                    </div>
                    @if ($recipe->image)
                    <img src="{{ Storage::url($recipe->image->url) }}" alt="Recipe Image" class="w-full h-56 object-cover">
                @endif
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 flex items-center">
                            <i class="fas fa-utensils text-gray-500 mr-2"></i>{{ $recipe->title }}
                        </h3>

                        <p class="text-gray-600 text-sm">
                            {{ \Illuminate\Support\Str::limit($recipe->description, 50, '...') }}
                            <a href="{{ route('recipes.more', $recipe->id) }}" class="text-blue-400 hover:text-green-400 font-semibold cursor-pointer">Read more...</a>
                        </p>
                        <div class="flex items-center mt-4">
                            @if ($recipe->theme)
                                <span
                                    class="inline-block mr-4 bg-red-200 rounded-full px-3 py-1 text-sm font-semibold text-red-800 ">
                                    {{ $recipe->theme->name }}
                                </span>
                            @endif
                            <span>
                                <i class="far fa-clock"></i> {{ $recipe->duration_preparation }} min
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>



    {{-- Foter --}}
    <x-footer></x-footer>
    <script>
        $(document).ready(function() {
            $('#search').keyup(function(event) {
                event.preventDefault();  
                var query = $(this).val();
                fetch_customer_data(query);
            });
        
            function fetch_customer_data(query = '') {
                $.ajax({
                    url: "{{ route('action') }}",
                    method: 'GET',
                    data: { query: query },
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        renderRecipes(data);
                    },
                    error: function() {
                        console.error('Error fetching data.');
                    }
                });
            }
        
            function renderRecipes(data) {
                let html = '';
                if (data.length > 0) {
                    data.forEach(recipe => {
                        let imagesHtml = '';
                        if (recipe.images && recipe.images.length > 0) {
                            recipe.images.forEach(image => {
                                imagesHtml += `<img src="/storage/${image.url}" class="h-24 w-24">`;
                            });
                        }
        
                        html += `<div class="recipe-item mt-4 flex space-x-4 px-3">
                            ${imagesHtml}
                            <div class="flex flex-col">
                                <p class="text-black capitalize text-xl hover:underline">${recipe.title}</p>
                                <p class="text-gray-400 text-center text-sm">${recipe.season}</p>
                            </div>
                            <div class="border border-black dark:border-gray-500 my-2"></div>
                        </div>`;
                    });
                } else {
                    html = '<p class="text-center">No Data Found</p>';
                }
                $('#search-results').html(html);
            }
        });
        </script>
        