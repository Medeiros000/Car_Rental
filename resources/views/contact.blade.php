@extends('layouts.app')

@section('title', 'Car Rental API - Contact')

@section('content')
  @component('components.header.top', [
      'title' => 'Car Rental API',
      'links' => ['home', 'documentation', 'endpoints', 'contact'],
      'current' => 'contact',
  ])
  @endcomponent
  <main class="top-30 sm:[fixed left-0] z-2 sm:px-15 static fixed left-0 px-10">
    <div class="max-w-150 mx-auto">
      <div class="mt-30 sm:px-15 container mx-auto px-10 text-center text-slate-800">
        <h1 class="text-3xl font-bold">Contact</h1>
      </div>
      <div class="mt-4 text-center">
        <p class="indent-5">For inquiries, suggestions, or issues, please contact us at
          <a href="mailto:#" class="text-blue-600">
            jrmedeiros.dev@gmail.com</a>
        </p>
      </div>
    </div>
  </main>
@endsection
