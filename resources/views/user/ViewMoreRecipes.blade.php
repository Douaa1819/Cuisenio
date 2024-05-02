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
        <div id="recipes" class="grid md:grid-cols-3 gap-8">
            @foreach ($recipes as $recipe)
                <div
                    class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 ease-in-out relative">
                    <div class="relative">
                        <a href="{{ route('recipes.more', $recipe->id) }}">
                            @if ($recipe->image)
                                <img src="{{ Storage::url($recipe->image->url) }}" alt="Recipe Image"
                                    class="w-full h-56 object-cover">
                            @endif
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start w-full">
                            <h3 class="text-lg font-semibold text-gray-800 mb-1">
                                {{ $recipe->title }}
                            </h3>
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
                                        class="flex mt-1 focus:outline-none">
                                        <svg class="text-red-600 mr-1" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" width="24" height="24" color="#000000"
                                            fill="none">
                                            <path
                                                d="M8.26872 8.49708C9.60954 7.67461 10.7798 8.00606 11.4828 8.53401C11.7711 8.75048 11.9152 8.85871 12 8.85871C12.0848 8.85871 12.2289 8.75048 12.5172 8.53401C13.2202 8.00606 14.3905 7.67461 15.7313 8.49708C17.491 9.57647 17.8891 13.1374 13.8302 16.1417C13.0571 16.7139 12.6706 17 12 17C11.3294 17 10.9429 16.7139 10.1698 16.1417C6.11086 13.1374 6.50903 9.57647 8.26872 8.49708Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                            <path
                                                d="M22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12Z"
                                                stroke="currentColor" stroke-width="1.5" />
                                        </svg><span id="countLiked">{{ $recipe->favoris()->count() }}</span>

                                    </button>
                                </form>
                            @else
                                <form method="POST">
                                    @csrf
                                    @method('POST')
                                    <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">

                                    <button onclick="addfavori(this)" class="flex mt-1 focus:outline-none ">
                                        <svg class="mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            width="24" height="24" color="#000000" fill="none">
                                            <path
                                                d="M8.26872 8.49708C9.60954 7.67461 10.7798 8.00606 11.4828 8.53401C11.7711 8.75048 11.9152 8.85871 12 8.85871C12.0848 8.85871 12.2289 8.75048 12.5172 8.53401C13.2202 8.00606 14.3905 7.67461 15.7313 8.49708C17.491 9.57647 17.8891 13.1374 13.8302 16.1417C13.0571 16.7139 12.6706 17 12 17C11.3294 17 10.9429 16.7139 10.1698 16.1417C6.11086 13.1374 6.50903 9.57647 8.26872 8.49708Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                            <path
                                                d="M22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12Z"
                                                stroke="currentColor" stroke-width="1.5" />
                                        </svg><span id="countUnliked">{{ $recipe->favoris()->count() }}</span>
                                    </button>
                                </form>
                            @endif
                        </div>

                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <img src="{{ $recipe->user->profile_photo_url ?? asset('images/cheef.jpg') }}"
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
                        </a>
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
                    if (data.length > 0) {
                        document.getElementById("recipes").innerHTML = "";
                        for (var i = 0; i < data.length; i++) {
                            createRecipe(data[i]);
                        }
                    } else {
                        document.getElementById("recipes").innerHTML =
                            `'<p class="text-center">No Data Found</p>'`;
                    }
                },
                error: function() {
                    console.error('Error fetching data.');
                }
            });
        }

      
    });

    function createRecipe(recipe) {
      const cardDiv = document.createElement("div");
      cardDiv.setAttribute('class', 'bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 ease-in-out relative');
      const cardContent = `
      <div class="relative">
                        <a href="">
                            ${recipe.image ? `
                                <img src="{{ Storage::url('${recipe.image.url}') }}" alt="Recipe Image"
                                    class="w-full h-56 object-cover">
                            ` : 
                            ``}
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start w-full">
                            <h3 class="text-lg font-semibold text-gray-800 mb-1">
                                ${recipe.title}
                            </h3>                          
                        </div>

                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <img src="{{asset('images/cheef.jpg') }}"
                                class="w-6 h-6 rounded-full mr-2">
                            By ${recipe.user.name} on :<time
                                class=" mr-2 ml-2 ">{{ $recipe->created_at->format('M d, Y') }}</time>
                        </div>
                        <p class="text-gray-600">
                            ${recipe.description.substring(0, 100) + '...'}
                            <a href=""
                                class="text-blue-500 hover:text-blue-600 font-semibold">Read more</a>
                        </p>
                        <div class="flex items-center mt-2 text-gray-700">
                            ${recipe.theme ? `
                                <span
                                    class="bg-blue-200  mr-36 text-blue-800 text-xs font-semibold  px-2.5 py-0.5 rounded">
                                    ${recipe.theme.name}
                                </span>
                            ` : ``}
                            <span class="flex items-center">
                                <i class="far fa-clock mr-1"></i> ${recipe.duration_preparation} min
                            </span>
                        </div>
                        </a>
                    </div>
    `;
    cardDiv.innerHTML = cardContent;
      document.getElementById('recipes').appendChild(cardDiv);
    }

    function addfavori(button) {
        var form = button.closest('form')
        $(form).on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: "{{ route('favoris.store') }}",
                data: jQuery(form).serialize(),
                method: 'POST',
                success: function(result) {
                    var likeCount = parseInt(document.getElementById('countUnliked').textContent);
                    const newForm = `
                    @csrf
                                @method('DELETE')
                                <button onclick="removefavori(this, ${result.favori})"
                                    class="flex mt-1 focus:outline-none">
                                     <svg class="text-red-600 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
                                        <path d="M8.26872 8.49708C9.60954 7.67461 10.7798 8.00606 11.4828 8.53401C11.7711 8.75048 11.9152 8.85871 12 8.85871C12.0848 8.85871 12.2289 8.75048 12.5172 8.53401C13.2202 8.00606 14.3905 7.67461 15.7313 8.49708C17.491 9.57647 17.8891 13.1374 13.8302 16.1417C13.0571 16.7139 12.6706 17 12 17C11.3294 17 10.9429 16.7139 10.1698 16.1417C6.11086 13.1374 6.50903 9.57647 8.26872 8.49708Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <path d="M22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12Z" stroke="currentColor" stroke-width="1.5" />
                                    </svg><span id="countLiked">${likeCount + 1}</span>
                                    

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
                url: '{{ route('favoris.destroy', ':id') }}'.replace(':id', id),
                data: jQuery(form).serialize(),
                method: 'DELETE',
                success: function(result) {
                    var likeCount = parseInt(document.getElementById('countLiked').textContent);
                    const newForm = `
                         @csrf
                                @method('POST')
                                <input type="hidden" name="recipe_id" value="${result.recipe}">
                                
                                <button onclick="addfavori(this)"
                                    class="flex mt-1 focus:outline-none ">
                                    <svg class="mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
                                        <path d="M8.26872 8.49708C9.60954 7.67461 10.7798 8.00606 11.4828 8.53401C11.7711 8.75048 11.9152 8.85871 12 8.85871C12.0848 8.85871 12.2289 8.75048 12.5172 8.53401C13.2202 8.00606 14.3905 7.67461 15.7313 8.49708C17.491 9.57647 17.8891 13.1374 13.8302 16.1417C13.0571 16.7139 12.6706 17 12 17C11.3294 17 10.9429 16.7139 10.1698 16.1417C6.11086 13.1374 6.50903 9.57647 8.26872 8.49708Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <path d="M22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12Z" stroke="currentColor" stroke-width="1.5" />
                                    </svg><span id="countUnliked">${likeCount - 1}</span>
                                </button>`;

                    $(form).html(newForm);
                    $(form).unbind();
                },

            });
        })


    }
</script>
