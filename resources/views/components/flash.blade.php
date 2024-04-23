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
          @endif