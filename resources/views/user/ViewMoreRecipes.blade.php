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

    <form
        class="w-full max-w-lg flex items-center space-x-4 bg-gray-100 rounded-md overflow-hidden border border-gray-300">
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
                    class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 ease-in-out relative">
                    <div class="relative">
                        @if ($recipe->image)
                            <img src="{{ Storage::url($recipe->image->url) }}" alt="Recipe Image"
                                class="w-full h-56 object-cover">
                        @endif
                        @if (Auth::user()->favoris->contains('recipe_id', $recipe->id))
                            @php
                                $favoris = Auth::user()
                                    ->favoris->where('recipe_id', $recipe->id)
                                    ->first();
                            @endphp
                            <form method="POST">
                                @csrf
                                @method('DELETE')
                                <button onclick="removefavori(this,'{{ $favoris->id }}')"
                                    class="absolute right-2 top-2 text-red-500 focus:outline-none hover:text-red-600 p-2 rounded-full text-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                        viewBox="0 0 48 48">
                                        <path fill="currentColor"
                                            d="M34 9c-4.2 0-7.9 2.1-10 5.4C21.9 11.1 18.2 9 14 9C7.4 9 2 14.4 2 21c0 11.9 22 24 22 24s22-12 22-24c0-6.6-5.4-12-12-12" />
                                    </svg>
                                </button>
                            </form>
                        @else
                            <form method="POST">
                                @csrf
                                @method('POST')
                                <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">
                                <button onclick="addfavori(this)"
                                    class="absolute right-2 top-2 text-red-500 focus:outline-none hover:text-red-600    p-2 rounded-full text-lg">
                                    <i class="far fa-heart "></i>
                                </button>
                            </form>
                        @endif

                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-1">
                            {{ $recipe->title }}
                        </h3>
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <img src="{{ asset('https://via.placeholder.com/40x40') }}" alt="User avatar"
                                class="w-6 h-6 rounded-full mr-2">
                            By {{ $recipe->user->name }} on :<time
                                class=" mr-2 ml-2 ">{{ $recipe->created_at->format('M d, Y') }}</time>
                        </div>
                        <p class="text-gray-600">
                            {{ \Illuminate\Support\Str::limit($recipe->description, 100, '...') }}
                            <a href="{{ route('recipes.more', $recipe->id) }}"
                                class="text-blue-500 hover:text-blue-600 font-semibold">Read more</a>
                        </p>
                        <div class="flex items-center mt-2 text-gray-700">
                            @if ($recipe->theme)
                                <span
                                    class="bg-blue-200  mr-36 text-blue-800 text-xs font-semibold  px-2.5 py-0.5 rounded">
                                    {{ $recipe->theme->name }}
                                </span>
                            @endif
                            <span class="flex items-center">
                                <i class="far fa-clock mr-1"></i> {{ $recipe->duration_preparation }} min
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-8">
            {{ $recipes->links() }}
        </div>
    </div>
</div>



<x-footer></x-footer>


</body>
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
                data: {
                    query: query
                },
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
                    let imageHtml = '';
                    if (recipe.image) {
                        imageHtml = `<img src="/storage/${recipe.image.url}" class="h-24 w-24">`;
                    }

                    html += `<div class="recipe-item mt-4 flex space-x-4 px-3">
                        ${imageHtml}
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



    function addfavori(button) {
        var form = button.closest('form')
        $(form).on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: "{{ route('favoris.store') }}",
                data: jQuery(form).serialize(),
                method: 'POST',
                success: function(result) {
                    const newForm = `
                            @csrf
                            @method('DELETE')
                            <button onclick="removefavori(this,${result.favori})" class="absolute right-2 top-2 text-red-500 focus:outline-none hover:text-red-600    p-2 rounded-full text-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 48 48">
                                        <path fill="currentColor" d="M34 9c-4.2 0-7.9 2.1-10 5.4C21.9 11.1 18.2 9 14 9C7.4 9 2 14.4 2 21c0 11.9 22 24 22 24s22-12 22-24c0-6.6-5.4-12-12-12"/>
                                    </svg>
                            </button>`;
                    $(form).html(newForm);
                    $(form).unbind();
                },
            });

        })
    }




    function removefavori(button, id) {
        var form = button.closest('form');

        $(form).on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: '{{ route('favoris.destroy',':id') }}'.replace(':id',id),
                data: jQuery(form).serialize(),
                method: 'DELETE',
                success: function(result) {
                    const newForm = `
                        @csrf
                        @method('post')
                        <input type="hidden" value="${result.recipe}" name="recipe_id">
                        <button onclick="addfavori(this)" class="absolute right-2 top-2 text-red-500 focus:outline-none hover:text-red-600  p-2 rounded-full text-lg">
                            <i class="far fa-heart "></i>
                        </button>`;

                    $(form).html(newForm);
                    $(form).unbind();
                },

            });
        })


    }
</script>
