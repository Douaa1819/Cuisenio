
<div id="successAlert" class="bg-teal-50 border-t-2 hidden mb-5 border-teal-500 rounded-lg p-4 dark:bg-teal-800/30 transition-all duration-300" role="alert">
    <div class="flex">
        <div class="flex-shrink-0">
            <!-- Icon -->
            <span class="inline-flex justify-center items-center size-8 rounded-full border-4 border-teal-100 bg-teal-200 text-teal-800 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                    <path d="m9 12 2 2 4-4"></path>
                </svg>
            </span>
            <!-- End Icon -->
        </div>
        <div class="ms-3">
            <h3 id="alertTitle" class="text-gray-800 font-semibold dark:text-white">
                Successfully updated.
            </h3>
            <p id="alertMessage" class="text-sm text-gray-700 capitalize dark:text-neutral-400">
                Updated Successfully.
            </p>
        </div>
        <div class="ps-3 ms-auto">
            <div class="-mx-1.5 -my-1.5">
                <button onclick="SuccessAlertToggle();" type="button" class="inline-flex bg-teal-50 rounded-lg p-1.5 text-teal-500 hover:bg-teal-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-teal-50 focus:ring-teal-600 dark:bg-transparent dark:hover:bg-teal-800/50 dark:text-teal-600" data-hs-remove-element="#dismiss-alert">
                    <span class="sr-only">Dismiss</span>
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

