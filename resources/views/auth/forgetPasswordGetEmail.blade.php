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
                <img src="{{ asset('images/logo.png') }}" alt="Company Logo" class="mx-auto w-32 mb-4">
                <h2 class="mt-2 text-3xl font-bold text-black">
                    Reset Your Password
                </h2>
                <p class="mt-1 text-sm text-gray-700">
                    We'll send you a link to reset your password.
                </p>
            </div>
            
            <form class="space-y-6" action="{{ route('post.forget') }}" method="POST">
                @csrf
                @if (session('success'))
            <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-24 max-w-7xl">
                <div class="p-6 border-l-4 border-green-500 -6 rounded-r-xl bg-green-50">
                  <div class="flex">
                    <div class="flex-shrink-0">
                      <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                      </svg>
                    </div>
                    <div class="ml-3">
                      <div class="text-sm text-green-600">
                        <p>Success! Your changes have been saved. 😍</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
                </div>
            @endif
            @if ($errors->any())
            <div
            class="flex bg-white dark:bg-gray-900 items-center px-6 py-4 text-sm border-t-2 rounded-b shadow-sm border-red-500">
            <svg viewBox="0 0 24 24" class="w-8 h-8 text-red-500 stroke-current" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 8V12V8ZM12 16H12.01H12ZM21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <div class="ml-3">
                <div class="font-bold text-left text-black dark:text-gray-50">Error</div>
                <div class="w-full text-gray-900 dark:text-gray-300 mt-1">You don&#x27;    There was an error processing your request.</div>
            </div>
        </div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email Address</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0 0 16 4H4a2 2 0 0 0-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8.118z" />
                            </svg>
                        </div>
                        <input type="email" name="email" id="email" class="appearance-none block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-400 focus:border-red-400 text-gray-900 sm:text-sm" placeholder="name@example.com" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email address">
                    </div>
                    
                <button type="submit" class="w-full mt-4 flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-black hover:bg-red-400 hover:text-black focus:outline-none focus:ring-2 focus:ring-offset-4 focus:ring-red-500">
                    Send Reset Link
                </button>
            </form>
        </div>
    </div>
</body>
</html>
