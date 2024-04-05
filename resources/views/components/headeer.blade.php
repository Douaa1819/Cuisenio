@props(['page'])
<div
    class="flex gap-5 justify-around items-start px-2 py-1 text-sm font-bold bg-white text-stone-300 shadow-xlg">
    <div>
        <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-32 h-24">
    </div>
    <div class="flex gap-5 justify-center my-auto items-center">
        <a href="{{ route('home') }}" @class([
            'px-3 py-2 rounded text-black bg-opacity-10 bg-stone-300 hover:bg-opacity-100 hover:text-black',
            'bg-stone-300 text-black' => $page == 'home',
        ])>
            Home
        </a>
        <a href=""
            @if ($page == 'blog') class="px-3 py-2 rounded text-black text-blackbg-opacity-10 bg-stone-300 hover:bg-opacity-100 hover:text-black" @else class="px-3 py-2  text-black rounded bg-opacity-10 bg-stone-300 hover:bg-opacity-100 hover:text-black" @endif>Blog</a>
        <a href="{{ route('about') }}"
            @if ($page == 'about') class="px-3 py-2 rounded text-black text-blackbg-opacity-10 bg-stone-300 hover:bg-opacity-100 hover:text-black" @else class="px-3 py-2  text-black rounded bg-opacity-10 bg-stone-300 hover:bg-opacity-100 hover:text-black" @endif>About
            US</a>
        <a href="{{ route('contact') }}"
            @if ($page == 'contact') class="px-3 py-2 rounded text-black text-blackbg-opacity-10 bg-stone-300 hover:bg-opacity-100 hover:text-black" @else class="px-3 py-2  text-black rounded bg-opacity-10 bg-stone-300 hover:bg-opacity-100 hover:text-black" @endif>Contact
            US</a>

        <!-- Exemple d'icône pour le changement de thème (à remplacer par votre propre solution) -->
    </div>
    <div class="flex my-auto items-center justify-center gap-5">
        <a href=""
            class="text-black bg-white
        hover:bg-red-300 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-red-300 dark:hover:bg-red-300 focus:outline-none dark:focus:ring-red-300">Sign
            up</a>
        <a href=""
            class="text-black bg-white
        hover:bg-red-300 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-red-300 dark:hover:bg-red-300 focus:outline-none dark:focus:ring-red-300">login</a>
    </div>

</div>
