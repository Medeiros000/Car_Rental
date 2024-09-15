<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return response()->json(['Car Rental API'], 200);
});
