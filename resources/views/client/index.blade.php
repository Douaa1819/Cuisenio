<x-head></x-head>

<x-main-layout>
  @section("douaaa")



  @endsection

</x-main-layout>
<x-header page='home' />

<!-- Sidebar -->
<aside class="relative">

  <aside class="relative">
       "  alt="Cooking with Us" class="w-full  h-96 object-cover" />
    <p class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-pink-200 text-3xl font-bold shadow-md px-4 py-2 bg-black bg-opacity-50 rounded">Learn to cook the most delicious dishes with us!</p>
</aside>
    <!-- Categories Section -->
    <section class="flex flex-col font-semibold text-black mt-5">
      <div class="px-5 flex justify-between items-center">
          <h2 class="text-3xl tracking-tighter">Categories</h2>
          <button class="px-4 py-2 text-sm font-semibold tracking-tight rounded-md bg-red-400 text-white hover:bg-red-500 transition-colors duration-300">View All Categories</button>
      </div>
      <div class="mt-5 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 px-5">
          <article class="flex flex-col items-center">
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6c6027e5246eb574d1d39a676a29a5c985cf8031970d887f496c1c2b3e7f0a83?apiKey=93bb9bcd81d443648999334442ead41e&" alt="Breakfast" class="w-24 h-24 rounded-full" />
              <h3 class="mt-2 text-base">Breakfast</h3>
          </article>
          <article class="flex flex-col items-center">
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/199a53a2caa00792161fbfaa81c86c448c4efbd59433d380694fff3db5a61785?apiKey=93bb9bcd81d443648999334442ead41e&" alt="Vegan" class="w-24 h-24 rounded-full" />
              <h3 class="mt-2 text-base">Vegan</h3>
          </article>
          <article class="flex flex-col items-center">
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6dd8c18568c02dd26ce48f41513c3cb712803a0bb5c78d84a6340f84dbcea369?apiKey=93bb9bcd81d443648999334442ead41e&" alt="Meat" class="w-24 h-24 rounded-full" />
              <h3 class="mt-2 text-base">Meat</h3>
          </article>
          <article class="flex flex-col items-center">
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/91315907bbfcb3b3509920b625c0f34b3d446ccfce5649bfe673a37683be812b?apiKey=93bb9bcd81d443648999334442ead41e&" alt="Dessert" class="w-24 h-24 rounded-full" />
              <h3 class="mt-2 text-base">Dessert</h3>
          </article>
          <article class="flex flex-col items-center">
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/e0d730c7c9197ce98772900d8f64c49832e2c4e4607261b896725660f17c88a3?apiKey=93bb9bcd81d443648999334442ead41e&" alt="Lunch" class="w-24 h-24 rounded-full" />
              <h3 class="mt-2 text-base">Lunch</h3>
          </article>
          <article class="flex flex-col items-center">
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f35a5e771b5b957d2d02306f482e40e3079ebbb68f0e8448a135dece41652edf?apiKey=93bb9bcd81d443648999334442ead41e&" alt="Chocolate" class="w-24 h-24 rounded-full" />
              <h3 class="mt-2 text-base">Chocolate</h3>
          </article>
      </div>
  </section>
  
  
<!-- Recipe Cards Section -->
<section class="my-10">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl font-bold text-center mb-8">Our Latest Recipes</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Recipe Card 1 -->
      <div class="bg-white rounded-lg overflow-hidden shadow hover:shadow-2xl transition duration-300 relative">
        <div class="absolute right-2 top-2 text-gray-600 hover:text-red-500 cursor-pointer">
          <i class="fas fa-heart"></i>
        </div>
        <img class="w-full h-48 object-cover" src="https://cdn.builder.io/api/v1/image/assets/TEMP/e346f3e1aec6f957e9b120bc7764ca2d98cc3c3a9bb5386daa382eedb07f1543?apiKey=93bb9bcd81d443648999334442ead41e&" alt="Healthy Breakfast Bowl">
        <div class="p-4">
          <h3 class="font-bold text-lg">Healthy Breakfast Bowl</h3>
          <p class="text-gray-700 my-2">
            Start your day with this energizing and healthy breakfast bowl.
          </p>
          <div class="flex justify-between items-center">
            <span class="inline-block bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-green-800">Healthy</span>
            <span><i class="far fa-clock"></i> 15 min</span>
          </div>
        </div>
      </div>

      <!-- Additional recipe cards can be created following the same pattern as Recipe Card 1 -->



        <!-- Recipe Card 2 -->
