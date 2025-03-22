@extends('layouts.app')

@section('title', 'Car Rental API - Documentation')

@section('content')
  @component('components.header.top', [
      'title' => 'Car Rental API',
      'links' => ['home', 'documentation', 'endpoints', 'contact'],
      'current' => 'documentation',
  ])
  @endcomponent
    <main class="top-30 sm:[fixed left-0] z-2 static fixed left-0 sm:px-15 px-10">
    <div class="container mx-auto mt-30 sm:px-15 px-10 text-center text-slate-800">
      <h1 class="text-3xl font-bold">Documentation</h1>
    </div>
  </main>
@endsection
