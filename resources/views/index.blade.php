@extends('layouts.app')

@section('title', 'Car Rental API')

@section('content')
  @component('components.header.top', [
      'title' => 'Car Rental API',
      'links' => ['home', 'documentation', 'endpoints', 'contact'],
      'current' => 'home',
  ])
  @endcomponent
  <main class="top-30 sm:[fixed left-0] z-2 sm:px-15 static fixed left-0 px-10">
    <div class="max-w-150 mx-auto">
      <div class="mt-30 sm:px-15 container mx-auto px-10 text-center text-slate-800">
        <h1 class="text-3xl font-bold">Welcome to Car Rentals API</h1>
      </div>

      <p class="text-center italic">Easily manage your car rental services with our API.</p>
      <div class="mt-4">
        <p class="indent-5">Car Rental API is a RESTful API that allows you to manage your car rental services. You can
          create, read, update,
          and delete cars, car brands, car models, and car types. You can also manage car rentals, customers, and
          employees.
        </p>
        <p class="indent-5">Car Rental API is built with Laravel and PostgreSQL. It is also tested with PHPUnit and
          Postman.</p>
        <p class="indent-5">The documentation of this car rental project was developed in Laravel, using Blade for layout
          and section
          organization. It integrates scripts and styles via Vite, leverages features such as Flowbite for interface
          components, and includes JavaScript files, allowing for the creation of additional pages and functionality in a
          modular way.</p>
        <p class="indent-5">The API endpoints are tested with Postman, and the project is deployed on Heroku. The project
          is also
          integrated with GitHub Actions for continuous integration and deployment.</p>
      </div>
    </div>
  </main>
@endsection
