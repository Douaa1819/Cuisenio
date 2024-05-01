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

<body class="bg-[#F2F2F2] text-[#333333]">

    <!-- Navbar -->
    <?php if (isset($component)) { $__componentOriginal3ca506077c05767d53b02ddaed0a2263 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3ca506077c05767d53b02ddaed0a2263 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.headeer','data' => ['page' => 'home']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('headeer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['page' => 'home']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3ca506077c05767d53b02ddaed0a2263)): ?>
<?php $attributes = $__attributesOriginal3ca506077c05767d53b02ddaed0a2263; ?>
<?php unset($__attributesOriginal3ca506077c05767d53b02ddaed0a2263); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3ca506077c05767d53b02ddaed0a2263)): ?>
<?php $component = $__componentOriginal3ca506077c05767d53b02ddaed0a2263; ?>
<?php unset($__componentOriginal3ca506077c05767d53b02ddaed0a2263); ?>
<?php endif; ?>

    <!-- Home -->


    <div class="flex justify-evenly p-16 items-center md:gap-4 gap-8  text-[#333] bg-[#F2F2F2]">
        <div class="max-md:order-1 max-md:text-center w-1/2">
            <h3 class="md:text-5xl text-2xl md:leading-10 font-bold ">Welcome to Cuisénio!</h3>
            <p class="mt-4 text-xl">Discover and prepare a variety of recipes with ease. Join our community and
                explore
                the art of cooking like never before.</p>
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
        <div class="w-1/2">
            <img src="<?php echo e(asset('images/visii.jpg')); ?>" class=" w-auto h-full md:object-contain rounded-3xl shadow-xl" />
        </div>
    </div>


     <!-- Inspiration Thematic Section -->
     <section id="inspiration" class="pt-16 pb-20 px-6 bg-white  ">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-16">Thematic Inspiration</h2>
            <div class="text-right">
                <button
                    class="overflow-hidden px-4 py-2 mb-10 bg-black text-white border-none rounded-md text-md font-semibold cursor-pointer relative z-10 group">
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
            </div>
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
                        </div>
                    </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    
                </div>
            </div>
            <div class="text-right">
                <button
                    class="overflow-hidden px-4 py-2 mt-10 bg-black text-white border-none rounded-md text-md font-semibold cursor-pointer relative z-10 group">
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
    </section>


    <section class="px-10 pb-16 pt-32 bg-white rounded-b-3xl relative">
        <div class="absolute top-0 left-0 z-10 w-full h-auto -mt-1">
            <svg enable-background="new 0 0 1504 131.3" viewBox="0 0 1504 131.3" xmlns="http://www.w3.org/2000/svg"
                class="transform scale-y-[-1]">
                <path
                    d="m877.8 85c139.5 24.4 348 33.5 632.2-48.2-.2 32.5-.3 65-.5 97.4-505.9 0-1011.6 0-1517.5 0 0-33.3 0-66.7 0-100.1 54.2-11.4 129.5-23.9 220-28.2 91-4.3 173.6 1 307.4 18.6 183.2 24.2 295.2 49.4 358.4 60.5z"
                    fill="#F2F2F2" />
            </svg>
        </div>
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center  mt-16 mb-16">Top Recipes</h2>
            <div class="max-w-6xl mx-auto mb-8 px-4">
                <div class="grid md:grid-cols-3 gap-8">
                    <?php $__currentLoopData = $featuredRecipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div
                            class="bg-white rounded-lg overflow-hidden shadow hover:shadow-2xl transition duration-300 relative">
                            <div class="absolute right-2 top-2 text-gray-600 hover:text-red-500 cursor-pointer">
                                <a href="<?php echo e(route('recipes.more', $recipe->id)); ?>">
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
                                        class="text-blue-400 hover:text-gray-400 font-semibold cursor-pointer">Read
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


    </section>


 
 <section id="inspiration" class="pt-16 pb-20 px-6 bg-white">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-16">Découvrez nos ingrédients de saison</h2>
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
    <div class="text-right">
        <button
            class="overflow-hidden px-4 py-2 mt-6 bg-black text-white border-none rounded-md text-md font-semibold cursor-pointer relative z-10 group">
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
    </div>
