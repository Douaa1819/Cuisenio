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
<div x-data="{ isOpen: false }" @click.away="isOpen = false" class="bg-white text-stone-300 shadow-xlg">
    <div class="flex items-center justify-between px-4 py-2 text-sm font-bold relative">
        <!-- Logo on the left -->
        <a href="<?php echo e(route('home')); ?>">
            <img src="<?php echo e(asset('images/logo.png')); ?>" alt="logo" class="w-32 h-24">
        </a>
        
        <!-- Hamburger icon -->
        <button @click="isOpen = !isOpen" class="lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
            </svg>
        </button>

        <!-- Menu items -->
        <div :class="{'flex': isOpen, 'hidden': !isOpen}" class="flex-col lg:flex-row gap-5 justify-center items-center bg-white lg:bg-transparent absolute top-full left-0 right-0 z-50 lg:static lg:flex">
            <a href="<?php echo e(route('home')); ?>" @click="isOpen = false" class="<?php echo e($page == 'home' ? 'text-black bg-stone-300' : 'text-black'); ?> px-3 py-2 rounded hover:bg-stone-300 hover:text-black transition-colors">
                Home
            </a>
            <a href="<?php echo e(route('blog.index')); ?>" @click="isOpen = false" class="<?php echo e($page == 'blog' ? 'text-black bg-stone-300' : 'text-black'); ?> px-3 py-2 rounded hover:bg-stone-300 hover:text-black transition-colors">
                Blog
            </a>
            <a href="<?php echo e(route('about')); ?>" @click="isOpen = false" class="<?php echo e($page == 'about' ? 'text-black bg-stone-300' : 'text-black'); ?> px-3 py-2 rounded hover:bg-stone-300 hover:text-black transition-colors">
                About Us
            </a>
            <a href="<?php echo e(route('contact')); ?>" @click="isOpen = false" class="<?php echo e($page == 'contact' ? 'text-black bg-stone-300' : 'text-black'); ?> px-3 py-2 rounded hover:bg-stone-300 hover:text-black transition-colors">
                Contact Us
            </a>
        </div>

        <!-- Right aligned items for desktop -->
        <div class="hidden lg:flex gap-5 my-auto items-center justify-end">
            <a href="<?php echo e(route('login')); ?>" @click="isOpen = false" class="relative px-5 py-2 font-medium text-gray-600 bg-pink-100 border border-pink-100 rounded-lg shadow-inner group">
                <span class="absolute inset-0 w-full h-full bg-black opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-300"></span>
                <span class="relative transition-colors duration-300 delay-200 group-hover:text-white ease">Login</span>
            </a>
            <a href="<?php echo e(route('register')); ?>" @click="isOpen = false" class="rounded-md px-3.5 py-1.5 font-medium border-2 border-pink-200 text-pink-200 hover:bg-pink-200 transition-all duration-300">
                <span class="relative text-black group-hover:text-white">Sign in</span>
            </a>
        </div>
    </div>
</div>

<script src="//unpkg.com/alpinejs" defer></script>
<?php /**PATH C:\laragon\www\Cuisenio\resources\views\components\headeer.blade.php ENDPATH**/ ?>