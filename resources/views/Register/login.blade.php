<x-head></x-head>
<div class="flex justify-center items-center min-h-screen bg-white px-5">
  <div class="max-w-4xl w-full bg-white shadow-lg rounded-xl overflow-hidden">
    <div class="md:flex">
      <div class="w-full md:w-1/2 bg-cover bg-no-repeat bg-center" style="background-image: url('https://cdn.builder.io/api/v1/image/assets/TEMP/2daca9a5408ef5497ad2bffbe868caae6719cb587ca60750a67d8a92226ef815?apiKey=93bb9bcd81d443648999334442ead41e&');">
        <div class="flex flex-col h-full justify-between p-10 bg-black bg-opacity-40">
          <div>
            <h2 class="text-4xl text-white font-bold">Welcome Back!</h2>
          </div>
          <p class="text-xl text-white">Don't have an account?</p>
          <button type="submit"  class="mt-4 px- py-3">
          <a href="#" class="mt-4 px-4 py-3 bg-red-500 text-white rounded hover:bg-red-400 transition-colors duration-300">Sign Up</a>
        </button>
        </div>

        
      </form>
      </div>
      <div class="w-full md:w-1/2 p-8 md:p-12">
        <h1 class="text-4xl text-red-500 font-bold mb-8">Sign in to Cuisénio</h1>
        <div class="flex items-center justify-center w-full border-t mt-7 pt-7 pb-4">
          <a href="/auth/google/redirect" class="px-4 py-2 w-80 border flex justify-center gap-2 border-slate-200 dark:border-slate-700 rounded-lg text-slate-900 dark:text-slate-200 hover:border-slate-400 dark:hover:border-rose-500 hover:text-slate-900 dark:hover:text-slate-300 hover:shadow transition duration-150">
              <img class="w-6 h-6" src="https://www.svgrepo.com/show/475656/google-color.svg" loading="lazy" alt="google logo">
              <span>Login with Google</span>
          </a>
      </div>
        <p class="text-center my-8">or use your email account</p>
        <form class="space-y-6">
          <div class="flex items-center border bg-custom-color border-red-300 rounded px-3 py-2">
            <i class="fas fa-envelope text-red-500 mr-2"></i>
            <input type="email" id="email" name="email" placeholder="Email" class="flex-1 px-3 py-2 focus:outline-none" />
          </div>
            <div class="flex items-center border border-red-300 rounded px-3 py-2">
              <!-- Replace image with Font Awesome icon for password -->
              <i class="fas fa-lock text-red-500 mr-2"></i>
            <input type="password" id="password" name="password" placeholder="Password" class="flex-1 px-3 py-2 focus:outline-none" />
          </div>
          <a href="#" class="text-red-500 hover:underline">Forgot your password?</a>
          <button type="submit" class="mt-4 px-6 py-3 w-full bg-red-500 text-white rounded hover:bg-red-600 transition-colors duration-300">Sign In</button>
        </form>
      </div>
    </div>
  </div>
</div>
