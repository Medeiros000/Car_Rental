{{-- filepath: d:\Herd\car_rental\resources\views\components\aside\menu.blade.php --}}
@props(['routes_list', 'methods_list'])
<aside id="aside" class="invisible sm:visible fixed top-0 left-0 h-full bg-slate-900 w-50 z-1">
  <div class="flex flex-col items-center mt-16">
    {{-- <h2 class="text-3xl font-bold text-slate-200">Rotas</h2> --}}
    <nav class="mt-5">
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
                class="cursor-pointer hover:underline text-sky-200 hover:text-sky-300">{{ $method }}</a>
            </li>
          @endforeach
        @endforeach
      </ul>
    </nav>
  </div>
</aside>
