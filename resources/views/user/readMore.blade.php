<x-head></x-head>
<x-main-layout>
    @section('douaaa')
    @endsection
</x-main-layout>
<x-header page='home' />
{{-- user.readMore --}}

<body class="bg-gray-50">

    <div id="review"
        class=" hidden min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0
         justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover">
        <div class="absolute bg-black opacity-80 inset-0 z-0"></div>
        <div class="w-full  max-w-lg p-5 relative mx-auto my-auto rounded-xl shadow-lg  bg-white ">
            <h1 class="font-bold text-center text-xl  ">Rate this book.</h1>
            <p class="text-md text-center mt-3">Let others know what you think about <span
                    class="font-semibold text-gray-600">{{ $recipe->id }}</span></p>
            <form method="POST" action="{{ route('reviews.store') }}" class="flex flex-col gap-8">
                @csrf
                @method('POST')
                <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">
                <div class="rating flex justify-center ">
                    <input value="5" name="nbr_stars" id="star5" type="radio">
                    <label title="text" for="star5"></label>
                    <input value="4" name="nbr_stars" id="star4" type="radio">
                    <label title="text" for="star4"></label>
                    <input value="3" name="nbr_stars" id="star3" type="radio">
                    <label title="text" for="star3"></label>
                    <input value="2" name="nbr_stars" id="star2" type="radio">
                    <label title="text" for="star2"></label>
                    <input value="1" name="nbr_stars" id="star1" type="radio">
                    <label title="text" for="star1"></label>
                </div>
                <button class="bg-black text-white rounded-xl py-1 hover:bg-rgay-800">
                    Rate
                </button>
                <button onclick="closeReview()" class="bg-red-600 text-white rounded-xl py-1 hover:bg-rgay-800">
                    Close
                </button>
            </form>
        </div>
    </div>
    </div>
    <main class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="flex flex-col lg:flex-row gap-8">


                <!-- Main content area -->
                <div class="lg:w-3/4">
                    <h2 class="text-3xl font-bold text-center mb-4">{{ $recipe->title }}</h2>
                    @if ($recipe->image)
                        <img src="{{ Storage::url($recipe->image->url) }}" alt="Recipe Image"
                            class="w-full h-56 object-cover rounded-lg shadow-md">
                    @endif

                    <div class="flex items-center gap-4  mt-4 mb-8">
                        <img src="{{ $recipe->user->profile_photo_url ?? 'https://via.placeholder.com/40x40' }}"
                            alt="Author Avatar" class="w-10 h-10 rounded-full">
                        <div>
                            <p class="font-bold">{{ $recipe->user->name }}</p>
                            <p class="text-sm text-gray-500">{{ $recipe->created_at->format('Y/m/d') }}</p>
                        </div>
                    </div>
                    <!-- Description and details -->
                    <div class="my-4">
                        <h3 class="text-xl font-semibold">Description</h3>
                        <p class="text-gray-600 mb-4">
                            {{ $recipe->description }}
                        </p>
                        <h3 class="text-xl font-semibold">Ingredients</h3>
                        <ul>
                            @foreach (explode(',', $recipe->list_ingredients) as $ingredient)
                            <li>{{ $ingredient }}</li>
                            @endforeach
                        </ul>
                        <h3 class="text-xl font-semibold">Steps</h3>
                        <ol>
                            @foreach (explode('.', $recipe->steps) as $step)
                            <li>{{ $step }}</li>
                            @endforeach
                        </ol>
                    </div>

                    <!--  icons -->
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <button class="px-4 py-2 text-red-500 rounded-full transition-colors">
                                <i class="fas fa-heart"></i>
                            </button>
                            <button
                                class="px-4 py-2 text-white bg-blue-500 rounded-full hover:bg-blue-600 transition-colors">
                                <i class="fas fa-comment-alt"></i> Comment
                            </button>
                            <button onclick="addToBooklist({{ $recipe->id }})"
                                class="px-4 py-2 text-white bg-green-500 rounded-full hover:bg-green-600 transition-colors">
                                <i class="fas fa-book-open"></i> Add to Recettelist
                            </button>
                        </div>
                        <button
                            class="px-4 py-2 text-white bg-gray-500 rounded-full hover:bg-gray-600 transition-colors">
                            <a href="{{ route('recipes.download', $recipe->id) }}"
                                class="px-4 py-2 text-white bg-gray-500 rounded-full hover:bg-gray-600 transition-colors">
                                <i class="fas fa-download"></i> Download PDF
                            </a>


                        </button>
                    </div>

                    <!-- Comment form -->
                    <div class="mt-6">
                        <h3 class="text-xl font-semibold mb-2">Add a Comment</h3>
                        <form action="" method="POST" class="space-y-4">
                            @csrf
                            <textarea name="comment" rows="4" class="w-full p-2 border rounded-md focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Write your comment here..."></textarea>
                            <button type="submit"
                                class="px-6 py-2 bg-blue-500 text-white rounded-full hover:bg-blue-600 transition-colors">Submit
                                Comment</button>
                        </form>
                    </div>

                    <!-- Ratings section -->
                    <div class="mt-6">
                        <h3 class="text-xl font-semibold mb-2">Rate this Recipe</h3>
                        <div onclick="openReview()" class="flex items-center cursor-pointer">
                            @for ($i = 0; $i < 5; $i++)
                                @if ($i < $stars)
                                    <i class="fas fa-star text-yellow-500 mr-2"></i>
                                @else
                                    <i class="fas fa-star mr-2"></i>
                                @endif
                            @endfor

                            <span> {{ number_format($nbr_stars, 2, '.', '') }}  ({{ $countStars }}) reviews</span>
                        </div>
                    </div>
                </div>

                <!-- Sidebar with nutritional info and related recipes -->
                <aside class="lg:w-1/4 bg-gray-100 p-4 rounded-lg">
                    <h4 class="font-semibold text-lg mb-2">Nutritional Information</h4>
                    <p>Approximate calories per serving: 250 kcal</p>

                    <h4 class="font-semibold text-lg mt-4 mb-2">Other Recipes</h4>
                    <div class="grid grid-cols-1 gap-4">
                        @foreach ($randomRecipes as $recipe)
                            <div class="flex items-center gap-4">
                                <img src="{{ Storage::url($recipe->image->url) }}" alt="{{ $recipe->title }}"
                                    class="w-20 h-20 object-cover rounded-lg">
                                <div>
                                    <a href="{{ route('recipes.more', $recipe->id) }}"
                                        class="text-red-500 hover:text-red-600 font-medium">{{ $recipe->title }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </aside>
            </div>
        </div>
    </main>

    <x-footer />



</body>

</html>
<style>
    .rating:not(:checked)>input {
        position: absolute;
        appearance: none;
    }

    .rating:not(:checked)>label {
        float: right;
        cursor: pointer;
        font-size: 30px;
        color: #666;
    }

    .rating:not(:checked)>label:before {
        content: '★';
    }

    .rating>input:checked+label:hover,
    .rating>input:checked+label:hover~label,
    .rating>input:checked~label:hover,
    .rating>input:checked~label:hover~label,
    .rating>label:hover~input:checked~label {
        color: #e58e09;
    }

    .rating:not(:checked)>label:hover,
    .rating:not(:checked)>label:hover~label {
        color: #ff9e0b;
    }

    .rating>input:checked~label {
        color: #ffa723;
    }
</style>
<script>
    function openReview() {
        document.getElementById('review').classList.remove('hidden');
    }

    function closeReview() {
        document.getElementById('review').classList.add('hidden');
    }


    function addToBooklist(recipeId) {
        let booklist = JSON.parse(localStorage.getItem('booklist')) || [];
        if (!booklist.includes(recipeId)) {
            booklist.push(recipeId);
            localStorage.setItem('booklist', JSON.stringify(booklist));
            alert('Recipe added to booklist: ' + recipeId);
        }
    }

    function displayBooklist() {
        let booklist = JSON.parse(localStorage.getItem('booklist')) || [];
        let listHtml = booklist.map(id => `<li>Recipe ID: ${id}</li>`).join('');
        document.getElementById('booklistView').innerHTML = listHtml;
    }
</script>
