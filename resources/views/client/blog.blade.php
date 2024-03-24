<x-head></x-head>
<x-header></x-header>

{{-- Tiitle --}}
<section class="flex flex-col items-center mt-12 px-5 space-y-6">
  <h1 class="text-4xl md:text-6xl font-bold text-center text-gray-900">
    Blog & Articles
  </h1>
  <p class="text-md md:text-lg text-center text-gray-700">
    Discover our latest culinary insights, including recipes, tips, and trends. Keep up-to-date with everything happening in the culinary world.
  </p>
  <form class="w-full max-w-lg flex items-center space-x-4 bg-gray-100 rounded-md overflow-hidden border border-gray-300">
    <input type="search" id="search" placeholder="Search articles, news, or recipes..." class="flex-1 p-4 text-sm text-gray-700 placeholder-gray-500 bg-transparent focus:outline-none" />
    <button type="submit" class="px-6 py-4 bg-black text-white text-sm font-medium hover:bg-gray-800 transition-colors rounded-md">
      Search
    </button>
  </form>
</section>



{{-- Blog --}}


  <!-- Blog Entries in a Column -->

  <div class="max-w-4xl mx-auto mt-8 px-4">
    <!-- Blog Title -->
    <div class="text-center mb-10">
      <h1 class="text-4xl font-bold">Explore Our Latest Blogs</h1>
      <p class="text-lg text-gray-600">Stay up-to-date with the latest culinary trends, tips, and recipes.</p>
    </div>
  
    <div class="flex flex-wrap -mx-4">
      <!-- Blog Entries -->
      <div class="w-full lg:w-2/3 px-4">
        <!-- Example Entry 1 -->
        <article class="flex gap-5 items-center bg-white rounded-lg overflow-hidden shadow-lg my-4">
          <!-- Blog Image -->
          <div class="flex-none relative">
            <img class="w-48 h-48 object-cover" src="https://via.placeholder.com/150" alt="Healthy Breakfast Bowl">
            <div class="absolute right-2 top-2 text-gray-600 hover:text-red-500 cursor-pointer">
              <i class="fas fa-heart"></i>
            </div>
          </div>
          <!-- Blog Content -->
          <div class="flex-grow p-6">
            <h2 class="text-xl font-bold">Healthy Breakfast Bowl</h2>
            <p class="text-gray-700 my-2">Start your day with this energizing and healthy breakfast bowl.</p>
            <div class="flex justify-between items-center mt-4">
              <div class="flex items-center">
                <i class="fas fa-user-circle text-xl text-gray-700 mr-2"></i>
                <span class="text-sm text-gray-600">Dianne Russell</span>
              </div>
              <div class="flex items-center">
                <i class="fas fa-calendar-alt text-xl text-gray-700 mr-2"></i>
                <time class="text-sm text-gray-600">20 November 2024</time>
              </div>
            </div>
          </div>
        </article>
          
<!-- Entry 2 -->
<article class="flex gap-5 items-center bg-white rounded-lg overflow-hidden shadow-lg my-4">
  <div class="flex-none relative">
    <img class="w-48 h-48 object-cover" src="https://cdn.builder.io/api/v1/image/assets/TEMP/8c4c84e7ba66404ed44d2a56bd635b767eab121e2df8ed983ce292f0ad43ef9b?apiKey=93bb9bcd81d443648999334442ead41e&" alt="Vegetarian Taco">
    <div class="absolute right-2 top-2 text-gray-600 hover:text-red-500 cursor-pointer">
      <i class="fas fa-heart"></i>
    </div>
  </div>
  <div class="flex-grow p-6">
    <h2 class="text-xl font-bold">Cauliflower Walnut Vegetarian Taco Meat</h2>
    <p class="text-gray-700 my-2">A delicious and healthy alternative to traditional taco meat.</p>
    <div class="flex justify-between items-center mt-4">
      <div class="flex items-center">
        <i class="fas fa-user-circle text-xl text-gray-700 mr-2"></i>
        <span class="text-sm text-gray-600">Leslie Alexander</span>
      </div>
      <div class="flex items-center">
        <i class="fas fa-calendar-alt text-xl text-gray-700 mr-2"></i>
        <time class="text-sm text-gray-600">25 November 2024</time>
      </div>
    </div>
  </div>
</article>

<!-- Entry 3 -->
<article class="flex gap-5 items-center bg-white rounded-lg overflow-hidden shadow-lg my-4">
  <div class="flex-none relative">
    <img class="w-48 h-48 object-cover" src="https://cdn.builder.io/api/v1/image/assets/TEMP/97b02af90ef8d27744d299532adb312372718335a24a2e2bce17a09cac041631?apiKey=93bb9bcd81d443648999334442ead41e&" alt="Rainbow Chicken Salad">
    <div class="absolute right-2 top-2 text-gray-600 hover:text-red-500 cursor-pointer">
      <i class="fas fa-heart"></i>
    </div>
  </div>
  <div class="flex-grow p-6">
    <h2 class="text-xl font-bold">Rainbow Chicken Salad with Almond Honey Mustard Dressing</h2>
    <p class="text-gray-700 my-2">A colorful salad that's as nutritious as it is delicious.</p>
    <div class="flex justify-between items-center mt-4">
      <div class="flex items-center">
        <i class="fas fa-user-circle text-xl text-gray-700 mr-2"></i>
        <span class="text-sm text-gray-600">Courtney Henry</span>
      </div>
      <div class="flex items-center">
        <i class="fas fa-calendar-alt text-xl text-gray-700 mr-2"></i>
        <time class="text-sm text-gray-600">30 November 2024</time>
      </div>
    </div>
  </div>
