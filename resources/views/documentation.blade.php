@extends('layouts.app')

@section('title', 'Car Rental API - Documentation')

@section('content')
@component('components.navbar.top', ['title' => 'Car Rental API', 'links' => ['home', 'documentation', 'endpoints', 'contact'], 'current' => 'documentation'])
@endcomponent
@endsection