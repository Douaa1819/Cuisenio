<x-head></x-head>


<x-header page='Home' />
<section id="inspiration" class="pt-16 pb-20 px-6 bg-white  ">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-8"> Our Theme</h2>
   
        <div class="flex flex-wrap justify-center gap-10">


            <div class="container mx-auto px-4 py-8 mb-6 ">
                <div class="grid grid-cols-6 gap-4 mt-5">
                    @foreach ($themes as $theme)
                        @if ($theme->image)
                        <a href="{{ route('filtre', ['theme' => $theme]) }}"
                                class="flex flex-col items-center transition duration-300 ease-in-out hover:scale-110 group">
                                <img src="{{ Storage::url($theme->image->url) }}" alt="Theme Image" 
                                    class="w-24 h-24 object-cover rounded-full shadow-md hover:shadow-lg">
                                <h3 class="text-sm font-semibold mt-2 text-gray-700 group-hover:text-gray-800">
                                    {{ $theme->name }}</h3>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>