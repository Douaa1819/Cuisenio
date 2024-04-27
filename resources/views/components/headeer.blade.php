@props(['page'])
<div class="flex gap-5 justify-around items-start px-2 py-1 text-sm font-bold bg-white text-stone-300 shadow-xlg">
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
        <a href="{{ route('blog.index') }}"
            @if ($page == 'blog') class="px-3 py-2 rounded text-black text-blackbg-opacity-10 bg-stone-300 hover:bg-opacity-100 hover:text-black" @else class="px-3 py-2  text-black rounded bg-opacity-10 bg-stone-300 hover:bg-opacity-100 hover:text-black" @endif>Blog</a>
        <a href="{{ route('about') }}"
            @if ($page == 'about') class="px-3 py-2 rounded text-black text-blackbg-opacity-10 bg-stone-300 hover:bg-opacity-100 hover:text-black" @else class="px-3 py-2  text-black rounded bg-opacity-10 bg-stone-300 hover:bg-opacity-100 hover:text-black" @endif>About
            Us</a>
        <a href="{{ route('contact') }}"
            @if ($page == 'contact') class="px-3 py-2 rounded text-black text-blackbg-opacity-10 bg-stone-300 hover:bg-opacity-100 hover:text-black" @else class="px-3 py-2  text-black rounded bg-opacity-10 bg-stone-300 hover:bg-opacity-100 hover:text-black" @endif>Contact
            Us</a>

        <!-- Exemple d'icône pour le changement de thème (à remplacer par votre propre solution) -->
    </div>
    <div class="flex my-auto items-center justify-center gap-5">
        <a href="{{ route('login')}}"
            class="relative px-5 py-2 overflow-hidden font-medium text-gray-600 bg-pink-100 border border-pink-100 rounded-lg shadow-inner group">
            <span
                class="absolute top-0 left-0 w-0 h-0 transition-all duration-200 border-t-2 border-pink-400 group-hover:w-full ease"></span>
            <span
                class="absolute bottom-0 right-0 w-0 h-0 transition-all duration-200 border-b-2 border-pink-400 group-hover:w-full ease"></span>
            <span
                class="absolute top-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-pink-400 group-hover:h-full ease"></span>
            <span
                class="absolute bottom-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-pink-400 group-hover:h-full ease"></span>
            <span
                class="absolute inset-0 w-full h-full duration-300 delay-300 bg-black opacity-0 group-hover:opacity-100"></span>
            <span class="relative transition-colors duration-300 delay-200 group-hover:text-white ease">Login</span>
        </a>
        <a href="{{ route ('register')}}"
            class="rounded-md px-3.5 py-1.5 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-pink-200 text-pink-200">
            <span
                class="absolute w-64 h-0 transition-all   duration-300 origin-center rotate-45 -translate-x-20 bg-black top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease "></span>
            <span class="relative  text-black transition duration-300 group-hover:text-white ease">Sign in</span>
        </a>
    </div>

</div>
