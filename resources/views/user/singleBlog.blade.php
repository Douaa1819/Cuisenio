<x-head></x-head>

<x-main-layout>
    @section('douaaa')
    @endsection

</x-main-layout>
<x-header page='blogPage' />

<div class="bg-white dark:bg-gray-800 py-8">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-center -mx-4">
            <div class="md:flex-1 px-4">
                <div class="h-[460px] rounded-lg bg-gray- border-2 border-red-300 dark:bg-gray-700 mb-4">
                    <img class="w-full h-full object-cover rounded-lg"
                        src="https://cdn.pixabay.com/photo/2020/05/22/17/53/mockup-5206355_960_720.jpg"
                        alt="Product Image">
                </div>
                {{-- <div class="flex -mx-2 mb-4">
                    <div class="w-1/2 px-2">
                        <button
                            class="w-full bg-gray-900 dark:bg-gray-600 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-800 dark:hover:bg-gray-700">Add
                            to Cart</button>
                    </div>
                    <div class="w-1/2 px-2">
                        <button
                            class="w-full bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white py-2 px-4 rounded-full font-bold hover:bg-gray-300 dark:hover:bg-gray-600">Add
                            to Wishlist</button>
                    </div>
                </div> --}}
            </div>
            <div class="md:flex-1 px-4">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">Blog Name</h2>
                <div>
                    <p class="text-gray-600 dark:text-gray-300 text-sm mt-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                        sed ante justo. Integer euismod libero id mauris malesuada tincidunt. Vivamus commodo nulla ut
                        lorem rhoncus aliquet. Duis dapibus augue vel ipsum pretium, et venenatis sem blandit. Quisque
                        ut erat vitae nisi ultrices placerat non eget velit. Integer ornare mi sed ipsum lacinia, non
                        sagittis mauris blandit. Morbi fermentum libero vel nisl suscipit, nec tincidunt mi consectetur.
                    </p>
                </div>
                <div class="flex mt-4">
                    <div class="mr-4">
                        <span class="font-bold text-gray-700 dark:text-gray-300">Likes:</span>
                        <span class="text-gray-600 dark:text-gray-300">2.5k</span>
                    </div>
                    <div>
                        <span class="font-bold text-gray-700 dark:text-gray-300">Comments:</span>
                        <span class="text-gray-600 dark:text-gray-300">1k</span>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>

<x-footer></x-footer>
