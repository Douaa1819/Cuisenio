<x-head></x-head>
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
                <img src="{{ asset('images/logo.png') }}" alt="Company Logo" class="mx-auto w-32 mb-4">
                <h2 class="mt-2 text-3xl font-bold text-black">
                    Create New Password
                </h2>
                <p class="mt-1 text-sm text-gray-700">
                    Enter your new password below.
                </p>
            </div>
            
            <form class="space-y-6" action="{{ route('NewPassword') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="email" name="email" id="email" class="appearance-none block w-full pl-10 pr-3 py-2 border  rounded-md shadow-sm placeholder-gray-400  focus:outline-none focus:ring-2 focus:border-none  text-gray-900 sm:text-sm" placeholder="name@example.com" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email address">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">New Password</label>
                    <input type="password" name="password" id="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        required>
                </div>

                <div>
                    <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900">Confirm New Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        required>
                </div>
                
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-black hover:bg-red-400 hover:text-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                    Set New Password
                </button>
            </form>
        </div>
    </div>
</body>
</html>
