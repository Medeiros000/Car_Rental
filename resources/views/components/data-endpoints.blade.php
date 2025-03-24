@props(['route_list_values'])

@foreach ($route_list_values as $route_name => $methods)
  <div id="{{ $route_name }}" class="invisible w-full"></div>

  <div class="mb-10 mb-6 mt-5 rounded bg-slate-200 p-4 shadow">
    <h2 class="mb-4 text-2xl font-semibold"> {{ $route_name }} </h2>
    @foreach ($methods as $method)
      <div id="{{ $route_name . $method['id'] }}" class="mb-4 rounded border border-gray-300 bg-white p-3 shadow-sm">
        <p class="cursor-pointer md:text-base text-xs md:font-medium font-bold hover:bg-sky-100"
          onclick="toggleDetails('{{ $route_name . $method['id'] }}')">
          <span class="mr-2 rounded px-2 py-1 text-white w-md"
            style="background-color: {{ getMethodColor($method['method']) }};">
            {{ $method['method'] }}
          </span>
          <span class="text-gray-600"> {{ $method['uri'] }}</span>
          <span class="font-normal text-gray-600"> ({{ $method['description'] }})</span>
          </h3>
        <div id="details-{{ $route_name . $method['id'] }}"
          class="mt-2 hidden rounded border border-gray-300 bg-gray-50 p-2">
          @if (isset($method['request']))
            <p><strong>Request Example:</strong></p>
            <div class="overflow-x-auto rounded-lg bg-gray-900 px-1 text-xs text-white">
              @php
                $jsonString = $method['request'];
                $data = json_decode($jsonString);
                $prettyJson = json_encode($data, JSON_PRETTY_PRINT);
                echo '<pre><br>';
                echo str_replace('\\', '', $prettyJson);
                echo '</pre><br>';
              @endphp
            </div>
          @endif
          @if (isset($method['response']))
            <p><strong>Response Example:</strong></p>
            <div class="overflow-x-auto rounded-lg bg-gray-900 px-1 text-xs text-white">
              @php
                $jsonString = $method['response'];
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
          @endif
          {{-- <p><strong>Example Request:</strong></p>
          <pre class="rounded bg-gray-900 p-2 text-sm text-white">
                                </pre>
          <p><strong>Parameters:</strong></p> --}}
          <ul class="list-inside list-disc">
            <li>id (optional) - Resource identifier</li>
          </ul>
        </div>
      </div>
    @endforeach
  </div>
@endforeach
@php
  function getMethodColor($method)
  {
      switch ($method) {
          case 'GET':
              return '#4CAF50';
          case 'POST':
              return '#2196F3';
          case 'PUT':
              return '#FF9800';
          case 'PATCH':
              return '#FFC107';
          case 'DELETE':
              return '#F44336';
          default:
              return '#607D8B';
      }
  }
@endphp
{{-- 
  @foreach ($methods as $method_name => $method_details)
    @php
      $endpoint = $method_name;
      $badge = '';
      $method_name = explode(';', $method_name)[0];
      match ($method_name) {
          'GET' => ($badge = 'b-blue'),
          'POST' => ($badge = 'b-green'),
          'PUT', 'PATCH' => ($badge = 'b-yellow'),
          'DELETE' => ($badge = 'b-red'),
      };
    @endphp
    <section id="{{ $route_name . $method_details['id'] }}" class="anchor mt-5 rounded-lg bg-slate-200 p-4">
      <div class="text-sm">
        <p class="pb-4 text-xl font-bold">
          <span>#
            {{ ucfirst($method_name) . ' ' . $route_name }}
          </span>
        </p>
        <h3 class="text-lg font-bold">
          <p>
            @php $method_name = !in_array($method_name, ["PUT", "PATCH"]) ? $method_name : "POST" ;  @endphp
            @component("components.badges.$badge", ['value' => $method_name])
            @endcomponent {{ $method_details['uri'] }}
            <span class="text-base font-normal">{{ $method_details['description'] }}
          </p>
        </h3>
        <p><strong>Parameters:</strong></p>
        <div>
          <div class="grid grid-cols-5 border-b border-dashed border-slate-900 font-bold">
            <span class="col-start-1 col-end-2 text-start">Name</span>
            <span class="col-start-2 col-end-3 text-start">Type</span>
            <span class="col-start-3 col-end-4 text-start">Required</span>
            <span class="col-start-4 col-end-6 text-start">Description</span>
          </div>
          @foreach ($method_details['parameters'] as $key => $parameter)
            <div class="border-b border-dashed border-slate-900 hover:cursor-pointer hover:bg-slate-100">
              @php
                $parts = explode(';', $parameter);
                $name = trim($parts[0]);
                $type = trim($parts[1]);
                $required = trim($parts[2]);
                if (count($parts) == 3) {
                    $description = '';
                } else {
                    $description = trim($parts[3]);
                }
              @endphp
              <div class="grid grid-cols-5 gap-x-1">
                <span title="{{ $name }}"
                  class="col-start-1 col-end-2 overflow-hidden text-ellipsis">{{ $name }}</span>
                <span title="{{ $type }}" class="col-start-2 col-end-3">{{ $type }}</span>
                <span title="{{ $required }}"
                  class="col-start-3 col-end-4">{{ $required == 'required' ? 'yes' : 'no' }}</span>
                <span title="{{ $description }}"
                  class="col-start-4 col-end-6 overflow-hidden text-ellipsis text-nowrap">{{ $description }}</span>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      @if (isset($method_details['request']))
        <div class="mt-4">
          <p><strong>Requisition Example:</strong></p>
          <div class="overflow-x-auto rounded-lg border border-slate-200 bg-slate-900 px-1 text-xs text-slate-200">
            @php
              $jsonString = $method_details['request'];
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
      @if (isset($method_details['response']))
        <div class="mt-4">
          <p>
            {{ array_key_first($method_details['response_code']) . ' => ' . $method_details['response_code'][array_key_first($method_details['response_code'])] }}
          </p>
          <p><strong>Response Example:</strong></p>
          <div class="overflow-x-auto rounded-lg border border-slate-200 bg-slate-900 px-1 text-xs text-slate-200">
            @php
              $jsonString = $method_details['response'];
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
@endforeach --}}
