<!-- component -->
<x-head></x-head>

<x-main-layout>
    @section('douaaa')
    @endsection

</x-main-layout>
<x-header page='blog' />

<div class="bg-gray-100 pl-96">
    <div class="flex">

        <div class="py-5 text-center fixed top-30 left-20">



            <div class="pt-2 relative text-gray-600">
                <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-full text-sm focus:outline-none"
                    type="search" name="search" placeholder="Search">
                <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                    <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                        viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                        xml:space="preserve" width="512px" height="512px">
                        <path
                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </button>
            </div>

        </div>

        <div class="w-3/5 border border-gray-600 h-auto  border-t-0">
            <!--middle wall-->

            <div class="flex">
                <div class="flex-1 m-2">
                    <h2 class="px-4 py-2 text-xl font-semibold text-black">Home</h2>
                </div>
                <div class="flex-1 px-4 py-2 m-2">
                    <a href=""
                        class=" text-2xl font-medium rounded-full text-black hover:bg-blue-800 hover:text-red-300 float-right">
                        <svg class="m-2 h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <g>
                                <path
                                    d="M22.772 10.506l-5.618-2.192-2.16-6.5c-.102-.307-.39-.514-.712-.514s-.61.207-.712.513l-2.16 6.5-5.62 2.192c-.287.112-.477.39-.477.7s.19.585.478.698l5.62 2.192 2.16 6.5c.102.306.39.513.712.513s.61-.207.712-.513l2.16-6.5 5.62-2.192c.287-.112.477-.39.477-.7s-.19-.585-.478-.697zm-6.49 2.32c-.208.08-.37.25-.44.46l-1.56 4.695-1.56-4.693c-.07-.21-.23-.38-.438-.462l-4.155-1.62 4.154-1.622c.208-.08.37-.25.44-.462l1.56-4.693 1.56 4.694c.07.212.23.382.438.463l4.155 1.62-4.155 1.622zM6.663 3.812h-1.88V2.05c0-.414-.337-.75-.75-.75s-.75.336-.75.75v1.762H1.5c-.414 0-.75.336-.75.75s.336.75.75.75h1.782v1.762c0 .414.336.75.75.75s.75-.336.75-.75V5.312h1.88c.415 0 .75-.336.75-.75s-.335-.75-.75-.75zm2.535 15.622h-1.1v-1.016c0-.414-.335-.75-.75-.75s-.75.336-.75.75v1.016H5.57c-.414 0-.75.336-.75.75s.336.75.75.75H6.6v1.016c0 .414.335.75.75.75s.75-.336.75-.75v-1.016h1.098c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z">
                                </path>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>

            <hr class="border-gray-600">
            <!--middle creat tweet-->
            <div class="flex">
                <div class="m-2 w-10 py-1">
                    <img class="inline-block h-10 w-10 rounded-full"
                        src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png"
                        alt="" />
                </div>
                <div class="flex-1 px-2 pt-2 mt-2">
                    <textarea class=" bg-transparent text-gray-400 font-medium text-lg w-full" rows="2" cols="50"
                        placeholder="What's happening?"></textarea>
                </div>
            </div>
            <!--middle creat tweet below icons-->
            <div class="flex">
                <div class="w-10"></div>

                <div class="w-64 px-2">

                    <div class="flex items-center">
                        <div class="flex-1 text-center px-1 py-1 m-2">
                            <a href="#"
                                class="mt-1 group flex items-center text-red-300 px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-red-300">
                                <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </a>
                        </div>

                        <div class="flex-1 text-center py-2 m-2">
                            <a href="#"
                                class="mt-1 group flex items-center text-red-300 px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-red-300">
                                <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                    </path>
                                    <path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </a>
                        </div>

                        <div class="flex-1 text-center py-2 m-2">
                            <a href="#"
                                class="mt-1 group flex items-center text-red-300 px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-red-300">
                                <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </a>
                        </div>

                        <div class="flex-1 text-center py-2 m-2">
                            <a href="#"
                                class="mt-1 group flex items-center text-red-300 px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-red-300">
                                <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex-1">
                    <button
                        class="bg-red-300 mt-5 hover:bg-pink-200 text-black font-bold py-2 px-8 rounded-full mr-8 float-right">
                        Add
                    </button>
                </div>
            </div>

            <hr class="border-blue-800 border-4">


            <div>
            </div>



            <!--first tweet start-->
            <div class="flex flex-shrink-0 p-4 pb-0">
                <a href="#" class="flex-shrink-0 group block">
                    <div class="flex items-center">
                        <div>
                            <img class="inline-block h-10 w-10 rounded-full"
                                src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png"
                                alt="" />
                        </div>
                        <div class="ml-3">
                            <p class="text-base leading-6 font-medium text-black">
                                Sonali Hirave
                                <span
                                    class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                                    @ShonaDesign . 16 April
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="pl-16">
                <p class="text-base width-auto font-medium text-black flex-shrink">
                    Day 07 of the challenge <span class="text-red-300">#100DaysOfCode</span>
                    I was wondering what I can do with <span class="text-red-300">#tailwindcss</span>, so just started
                    building Twitter UI using Tailwind and so far it looks so promising. I will post my code after
                    completion.
                    [07/100]
                    <span class="text-red-300"> #WomenWhoCode #CodeNewbie</span>
                </p>


                <div class="flex">
                    <div class="w-full">

                        <div class="flex items-center">
                            <div class="flex-1 text-center">
                                <a href="#"
                                    class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-red-300">
                                    <svg class="text-center h-6 w-6" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                        </path>
                                    </svg>
                                </a>
                            </div>



                            <div class="flex-1 text-center py-2 m-2">
                                <a href="#"
                                    class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-red-300">
                                    <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                        </path>
                                    </svg>
                                </a>
                            </div>

                            <div class="flex-1 text-center py-2 m-2">
                                <a href="#"
                                    class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-red-300">
                                    <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                                    </svg>
                                </a>
                            </div>

                        </div>
                    </div>


                </div>

            </div>
            <hr class="border-gray-200">

            <!--second tweet-->

            <div class="flex flex-shrink-0 p-4 pb-0">
                <a href="#" class="flex-shrink-0 group block">
                    <div class="flex items-center">
                        <div>
                            <img class="inline-block h-10 w-10 rounded-full"
                                src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png"
                                alt="" />
                        </div>
                        <div class="ml-3">
                            <p class="text-base leading-6 font-medium text-black">
                                Sonali Hirave
                                <span
                                    class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                                    @ShonaDesign . 16 April
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="pl-16">
                <p class="text-base width-auto font-medium text-black flex-shrink">
                    Day 07 of the challenge <span class="text-red-300">#100DaysOfCode</span>
                    I was wondering what I can do with <span class="text-red-300">#tailwindcss</span>, so just started
                    building Twitter UI using Tailwind and so far it looks so promising. I will post my code after
                    completion.
                    [07/100]
                    <span class="text-red-300"> #WomenWhoCode #CodeNewbie</span>
                </p>

                <div class="md:flex-shrink pr-6 pt-3">
                    <img class="rounded-lg w-full h-64"
                        src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80"
                        alt="Woman paying for a purchase">
                </div>
                <div class="flex">
                    <div class="w-full">

                        <div class="flex items-center">
                            <div class="flex-1 text-center">
                                <a href="#"
                                    class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-red-300">
                                    <svg class="text-center h-6 w-6" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                        </path>
                                    </svg>
                                </a>
                            </div>

                            <div class="flex-1 text-center py-2 m-2">
                                <a href="#"
                                    class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-red-300">
                                    <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path>
                                    </svg>
                                </a>
                            </div>

                            <div class="flex-1 text-center py-2 m-2">
                                <a href="#"
                                    class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-red-300">
                                    <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                        </path>
                                    </svg>
                                </a>
                            </div>

                            <div class="flex-1 text-center py-2 m-2">
                                <a href="#"
                                    class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-red-300">
                                    <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="flex-1 text-center py-2 m-2">
                                <a href="#"
                                    class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-red-300">
                                </a>
                            </div>
                            <div class="flex-1 text-center py-2 m-2">
                                <a href="#"
                                    class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-red-300">
                                    <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <hr class="border-gray-600">




            <!--third tweet-->

            <div class="flex flex-shrink-0 p-4 pb-0">
                <a href="#" class="flex-shrink-0 group block">
                    <div class="flex items-center">
                        <div>
                            <img class="inline-block h-10 w-10 rounded-full"
                                src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png"
                                alt="" />
                        </div>
                        <div class="ml-3">
                            <p class="text-base leading-6 font-medium text-black">
                                Sonali Hirave
                                <span
                                    class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                                    @ShonaDesign . 16 April
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="pl-16">
                <p class="text-base width-auto font-medium text-black flex-shrink">
                    Day 07 of the challenge <span class="text-red-300">#100DaysOfCode</span>
                    I was wondering what I can do with <span class="text-red-300">#tailwindcss</span>, so just started
                    building Twitter UI using Tailwind and so far it looks so promising. I will post my code after
                    completion.
                    [07/100]
                    <span class="text-red-300"> #WomenWhoCode #CodeNewbie</span>
                </p>


                <div class="flex">
                    <div class="w-full">

                        <div class="flex items-center">
                            <div class="flex-1 text-center">
                                <a href="#"
                                    class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-red-300">
                                    <svg class="text-center h-6 w-6" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                        </path>
                                    </svg>
                                </a>
                            </div>

                            <div class="flex-1 text-center py-2 m-2">
                                <a href="#"
                                    class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-red-300">
                                    <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path>
                                    </svg>
                                </a>
                            </div>

                            <div class="flex-1 text-center py-2 m-2">
                                <a href="#"
                                    class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-red-300">
                                    <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                        </path>
                                    </svg>
                                </a>
                            </div>

                            <div class="flex-1 text-center py-2 m-2">
                                <a href="#"
                                    class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-red-300">
                                    <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <hr class="border-gray-100">

        </div>


        <div class="w-2/5 h-auto">
            <!-- Trending Blog Section -->
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-4 bg-white">
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-900">Blog Trends</h2>
                    <!-- Trending items -->
                    <div class="mt-4 space-y-4">
                        <div class="flex items-center">
                            <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/40x40"
                                alt="Trending Topic Image">
                            <div class="ml-3">
                                <h3 class="text-md font-semibold text-gray-900">#Microsoft363</h3>
                                <p class="text-xs text-gray-500">5,466 Tweets</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/40x40"
                                alt="Trending Topic Image">
                            <h3 class="ml-3 text-md font-semibold text-gray-900">#HI-Fashion</h3>
                            <p class="text-xs text-gray-500">8,464 Tweets</p>
                        </div>
                        <div class="flex items-center">
                            <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/40x40"
                                alt="Trending Topic Image">
                            <h3 class="ml-3 text-md font-semibold text-gray-900">#Ferrari</h3>
                            <p class="text-xs text-gray-500">5,586 Tweets</p>
                        </div>
                        <div class="flex items-center">
                            <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/40x40"
                                alt="Trending Topic Image">
                            <h3 class="ml-3 text-md font-semibold text-gray-900">#Vettel</h3>
                            <p class="text-xs text-gray-500">9,416 Tweets</p>
                        </div>
                    </div>
                    <!-- Show more link -->
                    <div class="mt-4 text-right">
                        <a href="#" class="text-blue-500 hover:text-blue-700 text-sm font-semibold">Show
                            more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>





</div>

<div />

</div>

<x-footer></x-footer>