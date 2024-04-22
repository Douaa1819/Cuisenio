<x-head></x-head>
<section class="bg-gray-50 dark:bg-gray-900">
    @if (session('success'))

    <div class="bg-green-500 text-white flex items-center w-max max-w-sm px-4 py-4 rounded" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 shrink-0 fill-white inline mr-2" viewBox="0 0 512 512">
          <ellipse cx="256" cy="256" fill="#fff" data-original="#fff" rx="256" ry="255.832" />
          <path class="fill-green-500"
            d="m235.472 392.08-121.04-94.296 34.416-44.168 74.328 57.904 122.672-177.016 46.032 31.888z"
            data-original="#ffffff" />
        </svg>
        <span class="block sm:inline text-sm font-semibold mr-4">Update successfully</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 cursor-pointer shrink-0 fill-white ml-auto"
          viewBox="0 0 320.591 320.591">
          <path
            d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
            data-original="#000000" />
          <path
            d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
            data-original="#000000" />
        </svg>
      </div>
      @endif
    @if ($errors->any())
        <div class="bg-red-500 text-white flex items-center w-max max-w-sm px-4 py-4 rounded" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 shrink-0 fill-white inline mr-2" viewBox="0 0 32 32">
                <path
                    d="M16 1a15 15 0 1 0 15 15A15 15 0 0 0 16 1zm6.36 20L21 22.36l-5-4.95-4.95 4.95L9.64 21l4.95-5-4.95-4.95 1.41-1.41L16 14.59l5-4.95 1.41 1.41-5 4.95z"
           kdjind         data-original="#ea2d3f" />
            </svg>
            <span class="block sm:inline text-sm font-semibold mr-4">Something went wrong</span>o
            
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 cursor-pointer shrink-0 fill-white ml-auto"
                viewBox="0 0 320.591 320.591">
                <path
                    d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                    data-original="#000000" />
                <path
                    d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                    data-original="#000000" />
            </svg>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <img class="w-36 mr-2" src="{{ asset('images/logo.png') }}" alt="logo">   
        </a>
        <h2 class="mb-4 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-xl dark:text-white">
            We Will  send a  Link to your email ,use that link to reset password
         </h2>
        <div class="w-full p-6 bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md dark:bg-gray-800 dark:border-gray-700 sm:p-8">
            
            <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5" action= "{{ route('post.forget') }}"method="POST">
                @csrf
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email adress</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-300 dark:focus:border-red-300" placeholder="email@gmail.com" required="">
                </div>

                <button type="submit" class="w-full text-black bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send</button>
            </form>
        </div>
    </div>
  </section>