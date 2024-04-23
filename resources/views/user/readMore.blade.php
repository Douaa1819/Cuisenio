<x-head></x-head>
<x-main-layout>
  @section("douaaa")
  @endsection
</x-main-layout>
<x-header page='home' />
{{-- user.readMore --}}
<body class="bg-gray-50">
    <button onclick="sendBooklistToServer()" class="bg-black w-full text-white">Send Booklist to Server</button>
    <main class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="flex flex-col lg:flex-row gap-8">
                

                <!-- Main content area -->
                <div class="lg:w-3/4">
                    <h2 class="text-3xl font-bold text-center mb-4">{{ $recipe->title }}</h2>
                    @if ($recipe->image)
                    <img src="{{ Storage::url($recipe->image->url) }}" alt="Recipe Image" class="w-full h-56 object-cover rounded-lg shadow-md">
                    @endif
                    
                    <div class="flex items-center gap-4  mt-4 mb-8">
                        <img src="{{ $recipe->user->profile_photo_url ?? 'https://via.placeholder.com/40x40' }}" alt="Author Avatar" class="w-10 h-10 rounded-full">
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
                        <ul class="list-disc pl-5 mb-4">
                            {{ $recipe->list_ingredients }}
                        </ul>
                        <h3 class="text-xl font-semibold">Steps</h3>
                        <ol class="list-decimal pl-5 mb-4">
                            <li>{{ $recipe->steps }}</li>
                        </ol>
                    </div>

                    <!--  icons -->
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <button class="px-4 py-2 text-red-500 rounded-full transition-colors">
                                <i class="fas fa-heart"></i> 
                            </button>
                            <button class="px-4 py-2 text-white bg-blue-500 rounded-full hover:bg-blue-600 transition-colors">
                                <i class="fas fa-comment-alt"></i> Comment
                            </button>
                            <button onclick="addToBooklist({{ $recipe->id }})" class="px-4 py-2 text-white bg-green-500 rounded-full hover:bg-green-600 transition-colors">
                                <i class="fas fa-book-open"></i> Add to Recettelist
                            </button>                            
                        </div>
                        <button   class="px-4 py-2 text-white bg-gray-500 rounded-full hover:bg-gray-600 transition-colors">
                            <a href="{{ route('recipes.download', $recipe->id) }}" class="px-4 py-2 text-white bg-gray-500 rounded-full hover:bg-gray-600 transition-colors">
                                <i class="fas fa-download"></i> Download PDF
                            </a>
                            
                            
                        </button>
                    </div>

                    <!-- Comment form -->
                    <div class="mt-6">
                        <h3 class="text-xl font-semibold mb-2">Add a Comment</h3>
                        <form action="" method="POST" class="space-y-4">
                            @csrf
                            <textarea name="comment" rows="4" class="w-full p-2 border rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Write your comment here..."></textarea>
                            <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-full hover:bg-blue-600 transition-colors">Submit Comment</button>
                        </form>
                    </div>

                    <!-- Ratings section -->
                    <div class="mt-6">
                        <h3 class="text-xl font-semibold mb-2">Rate this Recipe</h3>
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-500 mr-2"></i>
                            <i class="fas fa-star text-yellow-500 mr-2"></i>
                            <i class="fas fa-star text-yellow-500 mr-2"></i>
                            <i class="fas fa-star text-yellow-500 mr-2"></i>
                            <i class="fas fa-star text-gray-300 mr-2"></i>
                            <span>4.0 (200 reviews)</span>
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
                            <img src="{{ Storage::url($recipe->image->url) }}" alt="{{ $recipe->title }}" class="w-20 h-20 object-cover rounded-lg">
                            <div>
                                <a href="{{ route('recipes.more', $recipe->id) }}" class="text-red-500 hover:text-red-600 font-medium">{{ $recipe->title }}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </aside>
            </div>
        </div>
    </main>
    
    <x-footer/>
</body>
</html>

<script>
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
