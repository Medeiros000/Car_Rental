@extends('layouts.app')

@section('title', 'Car Rental API')

@section('content')

  @component('components.header.top', [
      'title' => 'Car Rental API',
      'links' => ['home', 'documentation', 'endpoints', 'contact'],
      'current' => 'home',
  ])
  @endcomponent
  <main class="top-23 sm:[fixed left-0] z-2 static fixed left-0">
    <div class="container mx-auto mt-28">
      <h1 class="text-bold text-center text-4xl underline">Welcome to Car Rental API</h1>
      <p class="text-center">Easily manage your car rental services with our API.</p>
      {{-- <div class="mt-4 text-center">
        <a href="{{ route('documentation') }}">
          <x-buttons.outlined text='API Documentation' class='w-3xs' background="sky" />
        </a>
        <a href="{{ route('endpoints') }}">
          <x-buttons.filled text='API Endpoints' class='w-3xs' background='sky' color='lime' />
        </a>
      </div> --}}
    </div>
  </main>
@endsection
