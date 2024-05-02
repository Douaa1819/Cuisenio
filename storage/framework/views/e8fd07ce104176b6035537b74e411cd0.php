<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['page']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['page']); ?>
<?php foreach (array_filter((['page']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="flex justify-between items-center px-4 py-3 bg-white shadow-lg">
    <div>
        <a href="<?php echo e(route('user.index')); ?>">
            <img src="<?php echo e(asset('images/logo.png')); ?>" alt="logo" class="w-32 h-24">
        </a>        
    </div>

    <div class="flex gap-5">
        <!-- Navigation Links -->
        <a href="<?php echo e(route('user.index')); ?>"
            class="<?php echo e($page == 'home' ? 'text-black bg-stone-300' : 'text-black'); ?> px-3 py-2 rounded hover:bg-stone-300 hover:text-black transition-colors">
            Home
        </a>
        <a href="<?php echo e(route('blog.index')); ?>"
            class="<?php echo e($page == 'blog' ? 'text-black bg-stone-300' : 'text-black'); ?> px-3 py-2 rounded hover:bg-stone-300 hover:text-black transition-colors">
            Blog
        </a>
        <a href="<?php echo e(route('favoris.index')); ?>"
            class="<?php echo e($page == 'favoris' ? 'text-black bg-stone-300' : 'text-black'); ?> px-3 py-2 rounded hover:bg-stone-300 hover:text-black transition-colors">
            Favorites list
        </a>
        <a href="javascript:void(0);" onclick="displayBooklistPage()"
            class="<?php echo e($page == 'contact' ? 'text-black bg-stone-300' : 'text-black'); ?> px-3 py-2 rounded hover:bg-stone-300 hover:text-black transition-colors">
            BookList
        </a>


    </div>

    <!-- Profile Dropdown -->
    <div class="relative">
        <button id="profileDropdown"
            class="flex items-center space-x-2 bg-white rounded-full p-2 hover:bg-gray-100 focus:outline-none transition-colors">
            <?php if(Auth::user()->profile_image): ?>
            <img class="w-8 h-8 rounded-full" src="<?php echo e(asset('storage/' . Auth::user()->profile_image)); ?>" alt="Profile">
                
            <?php else: ?>
            <img class="w-8 h-8 rounded-full" src="<?php echo e(asset('images/cheef.jpg')); ?>"alt="Profile">
            <?php endif; ?>
            <p class="hidden lg:block text-gray-700">Dev</p> <!-- Changed text from 'Chef' to 'Dev' -->
            <i class="fas fa-chevron-down text-gray-700"></i>
        </button>
        <div id="dropdownContent" class="hidden absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
            <a href="<?php echo e(route('user.profile')); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"> Edite
                Profile</a>
            <a href="<?php echo e(route('recipes.index')); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Add
                recipes</a>
            <a href="<?php echo e(route('logout')); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
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
</script><?php /**PATH C:\laragon\www\Cuisenio\resources\views/components/header.blade.php ENDPATH**/ ?>