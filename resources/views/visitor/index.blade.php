

<body class="bg-[#F2F2F2] text-[#333333]">

    <!-- Navbar -->
    <x-headeer page='home' />

    <!-- Home -->
    
  
    
    
   
    
    


       

        {{-- examples recipes --}}
        <!-- Recipe Cards Section -->
        <section class="my-10">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-8">Our Latest Recipes</h2>
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


                    <!-- Additional recipe cards can be created following the same pattern as Recipe Card 1 -->



                    <!-- Recipe Card 2 -->
                    <

                  


        </section>

       

                
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
                                    <summary
                                        class="flex justify-between items-center font-medium cursor-pointer list-none">
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
                                        We offer a wide range of themes and categories for your kitchen, including
                                        modern,
                                        traditional, farmhouse, and contemporary styles. Each category provides
                                        unique design
                                        elements and functionalities tailored to your preferences.
                                    </p>
                                </details>
                            </div>


                            <div class="py-5">
                                <details class="group">
                                    <summary
                                        class="flex justify-between items-center font-medium cursor-pointer list-none">
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
                                        Yes, all our kitchens come with a 5-year warranty on cabinetry and a
                                        lifetime warranty on
                                        hinges and drawer slides. We stand by the quality of our products and
                                        craftsmanship.
                                    </p>
                                </details>
                            </div>
                            <div class="py-5">
                                <details class="group">
                                    <summary
                                        class="flex justify-between items-center font-medium cursor-pointer list-none">
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
                                        Absolutely, we invite you to visit our showroom to see the quality of our
                                        kitchens
                                        firsthand. Please contact us to schedule a visit.
                                    </p>
                                </details>
                            </div>
                            <!-- Additional FAQ items can be added here -->
                        </div>
                    </div>
                </section>



                

            </section>
            <x-footer></x-footer>
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
