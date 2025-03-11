@extends('layouts.app')

@section('title', 'Car Rental API')

@section('content')
  <title>Car Rental API</title>
  <div class="container mt-5 mx-auto">
    <h1 class="text-4xl text-bold text-center underline">Welcome to Car Rental API</h1>
    <p class="text-center">Easily manage your car rental services with our API.</p>
    <div class="text-center mt-4">
      <a href="{{ route('documentation') }}">
        <x-buttons.outlined text='API Documentation' class='w-3xs' background="sky" />
      </a>
      <a href="{{ route('endpoints') }}">
        <x-buttons.filled text='API Endpoints' class='w-3xs' background='sky' color='lime'  />
      </a>
    </div>
  </div>
@endsection
