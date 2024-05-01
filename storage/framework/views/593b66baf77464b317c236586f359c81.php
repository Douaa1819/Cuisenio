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

    <section id="contact" class="pb-20 relative  bg-white text-gray-800 font-sans"
        style="font-family: 'Poppins', sans-serif;">
        <!-- Banner image with cuisine-related content -->
        <div class="bg-gradient-to-r relative from-red-300 to-pink-200 w-full h-96 rounded-b-xl">
            <img src="<?php echo e(asset('images/contact.jpg')); ?>" alt="Cuisine-related banner image"
                class="w-full h-full object-cover rounded-b-xl" />

        </div>
        <div class="container mx-auto">
            <div class="-mt-28 mb-6 px-4">
                <div class="mx-auto max-w-6xl shadow-lg py-8 px-6 relative bg-white rounded-lg">
                    <h1 class="text-3xl font-bold mb-4 text-gray-800">Connect With Us</h1>
                    <p class="text-sm text-gray-500 mt-3">Got a groundbreaking idea or a project that
                        needs some creative input?<br><br> We're all ears! Drop us a line and let's make
                        something great together.</p>
                    <form class="mt-8 grid sm:grid-cols-2 gap-6">
                        <input type='text' placeholder='Your Name'
                            class="w-full rounded py-2.5 px-4 mt-2 border border-gray-300 text-sm focus:outline-none focus:border-red-300 focus:ring-1 focus:ring-red-500" />
                        <input type='email' placeholder='Email'
                            class="w-full rounded py-2.5 px-4 mt-2 border border-gray-300 text-sm focus:outline-none focus:border-red-300 focus:ring-1 focus:ring-red-500" />
                        <textarea placeholder='Subject' rows="6"
                            class="w-full rounded px-4 py-2.5 border border-gray-300 text-sm focus:outline-none focus:border-red-300 focus:ring-1 focus:ring-red-500"></textarea>
                        <textarea placeholder='Message' rows="6"
                            class="w-full rounded px-4 py-2.5 border border-gray-300 text-sm focus:outline-none focus:border-red-300 focus:ring-1 focus:ring-red-500"></textarea>
                        <div class="col-span-full">
                            <button type='submit'
                                class="text-white bg-red-300 hover:bg-red-400 font-semibold rounded-md text-sm px-4 py-2.5 w-full">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <div class="absolute bottom-0 left-0 z-10 w-full h-auto ">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1504 131.3" class="transform scale-y-[-1]">
                <path d="M0,0 Q752,131.3 1504,0" fill="#F2F2F2" />
            </svg>
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
<?php endif; ?>
<?php /**PATH C:\laragon\www\Cuisenio\resources\views/visitor/ContactUs.blade.php ENDPATH**/ ?>