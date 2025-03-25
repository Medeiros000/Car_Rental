@props(['route_list_values'])

@foreach ($route_list_values as $route_name => $methods)
  <div id="{{ $route_name }}" class="invisible w-full"></div>

  <div class="mb-10 mb-6 mt-5 rounded bg-slate-200 p-4 text-xs shadow sm:text-xs md:text-xs">
    <h2 class="mb-4 text-2xl font-semibold"> {{ $route_name }} </h2>
    @foreach ($methods as $method)
      <div id="{{ $method['method'] . $route_name . $method['id'] }}"
        class="mb-4 rounded border border-gray-300 bg-white p-3 shadow-sm"
        style="border-color: {{ getMethodColor($method['method']) }};">
        <div class="cursor-pointer font-bold hover:bg-sky-100"
          onclick="toggleDetails('{{ $method['method'] . $route_name . $method['id'] }}')">
          <span class="mr-2 inline-block min-w-[3.5rem] rounded px-2 py-1 text-center text-white"
            style="background-color: {{ getMethodColor($method['method']) }};">
            {{ $method['method'] }}
          </span>
          <span class="text-gray-900"> {{ $method['uri'] }}</span>
          <span class="font-normal text-gray-600"> ({{ $method['description'] }})</span>
        </div>
        <div id="details-{{ $method['method'] . $route_name . $method['id'] }}"
          class="mt-2 hidden rounded border border-gray-300 bg-gray-50 p-2">

          @if (isset($method['request']))
            <div class="mb-2 border border-gray-300 bg-gray-50 p-2">
              <div class="md-2 flex justify-between rounded border border-gray-300 bg-gray-50 p-2">
                <p><strong>Resquest:</strong></p>
                <p>application/json</p>
              </div>

              <p class="my-2 ms-3 font-bold">Request Example:</p>
              <div class="ms-3 overflow-x-auto rounded-lg bg-gray-900 px-1 text-white">
                <pre><br>{{ returnCodeString($method['request']) }}</pre><br>
              </div>

              <p class="my-2 ms-3 font-bold">Request Parameters:</p>
              <div class="grid-auto mx-3 grid sm:grid-cols-7">
                <span class="col-start-1 col-end-3 font-bold">name</span>
                <span class="col-start-3 col-end-4 font-bold">type</span>
                <span class="col-start-4 col-end-5 font-bold">required</span>
                <span class="col-start-5 col-end-8 font-bold">description</span>
                <hr class="col-span-6 my-1 border border-gray-300">
                @foreach ($method['parameters'] as $parameters)
                  @php
                    $params = explode(';', $parameters);
                  @endphp
                  <span class="col-start-1 col-end-3 truncate" title="{{ $params[0] }}">{{ $params[0] }}</span>
                  <span class="col-start-3 col-end-4" title="{{ $params[1] }}">{{ $params[1] }}</span>
                  <span class="col-start-4 col-end-5"
                    title="{{ $params[2] == 'required' ? 'yes' : 'no' }}">{{ $params[2] == 'required' ? 'yes' : 'no' }}</span>
                  <span class="col-start-5 col-end-8" title="{{ $params[3] }}">{{ $params[3] }}</span>
                @endforeach
              </div>
            </div>
          @endif

          @if (isset($method['response']))
            <div class="border border-gray-300 bg-gray-50 p-2">
              <div class="flex justify-between rounded border border-gray-300 bg-gray-50 p-2">
                <p><strong>Response:</strong></p>
                <p>application/json</p>
              </div>

              <div class="my-2 ms-3 grid grid-cols-4 gap-x-2">
                <span class="col-start-1 col-end-2 font-bold">Code</span>
                <span class="col-start-2 col-end-5 font-bold">Description</span>
                <hr class="col-span-4 my-1 border border-gray-300">
                <span class="font-bold">{{ array_key_first($method['response_code']) }}</span>
                <span>{{ $method['response_code'][array_key_first($method['response_code'])] }}</span>
              </div>

              <p class="my-2 ms-3 font-bold">Response Example:</p>
              <div class="ms-3 overflow-x-auto rounded-lg bg-gray-900 px-1 text-white">
                <pre><br>{{ returnCodeString($method['response']) }}</pre><br>
              </div>

              @foreach ($method['response_code'] as $indice => $description)
                @if (!$loop->first)
                  <div class="my-2 ms-3 grid grid-cols-4 gap-x-2">
                    <hr class="col-span-4 my-1 border border-gray-300">
                    <span class="col-start-1 col-end-2 font-bold">{{ $indice }}</span>
                    <span class="col-start-2 col-end-5">{{ $description }}</span>
                  </div>
                @endif
              @endforeach

            </div>
          @endif
        </div>
      </div>
    @endforeach
  </div>
@endforeach

@php
  function getMethodColor($method)
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

  function returnCodeString($jsonString)
  {
      $data = json_decode($jsonString);
      $prettyJson = json_encode($data, JSON_PRETTY_PRINT);
      return str_replace('\\', '', $prettyJson);
  }
@endphp
