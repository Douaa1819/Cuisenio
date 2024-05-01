<?php if (isset($component)) { $__componentOriginal0f509fab02c45445826003a1e50db506 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0f509fab02c45445826003a1e50db506 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.head','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('head'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0f509fab02c45445826003a1e50db506)): ?>
<?php $attributes = $__attributesOriginal0f509fab02c45445826003a1e50db506; ?>
<?php unset($__attributesOriginal0f509fab02c45445826003a1e50db506); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0f509fab02c45445826003a1e50db506)): ?>
<?php $component = $__componentOriginal0f509fab02c45445826003a1e50db506; ?>
<?php unset($__componentOriginal0f509fab02c45445826003a1e50db506); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal66d7cfd03cd343304d81fe1e21646540 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal66d7cfd03cd343304d81fe1e21646540 = $attributes; } ?>
<?php $component = App\View\Components\MainLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\MainLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startSection('douaaa'); ?>
    <?php $__env->stopSection(); ?>


<?php if (isset($component)) { $__componentOriginalfd1f218809a441e923395fcbf03e4272 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd1f218809a441e923395fcbf03e4272 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header','data' => ['page' => 'Home']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['page' => 'Home']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $attributes = $__attributesOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__attributesOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $component = $__componentOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__componentOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>

<!-- Sidebar -->
<aside class="relative">

    <div class="container mx-auto">
        <h2 class="text-4xl font-bold text-center  mt-16 mb-16">Featured in Cuisénio</h2>
        <div class="max-w-6xl mx-auto mb-8 px-4">
            <div class="grid md:grid-cols-3 gap-8">
                <?php $__currentLoopData = $featuredRecipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           
                    <div
                        class="bg-white rounded-lg overflow-hidden shadow hover:shadow-2xl transition duration-300 relative">
                        <a href="<?php echo e(route('recipes.more', $recipe->id)); ?>">
                        <div class="absolute right-2 top-2 text-gray-600 hover:text-red-500 cursor-pointer">
                            <i class="fas fa-heart"></i>
                        </div>
                        <?php if($recipe->image): ?>
                            <img src="<?php echo e(Storage::url($recipe->image->url)); ?>" alt="Recipe Image"
                                class="w-full h-56 object-cover">
                        <?php endif; ?>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 flex items-center">
                                <i class="fas fa-utensils text-gray-500 mr-2"></i><?php echo e($recipe->title); ?>

                            </h3>


                            <p class="text-gray-600 text-sm">
                                <?php echo e(\Illuminate\Support\Str::limit($recipe->description, 50, '...')); ?>

                                <a href="<?php echo e(route('recipes.more', $recipe->id)); ?>"
                                    class="text-blue-400 hover:text-gray-600 font-semibold cursor-pointer">Read
                                    more...</a>
                            </p>
                            <div class="flex items-center mt-4">
                                <?php if($recipe->theme): ?>
                                    <span
                                        class="inline-block mr-4 bg-red-200 rounded-full px-3 py-1 text-sm font-semibold text-red-800 ">
                                        <?php echo e($recipe->theme->name); ?>

                                    </span>
                                <?php endif; ?>
                            </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
        </div>
        <div class="text-right">
            <button
                class="overflow-hidden  mr-8 px-4 py-2 mt-10 bg-black text-white border-none rounded-md text-md font-semibold cursor-pointer relative z-10 group">
                <a href="<?php echo e(route('viewMore')); ?>">
                    View More <span
                        class="absolute w-36 h-32 -top-8 -left-2 bg-white rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
                    <span
                        class="absolute w-36 h-32 -top-8 -left-2 bg-pink-200 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left"></span>
                    <span
                        class="absolute w-36 h-32 -top-8 -left-2 bg-red-300 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-1000 duration-500 origin-left"></span>
                    <span
                        class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2 left-4 z-10">Let's
                        Goo ! </span>
                </a>
            </button>
        </div>
    </div>
    </section>


    <!-- Inspiration Thematic Section -->
    <section id="inspiration" class="pt-16 pb-20 px-6 bg-white  ">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-8">Thematic Inspiration</h2>
       
            <div class="flex flex-wrap justify-center gap-10">


                <div class="container mx-auto px-4 py-8">
                    <div class="grid grid-cols-6 gap-4">
                        <?php $__currentLoopData = $themes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($theme->image): ?>
                            <a href="<?php echo e(route('filtre', ['theme' => $theme])); ?>"
                                    class="flex flex-col items-center transition duration-300 ease-in-out hover:scale-110 group">
                                    <img src="<?php echo e(Storage::url($theme->image->url)); ?>" alt="Theme Image" 
                                        class="w-24 h-24 object-cover rounded-full shadow-md hover:shadow-lg">
                                    <h3 class="text-sm font-semibold mt-2 text-gray-700 group-hover:text-gray-800">
                                        <?php echo e($theme->name); ?></h3>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-end">
            <button
                class="overflow-hidden px-4 py-2 mt-5 bg-black text-white border-none rounded-md text-md font-semibold cursor-pointer relative z-10 group">
                <a href="<?php echo e(route('theme')); ?>">
                View More <span
                    class="absolute w-36 h-32 -top-8 -left-2 bg-white rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
                <span
                    class="absolute w-36 h-32 -top-8 -left-2 bg-pink-200 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left"></span>
                <span
                    class="absolute w-36 h-32 -top-8 -left-2 bg-red-300 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-1000 duration-500 origin-left"></span>
                <span
                    class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2 left-4 z-10">Let's
                    Goo ! </span>
                </a>
            </button>
        </div>
    </section>







    <div class="container mx-auto">
        <h2 class="text-4xl font-bold text-center mb-16">Top Recipes</h2>
        <div class="max-w-6xl mx-auto mb-8 px-4">
            <div class="grid md:grid-cols-3 gap-8">
                <?php $__currentLoopData = $recipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
                    <div
                        class="bg-white rounded-lg overflow-hidden shadow hover:shadow-2xl transition duration-300 relative">
                        <a href="<?php echo e(route('recipes.more', $recipe->id)); ?>">
                        <div class="absolute right-2 top-2 text-gray-600 hover:text-red-500 cursor-pointer">
                            <i class="fas fa-heart"></i>
                        </div>
                        <?php if($recipe->image): ?>
                            <img src="<?php echo e(Storage::url($recipe->image->url)); ?>" alt="Recipe Image"
                                class="w-full h-56 object-cover">
                        <?php endif; ?>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 flex items-center">
                                <i class="fas fa-utensils text-gray-500 mr-2"></i><?php echo e($recipe->title); ?>

                            </h3>


                            <p class="text-gray-600 text-sm">
                                <?php echo e(\Illuminate\Support\Str::limit($recipe->description, 50, '...')); ?>

                                <a href="<?php echo e(route('recipes.more', $recipe->id)); ?>"
                                    class="text-blue-400 hover:text-gray-600 font-semibold cursor-pointer">Read
                                    more...</a>
                            </p>
                            <div class="flex items-center mt-4">
                                <?php if($recipe->theme): ?>
                                    <span
                                        class="inline-block mr-4 bg-red-200 rounded-full px-3 py-1 text-sm font-semibold text-red-800 ">
                                        <?php echo e($recipe->theme->name); ?>

                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <div class="text-right">
            <button
                class="overflow-hidden  mr-8 px-4 py-2 mt-10 bg-black text-white border-none rounded-md text-md font-semibold cursor-pointer relative z-10 group">
                <a href="<?php echo e(route('viewMore')); ?>">
                    View More <span
                        class="absolute w-36 h-32 -top-8 -left-2 bg-white rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
                    <span
                        class="absolute w-36 h-32 -top-8 -left-2 bg-pink-200 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left"></span>
                    <span
                        class="absolute w-36 h-32 -top-8 -left-2 bg-red-300 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-1000 duration-500 origin-left"></span>
                    <span
                        class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2 left-4 z-10">Let's
                        Goo ! </span>
                </a>
            </button>
        </div>
    </div>
    </section>




    <section class="pt-16 pb-10 px-10">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-16">Check out the latest tips</h2>
            <div class="flex justify-around gap-8">
                <div class="w-full lg:w-5/12 flex flex-col gap-4">

                    <?php $__currentLoopData = $firstThreeRecipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('recipes.more', $recipe->id)); ?>">
                    <div
                        class="flex items-center border-b border-gray-300 transition-all duration-300 ease-in hover:border-gray-400 hover:shadow-lg p-4 hover:rounded-lg ">
                        <img src="<?php echo e(Storage::url($recipe->image->url)); ?>" alt="Default Image" class="mr-4  w-28 h-28 object-cover">
                        <div>
                            <h3 class="text-xl font-bold"><?php echo e($recipe->title); ?></h3>
                            <p class="mb-4">Day of the Week</p>
                        </div>
                    </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>


                <div class="w-full lg:w-5/12 flex flex-col gap-4 ">
                    <?php $__currentLoopData = $nextThreeRecipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('recipes.more', $recipe->id)); ?>">
                    <div class="flex items-center border-b border-gray-300 transition-all duration-300 ease-in hover:border-gray-400 hover:shadow-lg p-4 hover:rounded-lg ">
                        <img src="<?php echo e(Storage::url($recipe->image->url)); ?>" alt="Default Image" class="mr-4 w-28 h-28 object-cover">
                        <div>
                            <h3 class="text-xl font-bold"><?php echo e($recipe->title); ?></h3>
                            <p class="mb-4">Day of the Week</p>
                        </div>
                    </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    
                </div>
            </div>
            <div class="text-right">
                <a href="<?php echo e(route('viewMore')); ?>">
                <button
               
                    class="overflow-hidden px-4 py-2 mt-10 bg-black text-white border-none rounded-md text-md font-semibold cursor-pointer relative z-10 group">
                    View More <span
                        class="absolute w-36 h-32 -top-8 -left-2 bg-white rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
                    <span
                        class="absolute w-36 h-32 -top-8 -left-2 bg-pink-200 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left"></span>
                    <span
                        class="absolute w-36 h-32 -top-8 -left-2 bg-red-300 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-1000 duration-500 origin-left"></span>
                    <span
                        class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2 left-4 z-10">Let's
                        Goo ! </span>
                </a>
                </button>
            </div>
    </section>




    <section id="inspiration" class="pt-16 pb-20 px-6 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-16">Filter by the ingredients you have available</h2>
            <div class="flex flex-wrap justify-center gap-10">

                <div class="container mx-auto px-4 py-8">
                    <div class="grid grid-cols-6 gap-4">
                        <?php $__currentLoopData = $ingrediant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ingrediant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($ingrediant->image): ?>
                        <a href="<?php echo e(route('ingrediant',  $ingrediant)); ?>" class="flex flex-col items-center transition duration-300 ease-in-out hover:scale-110 group">
                            <img src="<?php echo e(Storage::url($ingrediant->image->url)); ?>" alt="Ingredient Image" class="w-24 h-24 object-cover rounded-full shadow-md hover:shadow-lg">
                                            <h3 class="text-sm font-semibold mt-2 text-gray-700 group-hover:text-gray-800"><?php echo e($ingrediant->name); ?></h3>
                                        </a>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="text-right">
            <a href="<?php echo e(route('ingredients')); ?>">
            <button
                class="overflow-hidden px-4 py-2 mt-10 bg-black text-white border-none rounded-md text-md font-semibold cursor-pointer relative z-10 group">
                View More <span
                    class="absolute w-36 h-32 -top-8 -left-2 bg-white rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
                <span
                    class="absolute w-36 h-32 -top-8 -left-2 bg-pink-200 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left"></span>
                <span
                    class="absolute w-36 h-32 -top-8 -left-2 bg-red-300 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-1000 duration-500 origin-left"></span>
                <span
                    class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2 left-4 z-10">Let's
                    Goo ! </span>
            </button>
            </a>
        </div>
    </section>


    
    <div class="container mx-auto px-10 py-16 bg-white">
        <h2 class="text-4xl font-bold text-center mb-16">Recipes of the Season</h2>
        
        <div class="grid md:grid-cols-3 gap-8">
            <?php $__currentLoopData = $recipeseason; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $season): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div
                class="relative shadow-lg hover:shadow-xl transition-shadow duration-300 bg-white rounded-lg overflow-hidden">
                <a href="<?php echo e(route('recipes.more',  $season->id)); ?>">
                <div class="absolute top-2 right-2 text-gray-700 hover:text-red-500 cursor-pointer">
                    <i class="fas fa-heart"></i>
                </div>
                <?php if($recipe->image): ?>
                            <img src="<?php echo e(Storage::url($season->image->url)); ?>" alt="Recipe Image"
                                class="w-full h-56 object-cover">
                        <?php endif; ?>
                <div class="p-4">
                    <h3 class="text-xl font-bold mb-2"><?php echo e($season->title); ?></h3>
                    <div class="text-yellow-400 mb-2">★★★★☆</div>
                
                </div>
            </a>
    
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>
        <div class="flex justify-end">
        <button
                class="overflow-hidden px-4 py-2 mt-5 bg-black text-white border-none rounded-md text-md font-semibold cursor-pointer relative z-10 group">
                <a href="<?php echo e(route('viewMore')); ?>">
                View More <span
                    class="absolute w-36 h-32 -top-8 -left-2 bg-white rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
                <span
                    class="absolute w-36 h-32 -top-8 -left-2 bg-pink-200 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left"></span>
                <span
                    class="absolute w-36 h-32 -top-8 -left-2 bg-red-300 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-1000 duration-500 origin-left"></span>
                <span
                    class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2 left-4 z-10">Let's
                    Goo ! </span>
                </a>
            </button>
        </div>
    </div>
    <!-- Footer -->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal66d7cfd03cd343304d81fe1e21646540)): ?>
<?php $attributes = $__attributesOriginal66d7cfd03cd343304d81fe1e21646540; ?>
<?php unset($__attributesOriginal66d7cfd03cd343304d81fe1e21646540); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal66d7cfd03cd343304d81fe1e21646540)): ?>
<?php $component = $__componentOriginal66d7cfd03cd343304d81fe1e21646540; ?>
<?php unset($__componentOriginal66d7cfd03cd343304d81fe1e21646540); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\Cuisenio\resources\views/user/index.blade.php ENDPATH**/ ?>