</article>

<!-- Entry 4 -->
<article class="flex gap-5 items-center bg-white rounded-lg overflow-hidden shadow-lg my-4">
  <div class="flex-none relative">
    <img class="w-48 h-48 object-cover" src="https://cdn.builder.io/api/v1/image/assets/TEMP/f24f268202d77ba54bfd2fb8008dcec9a877cb3a61a63dd36e25b7d1eb4793b3?apiKey=93bb9bcd81d443648999334442ead41e&" alt="Quinoa Salad">
    <div class="absolute right-2 top-2 text-gray-600 hover:text-red-500 cursor-pointer">
      <i class="fas fa-heart"></i>
    </div>
  </div>
  <div class="flex-grow p-6">
    <h2 class="text-xl font-bold">Colorful Quinoa Salad</h2>
    <p class="text-gray-700 my-2">A fresh and easy quinoa salad that's great for a healthy lunch.</p>
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

<!-- Entry 5 -->
<article class="flex gap-5 items-center bg-white rounded-lg overflow-hidden shadow-lg my-4">
  <div class="flex-none relative">
    <img class="w-48 h-48 object-cover" src="https://cdn.builder.io/api/v1/image/assets/TEMP/3c176f632e531c88eb2df76c08c83c1b4cebe512f09d19017d03409bd22ee61b?apiKey=93bb9bcd81d443648999334442ead41e&" alt="Chicken Ramen Soup">
    <div class="absolute right-2 top-2 text-gray-600 hover:text-red-500 cursor-pointer">
      <i class="fas fa-heart"></i>
    </div>
  </div>
  <div class="flex-grow p-6">
    <h2 class="text-xl font-bold">Hearty Chicken Ramen Soup</h2>
    <p class="text-gray-700 my-2">Warm up with this comforting and savory chicken ramen soup.</p>
    <div class="flex justify-between items-center mt-4">
      <div class="flex items-center">
        <i class="fas fa-user-circle text-xl text-gray-700 mr-2"></i>
        <span class="text-sm text-gray-600">Erin Wagner</span>
      </div>
      <div class="flex items-center">
        <i class="fas fa-calendar-alt text-xl text-gray-700 mr-2"></i>
        <time class="text-sm text-gray-600">10 December 2024</time>
      </div>
    </div>
  </div>
</article>

    </div>
   </div></div>
    </div>
  </div>
</section>





{{-- like this also --}}
<div class="flex flex-col px-5 mt-10 md:px-3 md:mt-5">
  <h2 class="text-2xl font-semibold text-black mb-10 md:text-xl md:text-center">
    You may like these recipes too
  </h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
    <!-- Recipe 1 -->
    <div class="flex flex-col items-center">
      <div class="relative w-full">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2f384b85f33ca892008b001f47136a554a261389e4b6af8a76815354ed87fffc?apiKey=93bb9bcd81d443648999334442ead41e&" class="object-cover w-full h-48 rounded-lg" alt="Mixed Tropical Fruit Salad">
        <div class="absolute top-2 right-2 text-gray-600 hover:text-red-500 cursor-pointer">
          <i class="fas fa-heart"></i>
        </div>
      </div>
      <h3 class="mt-4 font-semibold text-lg text-center">Mixed Tropical Fruit Salad with Superfood Boosts</h3>
      <div class="flex items-center justify-center mt-2">
        <i class="fas fa-clock mr-2 text-sm text-gray-600"></i>
        <span class="text-sm text-gray-600">30 Minutes</span>
      </div>
    </div>
<!-- Recipe 2 -->
<div class="flex flex-col items-center">
  <div class="relative w-full">
    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3155afb545fb9293f9b5eeab612d9df5a4af7926547630fd0bcc5989af96886c?apiKey=93bb9bcd81d443648999334442ead41e&" class="object-cover w-full h-48 rounded-lg" alt="Big and Juicy Wagyu Beef Cheeseburger">
    <div class="absolute top-2 right-2 text-gray-600 hover:text-red-500 cursor-pointer">
      <i class="fas fa-heart"></i>
    </div>
  </div>
  <h3 class="mt-4 font-semibold text-lg text-center">Big and Juicy Wagyu Beef Cheeseburger</h3>
  <div class="flex items-center justify-center mt-2">
    <i class="fas fa-clock mr-2 text-sm text-gray-600"></i>
    <span class="text-sm text-gray-600">15 Minutes</span>
  </div>
</div>

<!-- Recipe 3 -->
<div class="flex flex-col items-center">
  <div class="relative w-full">
    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6221d63db8b1f4795eaf7d7321ad1e23effef5438721fd2b2b6856e25b4378b0?apiKey=93bb9bcd81d443648999334442ead41e&" class="object-cover w-full h-48 rounded-lg" alt="Healthy Japanese Fried Rice with Asparagus">
    <div class="absolute top-2 right-2 text-gray-600 hover:text-red-500 cursor-pointer">
      <i class="fas fa-heart"></i>
    </div>
  </div>
  <h3 class="mt-4 font-semibold text-lg text-center">Healthy Japanese Fried Rice with Asparagus</h3>
  <div class="flex items-center justify-center mt-2">
    <i class="fas fa-clock mr-2 text-sm text-gray-600"></i>
    <span class="text-sm text-gray-600">20 Minutes</span>
  </div>
</div>

  </div>
</div>

<p>1  2   3   4  5  6  </p>
{{-- Foter --}}
  <x-footer></x-footer>