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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header','data' => ['page' => 'blog']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['page' => 'blog']); ?>
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


<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center mb-8">
            <h1 class="text-4xl md:text-4xl  mb-5 font-bold text-center text-black">
                Blog
            </h1>
            <p class="text-md  text-center text-gray-700">
                Discover our latest culinary insights, including recipes, tips, and trends. Keep up-to-date with
                everything
                happening in the culinary world.
            </p>
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
        <form class="w-7/12 mx-auto my-10 rounded-full ">
            <label for="chat" class="sr-only">Your message</label>
            <div class="flex items-center px-5 py-2 rounded-full bg-red-200 dark:bg-gray-700">
                <div class="flex items-center w-1/12">
                    <img class="w-10 h-10 rounded-full border-2 border-white"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                        alt="Bonnie Green avatar" />
                </div>
                <div id="blog"
                    class="block mx-4 p-2.5 w-full text-sm bg-red-200 text-white rounded-lg border-none ">what's on your
                    mind...</div>
                <button type="button" data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                    class="inline-flex justify-center  p-2 rounded-full cursor-pointer focus:outline-none focus:border-none group">
                    <svg class="text-white group-hover:text-red-600 transition-all duration-300 ease-in"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                        color="#000000" fill="none">
                        <path d="M12 8V16M16 12L8 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12Z"
                            stroke="currentColor" stroke-width="1.5" />
                    </svg>
                    <span class="sr-only">Send message</span>
                </button>
            </div>
        </form>




        <div id="crud-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-h-full">
                <div class="relative bg-white w-8/12 mx-auto rounded-lg shadow dark:bg-gray-700">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Create New Blog
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form class="p-4 md:p-5" method="POST"
                        action="<?php echo e(route('blog.store')); ?>"enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="type"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">type</label>
                                <select id="type" name="type" required
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-300 focus:border-red-300">
                                    <option></option>
                                    <option value="conseil">conseil</option>
                                    <option value="blog">blog</option>
                                    <option value="astuce">astuce</option>
                                </select>
                            </div>
                            <div class="col-span-2">
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">title</label>
                                <input type="text" name="title" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Enter title" required>
                            </div>
                            <div class="col-span-2">
                                <label for="description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Description</label>
                                <textarea id="description" rows="4" name="description"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Write blog  description here" required></textarea>
                            </div>

                            <div class="flex items-center justify-center w-full col-span-2">
                                <label for="dropzone-file"
                                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                class="font-semibold">Click to upload</span> or drag and drop</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF
                                            (MAX. 800x400px)</p>
                                    </div>
                                    <input id="dropzone-file" type="file" class="hidden" name="image" />
                                </label>
                            </div>


                        </div>
                        <div class="flex items-center justify-center">
                            <button type="submit"
                                class="text-white inline-flex items-center bg-red-300 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition-all duration-300 ease-in">
                                <svg class="text-white me-1 -ms-1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" width="22" height="22" color="#000000"
                                    fill="none">
                                    <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                Add new Blog
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="grid gap-8 lg:grid-cols-2">
            <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article
                    class="p-6 bg-white rounded-lg border-red-300 border-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span
                            class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                    clip-rule="evenodd"></path>
                                <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                            </svg>
                            Article
                        </span>
                        <span class="text-sm"<?php echo e($content->created_at->diffForHumans()); ?></span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a
                            href="#"><?php echo e($content->title); ?></a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400"><?php echo e($content->description); ?></p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full"
                                src="<?php echo e($content->user->profile_image ? asset('storage/' . $content->user->profile_image) : asset('images/cheef.jpg')); ?>"
                                alt="User Image">
                            <span class="font-medium dark:text-white">
                                <?php echo e($content->user->name); ?>

                            </span>
                        </div>
                        <div class="flex justify-center gap-3">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24" color="#000000" fill="none">
                                    <path
                                        d="M8.26872 8.49708C9.60954 7.67461 10.7798 8.00606 11.4828 8.53401C11.7711 8.75048 11.9152 8.85871 12 8.85871C12.0848 8.85871 12.2289 8.75048 12.5172 8.53401C13.2202 8.00606 14.3905 7.67461 15.7313 8.49708C17.491 9.57647 17.8891 13.1374 13.8302 16.1417C13.0571 16.7139 12.6706 17 12 17C11.3294 17 10.9429 16.7139 10.1698 16.1417C6.11086 13.1374 6.50903 9.57647 8.26872 8.49708Z"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path
                                        d="M22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12Z"
                                        stroke="currentColor" stroke-width="1.5" />
                                </svg>
                            </a>
                            <a onclick="toggleCommentsModal(1);" class="cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24" color="#000000" fill="none">
                                    <path d="M8 13.5H16M8 8.5H12" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M6.09881 19C4.7987 18.8721 3.82475 18.4816 3.17157 17.8284C2 16.6569 2 14.7712 2 11V10.5C2 6.72876 2 4.84315 3.17157 3.67157C4.34315 2.5 6.22876 2.5 10 2.5H14C17.7712 2.5 19.6569 2.5 20.8284 3.67157C22 4.84315 22 6.72876 22 10.5V11C22 14.7712 22 16.6569 20.8284 17.8284C19.6569 19 17.7712 19 14 19C13.4395 19.0125 12.9931 19.0551 12.5546 19.155C11.3562 19.4309 10.2465 20.0441 9.14987 20.5789C7.58729 21.3408 6.806 21.7218 6.31569 21.3651C5.37769 20.6665 6.29454 18.5019 6.5 17.5"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </a>
                            <a href="<?php echo e(route('blog.show', $content->id)); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24" color="#000000" fill="none">
                                    <path
                                        d="M8 3.09779C8 3.09779 4.03374 2.74194 3.38783 3.38785C2.74191 4.03375 3.09783 8 3.09783 8"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M8 20.9022C8 20.9022 4.03374 21.2581 3.38783 20.6122C2.74191 19.9662 3.09783 16 3.09783 16"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M16 3.09779C16 3.09779 19.9663 2.74194 20.6122 3.38785C21.2581 4.03375 20.9022 8 20.9022 8"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M16 20.9022C16 20.9022 19.9663 21.2581 20.6122 20.6122C21.2581 19.9662 20.9022 16 20.9022 16"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M14.0107 9.99847L20.0625 3.94678" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.99695 14.0024L3.63965 20.3807" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.99732 10.0024L3.8457 3.85889" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.9795 14.0024L20.5279 20.4983" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Main modal -->
                    <div id="comments-modal1" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                        class="hidden 
  overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 bottom-0 z-50 justify-center items-center w-full h-full bg-black bg-opacity-50">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Comments
                                    </h3>
                                    <button onclick="toggleCommentsModal(1);" type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="comments-modal1">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>

                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <?php if(isset($contents) && $contents->isNotEmpty()): ?>
                                        <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleContent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($singleContent->comments && $singleContent->comments->isNotEmpty()): ?>
                                                <?php $__currentLoopData = $singleContent->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <article
                                                        class="p-6 text-base bg-white rounded-lg dark:bg-gray-900">
                                                        <footer class="flex justify-between items-center mb-2">
                                                            <div class="flex items-center">
                                                                <p
                                                                    class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold">
                                                                    <img class="rounded-full h-10 w-10 mr-2 mt-1"
                                                                        src="<?php echo e($comment->user->profile_image ? asset('storage/' . $comment->user->profile_image) : asset('images/cheef.jpg')); ?>"
                                                                        alt="User Image"><?php echo e($comment->user->name); ?>

                                                                </p>

                                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                                    <time pubdate datetime="2022-02-08"
                                                                        title="February 8th, 2022"><?php echo e($comment->created_at->diffForHumans()); ?></time>
                                                                </p>
                                                            </div>

                                                            <button id="dropdownComment1Button"
                                                                data-dropdown-toggle="dropdownComment1"
                                                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                                                type="button">
                                                                <svg class="w-4 h-4" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor" viewBox="0 0 16 3">
                                                                    <path
                                                                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                                </svg>
                                                                <span class="sr-only">Comment settings</span>
                                                            </button>
                                                            <!-- Dropdown menu -->
                                                            <div id="dropdownComment1"
                                                                class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                                    aria-labelledby="dropdownMenuIconHorizontalButton">
                                                                    <li>
                                                                        <button>
                                                                            <?php if($comment->user_id === Auth::id()): ?>
                                                                                <a onclick="deleteComment(<?php echo e($comment->id); ?>)"
                                                                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-red-500">Remove</a>
                                                                        </button>
                                                <?php endif; ?>
                                                </li>
                                                </ul>
                                </div>
                                </footer>
                                <p class="text-gray-500 dark:text-gray-400"><?php echo e($comment->body); ?></p>
                </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <p>No contents found.</p>
            <?php endif; ?>




        </div>
        <!-- Modal footer -->
        <div class="flex justify-center items-center p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
            <form class="flex w-full justify-between">
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?>
                <input type="hidden" name="commentable_type" value="Content">
                <input type="hidden" name="commentable_id" value="1">
                <div
                    class="py-2 px-4 w-7/12 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <label for="comment" class="sr-only">Your comment</label>
                    <textarea id="comment" rows="2" name="body"
                        class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                        placeholder="Write a comment..." required></textarea>
                </div>
                <div class="inline-flex items-center ">
                    <button type="submit" onclick="addComment(this)"
                        class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-red-400 rounded-lg focus:ring-2 focus:ring-red-400 dark:focus:ring-red-400 hover:bg-red-500">
                        Post comment
                    </button>
                    <button onclick="openComment(this,'<?php echo e($content->id); ?>')" data-modal-hide="static-modal"
                        type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>


    <div id="comment-popup"
        class="hidden min-w-screen lg:px-14 lg:py-5 h-screen animated fadeIn faster fixed left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover">
        <div class="absolute bg-black opacity-80 inset-0 z-0"></div>
        <div class="w-full max-w-xl p-5 relative rounded-xl shadow-lg h-full bg-white overflow-y-auto  ">
            <p onclick="closeComment()" class=" cursor-pointer  absolute z-20 top-2 right-2">send</p>
            <div class="comments-container w-full flex flex-col gap-4 min-h-full ">
            </div>
            <form id="commentForm" method="post" class="w-full  rounded-md sticky bottom-2">

            </form>
        </div>
    </div>
    
    </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    </div>
