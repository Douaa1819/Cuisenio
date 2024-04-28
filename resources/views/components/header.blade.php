@props(['page'])
<div class="flex justify-between items-center px-4 py-3 bg-white shadow-lg">
    <div>
        <a href="{{ route('user.index') }}">
            <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-32 h-24">
        </a>        
    </div>

    <div class="flex gap-5">
        <!-- Navigation Links -->
        <a href="{{ route('user.index') }}"
            class="{{ $page == 'home' ? 'text-black bg-stone-300' : 'text-black' }} px-3 py-2 rounded hover:bg-stone-300 hover:text-black transition-colors">
            Home
        </a>
        <a href="{{ route('blog.index') }}"
            class="{{ $page == 'blog' ? 'text-black bg-stone-300' : 'text-black' }} px-3 py-2 rounded hover:bg-stone-300 hover:text-black transition-colors">
            Blog
        </a>
        <a href="{{ route('favoris.index') }}"
            class="{{ $page == 'favoris' ? 'text-black bg-stone-300' : 'text-black' }} px-3 py-2 rounded hover:bg-stone-300 hover:text-black transition-colors">
            Favorites list
        </a>
        <a href="javascript:void(0);" onclick="displayBooklistPage()"
            class="{{ $page == 'contact' ? 'text-black bg-stone-300' : 'text-black' }} px-3 py-2 rounded hover:bg-stone-300 hover:text-black transition-colors">
            BookList
        </a>


    </div>

    <!-- Profile Dropdown -->
    <div class="relative">
        <button id="profileDropdown"
            class="flex items-center space-x-2 bg-white rounded-full p-2 hover:bg-gray-100 focus:outline-none transition-colors">
            @if (Auth::user()->profile_image)
            <img class="w-8 h-8 rounded-full" src="{{ asset('storage/' . Auth::user()->profile_image) }}" alt="Profile">
                
            @else
            <img class="w-8 h-8 rounded-full" src="{{ asset('images/cheef.jpg') }}"alt="Profile">
            @endif
            <p class="hidden lg:block text-gray-700">Dev</p> <!-- Changed text from 'Chef' to 'Dev' -->
            <i class="fas fa-chevron-down text-gray-700"></i>
        </button>
        <div id="dropdownContent" class="hidden absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
            <a href="{{ route('user.profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"> Edite
                Profile</a>
            <a href="{{ route('recipes.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Add
                recipes</a>
            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
        </div>
    </div>
</div>

<script>
    document.getElementById('profileDropdown').addEventListener('click', function() {
        document.getElementById('dropdownContent').classList.toggle('hidden');
    });



    function displayBooklistPage() {
        let booklist = JSON.parse(localStorage.getItem('booklist')) || [];
        if (booklist.length > 0) {
            const url = `/print-booklist?ids=${encodeURIComponent(JSON.stringify(booklist))}`;
            window.location.href = url;
        } else {
            alert('Your booklist is empty.');
        }
    }
</script>
