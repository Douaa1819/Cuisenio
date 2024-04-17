<x-head></x-head>
<div class="flex justify-center items-center min-h-screen bg-gradient-to-r from-gray-100 to-gray-200 px-4">
  <div class="max-w-4xl w-full bg-white shadow-2xl rounded-xl overflow-hidden md:flex">
    <div class="w-full md:w-1/2 p-10">
      <h1 class="text-4xl font-bold flex justify-center text-red-500 mb-8">Create Account</h1>
      <div class="flex items-center justify-center w-full border-t border-gray-300 mt-6 pt-6 mb-8">
        <a href="/auth/google/redirect" class="flex items-center justify-center px-4 py-3 w-full md:w-3/4 bg-white border border-gray-300 rounded-full shadow-sm text-gray-700 hover:border-gray-400 hover:shadow-lg transition duration-300 ease-in-out">
          <img class="w-6 h-6 mr-3" src="https://www.svgrepo.com/show/355037/google.svg" alt="Google logo">
          Continue with Google
        </a>
      </div>
      <p class="text-center text-gray-600 mb-8">or use your email for registration</p>
      <!-- Form -->
      <form action="{{route('register-user')}}" method="POST" class="space-y-6">
        @csrf
        <div class="flex items-center bg-gray-100 rounded-full overflow-hidden shadow-inner">
          <span class="px-4"><i class="far fa-user text-red-500 mr-2"></i></span>
          <input id="name" class="block w-full py-3 pl-2 bg-transparent focus:outline-none" placeholder="Enter Full Name" type="text" name="name" required value="{{ old('name') }}" />
        </div>
        <div class="flex items-center bg-gray-100 rounded-full overflow-hidden shadow-inner">
          <span class="px-4"><i class="far fa-envelope text-red-500"></i></span>
          <input id="email" class="block w-full py-3 pl-2 bg-transparent focus:outline-none" placeholder="Enter Email Address" type="email" name="email" required value="{{ old('email') }}" />
        </div>
        <div class="flex items-center bg-gray-100 rounded-full overflow-hidden shadow-inner">
          <span class="px-4"><i class="fas fa-lock text-red-500"></i></span>
          <input id="password" class="block w-full py-3 pl-2 bg-transparent focus:outline-none" placeholder="Enter Password" type="password" name="password" required />
        </div>
        <button type="submit" class="mt-6 px-6 py-3 w-full bg-red-500 text-white rounded-full hover:bg-red-600 transition-colors duration-300 ease-in-out">Sign Up</button>
      </form>
      <p class="text-center mt-8 text-sm text-gray-600">Already have an account? <a href="#" class="text-red-500 hover:text-red-600">Sign In</a></p>
    </div>
    <div class="hidden md:block md:w-1/2 bg-cover bg-center" style="background-image: url('https://cdn.builder.io/api/v1/image/assets/TEMP/2daca9a5408ef5497ad2bffbe868caae6719cb587ca60750a67d8a92226ef815');">
      <div class="flex flex-col justify-center h-full p-10 bg-black bg-opacity-60">
        <div>
          <h2 class="text-4xl font-bold text-white text-center">Join Us Now!</h2>
          <p class="text-lg text-white mt-4 text-center">Discover a world of culinary delights.</p>
        </div>
      </div>
    </div>
  </div>
</div>