</section>

<script>
    function closeComment() {
        document.getElementById('comment-popup').classList.add('hidden')
    }

    function openComment(button, id) {
        $(button).on('click', function(event) {
            $.ajax({
                url: "<?php echo e(route('comment.show', '')); ?>" + '/' + id,
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log(data.authId);
                    var popup = $('#comment-popup');
                    popup.removeClass('hidden');
                    $('.comments-container').empty();
                    console.log(data.id);
                    data.comments.forEach(function(comment) {
                        var commentHtml = `
                                      <div class="flex items-center space-x-2">
                                    <div class="group relative flex flex-shrink-0 self-start cursor-pointer">
                                    ${comment.user.profile_photo_url
                                          ? `<img src="/storage/${comment.user.profile_photo_url}" alt="" class="h-8 w-8 object-fill rounded-full">` 
                                          :''
                                      }
                                    </div>
                                    <div class="flex justify-between w-full bg-gray-100 rounded-xl">
                                        <div class="w-auto px-2 pb-2">
                                            <div class="font-medium">
                                             
                                                    <small>${comment.user.name}</small>
                                            </div>
                                            <div class="text-xs">${comment.content}</div>
                                        </div>
                                        ${comment.user.id === data.authId ? 
                                          `<form method="post">
                                          <?php echo csrf_field(); ?>
                                          <?php echo method_field('DELETE'); ?>
                                          <button onclick="deleteComment(this,${comment.id})" class=" pt-3">
                                              delete
                                          </button>
                                      </form>` : ``}
                                    </div>
                                </div>
                                      `;
                        $('.comments-container').append(commentHtml);
                    });
                    var form = `
                                     <?php echo csrf_field(); ?>
                                        <?php echo method_field('POST'); ?>
                                        <div class="flex items-center border border-gray-300 bg-white px-2 py-1 rounded-xl">
                                            <input type="hidden" name="post_id" value="${id}">
                                          <input type="text" name="content" class="w-full rounded-md focus:outline-none" placeholder="Write a comment...">
                                            <button onclick="addComment(this)" class="bg-gray-500 text-black px-3 py-1 rounded-md ml-2">
                                                <span class="fas fa-paper-plane"></span> 
                                            </button>
                                        </div>
                                     `;
                    $('#commentForm').html(form);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    }

    function addComment(button) {
        var form = button.closest('form');
        $(form).on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: "<?php echo e(route('comment.store')); ?>",
                data: jQuery(form).serialize(),
                method: 'POST',
                success: function(result) {
                    console.log(result.authId);
                    var popup = $('#comment-popup');
                    popup.removeClass('hidden');
                    $('.comments-container').empty();
                    console.log(result.authId);
                    result.comments.forEach(function(comment) {
                        var commentHtml = `
                              <div class="flex items-center space-x-2">
                                    <div class="group relative flex flex-shrink-0 self-start cursor-pointer">
                                    ${comment.client.image 
                                          ? `<img src="/storage/${comment.client.image.path}" alt="" class="h-8 w-8 object-fill rounded-full">` 
                                          : (comment.client.gender === 'female' 
                                              ? `<img src="<?php echo e(asset('imgs/profileFemale.png')); ?>" alt="" class="h-8 w-8 object-fill rounded-full">` 
                                              : `<img src="<?php echo e(asset('imgs/profileMale.png')); ?>" alt="" class="h-8 w-8 object-fill rounded-full">`)
                                      }                                    </div>
                                    <div class="flex justify-between w-full bg-gray-100 rounded-xl">
                                        <div class="w-auto px-2 pb-2">
                                            <div class="font-medium">
                                                <a href="/${comment.client.user.username}" class="hover:underline text-sm flex">
                                                    <small>${comment.client.user.name}</small>
                                                </a>
                                            </div>
                                            <div class="text-xs">${comment.content}</div>
                                        </div>
                                        ${comment.client.id === result.authId ? 
                                          `<form method="post">
                                          <?php echo csrf_field(); ?>
                                          <?php echo method_field('DELETE'); ?>
                                          <button onclick="deleteComment(this,${comment.id})" class="text-xs pt-1">
delete                                          </button>
                                      </form>` : ``}
                                    </div>
                                </div>
                              `;
                        $('.comments-container').append(commentHtml);
                    });
                    jQuery(form)[0].reset();
                    $(form).unbind();
                },
            });
        })

    }


    function deleteComment(button, id) {
        var form = button.closest('form');
        $(form).on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: '/comment/delete/' + id,
                data: jQuery(form).serialize(),
                method: 'DELETE',
                success: function(result) {
                    var popup = $('#comment-popup');
                    popup.removeClass('hidden');
                    $('.comments-container').empty();

                    result.comments.forEach(function(comment) {
                        var commentHtml = `
                                <div class="flex items-center space-x-2">
                                    <div class="group relative flex flex-shrink-0 self-start cursor-pointer">
                                    ${comment.client.image 
                                          ? `<img src="/storage/${comment.client.image.path}" alt="" class="h-8 w-8 object-fill rounded-full">` 
                                          : (comment.client.gender === 'female' 
                                              ? `<img src="<?php echo e(asset('imgs/profileFemale.png')); ?>" alt="" class="h-8 w-8 object-fill rounded-full">` 
                                              : `<img src="<?php echo e(asset('imgs/profileMale.png')); ?>" alt="" class="h-8 w-8 object-fill rounded-full">`)
                                      }                                    </div>
                                    <div class="flex justify-between w-full bg-gray-100 rounded-xl">
                                        <div class="w-auto px-2 pb-2">
                                            <div class="font-medium">
                                                <a href="/${comment.client.user.username}" class="hover:underline text-sm flex">
                                                    <small>${comment.client.user.name}</small>
                                                </a>
                                            </div>
                                            <div class="text-xs">${comment.content}</div>
                                        </div>
                                        ${comment.client.id == result.authId ?
                                           `<form method="post">
                                          <?php echo csrf_field(); ?>
                                          <?php echo method_field('DELETE'); ?>
                                          <button onclick="deleteComment(this,${comment.id})">
delete                                          </button>
                                      </form>` : ``}
                                    </div>
                                </div>
                            `;
                        $('.comments-container').append(commentHtml);
                    });
                    $(form).unbind();
                }
            });
        })

    }
</script>

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
<?php /**PATH C:\laragon\www\Cuisenio\resources\views/user/blog.blade.php ENDPATH**/ ?>