<aside id="separator-sidebar"
  class="top-23 fixed left-0 z-40 h-screen w-64 -translate-x-full text-xs transition-transform hover:text-gray-200 sm:translate-x-0 xl:text-sm"
  aria-label="Sidebar">

  @component('components.buttons.sidebar-toggle')
  @endcomponent

  <div id="sidebar" class="h-full overflow-y-auto bg-gray-50 px-3 py-4 dark:bg-slate-900">
    @foreach ($routes_list as $route)
      <div onclick="toggleSection('{{ $route }}')"
        class="align-start group flex cursor-pointer flex-row items-center justify-between rounded-lg p-3 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
        <div class="flex items-center">
          <svg
            class="h-4 w-4 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
            aria-hidden="true" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 25.334 25.334" xml:space="preserve">
            <path d="M25.334,12.667c0,6.996-5.672,12.667-12.668,12.667C5.672,25.334,0,19.663,0,12.667S5.672,0,12.666,0
  C19.662,0,25.334,5.671,25.334,12.667z" />
          </svg>
          <span class="pointer-events-none ms-3">{{ strtoupper($route) }}</span>
        </div>
        <div id="icon-{{ $route }}" class="transform transition-transform">
          <span>▶</span>
        </div>
      </div>
      
      <ul id="section-{{ $route }}" class="cursor-pointer hidden">
        @foreach ($methods_list as $method)
          <li onclick="scrollOffset('{{ $method[1] . $route . $method[0] }}')"
            class="group flex items-center rounded-lg p-1 ps-4 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
            <span class="mr-2 inline-block min-w-[3.5rem] rounded px-2 py-1 text-center text-white"
              style="background-color: {{ getMethodColorSide($method[1]) }};">
              {{ $method[1] }}
            </span>
            <span class="pointer-events-none ms-3">{{ $method[0] }}</span>
          </li>
        @endforeach
      </ul>
    @endforeach
  </div>
</aside>

@php
  function getMethodColorSide($method)
  {
      return match ($method) {
          'GET' => '#4CAF50',
          'POST' => '#2196F3',
          'PUT' => '#FF9800',
          'PATCH' => '#FFC107',
          'DELETE' => '#F44336',
          default => '#607D8B',
      };
  }
@endphp
