<x-main-layout>
    <section class="flex justify-center items-center py-10" style="background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ), url('{{ asset('images/newsletter1.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
      <div class="flex gap-5 justify-between items-start w-full max-md:flex-wrap max-md:mt-10 max-md:max-w-full">
        <a href="{{ route('home') }}">
          <i class="fa-solid fa-arrow-left fa-xl ml-10"></i>
        </a>
        <div class="flex flex-col self-end mt-6 w-7/12">
          <a href="#" class="self-center rounded-full w-[139px] relative">
            <img src="https://i.pravatar.cc/300" alt="User avatar" class="" />
            <div class="bg-[#000AFF] px-2 py-1 rounded-full absolute bottom-1 right-3">
              <i class="fa-regular fa-pen-to-square text-white"></i>
            </div>
          </a>
          <div class="flex flex-col justify-between self-center px-3 mt-3.5 max-w-full w-[139px]">
            <h2 class="text-xl font-semibold tracking-normal text-stone-800">GFXAgency</h2>
            <p class="self-center mt-2 text-sm tracking-normal text-neutral-400">UI UX DESIGN</p>
          </div>
          <label for="username" class="mt-5 mb-3 text-sm font-semibold text-stone-800 max-md:max-w-full">Your Email</label>
          <div class="relative mx-auto w-full ">
            <input class="flex gap-3 pl-12 py-4 w-full bg-transparent focus:outline-none text-sm font-medium rounded-xl border border-zinc-100 text-neutral-400" placeholder="email@gmail.com">
            <i class="fa-regular fa-envelope absolute left-3.5 top-7 fa-lg text-neutral-400"></i>
          </div>
          <label for="" class="mt-5 mb-3 text-sm font-semibold text-stone-800 max-md:max-w-full">Username</label>
          <div class="relative mx-auto w-full ">
            <input class="flex gap-3 pl-12 py-4 w-full bg-transparent focus:outline-none text-sm font-medium rounded-xl border border-zinc-100 text-neutral-400" placeholder="Username">
            <i class="fa-solid fa-at absolute left-3.5 top-7 fa-lg text-neutral-400"></i>
          </div>
          <label for="" class="mt-5 mb-3 text-sm font-semibold text-stone-800 max-md:max-w-full">Username</label>
          <div class="relative mx-auto w-full ">
            <input class="flex gap-3 pl-12 py-4 w-full bg-transparent focus:outline-none text-sm font-medium rounded-xl border border-zinc-100 text-neutral-400" placeholder="Username">
            <i class="fa-solid fa-at absolute left-3.5 top-7 fa-lg text-neutral-400"></i>
          </div>
          <label for="username" class="mt-5 mb-3 text-sm font-semibold text-stone-800 max-md:max-w-full">Password</label>
          <div class="relative mx-auto w-full ">
            <input type="password" class="flex gap-3 pl-12 py-4 w-full bg-transparent focus:outline-none text-sm font-medium rounded-xl border border-zinc-100 text-neutral-400" placeholder="Your Password">
            <i class="fa-solid fa-lock absolute left-3.5 top-7 fa-lg text-neutral-400"></i>
          </div>
          <div class="flex gap-5 justify-around mt-11 text-base font-bold tracking-normal whitespace-nowrap max-md:flex-wrap max-md:mt-10 max-md:max-w-full">
            <a href="#" class="rounded-md w-2/6 text-center px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-white text-white hover:border-[#1C70EC] transition duration-300 ease">
              <span class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-[#1C70EC] top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
              <span class="relative text-white transition duration-300 ease">Modify</span>
            </a>
            <a href="#" class="rounded-md w-2/6 text-center px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-red-600 text-white">
              <span class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-red-600 top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
              <span class="relative text-red-600 transition duration-300 group-hover:text-white ease">Logout</span>
            </a>
          </div>
        </div>
        <a href="#">
          <i class="fa-solid fa-gear fa-xl mr-10"></i>
        </a>
      </div>
    </section>
  </x-main-layout>