</div>




    <section class="flex gap-5 max-md:flex-col md:flex-nowrap pl-10 items-center">
        <div class="flex flex-col w-[63%] max-md:w-full justify-center">
            <div class="flex flex-col px-5 font-semibold max-md:mt-10 max-md:max-w-full">
                <h1 class="text-4xl font-bold text-gray-900">
                    Everyone can be a <br /> chef in their own kitchen
                </h1>
                <p class="mt-5  text-gray-600">
                    Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqut enim ad minim
                </p>
                <div class="">
                    <button
                class="overflow-hidden px-4 py-2 mt-5 bg-black text-white border-none rounded-md text-md font-semibold cursor-pointer relative z-10 group">
                Learn More <span
                    class="absolute w-36 h-32 -top-8 -left-2 bg-white rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
                <span
                    class="absolute w-36 h-32 -top-8 -left-2 bg-pink-200 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left"></span>
                <span
                    class="absolute w-36 h-32 -top-8 -left-2 bg-red-300 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-1000 duration-500 origin-left"></span>
                <span
                    class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2 left-4 z-10">Let's
                    Goo ! </span>
            </button>
                </div>
            </div>
        </div>
        <div class="flex flex-col ml-5 w-[57%] max-md:ml-0 max-md:w-full">
            <img loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/df09184d82638a0ea052cf2619f572d859f8be9fc43933b95a9420b12a37d08b?apiKey=93bb9bcd81d443648999334442ead41e&"
                alt="Decorative image" class="grow w-full aspect-[1.19] max-md:mt-10 max-md:max-w-full" />
        </div>
    </section>




    <section class="bg-cover bg-center pb-40 pt-32  mt-8 text-center relative bg-pink-500 rounded-t-3xl"
        style="background-image: url('<?php echo e(asset('images/newsletter1.jpg')); ?>')">
        <div class="absolute bottom-0 left-0 z-10 w-full h-auto -mb-1">
            <svg enable-background="new 0 0 1504 131.3" viewBox="0 0 1504 131.3" xmlns="http://www.w3.org/2000/svg"
                class="transform scale-x-[-1]">
                <path
                    d="m877.8 85c139.5 24.4 348 33.5 632.2-48.2-.2 32.5-.3 65-.5 97.4-505.9 0-1011.6 0-1517.5 0 0-33.3 0-66.7 0-100.1 54.2-11.4 129.5-23.9 220-28.2 91-4.3 173.6 1 307.4 18.6 183.2 24.2 295.2 49.4 358.4 60.5z"
                    fill="#F2F2F2" />
            </svg>
        </div>

        <div class="bg-white bg-opacity-80 p-8 inline-block rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold mb-4">Deliciousness to Your Inbox</h2>
            <p class="text-gray-700 mb-8">
                Join our newsletter to stay updated with the latest recipes and cooking tips.
            </p>
          
            <form class="flex flex-wrap justify-center gap-4 " method="POST" action="/subscribe">
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?>
                <input type="email" name="email" placeholder="Your email address..."
                    class="p-2 w-full md:w-auto border-2 border-gray-300 rounded-md" />
                    <button type="submit"
                    class="overflow-hidden px-2 py-2 mt-5 mb-2 bg-red-300 text-white border-none rounded-md text-md font-semibold cursor-pointer relative z-10 group">
                    Subscribe<span
                        class="absolute w-36 h-32 -top-8 -left-2 bg-white rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
                    <span
                        class="absolute w-36 h-32 -top-8 -left-2 bg-pink-200 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left"></span>
                    <span
                        class="absolute w-36 h-32 -top-8 -left-2 bg-black rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-1000 duration-500 origin-left"></span>
                    <span
                        class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2 left-4 z-10">Let's
                        Goo </span>
                </button>
            </form>
        </div>
    </section>
    <?php if(session('success')): ?>
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline"><?php echo e(session('success')); ?></span>
    </div>
<?php endif; ?>

<!-- Session Message for Errors -->
<?php if(session('error')): ?>
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Error!</strong>
        <span class="block sm:inline"><?php echo e(session('error')); ?></span>
    </div>
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
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>

</body>


</html>
<?php /**PATH C:\laragon\www\Cuisenio\resources\views/visitor/index.blade.php ENDPATH**/ ?>