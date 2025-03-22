@props(['route_list_values'])

@foreach ($route_list_values as $indice => $routes)
  <div id="{{ $indice }}" class="invisible w-full"></div>
  @foreach ($routes as $route)
    @php
      $endpoint = explode(' ', $route['endpoint']);
      $badge = '';
      match ($endpoint[0]) {
          'GET' => ($badge = 'b-blue'),
          'POST' => ($badge = 'b-green'),
          'PUT', 'PATCH' => ($badge = 'b-yellow'),
          'DELETE' => ($badge = 'b-red'),
      };
    @endphp
    <section id="{{ $indice . $route['id'] }}" class="anchor mt-5 rounded-lg bg-slate-200 p-4">
      <div class="text-sm">
        <p class="pb-4 text-xl font-bold">
          <span class="flex">
            <svg class="my-auto h-6 w-6 text-slate-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z" />
            </svg>
            {{ $route['name'] }}
          </span>
        </p>
        <p><strong>Endpoint:</strong> @component("components.badges.$badge", ['value' => $endpoint[0]])
          @endcomponent {{ $endpoint[1] }}</p>
        <p><strong>Description:</strong> {{ $route['description'] }}</p>
        <p><strong>Parameters:</strong></p>
        <ul>
          @foreach ($route['params'] as $key => $parameter)
            <li>{{ $key }}: {{ $parameter }}</li>
          @endforeach
        </ul>
      </div>
      @if (isset($route['request']))
        <div class="mt-4">
          <p><strong>Requisition Example:</strong></p>
          <div class="overflow-x-auto rounded-lg border border-slate-200 bg-slate-900 px-1 text-xs text-slate-200">
            @php
              $jsonString = $route['request'];
              $data = json_decode($jsonString);
              if (json_last_error() !== JSON_ERROR_NONE) {
                  echo 'Error in JSON decoding: ' . json_last_error_msg();
              } else {
                  $prettyJson = json_encode($data, JSON_PRETTY_PRINT);
                  echo '<pre><br>';
                  echo str_replace('\\', '', $prettyJson);
                  echo '</pre><br>';
              }
            @endphp
          </div>
        </div>
      @endif
      @if (isset($route['response']))
        <div class="mt-4">
          <p><strong>Response Example:</strong></p>
          <div class="overflow-x-auto rounded-lg border border-slate-200 bg-slate-900 px-1 text-xs text-slate-200">
            @php
              $jsonString = $route['response'];
              $data = json_decode($jsonString);
              if (json_last_error() !== JSON_ERROR_NONE) {
                  echo 'Error in JSON decoding: ' . json_last_error_msg();
              } else {
                  $prettyJson = json_encode($data, JSON_PRETTY_PRINT);
                  echo '<pre><br>';
                  echo str_replace('\\', '', $prettyJson);
                  echo '</pre><br>';
              }
            @endphp
          </div>
        </div>
      @endif
    </section>
  @endforeach
@endforeach
