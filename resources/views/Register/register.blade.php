<x-head></x-head>
<div class="flex justify-center items-center min-h-screen bg-gray-100 px-4">
  <div class="max-w-4xl w-full bg-white shadow-xl rounded-lg overflow-hidden md:flex">
    <!-- Registration Form Section -->
    <div class="w-full md:w-1/2 p-8">
      <h1 class="text-4xl font-bold  flex justify-center text-red-500 mb-6">Create Account</h1>
      <!-- Social Login -->
      <div class="flex items-center justify-center w-full border-t border-gray-300 mt-6 pt-6 mb-6">
        <a href="/auth/google/redirect" class="flex items-center justify-center px-4 py-2 w-full md:w-3/4 border border-gray-300 rounded-lg text-gray-700 hover:border-gray-400 hover:shadow-md transition duration-150 ease-in-out">
          <img class="w-6 h-6 mr-2" src="https://www.svgrepo.com/show/355037/google.svg" alt="Google logo">
          Continue with Google
        </a>
      </div>
      <p class="text-center text-gray-500 mb-6">or use your email for registration</p>
      <!-- Form -->
      <form class="space-y-4">
        <!-- Name -->
        <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
          <span class="px-3"><i class="far fa-user text-red-500 mr-2"></i></span>
          <input type="text" id="name" name="name" placeholder=" Full Name" class="flex-1 p-3 focus:outline-none" />
        </div>
        <!-- Email -->
        <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
          <span class="px-3"><i class="far fa-envelope text-red-500 mr-2"></i></span>
          <input type="email" id="email" name="email" placeholder="Email" class="flex-1 p-3 focus:outline-none" />
        </div>
        <!-- Password -->
        <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
          <span class="px-3 "><i class="fas fa-lock text-red-500 mr-2"></i></span>
          <input type="password" id="password" name="password" placeholder="Password" class="flex-1 p-3 focus:outline-none" />
        </div>
        <!-- Confirm Password -->
        <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
          <span class="px-3"><i class="fas fa-lock text-red-500 mr-2"></i></span>
          <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" class="flex-1 p-3 focus:outline-none" />
        </div>
        <!-- Sign Up Button -->
        <button type="submit" class="mt-4 px-4 py-3 w-full bg-red-500 text-white font-semibold rounded-lg hover:bg-red-600 transition-colors duration-300 ease-in-out">Sign Up</button>
      </form>
      <p class="text-center mt-6 text-sm text-gray-600">Already have an account? <a href="#" class="text-red-500 hover:text-red-600">Sign In</a></p>
    </div>
    <!-- Side Image Section -->
    <div class="hidden md:block md:w-1/2" style="background-image: url('https://cdn.builder.io/api/v1/image/assets/TEMP/2daca9a5408ef5497ad2bffbe868caae6719cb587ca60750a67d8a92226ef815?apiKey=93bb9bcd81d443648999334442ead41e&'); background-size: cover; background-position: center;">
      <div class="flex flex-col justify-between h-full p-10 bg-black bg-opacity-50">
        <div>
          <div class="text-center">
            <h2 class="text-4xl font-bold text-white">Join Us Now!</h2>
            <p class="text-lg text-white mt-4">Discover a world of culinary delights.</p>
          </div>
     
    </div>
  </div>
</div>