<div class="bg-white rounded-lg overflow-hidden shadow hover:shadow-2xl transition duration-300 relative">
  <div class="absolute right-2 top-2 text-gray-600 hover:text-red-500 cursor-pointer">
    <i class="fas fa-heart"></i>
  </div>
  <img class="w-full h-48 object-cover" src="https://cdn.builder.io/api/v1/image/assets/TEMP/8c4c84e7ba66404ed44d2a56bd635b767eab121e2df8ed983ce292f0ad43ef9b?apiKey=93bb9bcd81d443648999334442ead41e&" alt="Vegetarian Taco">
  <div class="p-4">
    <h3 class="font-bold text-lg">Cauliflower Walnut Vegetarian Taco Meat</h3>
    <p class="text-gray-700 my-2">
      A delicious and healthy alternative to traditional taco meat.
    </p>
    <div class="flex justify-between items-center">
      <span class="inline-block bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-green-800">Vegetarian</span>
      <span><i class="far fa-clock"></i> 25 min</span>
    </div>
  </div>
</div>

<!-- Recipe Card 3 -->
<div class="bg-white rounded-lg overflow-hidden shadow hover:shadow-2xl transition duration-300 relative">
  <div class="absolute right-2 top-2 text-gray-600 hover:text-red-500 cursor-pointer">
    <i class="fas fa-heart"></i>
  </div>
  <img class="w-full h-48 object-cover" src="https://cdn.builder.io/api/v1/image/assets/TEMP/97b02af90ef8d27744d299532adb312372718335a24a2e2bce17a09cac041631?apiKey=93bb9bcd81d443648999334442ead41e&" alt="Rainbow Chicken Salad">
  <div class="p-4">
    <h3 class="font-bold text-lg">Rainbow Chicken Salad with Almond Honey Mustard Dressing</h3>
    <p class="text-gray-700 my-2">
      A colorful salad that's as nutritious as it is delicious.
    </p>
    <div class="flex justify-between items-center">
      <span class="inline-block bg-yellow-200 rounded-full px-3 py-1 text-sm font-semibold text-yellow-800">Low Calorie</span>
      <span><i class="far fa-clock"></i> 20 min</span>
    </div>
  </div>
</div>

<!-- Recipe Card 4 -->
<div class="bg-white rounded-lg overflow-hidden shadow hover:shadow-2xl transition duration-300 relative">
  <div class="absolute right-2 top-2 text-gray-600 hover:text-red-500 cursor-pointer">
    <i class="fas fa-heart"></i>
  </div>
  <img class="w-full h-48 object-cover" src="https://cdn.builder.io/api/v1/image/assets/TEMP/f24f268202d77ba54bfd2fb8008dcec9a877cb3a61a63dd36e25b7d1eb4793b3?apiKey=93bb9bcd81d443648999334442ead41e&" alt="Quinoa Salad">
  <div class="p-4">
    <h3 class="font-bold text-lg">Colorful Quinoa Salad</h3>
    <p class="text-gray-700 my-2">
      A fresh and easy quinoa salad that's great for a healthy lunch.
    </p>
    <div class="flex justify-between items-center">
      <span class="inline-block bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-blue-800">Healthy</span>
      <span><i class="far fa-clock"></i> 30 min</span>
    </div>
  </div>
</div>


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
<div class="bg-white rounded-lg overflow-hidden shadow hover:shadow-2xl transition duration-300 relative">
  <div class="absolute right-2 top-2 text-gray-600 hover:text-red-500 cursor-pointer">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
  </div>
  <img class="w-full h-48 object-cover" src="https://cdn.builder.io/api/v1/image/assets/TEMP/8c4c84e7ba66404ed44d2a56bd635b767eab121e2df8ed983ce292f0ad43ef9b?apiKey=93bb9bcd81d443648999334442ead41e&" alt="Vegetarian Pizza">
  <div class="p-4">
      <h3 class="font-bold text-lg">Quick Vegetarian Pizza</h3>
      <p class="text-gray-700 my-2">
          Enjoy a quick, healthy, and delicious vegetarian pizza loaded with fresh vegetables.
      </p>
      <div class="flex justify-between items-center">
          <span class="inline-block bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-green-800">Vegetarian</span>
          <span><i class="far fa-clock"></i> 30 min</span>
      </div>
  </div>
</div>


      </div>
    </div>


   <!-- Email Subscription Section -->
<section class="bg-cover bg-center py-20  mt-8 text-center relative" style="background-image: url('https://cdn.builder.io/api/v1/image/assets/TEMP/33a889bb8974ce3cca0fd26b9b44917d89052287a700f2bd600916de6f320532?apiKey=93bb9bcd81d443648999334442ead41e&');">
  <div class="bg-white bg-opacity-80 p-8 inline-block rounded-lg shadow-lg">
    <h2 class="text-3xl font-bold mb-4">Deliciousness to Your Inbox</h2>
    <p class="text-gray-700 mb-8">
      Join our newsletter to stay updated with the latest recipes and cooking tips.
    </p>
    <form class="flex flex-wrap justify-center gap-4">
      <input type="email" placeholder="Your email address..." class="p-2 w-full md:w-auto border-2 border-gray-300 rounded-md" />
      <button type="submit" class="bg-red-400 hover:bg-orange-600 text-white font-bold p-2 rounded-md transition-colors">
        Subscribe
      </button>
    </form>
  </div>
</section>

<!-- Footer -->
<x-footer></x-footer>