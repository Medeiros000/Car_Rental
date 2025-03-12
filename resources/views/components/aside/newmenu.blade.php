@props(['routes_list', 'methods_list'])

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
