<!-- component -->
<x-head></x-head>

<x-main-layout>
    @section('douaaa')
    @endsection

</x-main-layout>
<x-header page='Home' />

<section class="flex flex-col items-center mt-12 px-5 space-y-6">
    <h5 class="text-3xl md:text-3xl mb-5 mt-3 font-bold text-center text-black">
       Recipes for Theme: {{ $theme->name }}
    </h5>
    <form
        class="w-full max-w-lg flex items-center space-x-4 bg-gray-100 rounded-md overflow-hidden border border-gray-300">
        <input type="search" id="search" placeholder="Search articles, news, or recipes..."
            class="flex-1 p-4 text-sm text-gray-700 placeholder-gray-500 bg-transparent focus:outline-none" />
        <button type="submit"
            class="px-6 py-4 bg-black text-white text-sm font-medium hover:bg-gray-800 transition-colors rounded-md">
            Search
        </button>
    </form>
</section>


{{-- Blog --}}
<div class="max-w-6xl mx-auto mt-8 px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Article 1 -->

        <article class="flex flex-col bg-white rounded-lg overflow-hidden shadow-lg my-4">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/800x400?text=Healthy+Breakfast+Bowl"
                alt="Healthy Breakfast Bowl">
            <div class="p-6">
                <h2 class="text-xl font-bold mb-2">Healthy Breakfast Bowl</h2>
                <p class="text-gray-700">Start your day with this energizing and healthy breakfast bowl.</p>
                <div class="flex justify-between items-center mt-4">
                    <div class="flex items-center">
                        <i class="fas fa-user-circle text-xl text-gray-700 mr-2"></i>
                        <span class="text-sm text-gray-600">Albert Flores</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-calendar-alt text-xl text-gray-700 mr-2"></i>
                        <time class="text-sm text-gray-600">5 December 2024</time>
                    </div>
                </div>
            </div>
        </article>

        <!-- Article 2 -->
        <article class="flex flex-col bg-white rounded-lg overflow-hidden shadow-lg my-4">
            <img class="w-full h-48 object-cover"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/8c4c84e7ba66404ed44d2a56bd635b767eab121e2df8ed983ce292f0ad43ef9b?apiKey=93bb9bcd81d443648999334442ead41e&"
                alt="Vegetarian Taco">
            <div class="p-6">
                <h2 class="text-xl font-bold mb-2">Cauliflower Walnut Vegetarian Taco Meat</h2>
                <p class="text-gray-700">A delicious and healthy alternative to traditional taco meat.</p>
                <div class="flex justify-between items-center mt-4">
                    <div class="flex items-center">
                        <i class="fas fa-user-circle text-xl text-gray-700 mr-2"></i>
                        <span class="text-sm text-gray-600">Albert Flores</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-calendar-alt text-xl text-gray-700 mr-2"></i>
                        <time class="text-sm text-gray-600">5 December 2024</time>
                    </div>
                </div>
            </div>
        </article>

        <!-- Article 3 -->
        <article class="flex flex-col bg-white rounded-lg overflow-hidden shadow-lg my-4">
            <img class="w-full h-48 object-cover"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/97b02af90ef8d27744d299532adb312372718335a24a2e2bce17a09cac041631?apiKey=93bb9bcd81d443648999334442ead41e&"
                alt="Rainbow Chicken Salad">
            <div class="p-6">
                <h2 class="text-xl font-bold mb-2">Rainbow Chicken Salad with Almond Honey Mustard Dressing</h2>
                <p class="text-gray-700">A colorful salad that's as nutritious as it is delicious.</p>
                <div class="flex justify-between items-center mt-4">
                    <div class="flex items-center">
                        <i class="fas fa-user-circle text-xl text-gray-700 mr-2"></i>
                        <span class="text-sm text-gray-600">Albert Flores</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-calendar-alt text-xl text-gray-700 mr-2"></i>
                        <time class="text-sm text-gray-600">5 December 2024</time>
                    </div>
                </div>
            </div>
        </article>

        <!-- Article 4 -->
        <article class="flex flex-col bg-white rounded-lg overflow-hidden shadow-lg my-4">
            <img class="w-full h-48 object-cover"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/f24f268202d77ba54bfd2fb8008dcec9a877cb3a61a63dd36e25b7d1eb4793b3?apiKey=93bb9bcd81d443648999334442ead41e&"
                alt="Colorful Quinoa Salad">
            <div class="p-6">
                <h2 class="text-xl font-bold mb-2">Colorful Quinoa Salad</h2>
                <p class="text-gray-700">A fresh and easy quinoa salad that's great for a healthy lunch.</p>
                <div class="flex justify-between items-center mt-4">
                    <div class="flex items-center">
                        <i class="fas fa-user-circle text-xl text-gray-700 mr-2"></i>
                        <span class="text-sm text-gray-600">Albert Flores</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-calendar-alt text-xl text-gray-700 mr-2"></i>
                        <time class="text-sm text-gray-600">5 December 2024</time>
                    </div>
                </div>
            </div>
        </article>

        <!-- Article 5 -->
        <article class="flex flex-col bg-white rounded-lg overflow-hidden shadow-lg my-4">
            <img class="w-full h-48 object-cover"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/3c176f632e531c88eb2df76c08c83c1b4cebe512f09d19017d03409bd22ee61b?apiKey=93bb9bcd81d443648999334442ead41e&"
                alt="Hearty Chicken Ramen Soup">
            <div class="p-6">
                <h2 class="text-xl font-bold mb-2">Hearty Chicken Ramen Soup</h2>
                <p class="text-gray-700">Warm up with this comforting and savory chicken ramen soup.</p>
                <div class="flex justify-between items-center mt-4">
                    <div class="flex items-center">
                        <i class="fas fa-user-circle text-xl text-gray-700 mr-2"></i>
                        <span class="text-sm text-gray-600">Albert Flores</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-calendar-alt text-xl text-gray-700 mr-2"></i>
                        <time class="text-sm text-gray-600">5 December 2024</time>
                    </div>
                </div>
            </div>
        </article>

        <!-- Recipe Card 5 -->
