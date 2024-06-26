


<x-dashboard>

        <div class=" lg:pl-80 lg:pt-20 h-screen flex flex-col items-center">
            <div class="px-4 py-5  md:px-6 mx-auto max-w-7xl">
                <h1 class="text-3xl  mx-auto  font-bold text-gray-800 mb-6">Good afternoon, Monsieur {{$admin}}!</h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6 w-full max-w-6xl">
                <div class="bg-white rounded-lg shadow p-4 space-y-2">
                    <span class="text-gray-700 font-semibold">number of users:</span>
                    <span class="text-2xl  text-green-500  font-bold">{{$user}}</span>
                </div>

                <div class="bg-white rounded-lg shadow p-4 space-y-2">
                    <span class="text-gray-700 font-semibold">number of recipes:</span>
                    <span class="text-2xl text-green-500 font-bold">{{$recipes}}</span>
                </div>


                <div class="bg-white rounded-lg shadow p-4 space-y-2">
                    <span class="text-gray-700 font-semibold">number of Themes:</span>
                    <span class="text-2xl  text-green-500 font-bold">{{$themes}}</span>
                </div>
               
            </div>


        </div>

        </x-dashboard>
        <div class="  ml-48">
        <footer class="w-full text-center  flex justify-center items-center p-4 text-sm text-gray-600">
            © 2024 Cuisénio. All rights reserved.
        </div>
        </div>
        </footer>