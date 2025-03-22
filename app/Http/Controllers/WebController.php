<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
  public function index()
  {
    return view('welcome');
  }

  public function documentation()
  {
    return view('documentation');
  }

  public function endpoints()
  {
    return view('endpoints');
  }

  public function contact()
  {
    return view('contact');
  }
}
