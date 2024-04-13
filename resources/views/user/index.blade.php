<x-head></x-head>

<x-main-layout>
  @section("douaaa")



  @endsection

</x-main-layout>
<x-header page='home' />

<!-- Sidebar -->
<aside class="relative">


    <!-- Theme Section -->
   <!-- Inspiration Thematic Section -->
   <section id="inspiration" class="pt-16 pb-20 px-6 bg-white  ">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-16">Thematic Inspiration</h2>
        <div class="flex flex-wrap justify-center gap-10">

            <!-- Cake Theme -->
            <a href="/cakes" class="flex flex-col items-center w-40 transition duration-300 ease-in-out hover:scale-105 group">
                <i class="fas fa-birthday-cake text-6xl text-gray-500 group-hover:text-gray-700"></i>
                <h3 class="text-lg font-semibold mt-4 group-hover:text-gray-800">Cakes</h3>
            </a>
            

            <!-- Dinner Theme -->
            <a href="/dinner" class="flex flex-col items-center w-40 transition duration-300 ease-in-out hover:scale-105 group">
                <i class="fas fa-utensils text-6xl text-gray-500 group-hover:text-gray-700"></i>
                <h3 class="text-lg font-semibold mt-4">Dinner</h3>
            </a>

            <!-- Sportive Cooking Theme -->
            <a href="/sportive" class="flex flex-col items-center w-40 transition duration-300 ease-in-out hover:scale-105 group">
                <i class="fas fa-running text-6xl text-gray-500 group-hover:text-gray-700"></i>
                <h3 class="text-lg font-semibold mt-4">Sportive</h3>
            </a>

            <!-- Quick Desserts Theme -->
            <a href="/quick-desserts" class="flex flex-col items-center w-40 transition duration-300 ease-in-out hover:scale-105 group">
                <i class="fas fa-ice-cream text-6xl text-gray-500 group-hover:text-gray-700"></i>
                <h3 class="text-lg font-semibold mt-4">Easy & Quick</h3>
            </a>

            <!-- Traditional Theme -->
            <a href="/traditional" class="flex flex-col items-center w-40 transition duration-300 ease-in-out hover:scale-105 group">
                <i class="fas fa-archway text-6xl text-gray-500 group-hover:text-gray-700"></i>
                <h3 class="text-lg font-semibold mt-4">Traditional</h3>
             
            </a>

            <!-- Gourmet Theme -->
            <a href="/gourmet" class="flex flex-col items-center w-40 transition duration-300 ease-in-out hover:scale-105 group">
                <i class="fas fa-wine-glass-alt text-6xl text-gray-500 group-hover:text-gray-700"></i>
                <h3 class="text-lg font-semibold mt-4">Gourmet</h3>
            </a>

        </div>
    </div>
</section>
  
