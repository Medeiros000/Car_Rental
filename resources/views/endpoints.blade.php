{{-- filepath: d:\Herd\car_rental\resources\views\endpoints.blade.php --}}
@extends('layouts.app')

@section('title', 'Car Rental API - Endpoints')

@section('content')
  @php
    $rotas = ['brands', 'car_models', 'cars', 'costumers', 'rentals'];
    $methods = ['listar', 'criar', 'exibir', 'atualizar', 'deletar'];
    $route_list_values = include resource_path('data/data_routes.php');
  @endphp
  <header class="fixed top-0 left-0 right-0">
    <x-header title="Endpoints" />
  </header>
  <aside id="sidebar-multi-level-sidebar"
    class="text-sm bg-slate-900 fixed top-21 left-0 z-40 w-50 transition-transform -translate-x-full sm:translate-x-0 overflow-x-auto"
    aria-label="Sidebar" style="height: 250rem; margin-bottom: 200rem">
    <x-aside.menu :routes_list="$rotas" :methods_list="$methods" />
  </aside>
  <div class="p-4 sm:ml-50 mt-14">
    <div class="h-full">
      <x-foreach :route_list_values="$route_list_values" />
    </div>
  </div>
@endsection
