{{-- filepath: d:\Herd\car_rental\resources\views\endpoints.blade.php --}}
@extends('layouts.app')

@section('title', 'Car Rental API - Endpoints')

@section('content')
  @php
    $rotas = ['brands', 'car_models', 'cars', 'costumers', 'rents'];
    $methods = ['listar', 'criar', 'exibir', 'atualizar', 'deletar'];
    $route_list_values = include resource_path('data/brands.php');
  @endphp

  <x-header title="Rota brands" :list="$rotas" />

  <div class="flex w-auto">
    <x-aside.menu :routes_list="$rotas" :methods_list="$methods" />
    <main class="ml-0 sm:ml-50 px-4 w-full">
      <x-foreach :route_list_values="$route_list_values" />
    </main>
  </div>
  <div class="h-150"></div>
@endsection
