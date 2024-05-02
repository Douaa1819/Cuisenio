    <!-- component -->
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
        
    <section class="flex flex-col items-center mt-12 px-5 space-y-6">
        <h5 class="text-3xl font-bold text-center text-black">
            Keep up-to-date with everything happening in the culinary world
        </h5>
        <form class="w-full max-w-lg flex items-center space-x-4 bg-gray-100 rounded-md overflow-hidden border border-gray-300">
            <input type="search" id="search" placeholder="Search articles, news, or recipes..."
                   class="flex-1 p-4 text-sm text-gray-700 placeholder-gray-500 bg-transparent focus:outline-none" />
            <button type="submit" class="px-6 py-4 bg-black text-white text-sm font-medium hover:bg-gray-800 transition-colors">
                Search
            </button>
        </form>
    </section>
    
    <div class="max-w-6xl mx-auto mt-8 px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php $__currentLoopData = $recipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="flex flex-col bg-white rounded-lg overflow-hidden shadow-lg my-4">
                <?php if($recipe->image): ?>
                <img src="<?php echo e(Storage::url($recipe->image->url)); ?>" alt="Recipe Image" class="w-full h-56 object-cover">
                <?php endif; ?>
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-2"><?php echo e($recipe->title); ?></h2>
                    <p class="text-gray-700 text-sm"><?php echo e(\Illuminate\Support\Str::limit($recipe->description, 100, '...')); ?></p>
                    <div class="flex justify-between items-center mt-4">
                        <div class="flex items-center">
                            <i class="fas fa-user-circle text-xl text-gray-700 mr-2"></i>
                            <span class="text-sm text-gray-600"><?php echo e($recipe->author); ?></span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-calendar-alt text-xl text-gray-700 mr-2"></i>
                            <time class="text-sm text-gray-600"><?php echo e($recipe->created_at->toFormattedDateString()); ?></time>
                        </div>
                        <div class="flex items-center mt-4">
                            <i class="fas fa-clock text-gray-400"></i>
                            <span class="ml-2 text-sm text-gray-500"><?php echo e($recipe->duration_preparation); ?> min</span>
                        </div>
                    </div>
                </div>
            </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    </section>
    
    

    
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
<?php endif; ?><?php /**PATH C:\laragon\www\Cuisenio\resources\views\user\RecipeFiltre.blade.php ENDPATH**/ ?>