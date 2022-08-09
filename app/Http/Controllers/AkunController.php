<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AkunController extends Controller
{
  public function index()
  {
    return view('akun', [
      'beranda' => false,
      'title' => 'Pengaturan Akun',
      'active' => 'akun',
    ]);
  }

  public function update(Request $request, User $user)
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required',
    ]);

    if ($request->file('foto')) {
      $file = $request->file('foto');
      $file->move('images', $file->getClientOriginalName());
      $user->foto = $file->getClientOriginalName();
    }

    $user->name = $request->name;
    $user->email = $request->email;

    $user->save();

    return redirect()->back()->with('success', 'Berhasil edit akun.');
  }
}
