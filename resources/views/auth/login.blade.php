<x-head></x-head>
<div class="flex justify-center items-center min-h-screen bg-gradient-to-r from-gray-200 to-gray-300 px-5">
  <div class="max-w-4xl w-full bg-white shadow-2xl rounded-xl overflow-hidden">
    <div class="md:flex">
      <div class="hidden md:block md:w-1/2 bg-cover bg-center" style="background-image: url('https://cdn.builder.io/api/v1/image/assets/TEMP/2daca9a5408ef5497ad2bffbe868caae6719cb587ca60750a67d8a92226ef815');">
        <div class="flex flex-col h-full justify-center p-10 bg-black bg-opacity-60">
          <h2 class="text-4xl  ml-10  mb-72 text-white font-bold">Welcome Back!</h2>
      
          <div class="mt-16 flex-col items-center justify-center">
            <p class="text-xl text-white w-full  font-semibold text-center mt-4">Don't have an account?</p>
            <div class="w-full text-center mt-4 font-normal">
              <a href="#" class="mt-4 font-semibold text-red-400  hover:underline underline-offset-8  duration-300">Sign Up</a>

            </div>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2 p-8 md:p-12">
        <h1 class="text-4xl text-red-500 font-bold mb-8">Sign in to Cuisénio</h1>
        <div class="flex items-center justify-center w-full border-t mt-6 pt-6 pb-4">
          <a href="/auth/google/redirect" class="px-4 py-2 w-full md:w-3/4 border flex justify-center gap-2 border-gray-300 rounded-full text-gray-900 hover:border-gray-400 hover:shadow-md transition duration-150 ease-in-out">
              <img class="w-6 h-6 mr-3" src="https://www.svgrepo.com/show/475656/google-color.svg" alt="google logo">
              Login with Google
          </a>
        </div>
        <p class="text-center my-8">or use your email account</p>
        <form action="{{route('login-user')}}" method="POST" class="space-y-6">
          @csrf
          <div class="flex items-center bg-gray-100 rounded-full overflow-hidden shadow-inner">
            <span class="px-4"><i class="far fa-envelope text-red-500"></i></span>
            <input id="email" class="block w-full py-3 pl-2 bg-transparent focus:outline-none" placeholder="Enter Email Address" type="email" name="email" required value="{{ old('email') }}" />
            <p id="emailFeedback" class="text-xs text-red-500 mt-1"></p>
          </div>
          <div class="flex items-center bg-gray-100 rounded-full overflow-hidden shadow-inner">
            <span class="px-4"><i class="fas fa-lock text-red-500"></i></span>
            <input id="password" class="block w-full  mb-5 py-3 pl-2 bg-transparent focus:outline-none" placeholder="Enter Password" type="password" name="password" required />
            <p id="passwordFeedback" class="text-xs text-red-500 mt-1"></p>
          </div>
          <a href="#" class="text-red-500 mt-4 hover:text-red-600 hover:underline">Forgot your password?</a>
          <button type="submit" class="mt-4 px-6 py-3 w-full bg-red-500 text-white rounded-full hover:bg-red-600 transition-colors duration-300">Sign In</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  document.getElementById('email').addEventListener('input', function() {
      validateInput(this, /^[^@\s]+@[^@\s]+\.[^@\s]+$/, 'emailFeedback');
  });
  document.getElementById('password').addEventListener('input', function() {
      validateInput(this, /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[\S]{8,}$/, 'passwordFeedback');
  });

  function validateInput(input, regex, feedbackId) {
      const feedbackElement = document.getElementById(feedbackId);
      if (regex.test(input.value)) {
          input.classList.remove('border-red-500', 'text-red-500');
          input.classList.add('border-green-500', 'text-green-500');
          feedbackElement.textContent = '';
      } else {
          input.classList.remove('border-green-500', 'text-green-500');
          input.classList.add('border-red-500', 'text-red-500');
          feedbackElement.textContent = 'Please enter a valid ' + input.placeholder.toLowerCase();
      }
  }
</script>