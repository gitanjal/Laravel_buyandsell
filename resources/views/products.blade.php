<x-base-layout>
    <!-- Main Content -->
    <div class="grid grid-cols-4 gap-4 p-4">
      @foreach($products as $p)
        <a href="/product/{{$p->id}}">
          <div class="bg-white rounded shadow overflow-hidden">
            <img src="{{$p->image_url}}"/>
            <div class="p-4">
              <div class="text-sm font-semibold">{{$p->title}}</div>
              <div class="text-xs text-gray-500">{{$p->short_desc}}</div>
            </div>
            <div class="border-t px-4 py-2 font-bold text-sm">${{$p->price}}</div>
          </div>
        </a>
      @endforeach
    </div>
</x-base-layout>
