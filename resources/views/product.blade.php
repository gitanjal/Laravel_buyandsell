<x-base-layout>
    <!-- Main Content -->
    <div class="flex m-4">
      <!-- Left half -->
      <div class="w-1/2 rounded shadow overflow-hidden">
        <img class="object-cover w-full" src="{{asset($product->image_url)}}"/>
      </div>

      <!-- Right half -->
      <div class="w-1/2 rounded bg-white ml-2 p-4 shadow relative">
        <div class="font-semibold">{{$product->title}}</div>
        <div class="text-sm text-gray-500">{{$product->short_desc}}</div>
        <div class="text-xs text-gray-500 mt-2">{{$product->long_desc}}</div>

        <!-- Seller information -->
        <!--
        ***ASSIGNMENT***
        Task 2: Display the name of seller below.
        -->
        <div class="mt-4">
          <div class="text-xs font-semibold text-gray">Sold by:</div>
          <div class="text-sm  text-gray-500"> Name ??? </div>
        </div>
        <div class="mt-2">
          <div class="text-xs font-semibold text-gray">Phone number:</div>
          @auth
              <div class="text-sm  text-gray-500">{{$product->user->phone}}</div>
          @else
              <div class="text-sm  text-gray-500">**********<a href="/login" class="text-xs text-blue-500">Login to view</a></div>
          @endauth
        </div>
        <div class="mt-2">
          <div class="text-xs font-semibold text-gray">Email address:</div>
          @auth
              <div class="text-sm  text-gray-500">{{$product->user->email}}</div>
          @else
              <div class="text-sm  text-gray-500">**********<a href="/login" class="text-xs text-blue-500">Login to view</a></div>
          @endauth
        </div>

        <!-- Product price -->
        <div class="absolute bottom-0 right-0 m-6 rounded-full px-4 py-2 bg-green-500">
          <div class="text-white font-bold text-sm">${{$product->price}}</div>
        </div>
      </div>
    </div>

</x-base-layout>