<!-- Recipe Cards Section -->
<section class="my-10">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl font-bold text-center mb-8"> Latest Recipes</h2>
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

    <section class="pt-16 pb-10 px-10">
      <div class="container mx-auto text-center">
          <h2 class="text-4xl font-bold mb-16">Check out the latest tips</h2>
          <div class="flex justify-around gap-8">
              <div class="w-full lg:w-5/12 flex flex-col gap-4">
                  <div class="flex items-center border-b border-gray-300 transition-all duration-300 ease-in hover:border-gray-400 hover:shadow-lg p-4 hover:rounded-lg ">
                      <img src="https://via.placeholder.com/100" alt="Default Image" class="mr-4">
                      <div>
                          <h3 class="text-xl font-bold mb-2">Tip Title 1</h3>
                          <p class="mb-4">Day of the Week</p>
                      </div>
                  </div>
                  <div class="flex items-center border-b border-gray-300 transition-all duration-300 ease-in hover:border-gray-400 hover:shadow-lg p-4 hover:rounded-lg ">
                      <img src="https://via.placeholder.com/100" alt="Default Image" class="mr-4">
                      <div>
                          <h3 class="text-xl font-bold mb-2">Tip Title 1</h3>
                          <p class="mb-4">Day of the Week</p>
                      </div>
                  </div>
                  <div class="flex items-center border-b border-gray-300 transition-all duration-300 ease-in hover:border-gray-400 hover:shadow-lg p-4 hover:rounded-lg ">
                      <img src="https://via.placeholder.com/100" alt="Default Image" class="mr-4">
                      <div>
                          <h3 class="text-xl font-bold mb-2">Tip Title 1</h3>
                          <p class="mb-4">Day of the Week</p>
                      </div>
                  </div>      
              </div>


              <div class="w-full lg:w-5/12 flex flex-col gap-4 ">
                  <!-- Left Column -->
                  <div class="flex items-center border-b border-gray-300 transition-all duration-300 ease-in hover:border-gray-400 hover:shadow-lg p-4 hover:rounded-lg ">
                      <img src="https://via.placeholder.com/100" alt="Default Image" class="mr-4">
                      <div>
                          <h3 class="text-xl font-bold mb-2">Tip Title 1</h3>
                          <p class="mb-4">Day of the Week</p>
                      </div>
                  </div>


                  <div class="flex items-center border-b border-gray-300 transition-all duration-300 ease-in hover:border-gray-400 hover:shadow-lg p-4 hover:rounded-lg ">
                      <img src="https://via.placeholder.com/100" alt="Default Image" class="mr-4">
                      <div>
                          <h3 class="text-xl font-bold mb-2">Tip Title 1</h3>
                          <p class="mb-4">Day of the Week</p>
                      </div>
                  </div>


                  <div class="flex items-center border-b border-gray-300 transition-all duration-300 ease-in hover:border-gray-400 hover:shadow-lg p-4 hover:rounded-lg ">
                      <img src="https://via.placeholder.com/100" alt="Default Image" class="mr-4">
                      <div>
                          <h3 class="text-xl font-bold mb-2">Tip Title 1</h3>
                          <p class="mb-4">Day of the Week</p>
                      </div>
                  </div>
                  <!-- Items 2 and 3 omitted for brevity, similar structure to Item 1 -->
              </div>
          </div>
          <div class="text-right">
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
          </div>
  </section>
  

  
{{-- <-- Ingredient Section --> --}}
<section id="inspiration" class="pt-16 pb-20 px-6 bg-white">
  <div class="container mx-auto text-center">
      <h2 class="text-4xl font-bold mb-16">Découvrez nos ingrédients de saison</h2>
      <div class="flex flex-wrap justify-center gap-10">

          <!-- Potatoes Theme -->
          <a href="/potatoes" class="flex flex-col items-center w-40 transition duration-300 ease-in-out hover:scale-105 group">
              <i class="fas fa-seedling text-6xl text-gray-500 group-hover:text-gray-700"></i>
              <h3 class="text-lg font-semibold mt-4 group-hover:text-gray-800">Pommes de Terre</h3>
          </a>
          
          <!-- Fish Theme -->
          <a href="/fish" class="flex flex-col items-center w-40 transition duration-300 ease-in-out hover:scale-105 group">
              <i class="fas fa-fish text-6xl text-gray-500 group-hover:text-gray-700"></i>
              <h3 class="text-lg font-semibold mt-4">Poisson</h3>
          </a>

          <!-- Honey Theme -->
          <a href="/honey" class="flex flex-col items-center w-40 transition duration-300 ease-in-out hover:scale-105 group">
              <i class="fas fa-tint text-6xl text-gray-500 group-hover:text-gray-700"></i>
              <h3 class="text-lg font-semibold mt-4">Miel</h3>
          </a>

          <!-- Cheese Theme -->
          <a href="/cheese" class="flex flex-col items-center w-40 transition duration-300 ease-in-out hover:scale-105 group">
              <i class="fas fa-cheese text-6xl text-gray-500 group-hover:text-gray-700"></i>
              <h3 class="text-lg font-semibold mt-4">Fromage</h3>
          </a>

          <!-- Chocolate Theme -->
          <a href="/chocolate" class="flex flex-col items-center w-40 transition duration-300 ease-in-out hover:scale-105 group">
              <i class="fas fa-candy-cane text-6xl text-gray-500 group-hover:text-gray-700"></i>
              <h3 class="text-lg font-semibold mt-4">Chocolat</h3>
             
          </a>

          <!-- Gourmet Ingredients Theme -->
          <a href="/gourmet-ingredients" class="flex flex-col items-center w-40 transition duration-300 ease-in-out hover:scale-105 group">
              <i class="fas fa-pepper-hot text-6xl text-gray-500 group-hover:text-gray-700"></i>
              <h3 class="text-lg font-semibold mt-4">Ingrédients Gourmet</h3>
            
          </a>

      </div>
  </div>
</section>

<!-- Assuming Tailwind CSS is included in your project -->
<div class="container mx-auto px-10 py-16 bg-white">
  <h2 class="text-4xl font-bold text-center mb-16">Recipes of the Season</h2>
  <div class="grid md:grid-cols-3 gap-8">
      <!-- Recipe Card 1 -->
      <div class="relative shadow-lg hover:shadow-xl transition-shadow duration-300 bg-white rounded-lg overflow-hidden">
          <div class="absolute top-2 right-2 text-gray-700 hover:text-red-500 cursor-pointer">
              <i class="fas fa-heart"></i>
          </div>
          <img class="w-full h-40 object-cover" src="https://via.placeholder.com/150" alt="Recipe Image">
          <div class="p-4">
              <h3 class="text-xl font-bold mb-2">Spring Vegetable Pasta</h3>
              <div class="text-yellow-400 mb-2">★★★★☆</div>
          </div>
      </div>

      <!-- Recipe Card 2 -->
      <div class="relative shadow-lg hover:shadow-xl transition-shadow duration-300 bg-white rounded-lg overflow-hidden">
          <div class="absolute top-2 right-2 text-gray-700 hover:text-red-500 cursor-pointer">
              <i class="fas fa-heart"></i>
          </div>
          <img class="w-full h-40 object-cover" src="https://via.placeholder.com/150" alt="Recipe Image">
          <div class="p-4">
              <h3 class="text-xl font-bold mb-2">Honey Lemon Chicken</h3>
              <div class="text-yellow-400 mb-2">★★★★★</div>
          </div>
      </div>

      <!-- Recipe Card 3 -->
      <div class="relative shadow-lg hover:shadow-xl transition-shadow duration-300 bg-white rounded-lg overflow-hidden">
          <div class="absolute top-2 right-2 text-gray-700 hover:text-red-500 cursor-pointer">
              <i class="fas fa-heart"></i>
          </div>
          <img class="w-full h-40 object-cover" src="https://via.placeholder.com/150" alt="Recipe Image">
          <div class="p-4">
              <h3 class="text-xl font-bold mb-2">Quick Avocado Salad</h3>
              <div class="text-yellow-400 mb-2">★★★☆☆</div>
          </div>
      </div>
  </div>
</div>
<!-- Footer -->
<x-footer></x-footer>