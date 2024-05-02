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

<body class="bg-gray-100">
   
    <div class="ml-24 ">
        <a href="">
            <i class="fa-solid fa-backward fa-2xl"></i>
        </a>
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
 
    </div>
    <div class="max-w-4xl mx-auto p-8">
        <form action="<?php echo e(route('recipes.update', $recipe)); ?>" method="POST" class="bg-white p-6 rounded-lg shadow-lg"
            enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="flex justify-between items-center mb-6">


                <h1 class="text-xl font-bold text-gray-700">Edite Recipe</h1>
                <div>
                    <a href="/home" class="text-red-500 hover:text-red-600 mr-4">
                        <i class="fas fa-home fa-lg"></i> Home /
                    </a>
                    <a href="<?php echo e(route('My.recipe')); ?>" class="text-red-500 hover:text-red-600">
                        <i class="fas fa-utensils fa-lg"></i>My Recipes
                    </a>
                </div>
            </div>

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="title" name="title" required
                    class="focus:ring-red-300 focus:border-red-300 block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md"
                    value="<?php echo e($recipe->title); ?>" placeholder="Delicious Lasagna">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="4" required
                    class="focus:ring-red-300 focus:border-red-300 block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md"
                    placeholder="Describe your recipe"><?php echo e($recipe->description); ?></textarea>
            </div>

            <div class="mb-4">
                <label for="theme" class="block text-sm font-medium text-gray-700">Theme</label>
                <select id="theme" name="theme_id" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-300 focus:border-red-300">
                    <option value="">Select a Theme</option>
                    <?php $__currentLoopData = $themes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($recipe->theme->id == $theme->id): ?>
                            <option value="<?php echo e($theme->id); ?>" selected><?php echo e($theme->name); ?></option>
                        <?php endif; ?>
                        <option value="<?php echo e($theme->id); ?>"><?php echo e($theme->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="mb-4">
                <label for="list_ingredients" class="block text-sm font-medium text-gray-700">Liste
                    d'ingrédients</label>
                <textarea id="list_ingredients" name="list_ingredients"
                    class="focus:ring-red-300 focus:border-red-300 block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md"
                    placeholder="Listez les ingrédients, séparés par des virgules ou sauts de ligne"><?php echo e($recipe->list_ingredients); ?></textarea>
            </div>

                        <?php $__currentLoopData = $ingrediants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ingredient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <input type="checkbox" id="ingredient<?php echo e($ingredient->id); ?>" name="ingredients[]"
                        value="<?php echo e($ingredient->id); ?>" <?php echo e($recipe->ingredients->contains($ingredient->id) ? 'checked' : ''); ?>>
                    <label for="ingredient<?php echo e($ingredient->id); ?>"><?php echo e($ingredient->name); ?></label>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            <div class="mb-4">
                <label for="steps" class="block text-sm font-medium text-gray-700">Steps</label>
                <textarea id="steps" name="steps" rows="4" required
                    class="focus:ring-red-300 focus:border-red-300 block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md"
                    placeholder="Enter the steps"><?php echo e($recipe->steps); ?></textarea>
            </div>
            <div class="font-[sans-serif] max-w-md mx-auto">
                <label class="text-sm text-black mb-2 block">Upload file</label>
                <input type="file" name="image"
                    class="w-full text-black text-sm bg-white border file:cursor-pointer cursor-pointer file:border-0 file:py-2.5 file:px-4 file:bg-gray-100 file:hover:bg-gray-200 file:text-black rounded" />
                <p class="text-xs text-gray-400  mb-5 mt-2">PNG, JPG SVG, WEBP, and GIF are Allowed.</p>
            </div>


            <div class="mb-4">
                <label for="duration_preparation" class="block text-sm font-medium text-gray-700">Durée de préparation
                    (en minutes)</label>
                <input type="number" id="duration_preparation" name="duration_preparation"
                    class="focus:ring-red-300 focus:border-red-300 block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md"
                    placeholder="Entrez la durée de préparation en minutes"
                    value="<?php echo e($recipe->duration_preparation); ?>">
            </div>

            <div class="mb-4">
                <label for="number of persons" class="block text-sm font-medium text-gray-700">Number of persons</label>
                <input type="number" id="number_of_persons" name="number_of_persons" 
                    class="focus:ring-red-300 focus:border-red-300 block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md"
                    placeholder="Entrez the number of persons" value="<?php echo e($recipe->number_of_persons); ?>">
            </div>
            <div class="mb-4">
                <label for="level" class="block text-sm font-medium text-gray-700">Difficulty Level</label>
                <select id="level" name="level" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-300 focus:border-red-300">
                    <option value="biginner" <?php echo e($recipe->level == 'biginner' ? 'selected' : ''); ?>>Biginner</option>
                    <option value="intermediate" <?php echo e($recipe->level == 'intermediate' ? 'selected' : ''); ?>>Intermediate</option>
                    <option value="advanced" <?php echo e($recipe->level == 'advanced' ? 'selected' : ''); ?>>Advanced</option>
                    <option value="expert" <?php echo e($recipe->level == 'expert' ? 'selected' : ''); ?>>Expert</option>
                </select>
                
            </div>

            <div class="mb-4">
                <label for="season" class="block text-sm font-medium text-gray-700">Season</label>
                <select id="season" name="season" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-300 focus:border-red-300">
                    <option value="winter" <?php echo e($recipe->season == 'winter' ? 'selected' : ''); ?>>Winter</option>
                    <option value="spring" <?php echo e($recipe->season == 'spring' ? 'selected' : ''); ?>>Spring</option>
                    <option value="summer" <?php echo e($recipe->season == 'summer' ? 'selected' : ''); ?>>Summer</option>
                    <option value="autumn" <?php echo e($recipe->season == 'autumn' ? 'selected' : ''); ?>>Autumn</option>
                    <option value="all season" <?php echo e($recipe->season == 'all season' ? 'selected' : ''); ?>>All Season</option>
                </select>
                
            </div>

            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded shadow">

                <i class="fas fa-paper-plane"></i> Submit Recipe
            </button>
        </form>
    </div>
</body>

</html>
<?php /**PATH C:\laragon\www\Cuisenio\resources\views\user\EditeRecipe.blade.php ENDPATH**/ ?>