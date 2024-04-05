<x-head></x-head>
<body class="bg-[#F2F2F2] text-[#333333]">

   <!-- Navbar -->
   <x-headeer page='home' />

<section id="contact" class="py-20  bg-white text-gray-800 font-sans"
                    style="font-family: 'Poppins', sans-serif;">
                    <!-- Banner image with cuisine-related content -->
                    <div class="bg-gradient-to-r from-red-300 to-pink-200 w-full h-60">
                        <img src="{{ asset('images/contact.jpg') }}" alt="Cuisine-related banner image"
                            class="w-full h-full object-cover " />
                    </div>
                    <div class="container mx-auto">
                        <div class="-mt-28 mb-6 px-4">
                            <div class="mx-auto max-w-6xl shadow-lg py-8 px-6 relative bg-white rounded-lg">
                                <h1 class="text-3xl font-bold mb-4 text-gray-800">Connect With Us</h1>
                                <p class="text-sm text-gray-500 mt-3">Got a groundbreaking idea or a project that
                                    needs some creative input?<br><br> We're all ears! Drop us a line and let's make
                                    something great together.</p>
                                <form class="mt-8 grid sm:grid-cols-2 gap-6">
                                    <input type='text' placeholder='Your Name'
                                        class="w-full rounded py-2.5 px-4 mt-2 border border-gray-300 text-sm focus:outline-none focus:border-red-300 focus:ring-1 focus:ring-red-500" />
                                        <input type='email' placeholder='Email'
                                        class="w-full rounded py-2.5 px-4 mt-2 border border-gray-300 text-sm focus:outline-none focus:border-red-300 focus:ring-1 focus:ring-red-500" />
                                        <textarea placeholder='Subject' rows="6"
                                        class="w-full rounded px-4 py-2.5 border border-gray-300 text-sm focus:outline-none focus:border-red-400 focus:ring-1 focus:ring-red-500"></textarea>
                                    <textarea placeholder='Message' rows="6"
                                        class="w-full rounded px-4 py-2.5 border border-gray-300 text-sm focus:outline-none focus:border-red-400 focus:ring-1 focus:ring-red-500"></textarea>
                                    <div class="col-span-full">
                                        <button type='submit'
                                            class="text-white bg-red-400 hover:bg-red-300 font-semibold rounded-md text-sm px-4 py-2.5 w-full">Send
                                            Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                </section>

                <section class="bg-cover bg-center py-20  bg-white  text-center relative">
                    <div class="bg-white bg-opacity-80 p-8 inline-block rounded-lg shadow-lg">
                        <h2 class="text-3xl font-bold mb-4">Deliciousness to Your Inbox</h2>
                        <p class="text-gray-700 mb-8">
                            Join our newsletter to stay updated with the latest recipes and cooking tips.
                        </p>
                        <form class="flex flex-wrap justify-center gap-4">
                            <input type="email" placeholder="Your email address..."
                                class="p-2 w-full md:w-auto border-2 border-gray-300 rounded-md" />
                            <button type="submit"
                                class="bg-red-400 hover:bg-orange-600 text-white font-bold p-2 rounded-md transition-colors">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </section>

                
    <x-footer></x-footer>