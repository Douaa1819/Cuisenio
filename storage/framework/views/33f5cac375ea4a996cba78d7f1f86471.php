<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex flex-col justify-center items-center">
        <div class="w-full max-w-md p-8 space-y-8 bg-white rounded-lg shadow-xl">
            <div class="text-center">
                <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Company Logo" class="mx-auto w-32 mb-4">
                <h2 class="mt-2 text-3xl font-bold text-black">
                    Reset Your Password
                </h2>
                <p class="mt-1 text-sm text-gray-700">
                    We'll send you a link to reset your password.
                </p>
            </div>
            
            <form class="space-y-6" action="<?php echo e(route('post.forget')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email Address</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0 0 16 4H4a2 2 0 0 0-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8.118z" />
                            </svg>
                        </div>
                        <input type="email" name="email" id="email" class="appearance-none block w-full pl-10 pr-3 py-2 border  rounded-md shadow-sm placeholder-gray-400  focus:outline-none focus:ring-2 focus:border-none  text-gray-900 sm:text-sm" placeholder="name@example.com" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email address">
                    </div>
                    
                <button type="submit" class="w-full mt-4 flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-black hover:bg-red-400 hover:text-black focus:outline-none focus:ring-2 focus:ring-offset-4 focus:ring-red-500">
                    Send Reset Link
                </button>
            </form>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\Cuisenio\resources\views\auth\forgetPasswordGetEmail.blade.php ENDPATH**/ ?>