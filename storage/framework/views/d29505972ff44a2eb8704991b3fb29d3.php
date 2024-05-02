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

    <div class="flex-grow p-6 lg:pl-80  pt-28">
        <div class="flex justify-center items-center h-full">
            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md w-full max-w-4xl">
                <div class="pb-4 flex justify-between items-center">
                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">User Management</h2>
                        <div id="search-results"></div>
                </div>
                <div class="">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">Name</th>
                                <th scope="col" class="py-3 px-6">Email</th>
                                <th scope="col" class="py-3 px-6">Status</th>
                                <th scope="col" class="py-3 px-6">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="py-4 px-6"><?php echo e($user->name); ?></td>
                                    <td class="py-4 px-6"><?php echo e($user->email); ?></td>
                                    <td class="py-4 px-6">Active</td>
                                    <td class="py-4 px-6 flex space-x-2">
                                        <?php
                                            $isBanned = $user->is_banned;
                                        ?>

                                        <form action="<?php echo e(route('user.toggle-block', $user->id)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <span class="cursor-pointer <?php echo e($isBanned ? 'text-green-500 hover:text-green-700' : 'text-red-500 hover:text-red-700'); ?> hover:underline" onclick="this.closest('form').submit()">
                                                <?php echo e($isBanned ? 'Unblock' : 'Block'); ?>

                                            </span>
                                            
                                        </form>

                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
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
<?php /**PATH C:\laragon\www\Cuisenio\resources\views/admin/User-acces.blade.php ENDPATH**/ ?>