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

<div class="flex justify-center items-center min-h-screen bg-gradient-to-r from-gray-200 to-gray-300 px-5">
  <div class="max-w-4xl w-full bg-white shadow-2xl rounded-xl overflow-hidden">
    <div class="md:flex">
      <div class="hidden md:block md:w-1/2 bg-cover bg-center" style="background-image: url('https://cdn.builder.io/api/v1/image/assets/TEMP/2daca9a5408ef5497ad2bffbe868caae6719cb587ca60750a67d8a92226ef815');">
        <div class="flex flex-col h-full justify-center p-10 bg-black bg-opacity-60">
          <h2 class="text-4xl  ml-10  mb-72 text-white font-bold">Welcome Back!</h2>
      
          <div class="mt-16 flex-col items-center justify-center">
            <p class="text-xl text-white w-full  font-semibold text-center mt-4">Don't have an account?</p>
            <div class="w-full text-center mt-4 font-normal">
              <a href="<?php echo e(route('register')); ?>" class="mt-4 font-semibold text-red-400  hover:underline underline-offset-8  duration-300">Sign Up</a>

            </div>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2 p-8 md:p-12">
        <h1 class="text-4xl text-red-500 font-bold mb-8">Sign in to Cuisénio</h1>
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
        <div class="flex items-center justify-center w-full border-t mt-6 pt-6 pb-4">
          <a href="/auth/google/redirect" class="px-4 py-2 w-full md:w-3/4 border flex justify-center gap-2 border-gray-300 rounded-full text-gray-900 hover:border-gray-400 hover:shadow-md transition duration-150 ease-in-out">
              <img class="w-6 h-6 mr-3" src="https://www.svgrepo.com/show/475656/google-color.svg" alt="google logo">
              Login with Google
          </a>
        </div>
        <p class="text-center my-8">or use your email account</p>
        <form  id="form" action="<?php echo e(route('login-user')); ?>" method="POST" class="space-y-6">
          <?php echo csrf_field(); ?>
          <div class="flex items-center bg-gray-100 rounded-full overflow-hidden shadow-inner">
            <span class="px-4"><i class="far fa-envelope text-red-500"></i></span>
            <input id="email" type="email" name="email" placeholder="Enter Email Address" required
                class="block w-full py-3 px-2 bg-transparent border-2rounded-full focus:outline-none ">
            <p id="emailFeedback" class="text-xs text-red-500 mt-1"></p>
        </div>
        <div class="flex items-center bg-gray-100 rounded-full overflow-hidden shadow-inner">
            <span class="px-4"><i class="fas fa-lock text-red-500"></i></span>
            <input id="password" type="password" name="password" placeholder="Create a password" required
                class="block w-full py-3 px-2 bg-transparent   rounded-full focus:outline-none ">
            <p id="passwordFeedback" class="text-xs text-red-500 mt-1"></p>
        </div>
          <a href="<?php echo e(route('forgetPassword')); ?>" class="text-red-500 mt-4 hover:text-red-600 hover:underline">Forgot your password?</a>
          <button type="submit" class="mt-4 px-6 py-3 w-full bg-red-500 text-white rounded-full hover:bg-red-600 transition-colors duration-300">Sign In</button>
        </form>
      </div>
    </div>
  </div>
</div>


</body>

</html>
<script src="<?php echo e(asset('js/rejexLogin.js')); ?>"></script>
  <?php /**PATH C:\laragon\www\Cuisenio\resources\views\auth\login.blade.php ENDPATH**/ ?>