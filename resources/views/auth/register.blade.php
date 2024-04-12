<x-head></x-head>
<div class="flex justify-center items-center min-h-screen bg-gray-100 px-4">
  <div class="max-w-4xl w-full bg-white shadow-xl rounded-lg overflow-hidden md:flex">
    <div class="w-full md:w-1/2 p-8">
      <h1 class="text-4xl font-bold  flex justify-center text-red-500 mb-6">Create Account</h1>
      <div class="flex items-center justify-center w-full border-t border-gray-300 mt-6 pt-6 mb-6">
        <a href="/auth/google/redirect" class="flex items-center justify-center px-4 py-2 w-full md:w-3/4 border border-gray-300 rounded-lg text-gray-700 hover:border-gray-400 hover:shadow-md transition duration-150 ease-in-out">
          <img class="w-6 h-6 mr-2" src="https://www.svgrepo.com/show/355037/google.svg" alt="Google logo">
          Continue with Google
        </a>
      </div>
      <p class="text-center text-gray-500 mb-6">or use your email for registration</p>
      <!-- Form -->
      <form  action="{{route('register-user')}}" class="space-y-4 "   method="POST">
        @if(Session::has('success'))
        <div class="text-green-400">{{Session::get('success')}} </div>
      </div>
        @endif
        @if(Session::has('fail'))
        <div class="text-red-400">{{Session::get('fail')}} </div>
      </div>
        @endif
        @csrf
        <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
          <span class="px-3"><i class="far fa-user text-red-500 mr-2"></i></span>
      <input id="name" class="block mt-1 w-full flex-1 p-3 focus:outline-none" placeholder="Enter Full Name" type="text" name="name" value="{{ old('name') }}" />
 
  </div>
  @if ($errors->has('name'))
  <span class="text-red-500 text-sm">{{ $errors->first('name') }}</span>
@endif

  <!-- Email Field -->
  <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
      <span class="px-3"><i class="far fa-envelope text-red-500"></i></span>
      <input id="email" class="block mt-1 w-full flex-1 p-3 focus:outline-none" placeholder="Enter Email Address" type="email" name="email" value="{{ old('email') }}"  />
    
  </div>
  @if ($errors->has('email'))
  <span class="text-red-500  font-semibold text-sm">{{ $errors->first('email') }}</span>
@endif

  <!-- Password Field -->
  <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
      <span class="px-3"><i class="fas fa-lock text-red-500"></i></span>
      <input id="password" class="block mt-1 w-full flex-1 p-3 focus:outline-none" placeholder="Enter Password" type="password" name="password"  />
  </div>
  @if ($errors->has('password'))
  <span class="text-red-50 text-sm">{{ $errors->first('password') }}</span>
@endif

  <!-- Confirm Password Field -->
  {{-- <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
      <span class="px-3"><i class="fas fa-lock text-red-500"></i></span>
      <input id="password_confirmation" class="block mt-1 w-full flex-1 p-3 focus:outline-none" placeholder="Confirm Password" type="password" name="password_confirmation" required autocomplete="new-password" />
      @if ($errors->has('password_confirmation'))
          <span class="text-red-500 text-xs">{{ $errors->first('password_confirmation') }}</span>
      @endif
  </div> --}}
        <!-- Sign Up Button -->
        <button type="submit" class="mt-4 px-4 py-3 w-full bg-red-500 text-whi rounded-lg hover:bg-red-600 transition-colors duration-300 ease-in-out">Sign Up</button>
      </form>
      <p class="text-center mt-6 text-sm text-gray-600">Already have an account? <a href="#" class="text-red-500 hover:text-red-600">Sign In</a></p>
    </div>
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
