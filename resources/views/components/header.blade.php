<header x-data="{ open: false }">
    <nav class="flex justify-between items-center px-12 py-5 bg-opacity-90 bg-[#2C3152] sticky top-0 z-50">

        <div class="flex items-center gap-3 text-xl font-bold text-white">
        <span>✈️</span> FlyAir
      </div>

      <div class="lg:hidden">
        <button @click="open = !open" class="text-white focus:outline-none">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"/>
            <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>

      <ul class="hidden lg:flex gap-6">
        <li><a href="#" class="hover:text-[#FFA500] font-semibold text-white">Home</a></li>
        <li><a href="#" class="hover:text-[#FFA500] font-semibold text-white">Destinations</a></li>
        <li><a href="#" class="hover:text-[#FFA500] font-semibold text-white">Deals</a></li>
        <li><a href="#" class="hover:text-[#FFA500] font-semibold text-white">Support</a></li>
      </ul>
      <div class="hidden lg:flex gap-4">
        <button class="px-6 py-2 border border-white text-white rounded-lg hover:bg-white hover:bg-opacity-10">Sign In</button>
        <button class="px-6 py-2 bg-[#FFA500] text-black rounded-lg hover:bg-[#e69500]">Register</button>
      </div>
    </nav>


    <div x-show="open" class="lg:hidden bg-[#2C3152] text-white">
      <ul class="flex flex-col gap-4 p-4">
        <li><a href="#" class="hover:text-[#FFA500] font-semibold">Home</a></li>
        <li><a href="#" class="hover:text-[#FFA500] font-semibold">Destinations</a></li>
        <li><a href="#" class="hover:text-[#FFA500] font-semibold">Deals</a></li>
        <li><a href="#" class="hover:text-[#FFA500] font-semibold">Support</a></li>
      </ul>
      <div class="flex flex-col gap-4 p-4 border-t border-gray-700">
        <button class="px-6 py-2 border border-white text-white rounded-lg hover:bg-white hover:bg-opacity-10">Sign In</button>
        <button class="px-6 py-2 bg-[#FFA500] text-black rounded-lg hover:bg-[#e69500]">Register</button>
      </div>
    </div>
  </header>