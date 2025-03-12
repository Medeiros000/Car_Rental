<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RentalController;
use Illuminate\Support\Facades\Route;

Route::apiResources([
	'brands' => BrandController::class,
	'cars' => CarController::class,
	'car_models' => CarModelController::class,
	'customers' => CustomerController::class,
	'rentals' => RentalController::class,
]);
