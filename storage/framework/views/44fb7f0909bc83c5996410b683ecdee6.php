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
    <div class="flex-grow p-6 lg:pl-80 pt-28">
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
        <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md ml-10">
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
            <div class="pb-4 flex justify-between items-center">

                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Theme Management</h2>
                <div class="flex items-center">
                    <div id="search-results"></div>
                    <button type="button"
                        class="px-6 py-4 text-white text-sm font-medium hover:bg-gray-800 transition-colors rounded-md">
                        <span id="total_records"></span>Search
                    </button>
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded text-sm flex items-center"
                        onclick="openModa()">
                        <i class="fas fa-plus mr-2"></i>Add Theme
                    </button>
                </div>
            </div>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">Image</th>
                        <th scope="col" class="py-3 px-6">Theme Name</th>
                        <th scope="col" class="py-3 px-6">Actions</th>
                    </tr>
                </thead>
                <tbody id="IngrediantTable">
                    <?php $__currentLoopData = $Themes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <?php if($Theme->image): ?>
                                <td class="py-6 px-6   ">
                                <img src="<?php echo e(asset('storage/' . $Theme->image->url)); ?>" alt="here"
                                        class="border rounded-lg w-32">

                                </td>
                            <?php endif; ?>
                            <td class="py-6 px-6"><?php echo e($Theme->name); ?></td>

                            <td class="py-6 px-6">
                                <button onclick="openModal('<?php echo e($Theme->id); ?>')"
                                    onclick="return confirm('Are you sure you want to update this theme?')"
                                    class="text-green-500 hover:text-orange-300">
                                    <i class="fas fa-edit"></i>Edit
                                </button>

                                <form action="<?php echo e(route('themes.destroy', $Theme->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?> 
                                    <button type="submit"
                                        onclick="return confirm('Are you sure you want to delete this theme?')"
                                        class="text-red-500 hover:text-red-700">
                                        <i class="fas fa-trash-alt"></i>Delete</button>
                                </form>
                            </td>
                        </tr>
                        <div id="editeThemeModal<?php echo e($Theme->id); ?>"
                            class="hidden fixed inset-0 z-10 overflow-auto bg-black bg-opacity-40">
                            <div class="flex items-center justify-center min-h-screen">
                                <div class="bg-white rounded-lg mx-auto p-5 relative max-w-lg w-full">
                                    <span
                                        class="absolute top-0 right-0 m-3 cursor-pointer text-gray-400 hover:text-gray-600"
                                        onclick="closeModal('<?php echo e($Theme->id); ?>')">&times;</span>
                                    <h2 id="modalTitle" class="text-xl mb-4">Edite Theme</h2>

                                    <form method="POST" action="<?php echo e(route('themes.update', ['theme' => $Theme->id])); ?>"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <input type="text" name="name" id="newThemeName"
                                            placeholder="Theme name..." class="mb-4 w-full p-2 border rounded"
                                            value="<?php echo e(old('name', $Theme->name)); ?>" required>
                                        <div class="font-[sans-serif] max-w-md mx-auto">
                                            <label class="text-sm text-black mb-2 block">Upload file</label>
                                            <input type="file" name="theme_file"
                                                class="w-full text-black text-sm bg-white border file:cursor-pointer cursor-pointer file:border-0 file:py-2.5 file:px-4 file:bg-gray-100 file:hover:bg-gray-200 file:text-black rounded" />
                                            <p class="text-xs text-gray-400  mb-5 mt-2">PNG, JPG SVG, WEBP, and GIF are
                                                Allowed.</p>
                                        </div>
                                        <button
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                            type="submit">Save Theme</button>
                                        <button type="button"
                                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2"
                                            onclick="closeModal()">Close</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal for Adding/Editing Theme -->
    <div id="addThemeModal" class="hidden fixed inset-0 z-10 overflow-auto bg-black bg-opacity-40">
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-white rounded-lg mx-auto p-5 relative max-w-lg w-full">
                <span class="absolute top-0 right-0 m-3 cursor-pointer text-gray-400 hover:text-gray-600"
                    onclick="closeModa()">&times;</span>
                <h2 id="modalTitle" class="text-xl mb-4">Add New Theme</h2>
                <?php if(session('success')): ?>
                    <div class="p-3 bg-green-300 text-green-800 rounded shadow-sm mb-4">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>
                <?php if($errors->any()): ?>
                    <div class="p-3 bg-red-300 text-red-800 rounded shadow-sm mb-4">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form method="POST" action="<?php echo e(route('themes.store')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="text" name="name" id="newThemeName" placeholder="Theme name..."
                        class="mb-4 w-full p-2 border rounded">
                    <div class="font-[sans-serif] max-w-md mx-auto">
                        <label class="text-sm text-black mb-2 block">Upload file</label>
                        <input type="file" name="theme_file"
                            class="w-full text-black text-sm bg-white border file:cursor-pointer cursor-pointer file:border-0 file:py-2.5 file:px-4 file:bg-gray-100 file:hover:bg-gray-200 file:text-black rounded" />
                        <p class="text-xs text-gray-400  mb-5 mt-2">PNG, JPG SVG, WEBP, and GIF are Allowed.</p>
                    </div>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                        type="submit">Save Theme</button>
                    <button type="button"
                        class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2"
                        onclick="closeModa()">Close</button>
                </form>
            </div>
        </div>
    </div>

    <div class="  ml-48">
        <footer class="w-full text-center  flex justify-center items-center p-4 text-sm text-gray-600">
            © 2024 Cuisénio. All rights reserved.
    </div>
    </div>
    <!-- Modal -->






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

<script>
    function openModa() {
        document.getElementById('addThemeModal').classList.remove('hidden');
    }

    function closeModa() {
        document.getElementById('addThemeModal').classList.add('hidden');
    }


    function openModal(id) {
        document.getElementById(`editeThemeModal${id}`).classList.remove('hidden');
    }

    function closeModal(id) {
        document.getElementById(`editeThemeModal${id}`).classList.add('hidden');
    }



    
        
</script>
<?php /**PATH C:\laragon\www\Cuisenio\resources\views/admin/Theme-management.blade.php ENDPATH**/ ?>