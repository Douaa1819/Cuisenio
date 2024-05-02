


<?php if (isset($component)) { $__componentOriginal228776e883508d72f0898cfa1f828b98 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal228776e883508d72f0898cfa1f828b98 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

        <div class=" lg:pl-80 lg:pt-20 h-screen flex flex-col items-center">
            <div class="px-4 py-5  md:px-6 mx-auto max-w-7xl">
                <h1 class="text-3xl  mx-auto  font-bold text-gray-800 mb-6">Good afternoon, Monsieur <?php echo e($admin); ?>!</h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6 w-full max-w-6xl">
                <div class="bg-white rounded-lg shadow p-4 space-y-2">
                    <span class="text-gray-700 font-semibold">number of users:</span>
                    <span class="text-2xl  text-green-500  font-bold"><?php echo e($user); ?></span>
                </div>

                <div class="bg-white rounded-lg shadow p-4 space-y-2">
                    <span class="text-gray-700 font-semibold">number of recipes:</span>
                    <span class="text-2xl text-green-500 font-bold"><?php echo e($recipes); ?></span>
                </div>


                <div class="bg-white rounded-lg shadow p-4 space-y-2">
                    <span class="text-gray-700 font-semibold">number of Themes:</span>
                    <span class="text-2xl  text-green-500 font-bold"><?php echo e($themes); ?></span>
                </div>
               
            </div>


        </div>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal228776e883508d72f0898cfa1f828b98)): ?>
<?php $attributes = $__attributesOriginal228776e883508d72f0898cfa1f828b98; ?>
<?php unset($__attributesOriginal228776e883508d72f0898cfa1f828b98); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal228776e883508d72f0898cfa1f828b98)): ?>
<?php $component = $__componentOriginal228776e883508d72f0898cfa1f828b98; ?>
<?php unset($__componentOriginal228776e883508d72f0898cfa1f828b98); ?>
<?php endif; ?>
        <div class="  ml-48">
        <footer class="w-full text-center  flex justify-center items-center p-4 text-sm text-gray-600">
            © 2024 Cuisénio. All rights reserved.
        </div>
        </div>
        </footer><?php /**PATH C:\laragon\www\Cuisenio\resources\views/admin/index.blade.php ENDPATH**/ ?>