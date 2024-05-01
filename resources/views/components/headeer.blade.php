@props(['page'])
<div x-data="{ isOpen: false }" @click.away="isOpen = false" class="bg-white text-stone-300 shadow-xlg">
    <div class="flex items-center justify-between px-4 py-2 text-sm font-bold relative">
        <!-- Logo on the left -->
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-32 h-24">
        </a>
        
        <!-- Hamburger icon -->
        <button @click="isOpen = !isOpen" class="lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
            </svg>
        </button>

        <!-- Menu items -->
        <div :class="{'flex': isOpen, 'hidden': !isOpen}" class="flex-col lg:flex-row gap-5 justify-center items-center bg-white lg:bg-transparent absolute top-full left-0 right-0 z-50 lg:static lg:flex">
            <a href="{{ route('home') }}" @click="isOpen = false" class="{{ $page == 'home' ? 'text-black bg-stone-300' : 'text-black' }} px-3 py-2 rounded hover:bg-stone-300 hover:text-black transition-colors">
                Home
            </a>
            <a href="{{ route('blog.index') }}" @click="isOpen = false" class="{{ $page == 'blog' ? 'text-black bg-stone-300' : 'text-black' }} px-3 py-2 rounded hover:bg-stone-300 hover:text-black transition-colors">
                Blog
            </a>
            <a href="{{ route('about') }}" @click="isOpen = false" class="{{ $page == 'about' ? 'text-black bg-stone-300' : 'text-black' }} px-3 py-2 rounded hover:bg-stone-300 hover:text-black transition-colors">
                About Us
            </a>
            <a href="{{ route('contact') }}" @click="isOpen = false" class="{{ $page == 'contact' ? 'text-black bg-stone-300' : 'text-black' }} px-3 py-2 rounded hover:bg-stone-300 hover:text-black transition-colors">
                Contact Us
            </a>
        </div>

        <!-- Right aligned items for desktop -->
        <div class="hidden lg:flex gap-5 my-auto items-center justify-end">
            <a href="{{ route('login')}}" @click="isOpen = false" class="relative px-5 py-2 font-medium text-gray-600 bg-pink-100 border border-pink-100 rounded-lg shadow-inner group">
                <span class="absolute inset-0 w-full h-full bg-black opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-300"></span>
                <span class="relative transition-colors duration-300 delay-200 group-hover:text-white ease">Login</span>
            </a>
            <a href="{{ route('register')}}" @click="isOpen = false" class="rounded-md px-3.5 py-1.5 font-medium border-2 border-pink-200 text-pink-200 hover:bg-pink-200 transition-all duration-300">
                <span class="relative text-black group-hover:text-white">Sign in</span>
            </a>
        </div>
    </div>
</div>

<script src="//unpkg.com/alpinejs" defer></script>
