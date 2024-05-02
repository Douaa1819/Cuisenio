<?php if($paginator->hasPages()): ?>
    <nav role="navigation" aria-label="<?php echo e(__('Pagination Navigation')); ?>" class="flex justify-center mt-6">
        <div class="flex rounded-md">
            
            <?php if($paginator->onFirstPage()): ?>
                <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-l-md">
                    <i class="fas fa-chevron-left"></i>
                </span>
            <?php else: ?>
                <a href="<?php echo e($paginator->previousPageUrl()); ?>" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-l-md hover:bg-black hover:text-white focus:outline-none focus:ring ring-gray-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    <i class="fas fa-chevron-left"></i>
                </a>
            <?php endif; ?>


            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                <?php if(is_string($element)): ?>
                    <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white cursor-default leading-5 text-gray-700">
                        <?php echo e($element); ?>

                    </span>
                <?php endif; ?>


                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                            <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-red-300 text-white text-sm font-medium">
                                <?php echo e($page); ?>

                            </span>
                        <?php else: ?>
                            <a href="<?php echo e($url); ?>" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-black hover:text-white transition ease-in-out duration-150">
                                <?php echo e($page); ?>

                            </a>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            <?php if($paginator->hasMorePages()): ?>
                <a href="<?php echo e($paginator->nextPageUrl()); ?>" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-r-md hover:bg-black hover:text-white focus:outline-none focus:ring ring-gray-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    <i class="fas fa-chevron-right"></i>
                </a>
            <?php else: ?>
                <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-r-md">
                    <i class="fas fa-chevron-right"></i>
                </span>
            <?php endif; ?>
        </div>
    </nav>
<?php endif; ?>
<?php /**PATH C:\laragon\www\Cuisenio\resources\views\vendor\pagination\tailwind.blade.php ENDPATH**/ ?>