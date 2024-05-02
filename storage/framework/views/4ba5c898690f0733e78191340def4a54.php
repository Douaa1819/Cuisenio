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
  <?php $__env->startSection("douaaa"); ?>



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

</head>

<body class="bg-gray-50">

    <main class="container mx-auto px-4 py-8">
        <article class="flex flex-wrap md:flex-nowrap gap-10">
            <div class="md:flex-1">
                <h2 class="text-3xl font-bold text-center mb-4 text-red-500">Riz Frit Japonais Sain</h2>
                
                <div class="flex justify-between items-center">
                    <div class="flex gap-4">
                        <button class="text-red-500 hover:text-red-600">
                            <i class="fas fa-heart"></i> Add to Favorites
                        </button>
                        <button class="text-red-500 hover:text-red-600">
                            <i class="fas fa-comment"></i> Comment
                        </button>
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-500"></i>
                            <span>4.5 (200)</span>
                        </div>
                    </div>
                    <div class="flex gap-5 justify-end">
                        <a href="#" class="text-red-300 hover:text-red-500">
                            <i class="fas fa-share-alt"></i>
                        </a>
                        <a href="#" class="text-red-300 hover:text-red-500">
                            <i class="fas fa-print"></i>
                        </a>
                    </div>
                </div>
                
                <img src="https://via.placeholder.com/600x400" alt="Riz Frit Japonais" class="w-full rounded-lg mb-6">
                
                <p class="p-5 text-gray-700 mb-6">Commencez votre journée avec ce bol de petit déjeuner énergisant et sain, plein de saveurs fraîches et de nutriments pour démarrer votre matinée. Cette recette apporte une touche japonaise au riz frit classique, la rendant unique.</p>
                
                <!-- Ingredients, Instructions, Nutrition, Comments -->
                <div class="space-y-6">
                    <section>
                        <h3 class="text-2xl font-semibold">Ingredients</h3>
                        <ul class="list-disc pl-5">
                            <li>1 cup of cooked rice</li>
                            <li>1 tablespoon of olive oil</li>
                            <!-- More ingredients -->
                        </ul>
                    </section>
    
                    <section>
                        <h3 class="text-2xl font-semibold">Instructions</h3>
                        <ol class="list-decimal pl-5">
                            <li>Heat olive oil in a large skillet.</li>
                            <!-- More instructions -->
                        </ol>
                    </section>
    
                    <section>
                        <h3 class="text-2xl font-semibold">Nutritional Information</h3>
                        <p>Approximate calories per serving: 250 kcal</p>
                    </section>
    
                    <section>
                        <h3 class="text-2xl font-semibold">Comments</h3>
                        <textarea class="form-textarea mt-1 block w-full rounded-md border-gray-300 shadow-sm" rows="3" placeholder="Write a comment..."></textarea>
                        <button class="mt-2 px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Post Comment</button>
                    </section>
                </div>
            </div>
        </article>
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
    </html><?php /**PATH C:\laragon\www\Cuisenio\resources\views\visitor\ReadMore.blade.php ENDPATH**/ ?>