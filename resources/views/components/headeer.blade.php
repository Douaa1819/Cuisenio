
@props(['page'])
<div class="flex gap-5 justify-between items-start px-2 py-1 text-sm font-medium leading-5 uppercase bg-white text-stone-300 shadow-lg font-sans">
  <div>
    <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-32 h-24">
  </div>
  <div class="flex gap-5 justify-between my-auto">
    <a href="{{ route('home') }}" @class([
        'px-3 py-2 rounded text-black bg-opacity-10 bg-stone-300 hover:bg-opacity-100 hover:text-black',
        'bg-stone-300 text-black' => $page == 'home'
    ])>
   Home
    </a>

    <div class="group relative">
      <button class="px-3 py-2 rounded text-black bg-opacity-10 bg-stone-300 hover:bg-opacity-100 hover:text-black flex items-center gap-2">
        Thèmes
      </button>
      <div class="absolute hidden group-hover:block mt-1 bg-stone-300 text-black rounded shadow-lg">
        <a href="#" class="block px-4 py-2 hover:bg-stone-400">Thème 1</a>
        <a href="#" class="block px-4 py-2 hover:bg-stone-400">Thème 2</a>
        <a href="#" class="block px-4 py-2 hover:bg-stone-400">Thème 3</a>
      </div>
    </div>

    <a href="" @if($page == 'blog') class="px-3 py-2 rounded text-black text-blackbg-opacity-10 bg-stone-300 hover:bg-opacity-100 hover:text-black" @else class="px-3 py-2  text-black rounded bg-opacity-10 bg-stone-300 hover:bg-opacity-100 hover:text-black" @endif>Blog</a>
    <a href="" @if($page == 'about') class="px-3 py-2 rounded text-black text-blackbg-opacity-10 bg-stone-300 hover:bg-opacity-100 hover:text-black" @else class="px-3 py-2  text-black rounded bg-opacity-10 bg-stone-300 hover:bg-opacity-100 hover:text-black" @endif>About US</a>
    <a href="" @if($page == 'contact') class="px-3 py-2 rounded text-black text-blackbg-opacity-10 bg-stone-300 hover:bg-opacity-100 hover:text-black" @else class="px-3 py-2  text-black rounded bg-opacity-10 bg-stone-300 hover:bg-opacity-100 hover:text-black" @endif>Contact US</a>

    <a href="" class="text-white bg-red-300 hover:bg-red-300 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 lg:px-3 py-2 lg:py-2.5 sm:mr-1 lg:mr-0 dark:bg-red-300 dark:hover:bg-red-300 focus:outline-none dark:focus:ring-red-300">Sign in</a>
    <a href="" class="text-black bg-white
      hover:bg-red-300 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-red-300 dark:hover:bg-red-300 focus:outline-none dark:focus:ring-red-300">Sign up</a>
    
    <!-- Exemple d'icône pour le changement de thème (à remplacer par votre propre solution) -->
    
  </div>
</div>