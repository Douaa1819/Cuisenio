<x-head></x-head>

<body class="bg-[#F2F2F2] text-[#333333]">

    <!-- Navbar -->
    <x-headeer page='home' />

    <!-- Home -->


    <div class="flex justify-evenly p-16 items-center md:gap-4 gap-8  text-[#333] bg-[#F2F2F2]">
        <div class="max-md:order-1 max-md:text-center w-1/2">
            <h3 class="md:text-5xl text-2xl md:leading-10 font-bold ">Welcome to Cuisénio!</h3>
            <p class="mt-4 text-xl">Discover and prepare a variety of recipes with ease. Join our community and
                explore
                the art of cooking like never before.</p>
            <button
                class="overflow-hidden px-4 py-2 mt-5 bg-black text-white border-none rounded-md text-md font-semibold cursor-pointer relative z-10 group">
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
        <div class="w-1/2">
            <img src="{{ asset('images/visii.jpg') }}" class=" w-auto h-full md:object-contain rounded-3xl shadow-xl" />
        </div>
    </div>


     <!-- Inspiration Thematic Section -->
     <section id="inspiration" class="pt-16 pb-20 px-6 bg-white  ">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-16">Thematic Inspiration</h2>
            <div class="flex flex-wrap justify-center gap-10">
    
    
              <div class="container mx-auto px-4 py-8">
                <div class="grid grid-cols-6 gap-4">
                    @foreach ($themes as $theme)
                        @if ($theme->images->isNotEmpty())
                            @foreach ($theme->images as $image)
                                <a href="/cakes" class="flex flex-col items-center transition duration-300 ease-in-out hover:scale-110 group">
                                    <img src="{{ Storage::url($image->url) }}" alt="{{ $theme->name }} Image" class="w-24 h-24 object-cover rounded-full shadow-md hover:shadow-lg">
                                    <h3 class="text-sm font-semibold mt-2 text-gray-700 group-hover:text-gray-800">{{ $theme->name }}</h3>
                                </a>
                            @endforeach
                        @endif
                    @endforeach
                </div>
              </div>
            </div>
        </div>
       </section>





    {{-- Astuces --}}


    <section class="pt-16 pb-10 px-10">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-16">Check out our latest tips</h2>
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




    <!-- Recipe Cards Section -->
    <section class="px-10 pb-16 pt-32 bg-white rounded-b-3xl relative">
        <div class="absolute top-0 left-0 z-10 w-full h-auto -mt-1">
            <svg enable-background="new 0 0 1504 131.3" viewBox="0 0 1504 131.3" xmlns="http://www.w3.org/2000/svg"
                class="transform scale-y-[-1]">
                <path
                    d="m877.8 85c139.5 24.4 348 33.5 632.2-48.2-.2 32.5-.3 65-.5 97.4-505.9 0-1011.6 0-1517.5 0 0-33.3 0-66.7 0-100.1 54.2-11.4 129.5-23.9 220-28.2 91-4.3 173.6 1 307.4 18.6 183.2 24.2 295.2 49.4 358.4 60.5z"
                    fill="#F2F2F2" />
            </svg>
        </div>
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-16">Top Recipes</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Recipe Card 1 -->
                <div
                    class="bg-white rounded-lg overflow-hidden shadow hover:shadow-2xl transition duration-300 relative">
                    <div class="absolute right-2 top-2 text-gray-600 hover:text-red-500 cursor-pointer">
                        <i class="fas fa-heart"></i>
                    </div>
                    <img class="w-full h-48 object-cover"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/e346f3e1aec6f957e9b120bc7764ca2d98cc3c3a9bb5386daa382eedb07f1543?apiKey=93bb9bcd81d443648999334442ead41e&"
                        alt="Healthy Breakfast Bowl">
                    <div class="p-4">
                        <h3 class="font-bold text-lg">Healthy Breakfast Bowl</h3>
                        
                        <div class="flex justify-end items-center">
                            <span
                                class="inline-block bg-green-rounded-full px-3 py-1 text-sm font-semibold text-green-800">
                                <span><i class="far fa-clock"></i> 15 min</span>
                        </div>
                        <div class="flex flex-wrap items-center gap-3">
                            <img src='https://readymadeui.com/team-1.webp' class="w-9 h-9 rounded-full" />
                            <p class="text-xs text-gray-400">BY JOHN DOE</p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white rounded-lg overflow-hidden shadow hover:shadow-2xl transition duration-300 relative">
                    <div class="absolute right-2 top-2 text-gray-600 hover:text-red-500 cursor-pointer">
                        <i class="fas fa-heart"></i>
                    </div>
                    <img class="w-full h-48 object-cover"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/8c4c84e7ba66404ed44d2a56bd635b767eab121e2df8ed983ce292f0ad43ef9b?apiKey=93bb9bcd81d443648999334442ead41e&"
                        alt="Vegetarian Taco">
                    <div class="p-4">
                        <h3 class="font-bold text-lg">Cauliflower Walnut Vegetarian Taco Meat</h3>
                        <p class="text-gray-700 my-2">
                            A delicious and healthy alternative to traditional taco meat.
                        </p>
                        <div class="flex justify-end items-center">
                            <span
                                class="inline-block bg-green-rounded-full px-3 py-1 text-sm font-semibold text-green-800">
                                <span><i class="far fa-clock"></i> 20 min</span>
                        </div>
                        <div class="flex flex-wrap items-center gap-3">
                            <img src='https://readymadeui.com/team-1.webp' class="w-9 h-9 rounded-full" />
                            <p class="text-xs text-gray-400">BY JOHN DOE</p>
                        </div>
                    </div>
                </div>

                <!-- Recipe Card 3 -->
                <div
                    class="bg-white rounded-lg overflow-hidden shadow hover:shadow-2xl transition duration-300 relative">
                    <div class="absolute right-2 top-2 text-gray-600 hover:text-red-500 cursor-pointer">
                        <i class="fas fa-heart"></i>
                    </div>
                    <img class="w-full h-48 object-cover"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/97b02af90ef8d27744d299532adb312372718335a24a2e2bce17a09cac041631?apiKey=93bb9bcd81d443648999334442ead41e&"
                        alt="Rainbow Chicken Salad">
                    <div class="p-4">
                        <h3 class="font-bold text-lg">Rainbow Chicken Salad with Almond Honey Mustard Dressing</h3>
                        <p class="text-gray-700 my-2">
                            A colorful salad that's as nutritious as it is delicious.
                        </p>
                        <div class="flex justify-end items-center">
                            <span
                                class="inline-block bg-green-rounded-full px-3 py-1 text-sm font-semibold text-green-800">
                                <span><i class="far fa-clock"></i> 30 min</span>
                        </div>
                        <div class="flex flex-wrap items-center gap-3">
                            <img src='https://readymadeui.com/team-1.webp' class="w-9 h-9 rounded-full" />
                            <p class="text-xs text-gray-400">BY JOHN DOE</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right">
                <button
                class="overflow-hidden px-4 py-2 mt-5 bg-black text-white border-none rounded-md text-md font-semibold cursor-pointer relative z-10 group">
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
  
          <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-6 gap-4">
                @foreach ($ingrediant as $ingrediant)
                    @if ($ingrediant->images->isNotEmpty())
                        @foreach ($ingrediant->images as $image)
                            <a href="/cakes" class="flex flex-col items-center transition duration-300 ease-in-out hover:scale-110 group">
                                <img src="{{ Storage::url($image->url) }}" alt="{{ $ingrediant->name }} Image" class="w-24 h-24 object-cover rounded-full shadow-md hover:shadow-lg">
                                <h3 class="text-sm font-semibold mt-2 text-gray-700 group-hover:text-gray-800">{{ $ingrediant->name }}</h3>
                            </a>
                        @endforeach
                    @endif
                @endforeach
            </div>
        </div>
  
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


    <section class="flex gap-5 max-md:flex-col md:flex-nowrap pl-10 items-center">
        <div class="flex flex-col w-[63%] max-md:w-full justify-center">
            <div class="flex flex-col px-5 font-semibold max-md:mt-10 max-md:max-w-full">
                <h1 class="text-4xl font-bold text-gray-900">
                    Everyone can be a <br /> chef in their own kitchen
                </h1>
                <p class="mt-5  text-gray-600">
                    Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqut enim ad minim
                </p>
                <div class="">
                    <button
                class="overflow-hidden px-4 py-2 mt-5 bg-black text-white border-none rounded-md text-md font-semibold cursor-pointer relative z-10 group">
                Learn More <span
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
            </div>
        </div>
        <div class="flex flex-col ml-5 w-[57%] max-md:ml-0 max-md:w-full">
            <img loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/df09184d82638a0ea052cf2619f572d859f8be9fc43933b95a9420b12a37d08b?apiKey=93bb9bcd81d443648999334442ead41e&"
                alt="Decorative image" class="grow w-full aspect-[1.19] max-md:mt-10 max-md:max-w-full" />
        </div>
    </section>




    <!-- Email Subscription Section -->
    <section class="bg-cover bg-center pb-40 pt-32  mt-8 text-center relative bg-pink-500 rounded-t-3xl"
        style="background-image: url('{{ asset('images/newsletter1.jpg') }}')">
        <div class="absolute bottom-0 left-0 z-10 w-full h-auto -mb-1">
            <svg enable-background="new 0 0 1504 131.3" viewBox="0 0 1504 131.3" xmlns="http://www.w3.org/2000/svg"
                class="transform scale-x-[-1]">
                <path
                    d="m877.8 85c139.5 24.4 348 33.5 632.2-48.2-.2 32.5-.3 65-.5 97.4-505.9 0-1011.6 0-1517.5 0 0-33.3 0-66.7 0-100.1 54.2-11.4 129.5-23.9 220-28.2 91-4.3 173.6 1 307.4 18.6 183.2 24.2 295.2 49.4 358.4 60.5z"
                    fill="#F2F2F2" />
            </svg>
        </div>

        <div class="bg-white bg-opacity-80 p-8 inline-block rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold mb-4">Deliciousness to Your Inbox</h2>
            <p class="text-gray-700 mb-8">
                Join our newsletter to stay updated with the latest recipes and cooking tips.
            </p>
          
            <form class="flex flex-wrap justify-center gap-4 " method="POST" action="{{ route('news.store')}}">
                @csrf
                @method('POST')
                <input type="email" name="user_email" placeholder="Your email address..."
                    class="p-2 w-full md:w-auto border-2 border-gray-300 rounded-md" />
                    <button type="submit"
                    class="overflow-hidden px-2 py-2 mt-5 mb-2 bg-red-300 text-white border-none rounded-md text-md font-semibold cursor-pointer relative z-10 group">
                    Subscribe<span
                        class="absolute w-36 h-32 -top-8 -left-2 bg-white rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
                    <span
                        class="absolute w-36 h-32 -top-8 -left-2 bg-pink-200 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left"></span>
                    <span
                        class="absolute w-36 h-32 -top-8 -left-2 bg-black rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-1000 duration-500 origin-left"></span>
                    <span
                        class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2 left-4 z-10">Let's
                        Goo </span>
                </button>
            </form>
        </div>
    </section>
    @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif

<!-- Session Message for Errors -->
@if (session('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Error!</strong>
        <span class="block sm:inline">{{ session('error') }}</span>
    </div>
@endif



    <x-footer></x-footer>

</body>


</html>
