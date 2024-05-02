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
<?php if (isset($component)) { $__componentOriginal3ca506077c05767d53b02ddaed0a2263 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3ca506077c05767d53b02ddaed0a2263 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.headeer','data' => ['page' => 'blog']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('headeer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['page' => 'blog']); ?>
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



<section class="flex flex-col items-center mt-12 px-5 space-y-6">
    <h1 class="text-4xl md:text-4xl font-bold text-center text-black">
        Blog
    </h1>
    <p class="text-md  text-center text-gray-700">
        Discover our latest culinary insights, including recipes, tips, and trends. Keep up-to-date with everything
        happening in the culinary world.
    </p>
    <form
        class="w-full max-w-lg flex items-center space-x-4 bg-gray-100 rounded-md overflow-hidden border border-gray-300">
        <input type="search" id="search" placeholder="Search articles, news, or recipes..."
            class="flex-1 p-4 text-sm text-gray-700 placeholder-gray-500 bg-transparent focus:outline-none" />
        <button type="submit"
            class="px-6 py-4 bg-black text-white text-sm font-medium hover:bg-gray-800 transition-colors rounded-md">
            Search
        </button>
    </form>
</section>



<div class="max-w-6xl mx-auto mt-8 px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Article 1 -->

        <article class="flex flex-col bg-white rounded-lg overflow-hidden shadow-lg my-4">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/800x400?text=Healthy+Breakfast+Bowl"
                alt="Healthy Breakfast Bowl">
            <div class="p-6">
                <h2 class="text-xl font-bold mb-2">Healthy Breakfast Bowl</h2>
                <p class="text-gray-700">Start your day with this energizing and healthy breakfast bowl.</p>
                <div class="flex justify-between items-center mt-4">
                    <div class="flex items-center">
                        <i class="fas fa-user-circle text-xl text-gray-700 mr-2"></i>
                        <span class="text-sm text-gray-600">Albert Flores</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-calendar-alt text-xl text-gray-700 mr-2"></i>
                        <time class="text-sm text-gray-600">5 December 2024</time>
                    </div>
                </div>
            </div>
        </article>

        <!-- Article 2 -->
        <article class="flex flex-col bg-white rounded-lg overflow-hidden shadow-lg my-4">
            <img class="w-full h-48 object-cover"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/8c4c84e7ba66404ed44d2a56bd635b767eab121e2df8ed983ce292f0ad43ef9b?apiKey=93bb9bcd81d443648999334442ead41e&"
                alt="Vegetarian Taco">
            <div class="p-6">
                <h2 class="text-xl font-bold mb-2">Cauliflower Walnut Vegetarian Taco Meat</h2>
                <p class="text-gray-700">A delicious and healthy alternative to traditional taco meat.</p>
                <div class="flex justify-between items-center mt-4">
                    <div class="flex items-center">
                        <i class="fas fa-user-circle text-xl text-gray-700 mr-2"></i>
                        <span class="text-sm text-gray-600">Albert Flores</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-calendar-alt text-xl text-gray-700 mr-2"></i>
                        <time class="text-sm text-gray-600">5 December 2024</time>
                    </div>
                </div>
            </div>
        </article>

        <!-- Article 3 -->
        <article class="flex flex-col bg-white rounded-lg overflow-hidden shadow-lg my-4">
            <img class="w-full h-48 object-cover"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/97b02af90ef8d27744d299532adb312372718335a24a2e2bce17a09cac041631?apiKey=93bb9bcd81d443648999334442ead41e&"
                alt="Rainbow Chicken Salad">
            <div class="p-6">
                <h2 class="text-xl font-bold mb-2">Rainbow Chicken Salad with Almond Honey Mustard Dressing</h2>
                <p class="text-gray-700">A colorful salad that's as nutritious as it is delicious.</p>
                <div class="flex justify-between items-center mt-4">
                    <div class="flex items-center">
                        <i class="fas fa-user-circle text-xl text-gray-700 mr-2"></i>
                        <span class="text-sm text-gray-600">Albert Flores</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-calendar-alt text-xl text-gray-700 mr-2"></i>
                        <time class="text-sm text-gray-600">5 December 2024</time>
                    </div>
                </div>
            </div>
        </article>

        <!-- Article 4 -->
        <article class="flex flex-col bg-white rounded-lg overflow-hidden shadow-lg my-4">
            <img class="w-full h-48 object-cover"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/f24f268202d77ba54bfd2fb8008dcec9a877cb3a61a63dd36e25b7d1eb4793b3?apiKey=93bb9bcd81d443648999334442ead41e&"
                alt="Colorful Quinoa Salad">
            <div class="p-6">
                <h2 class="text-xl font-bold mb-2">Colorful Quinoa Salad</h2>
                <p class="text-gray-700">A fresh and easy quinoa salad that's great for a healthy lunch.</p>
                <div class="flex justify-between items-center mt-4">
                    <div class="flex items-center">
                        <i class="fas fa-user-circle text-xl text-gray-700 mr-2"></i>
                        <span class="text-sm text-gray-600">Albert Flores</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-calendar-alt text-xl text-gray-700 mr-2"></i>
                        <time class="text-sm text-gray-600">5 December 2024</time>
                    </div>
                </div>
            </div>
        </article>

        <!-- Article 5 -->
        <article class="flex flex-col bg-white rounded-lg overflow-hidden shadow-lg my-4">
            <img class="w-full h-48 object-cover"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/3c176f632e531c88eb2df76c08c83c1b4cebe512f09d19017d03409bd22ee61b?apiKey=93bb9bcd81d443648999334442ead41e&"
                alt="Hearty Chicken Ramen Soup">
            <div class="p-6">
                <h2 class="text-xl font-bold mb-2">Hearty Chicken Ramen Soup</h2>
                <p class="text-gray-700">Warm up with this comforting and savory chicken ramen soup.</p>
                <div class="flex justify-between items-center mt-4">
                    <div class="flex items-center">
                        <i class="fas fa-user-circle text-xl text-gray-700 mr-2"></i>
                        <span class="text-sm text-gray-600">Albert Flores</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-calendar-alt text-xl text-gray-700 mr-2"></i>
                        <time class="text-sm text-gray-600">5 December 2024</time>
                    </div>
                </div>
            </div>
        </article>

         <!-- Article 4 -->
         <article class="flex flex-col bg-white rounded-lg overflow-hidden shadow-lg my-4">
            <img class="w-full h-48 object-cover"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/f24f268202d77ba54bfd2fb8008dcec9a877cb3a61a63dd36e25b7d1eb4793b3?apiKey=93bb9bcd81d443648999334442ead41e&"
                alt="Colorful Quinoa Salad">
            <div class="p-6">
                <h2 class="text-xl font-bold mb-2">Colorful Quinoa Salad</h2>
                <p class="text-gray-700">A fresh and easy quinoa salad that's great for a healthy lunch.</p>
                <div class="flex justify-between items-center mt-4">
                    <div class="flex items-center">
                        <i class="fas fa-user-circle text-xl text-gray-700 mr-2"></i>
                        <span class="text-sm text-gray-600">Albert Flores</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-calendar-alt text-xl text-gray-700 mr-2"></i>
                        <time class="text-sm text-gray-600">5 December 2024</time>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
</div>



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
</div>
</div>
</div>
<?php /**PATH C:\laragon\www\Cuisenio\resources\views\visitor\blog.blade.php ENDPATH**/ ?>