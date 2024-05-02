 <!-- About Us -->
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

     <section id="about" class="py-20 px-6 bg-white text-[#333333]">
         <div class="container mx-auto flex flex-wrap items-center  ">
             <!-- Text Content -->
             <div class="w-full md:w-1/2 px-6 mb-8 md:mb-0">
                 <h2 class="text-4xl font-bold mb-4 ">About Us</h2>
                 <p class="text-lg mb-4">Cuisénio is designed to make cooking a delightful experience for everyone.
                     From
                     amateurs to culinary experts, our platform serves as a bridge connecting the love of cooking
                     with
                     the ease of technology.</p>
                 <p class="text-lg">Join our community to share, explore, and enjoy the art of cooking in a new and
                     exciting way.</p>
             </div>
             <div class="w-full md:w-1/2 px-6">
                 <img src="<?php echo e(asset('images/about.jpg')); ?>" alt="About Us Image" class="rounded-lg shadow-lg" />
             </div>
         </div>
     </section>


     


     <div class="mx-auto mt-10 mb-5 text-center md:max-w-xl lg:max-w-3xl">
         <h2 class="text-4xl font-bold mb-10 ">What Our Customers Say</h2>
         <p class="mb-6 pb-2 text-neutral-600 dark:text-neutral-300 md:mb-12 md:pb-0">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error
             amet numquam iure provident voluptate esse quasi, veritatis totam
             voluptas nostrum quisquam eum porro a pariatur veniam.
         </p>
     </div>

     <div class="grid gap-6 text-center md:grid-cols-3 lg:gap-12">
         <div class="mb-12 md:mb-0">
             <div class="mb-6 flex justify-center">
                 <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(1).jpg"
                     class="w-32 rounded-full shadow-lg dark:shadow-black/30" />
             </div>
             <h5 class="mb-4 text-xl font-semibold">Maria Smantha</h5>
             <h6 class="mb-4 font-semibold text-primary dark:text-primary-400">
                Chef
             </h6>
             <p class="mb-4 text-neutral-600 dark:text-neutral-300">
                 <span class="inline-block pe-2 [&>svg]:w-5"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                         viewBox="0 0 448 512">
                         <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                         <path
                             d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z" />
                     </svg>
                 </span>
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos
                 id officiis hic tenetur quae quaerat ad velit ab hic tenetur.
             </p>
             <ul class="mb-0 flex items-center justify-center">
                 <li>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                         class="h-5 w-5 text-yellow-500">
                         <path fill-rule="evenodd"
                             d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                             clip-rule="evenodd" />
                     </svg>
                 </li>
                 <li>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                         class="h-5 w-5 text-yellow-500">
                         <path fill-rule="evenodd"
                             d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                             clip-rule="evenodd" />
                     </svg>
                 </li>
                 <li>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                         class="h-5 w-5 text-yellow-500">
                         <path fill-rule="evenodd"
                             d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                             clip-rule="evenodd" />
                     </svg>
                 </li>
                 <li>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                         class="h-5 w-5 text-yellow-500">
                         <path fill-rule="evenodd"
                             d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                             clip-rule="evenodd" />
                     </svg>
                 </li>
                 <li>
                     <svg clip-rule="evenodd" fill-rule="evenodd" fill="currentColor" class="h-5 w-5 text-yellow-500"
                         stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                         <path
                             d="m11.322 2.923c.126-.259.39-.423.678-.423.289 0 .552.164.678.423.974 1.998 2.65 5.44 2.65 5.44s3.811.524 6.022.829c.403.055.65.396.65.747 0 .19-.072.383-.231.536-1.61 1.538-4.382 4.191-4.382 4.191s.677 3.767 1.069 5.952c.083.462-.275.882-.742.882-.122 0-.244-.029-.355-.089-1.968-1.048-5.359-2.851-5.359-2.851s-3.391 1.803-5.359 2.851c-.111.06-.234.089-.356.089-.465 0-.825-.421-.741-.882.393-2.185 1.07-5.952 1.07-5.952s-2.773-2.653-4.382-4.191c-.16-.153-.232-.346-.232-.535 0-.352.249-.694.651-.748 2.211-.305 6.021-.829 6.021-.829s1.677-3.442 2.65-5.44zm.678 2.033v11.904l4.707 2.505-.951-5.236 3.851-3.662-5.314-.756z"
                             fill-rule="nonzero" />
                     </svg>
                 </li>
             </ul>
         </div>
         <div class="mb-12 md:mb-0">
             <div class="mb-6 flex justify-center">
                 <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(2).jpg"
                     class="w-32 rounded-full shadow-lg dark:shadow-black/30" />
             </div>
             <h5 class="mb-4 text-xl font-semibold">Lisa Cudrow</h5>
             <h6 class="mb-4 font-semibold text-primary dark:text-primary-400">
                Housewife
             </h6>
             <p class="mb-4 text-neutral-600 dark:text-neutral-300">
                 <span class="inline-block pe-2 [&>svg]:w-5"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                         viewBox="0 0 448 512">
                         <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                         <path
                             d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z" />
                     </svg>
                 </span>
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error
                 amet numquam iure provident voluptate esse quasi, veritatis totam
                 voluptas nostrum quisquam eum porro a pariatur veniam.
             </p>
             <ul class="mb-0 flex items-center justify-center">
                 <li>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                         class="h-5 w-5 text-yellow-500">
                         <path fill-rule="evenodd"
                             d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                             clip-rule="evenodd" />
                     </svg>
                 </li>
                 <li>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                         class="h-5 w-5 text-yellow-500">
                         <path fill-rule="evenodd"
                             d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                             clip-rule="evenodd" />
                     </svg>
                 </li>
                 <li>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                         class="h-5 w-5 text-yellow-500">
                         <path fill-rule="evenodd"
                             d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                             clip-rule="evenodd" />
                     </svg>
                 </li>
                 <li>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                         class="h-5 w-5 text-yellow-500">
                         <path fill-rule="evenodd"
                             d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                             clip-rule="evenodd" />
                     </svg>
                 </li>
                 <li>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                         class="h-5 w-5 text-yellow-500">
                         <path fill-rule="evenodd"
                             d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                             clip-rule="evenodd" />
                     </svg>
                 </li>
             </ul>
         </div>
         <div class="mb-0">
             <div class="mb-6 flex justify-center">
                 <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(9).jpg"
                     class="w-32 rounded-full shadow-lg dark:shadow-black/30" />
             </div>
             <h5 class="mb-4 text-xl font-semibold">John Smith</h5>
             <h6 class="mb-4 font-semibold text-primary dark:text-primary-400">
                Eployee
             </h6>
             <p class="mb-4 text-neutral-600 dark:text-neutral-300">
                 <span class="inline-block pe-2 [&>svg]:w-5"><svg xmlns="http://www.w3.org/2000/svg"
                         fill="currentColor" viewBox="0 0 448 512">
                         <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                         <path
                             d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z" />
                     </svg>
                 </span>
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error
                 amet numquam iure provident voluptate esse quasi, veritatis totam
                 voluptas nostrum quisquam eum porro a pariatur veniam.
             </p>
             <ul class="mb-0 flex items-center justify-center">
                 <li>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                         class="h-5 w-5 text-yellow-500">
                         <path fill-rule="evenodd"
                             d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                             clip-rule="evenodd" />
                     </svg>
                 </li>
                 <li>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                         class="h-5 w-5 text-yellow-500">
                         <path fill-rule="evenodd"
                             d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                             clip-rule="evenodd" />
                     </svg>
                 </li>
                 <li>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                         class="h-5 w-5 text-yellow-500">
                         <path fill-rule="evenodd"
                             d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                             clip-rule="evenodd" />
                     </svg>
                 </li>
                 <li>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                         class="h-5 w-5 text-yellow-500">
                         <path fill-rule="evenodd"
                             d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                             clip-rule="evenodd" />
                     </svg>
                 </li>
                 <li>
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="h-5 w-5 text-yellow-500"
                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                         <path stroke-linecap="round" stroke-linejoin="round"
                             d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                     </svg>
                 </li>
             </ul>
         </div>
     </div>










     
     <section class="bg-white dark:bg-gray-900 py-20 font-poppins relative"
         style="font-family: 'Poppins', sans-serif;">
         <div class="absolute top-0 left-0 z-10 w-full h-auto ">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1504 131.3" class="transform scale-y-[1]">
                 <path d="M0,0 Q752,131.3 1504,0" fill="#F2F2F2" />
             </svg>
         </div>
         <div class="py-24 px-8 max-w-5xl mx-auto flex flex-col md:flex-row gap-12">
             <div class="flex flex-col text-left basis-1/2">
                 <p class="inline-block font-semibold text-primary mb-4">Insurance FAQ</p>
                 <p class="sm:text-4xl text-3xl font-extrabold text-base-content">Frequently Asked Questions</p>
             </div>
             <ul class="basis-1/2">
                 <li>
                     <button
                         class="relative group flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10 focus:outline-none"
                         aria-expanded="false" onclick="toggleFAQ(this); arrowTwist('arrow3');">
                         <span class="flex-1 text-base-content">How secure is my insurance information?</span>
                         <span id="arrow3" class="transition-all">
                             <!-- Chevron Down Icon -->
                             <svg class="w-5 h-5 text-red-300" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                     d="M19 9l-7 7-7-7"></path>
                             </svg>
                         </span>
                     </button>
                     <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden"
                         style="transition: max-height 0.3s ease-in-out 0s;">
                         <div class="pb-5 leading-relaxed">
                             <div class="space-y-2 leading-relaxed">We prioritize the security of your insurance
                                 information. We use advanced encryption and strict data protection measures to ensure
                                 your data is safe and confidential.</div>
                         </div>
                     </div>
                 </li>
                 <li>
                     <button
                         class="relative group flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10 focus:outline-none"
                         aria-expanded="false" onclick="toggleFAQ(this); arrowTwist('arrow2');">
                         <span class="flex-1 text-base-content">How secure is my insurance information?</span>
                         <span id="arrow2" class="transition-all ">
                             <!-- Chevron Down Icon -->
                             <svg class="w-5 h-5 text-red-300" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                     d="M19 9l-7 7-7-7"></path>
                             </svg>
                         </span>
                     </button>
                     <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden"
                         style="transition: max-height 0.3s ease-in-out 0s;">
                         <div class="pb-5 leading-relaxed">
                             <div class="space-y-2 leading-relaxed">We prioritize the security of your insurance
                                 information. We use advanced encryption and strict data protection measures to ensure
                                 your data is safe and confidential.</div>
                         </div>
                     </div>
                 </li>
                 <li>
                     <button
                         class="relative group flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10 focus:outline-none"
                         aria-expanded="false" onclick="toggleFAQ(this); arrowTwist('arrow1');">
                         <span class="flex-1 text-base-content">How secure is my insurance information?</span>
                         <span id="arrow1" class="transition-all">
                             <!-- Chevron Down Icon -->
                             <svg class="w-5 h-5 text-red-300" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                     d="M19 9l-7 7-7-7"></path>
                             </svg>
                         </span>
                     </button>
                     <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden"
                         style="transition: max-height 0.3s ease-in-out 0s;">
                         <div class="pb-5 leading-relaxed">
                             <div class="space-y-2 leading-relaxed">We prioritize the security of your insurance
                                 information. We use advanced encryption and strict data protection measures to ensure
                                 your data is safe and confidential.</div>
                         </div>
                     </div>
                 </li>

             </ul>
         </div>
         <div class="absolute bottom-0 left-0 z-10 w-full h-auto -mb-0.5">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1504 131.3" class="transform scale-y-[-1]">
                 <path d="M0,0 Q752,131.3 1504,0" fill="#F2F2F2" />
             </svg>
         </div>

     </section>


     <script>
         function toggleFAQ(button) {
             const content = button.nextElementSibling;
             button.setAttribute("aria-expanded", button.getAttribute("aria-expanded") === "false" ? "true" : "false");
             content.style.maxHeight = button.getAttribute("aria-expanded") === "true" ? content.scrollHeight + "px" : "0";
         }

         function arrowTwist(arrow) {
             document.getElementById(arrow).classList.toggle('rotate-180');
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
<?php /**PATH C:\laragon\www\Cuisenio\resources\views/visitor/aboutUs.blade.php ENDPATH**/ ?>