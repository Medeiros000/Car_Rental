<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  // return response()->json(['Car Rental API'], 200);
  return view('index');
});

Route::get('documentation', 'App\Http\Controllers\WebController@documentation')->name('documentation');
Route::get('endpoints', 'App\Http\Controllers\WebController@endpoints')->name('endpoints');
