<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aset;

class BerandaController extends Controller
{
  public function index()
  {
    return view('beranda', [
      'beranda' => true,
      'title' => 'Beranda',
      'active' => 'beranda',
      'pengadaan' => Aset::where('tipe', '=', 'pengadaan')->get(),
      'maintenance' => Aset::where('tipe', '=', 'maintenance')->get(),
      'peminjaman' => Aset::where('tipe', '=', 'peminjaman')->get(),
    ]);
  }
}
