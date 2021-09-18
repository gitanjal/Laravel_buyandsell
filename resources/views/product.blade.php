<!-- ASSIGNMENT -->
<!-- Task 1: Currently the header and the footer are missing from the product details page,
      are the component tags missing?-->


<!-- <x-base-layout> -->
    <!-- Main Content -->
    <div class="flex m-4">
      <!-- Left half -->
      <div class="w-1/2 rounded shadow overflow-hidden">
        <img class="object-cover w-full" src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"/>
      </div>

      <!-- Right half -->
      <div class="w-1/2 rounded bg-white ml-2 p-4 shadow relative">
        <div class="font-semibold">Headphone</div>
        <div class="text-sm text-gray-500">Excellent quality headphones at a low cost</div>
        <div class="text-xs text-gray-500 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>

        <!-- Seller information -->
        <div class="mt-4">
          <div class="text-xs font-semibold text-gray">Sold by:</div>
          <div class="text-sm  text-gray-500">John Doe</div>
        </div>
        <div class="mt-2">
          <div class="text-xs font-semibold text-gray">Phone number:</div>
          @auth
              <div class="text-sm  text-gray-500">0123456789</div>
          @else
              <div class="text-sm  text-gray-500">**********<a href="/login" class="text-xs text-blue-500">Login to view</a></div>
          @endauth
        </div>
        <div class="mt-2">
          <div class="text-xs font-semibold text-gray">Email address:</div>
          @auth
              <div class="text-sm  text-gray-500">abc@example.com</div>
          @else
              <div class="text-sm  text-gray-500">**********<a href="/login" class="text-xs text-blue-500">Login to view</a></div>
          @endauth
        </div>

        <!-- Product price -->
        <div class="absolute bottom-0 right-0 m-6 rounded-full px-4 py-2 bg-green-500">
          <div class="text-white font-bold text-sm">$20</div>
        </div>
      </div>
    </div>

<!-- </x-base-layout>   -->
