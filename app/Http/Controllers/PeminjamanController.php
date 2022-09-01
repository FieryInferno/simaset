<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aset;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
  public function index()
  {
    return view('peminjaman.index', [
      'beranda' => false,
      'title' => 'Daftar Peminjaman Aset',
      'active' => 'peminjaman_aset',
      'data' => Peminjaman::all(),
    ]);
  }

  public function create()
  {
    return view('peminjaman.form', [
      'beranda' => false,
      'title' => 'Peminjaman Aset',
      'active' => 'peminjaman_aset',
      'aset' => Aset::where('tipe', '=', null)->get(),
    ]);
  }

  public function store(Request $request)
  {
    $request->validate([
      'nama' => 'required',
      'nim' => 'required',
      'email' => 'required',
      'aset_id' => 'required',
      'tanggal' => 'required',
      'waktu' => 'required',
    ]);

    $aset = new Peminjaman;
    $aset->nama = $request->nama;
    $aset->nim = $request->nim;
    $aset->email = $request->email;
    $aset->aset_id = $request->aset_id;
    $aset->tanggal = $request->tanggal;
    $aset->waktu = $request->waktu;
    $aset->status = 'menunggu';

    $aset->save();

    return redirect('peminjaman_aset')->with('success', 'Berhasil tambah peminjaman aset.');
  }
}
