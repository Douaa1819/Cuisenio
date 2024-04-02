<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuisénio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-[#F2F2F2] text-[#333333]">

    <!-- Navbar -->
    <x-headeer page='home' />

    <!-- Home -->
    <section id="home" class="relative py-20 px-6">
        <!-- Utiliser une div pour positionner l'image comme un arrière-plan -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/visitor.jpg') }}" class="w-full h-full object-cover" />
        </div>
    
        <!-- Le contenu de votre section ici, positionné au-dessus de l'image de fond -->
        <div class="relative z-10">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <div class="relative max-w-4xl mx-auto text-white">
            <h1 class="text-5xl font-bold mb-6">Welcome to Cuisénio!</h1>
            <p class="text-xl mb-8">Discover and prepare a variety of recipes with ease. Join our community and explore
                the art of cooking like never before.</p>
            <a href="#about"
                class="inline-block bg-red-300 hover:bg-pink-200 text-white font-bold py-3 px-6 rounded">Learn More</a>
    </section>
    </div>
</div>
<section>


    <!-- About Us Section with Image -->
    <section id="about" class="py-20 px-6 bg-white text-[#333333]">
        <div class="container mx-auto flex flex-wrap items-center  ">
            <!-- Text Content -->
            <div class="w-full md:w-1/2 px-6 mb-8 md:mb-0">
                <h2 class="text-4xl font-bold mb-4 ">About Us</h2>
                <p class="text-lg mb-4">Cuisénio is designed to make cooking a delightful experience for everyone. From
                    amateurs to culinary experts, our platform serves as a bridge connecting the love of cooking with
                    the ease of technology.</p>
                <p class="text-lg">Join our community to share, explore, and enjoy the art of cooking in a new and
                    exciting way.</p>
            </div>
            <div class="w-full md:w-1/2 px-6">
                <img src="{{ asset('images/about.jpg')}}" alt="About Us Image" class="rounded-lg shadow-lg" />
            </div>
        </div>
    </section>

    {{-- examples recipes --}}
    <section class="py-10 px-6 bg-white">
        <h2 class="text-4xl font-bold mb-4">Examples Of Our Recipes</h2>
        <section class="my-10">
            <div class="container mx-auto px-6">
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
                            <p class="text-gray-700 my-2">
                                Start your day with this energizing and healthy breakfast bowl.
                            </p>
                            <div class="flex justify-between items-center">
                                <span
                                    class="inline-block bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-green-800">Healthy</span>
                                <span><i class="far fa-clock"></i> 15 min</span>
                            </div>
                        </div>
                    </div>

                    <!-- Additional recipe cards can be created following the same pattern as Recipe Card 1 -->



                    <!-- Recipe Card 2 -->
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
                            <div class="flex justify-between items-center">
                                <span
                                    class="inline-block bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-green-800">Vegetarian</span>
                                <span><i class="far fa-clock"></i> 25 min</span>
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
                            <div class="flex justify-between items-center">
                                <span
                                    class="inline-block bg-yellow-200 rounded-full px-3 py-1 text-sm font-semibold text-yellow-800">Low
                                    Calorie</span>
                                <span><i class="far fa-clock"></i> 20 min</span>
                            </div>
                        </div>
                    </div>


        </section>

        <!-- Customer T -->
        <!--Carousel-->    <section  class="py-10 px-6">
        <!-- customers -->
        <section id="about" class="py-20 px-6 bg-white text-[#333333]">
            <div class="container mx-auto flex flex-wrap items-center  ">
                <!-- Text Content -->
                <div class="w-full md:w-1/2 px-6 mb-8 md:mb-0">
                    <h2 class="text-4xl font-bold mb-4 ">What is Says Customers</h2>
        </div>
    <div id="carouselExampleCaptions" class="relative" data-twe-carousel-init data-twe-carousel-slide>
        <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
          <!--First Testimonial / Carousel item-->
          <div class="relative float-left -mr-[100%] w-full text-center transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-twe-carousel-active data-twe-carousel-item style="backface-visibility: hidden">
            <p class="mx-auto max-w-4xl text-xl italic text-neutral-700 dark:text-neutral-300">
              "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit,
              error amet numquam iure provident voluptate esse quasi, voluptas
              nostrum quisquam!"
            </p>
            <div class="mb-6 mt-12 flex justify-center">
              <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp" class="h-24 w-24 rounded-full shadow-lg dark:shadow-black/30" alt="smaple image" />
            </div>
            <p class="text-neutral-500 dark:text-neutral-300">- Anna Morian</p>
          </div>
  
          <!--Second Testimonial / Carousel item-->
          <div class="relative float-left -mr-[100%] w-full text-center transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-twe-carousel-item style="backface-visibility: hidden">
            <p class="mx-auto max-w-4xl text-xl italic text-neutral-700 dark:text-neutral-300">
              "Neque cupiditate assumenda in maiores repudiandae mollitia
              adipisci maiores repudiandae mollitia consectetur adipisicing
              architecto elit sed adipiscing elit."
            </p>
            <div class="mb-6 mt-12 flex justify-center">
              <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(31).webp" class="h-24 w-24 rounded-full shadow-lg dark:shadow-black/30" alt="smaple image" />
            </div>
            <p class="text-neutral-500 dark:text-neutral-300">- Teresa May</p>
          </div>
  
          <!--Third Testimonial / Carousel item-->
          <div class="relative float-left mr-[100%] w-full text-center transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-twe-carousel-item style="backface-visibility: hidden">
            <p class="mx-auto max-w-4xl text-xl italic text-neutral-700 dark:text-neutral-300">
              "Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur est laborum neque
              cupiditate assumenda in maiores."
            </p>
            <div class="mb-6 mt-12 flex justify-center">
              <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" class="h-24 w-24 rounded-full shadow-lg dark:shadow-black/30" alt="smaple image" />
            </div>
            <p class="text-neutral-500 dark:text-neutral-300">- Kate Allise</p>
          </div>
        </div>
  
        <!--Carousel Controls - prev item-->
        <button class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-black opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-black hover:no-underline hover:opacity-90 hover:outline-none focus:text-black focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none dark:text-white dark:opacity-50 dark:hover:text-white dark:focus:text-white" type="button" data-twe-target="#carouselExampleCaptions" data-twe-slide="prev">
          <span class="inline-block h-8 w-8">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
          </span>
          <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
        </button>
        <!--Carousel Controls - next item-->
        <button class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-black opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-black hover:no-underline hover:opacity-90 hover:outline-none focus:text-black focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none dark:text-white dark:opacity-50 dark:hover:text-white dark:focus:text-white" type="button" data-twe-target="#carouselExampleCaptions" data-twe-slide="next">
          <span class="inline-block h-8 w-8">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
          </span>
          <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
        </button>
      </div>
        <!--Carousel-->
        
        <section id="contact" class="py-20 px-6 bg-white text-gray-800 font-sans" style="font-family: 'Poppins', sans-serif;">
            <!-- Banner image with cuisine-related content -->
            <div class="bg-gradient-to-r from-red-300 to-pink-300 w-full h-60">
                {{-- <img src="https://static.studyusa.com/article/aws_cvNtaomj7dd2DLKNfPVRBqqQfbYSPoJI_sm_2x.jpg?format=webp" alt="Cuisine-related banner image" class="w-full h-full object-cover" /> --}}
            </div>
            <div class="container mx-auto">
                <div class="-mt-28 mb-6 px-4">
                    <div class="mx-auto max-w-6xl shadow-lg py-8 px-6 relative bg-white rounded-lg">
                        <h1 class="text-3xl font-bold mb-4 text-gray-800">Connect With Us</h1>
                        <p class="text-sm text-gray-500 mt-3">Got a groundbreaking idea or a project that needs some creative input? We're all ears! Drop us a line and let's make something great together.</p>
                        <form class="mt-8 grid sm:grid-cols-2 gap-6">
                            <input type='text' placeholder='Your Name' class="w-full rounded py-2.5 px-4 mt-2 border border-gray-300 text-sm focus:outline-none focus:border-red-300 focus:ring-1 focus:ring-red-500" />
                            <input type='email' placeholder='Email' class="w-full rounded py-2.5 px-4 border border-gray-300 text-sm focus:outline-none focus:border-red-300 focus:ring-1 focus:ring-red-500" />
                            <input type='text' placeholder='Subject' class="w-full rounded py-2.5 px-4 border border-gray-300 text-sm focus:outline-none focus:border-red-300 focus:ring-1 focus:ring-red-400" />
                            <textarea placeholder='Message' rows="6" class="w-full rounded px-4 py-2.5 border border-gray-300 text-sm focus:outline-none focus:border-red-400 focus:ring-1 focus:ring-red-500"></textarea>
                            <div class="col-span-full">
                                <button type='submit' class="text-white bg-red-300 hover:bg-red-400 font-semibold rounded-md text-sm px-4 py-2.5 w-full">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                    </div>
                </section>


    {{-- FAQ --}}
    <section class="bg-white dark:bg-gray-900 font-poppins" style="font-family: 'Poppins', sans-serif;">
        <div class="max-w-screen-xl mx-auto px-5 bg-white min-h-screen">
            <div class="flex flex-col items-center">
                <h2 class="font-bold text-5xl mt-5 tracking-tight">
                    FAQ
                </h2>
                <p class="text-neutral-500 text-xl mt-3">
                    Frequently Asked Questions
                </p>
            </div>
            <div class="grid divide-y divide-neutral-200 max-w-xl mx-auto mt-8">
                <!-- Example FAQ Item -->
                <div class="py-5">
                    <details class="group">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span>What themes and categories do you offer?</span>
                            <span class="transition group-open:rotate-180">
                                <!-- Chevron Down Icon -->
                                <svg class="w-5 h-5 text-pink-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                            We offer a wide range of themes and categories for your kitchen, including modern,
                            traditional, farmhouse, and contemporary styles. Each category provides unique design
                            elements and functionalities tailored to your preferences.
                        </p>
                    </details>
                </div>


                <div class="py-5">
                    <details class="group">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span>Do you offer a warranty for your kitchens?</span>
                            <span class="transition group-open:rotate-180">
                                <!-- Chevron Down Icon -->
                                <svg class="w-5 h-5 text-pink-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                            Yes, all our kitchens come with a 5-year warranty on cabinetry and a lifetime warranty on
                            hinges and drawer slides. We stand by the quality of our products and craftsmanship.
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span>Is it possible to visit a showroom?</span>
                            <span class="transition group-open:rotate-180">
                                <!-- Chevron Down Icon -->
                                <svg class="w-5 h-5 text-pink-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                            Absolutely, we invite you to visit our showroom to see the quality of our kitchens
                            firsthand. Please contact us to schedule a visit.
                        </p>
                    </details>
                </div>
                <!-- Additional FAQ items can be added here -->
            </div>
        </div>
    </section>



    <script>
        ...
        extend: {
                keyframes: {
                    fadeIn: {
                        "0%": {
                            opacity: 0
                        },
                        "100%": {
                            opacity: 100
                        },
                    },
                },
                animation: {
                    fadeIn: "fadeIn 0.2s ease-in-out forwards",
                },
            },
            ...
    </script>

    </section>

    <!-- Footer -->
    <footer class="bg-white px-6 py-4">
        <p class="text-center">Cuisénio © 2024. All rights reserved.</p>
    </footer>

</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
      // Get all carousel items
      const carouselItems = document.querySelectorAll('[data-twe-carousel-item]');
      // Set the index of the current active item
      let currentIndex = 0;

      // Function to show the current item
      const showItem = (index) => {
        // Hide all items
        carouselItems.forEach(item => {
          item.style.transform = 'translateX(100%)';
        });

        // Show the current item
        carouselItems[index].style.transform = 'translateX(0)';
      };

      // Function to show the next item
      const showNext = () => {
        currentIndex = (currentIndex + 1) % carouselItems.length;
        showItem(currentIndex);
      };

      // Function to show the previous item
      const showPrev = () => {
        currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
        showItem(currentIndex);
      };

      // Event listeners for next and previous buttons
      const nextButton = document.querySelector('[data-twe-slide="next"]');
      const prevButton = document.querySelector('[data-twe-slide="prev"]');
      nextButton.addEventListener('click', showNext);
      prevButton.addEventListener('click', showPrev);

      // Show the first item initially
      showItem(currentIndex);
    });
  </script>
</html>
