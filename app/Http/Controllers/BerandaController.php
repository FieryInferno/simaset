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
      'pengadaan' => Aset::where('tipe', '=', 'pengadaan')->where('status', '=', 'menunggu_diterima')->count(),
      'maintenance' => Aset::where('tipe', '=', 'maintenance')->where('status', '=', 'menunggu_diterima')->count(),
      'aset_masuk' => Aset::where('tipe', '=', 'pengadaan')->where('status', '=', 'disetujui')->count(),
      'aset_diperbaiki' => Aset::where('tipe', '=', 'maintenance')->where('status', '=', 'disetujui')->count(),
    ]);
  }
}
