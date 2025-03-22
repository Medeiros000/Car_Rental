<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function login(Request $request)
  {
    // dd($request->all());
    return response()->json($request->all(), 200);
  }

  public function logout(Request $request)
  {
    dd('logout', $request->all());
  }

  public function me()
  {
    dd('me');
  }
}