<div class="bg-white rounded-lg overflow-hidden shadow hover:shadow-2xl transition duration-300 relative">
    <div class="absolute right-2 top-2 text-gray-600 hover:text-red-500 cursor-pointer">
        <i class="fas fa-heart"></i>
    </div>
    <img class="w-full h-48 object-cover"src="{{asset('images/choco.jpg')}}" alt="Chocolate Cake">
    <div class="p-4">
        <h3 class="font-bold text-lg">Moist Chocolate Cake</h3>
        <p class="text-gray-700 my-2">
            Indulge in the rich and moist chocolate cake that melts in your mouth.
        </p>
        <div class="flex justify-between items-center">
            <span class="inline-block bg-pink-200 rounded-full px-3 py-1 text-sm font-semibold text-pink-800">Dessert</span>
            <span><i class="far fa-clock"></i> 45 min</span>
        </div>
    </div>
  </div>
  <!-- Recipe Card 6 -->
  <div class="bg-white rounded-lg overflow-hidden shadow hover:shadow-2xl transition duration-300 relative group">
    <div class="absolute right-2 top-2 text-gray-600 hover:text-red-500 cursor-pointer">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
    </div>
    <img class="w-full h-48 object-cover transition duration-300 ease-in-out group-hover:opacity-90" src="https://cdn.builder.io/api/v1/image/assets/TEMP/8c4c84e7ba66404ed44d2a56bd635b767eab121e2df8ed983ce292f0ad43ef9b?apiKey=93bb9bcd81d443648999334442ead41e&" alt="Vegetarian Pizza">
    <div class="p-4">
      <h3 class="font-bold text-lg mb-2">Quick Vegetarian Pizza</h3>
      <p class="text-gray-700 my-2">
        Enjoy a quick, healthy, and delicious vegetarian pizza loaded with fresh vegetables. <a href="{{ route('details')}}" class="text-red-400 hover:text-green-400 font-semibold cursor-pointer">Read more...</a>
      </p>
      <div class="flex justify-between items-center">
        <span class="inline-block bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-green-800">Vegetarian</span>
        <span class="flex items-center"><i class="far fa-clock mr-2"></i> 30 min</span>
      </div>
    </div>
  </div>
  
  

{{-- Foter --}}
<x-footer></x-footer>
</div>
</div>
</div>
