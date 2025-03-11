{{-- filepath: d:\Herd\car_rental\resources\views\components\aside\menu.blade.php --}}
@props(['routes_list', 'methods_list'])
<aside id="aside" class="h-full bg-slate-900 mx-8 absolute top-0 left-0 text-white">
  <div class="flex flex-col items-center justify-center">
    <nav class="">
      <ul class="overflow-y-auto">
        @foreach ($routes_list as $route)
          <li onclick="scrollOffset('{{ $route }}')"
            class="text-2xl cursor-pointer hover:underline text-sky-200
          hover:text-sky-300 mt-2">
            {{ ucfirst($route) }}
          </li>
          @foreach ($methods_list as $method)
            <li>
              <a onclick="scrollOffset('{{ $route . $method }}')"
                class="cursor-pointer hover:underline text-white hover:text-sky-300">{{ $method }}</a>
            </li>
          @endforeach
        @endforeach
      </ul>
    </nav>
  </div>
</aside>
