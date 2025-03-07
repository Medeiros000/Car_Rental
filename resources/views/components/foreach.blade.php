@props(['route_list_values'])

@foreach ($route_list_values as $indice => $routes)
  <div id="{{ $indice }}" class="invisible"></div>
  @foreach ($routes as $route)
    <section id="{{ $indice . $route['id'] }}" class="anchor mt-5 bg-slate-200 rounded-lg p-4 w-fullt">
      <div class="py-5">
        <h2 class="text-2xl font-bold pb-4"># {{ $route['name'] }}</h2>
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
          <div class="overflow-x-auto bg-slate-900 text-slate-200 rounded-lg px-1 border border-slate-200 ">
            <pre><code>{{ $route['request'] }}
            </code></pre>
          </div>
        </div>
      @endif
      @if (isset($route['response']))
        <div class="mt-4">
          <p><strong>Exemplo de Resposta:</strong></p>
          <div class="overflow-x-auto bg-slate-900 text-slate-200 rounded-lg px-1 border border-slate-200 ">
            <pre><code>{{ $route['response'] }}
            </code></pre>
          </div>
        </div>
      @endif
    </section>
  @endforeach
@endforeach
