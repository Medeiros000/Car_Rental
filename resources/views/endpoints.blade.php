{{-- filepath: d:\Herd\car_rental\resources\views\endpoints.blade.php --}}
@extends('layouts.app')

@section('title', 'Car Rental API - Endpoints')

@section('content')
  @php
    $rotas = ['brands', 'car_models', 'cars', 'customers', 'rentals'];
    $methods = [['list', 'GET'], ['store', 'POST'], ['show', 'GET'], ['update', 'PUT'], ['update', 'PATCH'], ['delete', 'DELETE']];
    $route_list_values = include resource_path('data/data_routes.php');
  @endphp

  @component('components.header.top', [
      'title' => 'Car Rental API',
      'links' => ['home', 'documentation', 'endpoints', 'contact'],
      'current' => 'endpoints',
  ])
  @endcomponent

  <main class="top-23 sm:[fixed left-0] z-2 static fixed left-0">

    @component('components.aside.separator-sidebar', [
        'routes_list' => $rotas,
        'methods_list' => $methods,
    ])
    @endcomponent

    <div class="my-20 p-4 sm:ml-64">
      <div class="h-full">
        <x-data-endpoints :route_list_values="$route_list_values" />
      </div>
    </div>

  </main>
@endsection
