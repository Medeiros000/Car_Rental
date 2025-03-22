<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('index');
});

Route::get('documentation', 'App\Http\Controllers\WebController@documentation')->name('documentation');
Route::get('endpoints', 'App\Http\Controllers\WebController@endpoints')->name('endpoints');
Route::get('contact', 'App\Http\Controllers\WebController@contact')->name('contact');