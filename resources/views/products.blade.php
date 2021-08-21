<x-base-layout>
    <!-- Main Content -->
    <div class="grid grid-cols-4 gap-4 p-4">
      @for($i=0; $i<10; $i++)
        <a href="/product/1">
          <div class="bg-white rounded shadow overflow-hidden">
            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"/>
            <div class="p-4">
              <div class="text-sm font-semibold">Headphone</div>
              <div class="text-xs text-gray-500">Excellent quality headphones at a low cost</div>
            </div>
            <div class="border-t px-4 py-2 font-bold text-sm">$20</div>
          </div>
        </a>
      @endfor
    </div>
</x-base-layout>
