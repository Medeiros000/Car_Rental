@props(['route_list_values'])

@foreach ($route_list_values as $indice => $routes)
  <div id="{{ $indice }}" class="invisible w-full"></div>
  @foreach ($routes as $route)
    <section id="{{ $indice . $route['id'] }}" class="anchor mt-5 bg-slate-200 rounded-lg p-4">
      <div class="text-sm">
        <p class="text-xl font-bold pb-4"># {{ $route['name'] }}</p>
        <p><strong>Endpoint:</strong> {{ $route['endpoint'] }}</p>
        <p><strong>Descrição:</strong> {{ $route['description'] }}</p>
        <p><strong>Parâmetros:</strong></p>
        <ul>
          @foreach ($route['params'] as $key => $parameter)
            <li>{{ $key }}: {{ $parameter }}</li>
          @endforeach
        </ul>
      </div>
      @if (isset($route['request']))
        <div class="mt-4">
          <p><strong>Exemplo de Requisição:</strong></p>
          <div class="overflow-x-auto bg-slate-900 text-slate-200 rounded-lg px-1 border border-slate-200 text-xs">
            @php
              $jsonString = $route['request'];
              $data = json_decode($jsonString);
              if (json_last_error() !== JSON_ERROR_NONE) {
                  echo 'Erro na decodificação JSON: ' . json_last_error_msg();
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
          <p><strong>Exemplo de Resposta:</strong></p>
          <div class="overflow-x-auto bg-slate-900 text-slate-200 rounded-lg px-1 border border-slate-200 text-xs">
            @php
              $jsonString = $route['response'];
              $data = json_decode($jsonString);
              if (json_last_error() !== JSON_ERROR_NONE) {
                  echo 'Erro na decodificação JSON: ' . json_last_error_msg();
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
