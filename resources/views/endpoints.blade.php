{{-- filepath: d:\Herd\car_rental\resources\views\endpoints.blade.php --}}
@extends('layouts.app')

@section('title', 'Car Rental API - Endpoints')

@section('content')
  @php
    $rotas = ['brands', 'car_models', 'cars', 'costumers', 'rentals'];
    $methods = ['listar', 'criar', 'exibir', 'atualizar', 'deletar'];
    $methods = ['list', 'store', 'show', 'update', 'destroy'];
    $route_list_values = include resource_path('data/data_routes.php');
  @endphp

  @component('components.header.top', [
      'title' => 'Car Rental API',
      'links' => ['home', 'documentation', 'endpoints', 'contact'],
      'current' => 'endpoints',
  ])
  @endcomponent

  <main class="fixed top-23 left-0 sm:[fixed top-16 left-0] static z-2">

    @component('components.aside.separator-sidebar', [
        'routes_list' => $rotas,
        'methods_list' => $methods,
    ])
    @endcomponent

    <div class="p-4 sm:ml-64 my-20">
      <div class="h-full">
        <x-foreach :route_list_values="$route_list_values" />
      </div>
    </div>

  </main>
@endsection
