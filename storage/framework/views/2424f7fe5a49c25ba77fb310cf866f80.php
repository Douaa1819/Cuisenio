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
<?php if (isset($component)) { $__componentOriginalfd1f218809a441e923395fcbf03e4272 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd1f218809a441e923395fcbf03e4272 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header','data' => ['page' => 'home']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['page' => 'home']); ?>
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


<body class="bg-gray-50">

    <div id="review"
        class=" hidden min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0
         justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover">
        <div class="absolute bg-black opacity-80 inset-0 z-0"></div>
        <div class="w-full  max-w-lg p-5 relative mx-auto my-auto rounded-xl shadow-lg  bg-white ">
            <h1 class="font-bold text-center text-xl  ">Rate this book.</h1>
            <p class="text-md text-center mt-3">Let others know what you think about <span
                    class="font-semibold text-gray-600"><?php echo e($recipe->id); ?></span></p>
            <form method="POST" action="<?php echo e(route('reviews.store')); ?>" class="flex flex-col gap-8">
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?>
                <input type="hidden" name="recipe_id" value="<?php echo e($recipe->id); ?>">
                <div class="rating flex justify-center ">
                    <input value="5" name="nbr_stars" id="star5" type="radio">
                    <label title="text" for="star5"></label>
                    <input value="4" name="nbr_stars" id="star4" type="radio">
                    <label title="text" for="star4"></label>
                    <input value="3" name="nbr_stars" id="star3" type="radio">
                    <label title="text" for="star3"></label>
                    <input value="2" name="nbr_stars" id="star2" type="radio">
                    <label title="text" for="star2"></label>
                    <input value="1" name="nbr_stars" id="star1" type="radio">
                    <label title="text" for="star1"></label>
                </div>
                <button class="bg-black text-white rounded-xl py-1 hover:bg-rgay-800">
                    Rate
                </button>
                <button type="button" onclick="closeReview()"
                    class="bg-red-600 text-white rounded-xl py-1 hover:bg-rgay-800">
                    Close
                </button>
            </form>
        </div>
    </div>
    </div>
    <main class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="flex flex-col lg:flex-row gap-8">


                <!-- Main content area -->
                <div class="lg:w-3/4">
                    <h2 class="text-3xl font-bold text-center mb-4"><?php echo e($recipe->title); ?></h2>
                    <?php if($recipe->image): ?>
                        <img src="<?php echo e(Storage::url($recipe->image->url)); ?>" alt="Recipe Image"
                            class="w-full h-56 object-cover rounded-lg shadow-md">
                    <?php endif; ?>
                    <div class=" flex justify-between w-full items-center">

                        <div class="flex items-center gap-4  mt-4 mb-8">
                            <img src="<?php echo e($recipe->user->profile_photo_url ?? asset('images/cheef.jpg')); ?>"
                                alt="Author Avatar" class="w-10 h-10 rounded-full">
                            <div>
                                <p class="font-bold"><?php echo e($recipe->user->name); ?></p>
                                <p class="text-sm text-gray-500"><?php echo e($recipe->created_at->format('Y/m/d')); ?></p>
                                <div class="flex items-center">
                                    <?php for($i = 0; $i < 5; $i++): ?>
                                        <?php if($i < $stars): ?>
                                            <i class="fas fa-star fa-sm text-yellow-500 mr-2"></i>
                                        <?php else: ?>
                                            <i class="fas fa-star fa-sm mr-2"></i>
                                        <?php endif; ?>
                                    <?php endfor; ?>

                                    <span> <?php echo e(number_format($nbr_stars, 2, '.', '')); ?> (<?php echo e($countStars); ?>)
                                        reviews</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center space-x-6">
                                <button class="" title="like">
                                    <svg class=" hover:text-red-600 transition-all duration-300 ease-in"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24" color="#000000" fill="none">
                                        <path
                                            d="M8.26872 8.49708C9.60954 7.67461 10.7798 8.00606 11.4828 8.53401C11.7711 8.75048 11.9152 8.85871 12 8.85871C12.0848 8.85871 12.2289 8.75048 12.5172 8.53401C13.2202 8.00606 14.3905 7.67461 15.7313 8.49708C17.491 9.57647 17.8891 13.1374 13.8302 16.1417C13.0571 16.7139 12.6706 17 12 17C11.3294 17 10.9429 16.7139 10.1698 16.1417C6.11086 13.1374 6.50903 9.57647 8.26872 8.49708Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <path
                                            d="M22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12Z"
                                            stroke="currentColor" stroke-width="1.5" />
                                    </svg>
                                </button>
                                <button onclick="openReview()" class="focus:outline-none focus:border-none"
                                    title="rate">
                                    <svg class=" hover:text-yellow-500 transition-all duration-300 ease-in"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24" color="#000000" fill="none">
                                        <path
                                            d="M2 12C2 7.52166 2 5.28249 3.39124 3.89124C4.78249 2.5 7.02166 2.5 11.5 2.5C15.9783 2.5 18.2175 2.5 19.6088 3.89124C21 5.28249 21 7.52166 21 12C21 16.4783 21 18.7175 19.6088 20.1088C18.2175 21.5 15.9783 21.5 11.5 21.5C7.02166 21.5 4.78249 21.5 3.39124 20.1088C2 18.7175 2 16.4783 2 12Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                        <path
                                            d="M12.3638 7.72209L13.2437 9.49644C13.3637 9.74344 13.6837 9.98035 13.9536 10.0257L15.5485 10.2929C16.5684 10.4643 16.8083 11.2103 16.0734 11.9462L14.8335 13.1964C14.6236 13.4081 14.5086 13.8164 14.5736 14.1087L14.9285 15.6562C15.2085 16.8812 14.5636 17.355 13.4887 16.7148L11.9939 15.8226C11.7239 15.6613 11.2789 15.6613 11.004 15.8226L9.50913 16.7148C8.43925 17.355 7.78932 16.8761 8.06929 15.6562L8.42425 14.1087C8.48925 13.8164 8.37426 13.4081 8.16428 13.1964L6.92442 11.9462C6.1945 11.2103 6.42947 10.4643 7.44936 10.2929L9.04419 10.0257C9.30916 9.98035 9.62912 9.74344 9.74911 9.49644L10.629 7.72209C11.109 6.7593 11.8889 6.7593 12.3638 7.72209Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <button onclick="addToBooklist(<?php echo e($recipe->id); ?>)" class=""
                                    title="Add To Booklist">
                                    <svg class=" hover:text-green-500 transition-all duration-300 ease-in"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24" color="#000000" fill="none">
                                        <path
                                            d="M16.6127 16.0846C13.9796 17.5677 12.4773 20.6409 12 21.5V8C12.4145 7.25396 13.602 5.11646 15.6317 3.66368C16.4868 3.05167 16.9143 2.74566 17.4572 3.02468C18 3.30371 18 3.91963 18 5.15146V13.9914C18 14.6568 18 14.9895 17.8634 15.2233C17.7267 15.4571 17.3554 15.6663 16.6127 16.0846L16.6127 16.0846Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M12 7.80556C11.3131 7.08403 9.32175 5.3704 5.98056 4.76958C4.2879 4.4652 3.44157 4.31301 2.72078 4.89633C2 5.47965 2 6.42688 2 8.32133V15.1297C2 16.8619 2 17.728 2.4626 18.2687C2.9252 18.8095 3.94365 18.9926 5.98056 19.3589C7.79633 19.6854 9.21344 20.2057 10.2392 20.7285C11.2484 21.2428 11.753 21.5 12 21.5C12.247 21.5 12.7516 21.2428 13.7608 20.7285C14.7866 20.2057 16.2037 19.6854 18.0194 19.3589C20.0564 18.9926 21.0748 18.8095 21.5374 18.2687C22 17.728 22 16.8619 22 15.1297V8.32133C22 6.42688 22 5.47965 21.2792 4.89633C20.5584 4.31301 19 4.76958 18 5.5"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>

                                <a title="Print" href="<?php echo e(route('recipes.download', $recipe->id)); ?>">
                                    <svg class="hover:text-gray-700 transition-all duration-300 ease-in"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24" color="#000000" fill="none">
                                        <path
                                            d="M7.35396 18C5.23084 18 4.16928 18 3.41349 17.5468C2.91953 17.2506 2.52158 16.8271 2.26475 16.3242C1.87179 15.5547 1.97742 14.5373 2.18868 12.5025C2.36503 10.8039 2.45321 9.95455 2.88684 9.33081C3.17153 8.92129 3.55659 8.58564 4.00797 8.35353C4.69548 8 5.58164 8 7.35396 8H16.646C18.4184 8 19.3045 8 19.992 8.35353C20.4434 8.58564 20.8285 8.92129 21.1132 9.33081C21.5468 9.95455 21.635 10.8039 21.8113 12.5025C22.0226 14.5373 22.1282 15.5547 21.7352 16.3242C21.4784 16.8271 21.0805 17.2506 20.5865 17.5468C19.8307 18 18.7692 18 16.646 18"
                                            stroke="currentColor" stroke-width="1.5" />
                                        <path
                                            d="M17 8V6C17 4.11438 17 3.17157 16.4142 2.58579C15.8284 2 14.8856 2 13 2H11C9.11438 2 8.17157 2 7.58579 2.58579C7 3.17157 7 4.11438 7 6V8"
                                            stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                        <path
                                            d="M13.9887 16L10.0113 16C9.32602 16 8.98337 16 8.69183 16.1089C8.30311 16.254 7.97026 16.536 7.7462 16.9099C7.57815 17.1904 7.49505 17.5511 7.32884 18.2724C7.06913 19.3995 6.93928 19.963 7.02759 20.4149C7.14535 21.0174 7.51237 21.5274 8.02252 21.7974C8.40513 22 8.94052 22 10.0113 22L13.9887 22C15.0595 22 15.5949 22 15.9775 21.7974C16.4876 21.5274 16.8547 21.0174 16.9724 20.4149C17.0607 19.963 16.9309 19.3995 16.6712 18.2724C16.505 17.5511 16.4218 17.1904 16.2538 16.9099C16.0297 16.536 15.6969 16.254 15.3082 16.1089C15.0166 16 14.674 16 13.9887 16Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                        <path d="M18 12H18.009" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- Description and details -->
                    <div class="my-4">
                        <h3 class="text-xl font-semibold">Description</h3>
                        <p class="text-gray-600 mb-4">
                            <?php echo e($recipe->description); ?>

                        </p>
                        <h3 class="text-xl font-semibold">Ingredients</h3>
                        <ul>
                            <?php $__currentLoopData = explode(',', $recipe->list_ingredients); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ingredient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($ingredient); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <h3 class="text-xl font-semibold">Steps</h3>
                        <ol>
                            <?php $__currentLoopData = explode('.', $recipe->steps); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($step); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ol>
                    </div>
                    <?php if (isset($component)) { $__componentOriginal5168fdb0c14fd91c6598264bc4be63f2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5168fdb0c14fd91c6598264bc4be63f2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.flash','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('flash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5168fdb0c14fd91c6598264bc4be63f2)): ?>
<?php $attributes = $__attributesOriginal5168fdb0c14fd91c6598264bc4be63f2; ?>
<?php unset($__attributesOriginal5168fdb0c14fd91c6598264bc4be63f2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5168fdb0c14fd91c6598264bc4be63f2)): ?>
<?php $component = $__componentOriginal5168fdb0c14fd91c6598264bc4be63f2; ?>
<?php unset($__componentOriginal5168fdb0c14fd91c6598264bc4be63f2); ?>
<?php endif; ?>
                    <?php if(session('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>

                    <?php if(session('error')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(session('error')); ?>

                        </div>
                    <?php endif; ?>

                    <div class="mt-6 bg-gray-100 p-4 rounded-lg shadow">
                        <h3 class="text-xl font-semibold mb-4 text-gray-800">Add a Comment</h3>
                        <form class="space-y-4">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('POST'); ?>
                            <input type="hidden" name="commentable_type" value="Recipe">
                            <input type="hidden" name="commentable_id" value="<?php echo e($recipe->id); ?>">
                            <textarea name="body" rows="4" id="comment" class="w-full p-2 border border-gray-300 rounded-md focus:ring-red-300 focus:border-red-300" placeholder="Write your comment here..." required></textarea>
                            <button onclick="addComment(this)" type="submit"
                                class="px-6 py-2 bg-red-300 text-white rounded-full hover:bg-red-400 transition-colors">Add
                                Comment</button>
                        </form>
                    </div>
                    <?php $__currentLoopData = $recipe->comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="bg-white dark:bg-gray-800 text-black dark:text-gray-200 pt-4 antialiased flex max-w-full">
        <img class="rounded-full h-10 w-10 mr-2 mt-1"
        src="<?php echo e($comment->user->profile_image ? asset('storage/' . $comment->user->profile_image) : asset('images/cheef.jpg')); ?>"
        alt="User Image">
   
        <div>
            <div class="bg-gray-100 dark:bg-gray-700 rounded-3xl px-4 pt-2 pb-2.5">
                <div class="font-semibold text-sm leading-relaxed"><?php echo e($comment->user->name); ?></div>
                <div class="text-normal leading-snug md:leading-normal"><?php echo e($comment->body); ?></div>
            </div>
            <div class="text-sm ml-4 mt-0.5 text-gray-500 dark:text-gray-400"><?php echo e($comment->created_at->diffForHumans()); ?></div>
            <?php if($comment->user_id === Auth::id()): ?>

                <button onclick="deleteComment(<?php echo e($comment->id); ?>)" class="text-xs text-red-500">Delete</button>
            <?php endif; ?>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                   

                <aside class="lg:w-1/4 bg-gray-100 p-4 rounded-lg">

                    <h4 class="font-semibold text-lg mt-2 mb-6">Other Recipes</h4>
                    <div class="grid grid-cols-1 gap-4">
                        <?php $__currentLoopData = $randomRecipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="flex items-center gap-4">
                                <img src="<?php echo e(Storage::url($recipe->image->url)); ?>" alt="<?php echo e($recipe->title); ?>"
                                    class="w-20 h-20 object-cover rounded-lg">
                                <div>
                                    <a href="<?php echo e(route('recipes.more', $recipe->id)); ?>"
                                        class="text-gray-800 hover:text-red-600 font-medium"><?php echo e($recipe->title); ?></a>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </aside>
            </div>
        </div>
    </main>

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



</body>

</html>
<style>
    .rating:not(:checked)>input {
        position: absolute;
        appearance: none;
    }

    .rating:not(:checked)>label {
        float: right;
        cursor: pointer;
        font-size: 30px;
        color: #666;
    }

    .rating:not(:checked)>label:before {
        content: '★';
    }

    .rating>input:checked+label:hover,
    .rating>input:checked+label:hover~label,
    .rating>input:checked~label:hover,
    .rating>input:checked~label:hover~label,
    .rating>label:hover~input:checked~label {
        color: #e58e09;
    }

    .rating:not(:checked)>label:hover,
    .rating:not(:checked)>label:hover~label {
        color: #ff9e0b;
    }

    .rating>input:checked~label {
        color: #ffa723;
    }
</style>
<script>
    function openReview() {
        document.getElementById('review').classList.remove('hidden');
    }

    function closeReview() {
        document.getElementById('review').classList.add('hidden');
    }


    function addToBooklist(recipeId) {
        let booklist = JSON.parse(localStorage.getItem('booklist')) || [];
        if (!booklist.includes(recipeId)) {
            booklist.push(recipeId);
            localStorage.setItem('booklist', JSON.stringify(booklist));
            alert('Recipe added to booklist: ' + recipeId);
        }
    }

    function displayBooklist() {
        let booklist = JSON.parse(localStorage.getItem('booklist')) || [];
        let listHtml = booklist.map(id => `<li>Recipe ID: ${id}</li>`).join('');
        document.getElementById('booklistView').innerHTML = listHtml;
    }


    function addComment(button) {
        var form = button.closest('form');

        $(form).on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: '<?php echo e(route('comment.store')); ?>',
                data: jQuery(form).serialize(),
                method: 'POST',
                success: function(result) {
                    jQuery(form)[0].reset();
                    $(form).unbind();

                }
            });
        })
    }


    function deleteComment(commentId) {
    if (!confirm("Are you sure you want to delete this comment?")) return;

    $.ajax({
        url: `/comment/${commentId}`,
        type: 'DELETE',
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        success: function(result) {
            alert('Comment deleted successfully');
            $(`#comment-${commentId}`).fadeOut();
        },
        error: function(xhr) {
            alert('Error deleting comment');
        }
    });
}
</script>
<?php /**PATH C:\laragon\www\Cuisenio\resources\views\user\readMore.blade.php ENDPATH**/ ?>