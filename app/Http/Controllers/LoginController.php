<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function auth(Request $request)
  {
    $credentials = $request->validate([
      'email'  => ['required'],
      'password'  => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
      return redirect()->intended('beranda');
    }

    return back()->withErrors([
      'username'  => 'The provided credentials do not match our records.',
    ])->onlyInput('username');
  }
}
