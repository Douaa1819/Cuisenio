<?php if(session('success')): ?>
<div id="success-message"
    class="bg-green-100 text-green-800 px-4 py-4 rounded fixed right-24 w-[50%]  top-50 z-50 text-sm sm:inline-block max-sm:block"
    role="alert">
    <strong class="font-bold text-base mr-4">Succès!</strong>
    <span class="block text-sm sm:inline max-sm:mt-1"><?php echo e(session('success')); ?></span>
</div>
<script>
    setTimeout(function() {
        document.getElementById('success-message').style.display = 'none';
    }, 3000);
</script>
<?php endif; ?>


<?php if($errors->any()): ?>
<div class="bg-red-100 text-red-800 px-4 py-4 rounded fixed right-24 w-[30%] top-50 z-50 text-sm sm:inline-block max-sm:block"
    role="alert">
    <strong class="font-bold text-base mr-4">Something went wrong!</strong>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <span class="block text-sm sm:inline max-sm:mt-1"><?php echo e($error); ?></span><br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<script>
    setTimeout(function() {
        document.getElementById('error-message').style.display = 'none';
    }, 2000);
</script>
<?php endif; ?><?php /**PATH C:\laragon\www\Cuisenio\resources\views\components\flash.blade.php ENDPATH**/ ?>