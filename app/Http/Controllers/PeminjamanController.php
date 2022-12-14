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
      'unit' => 'required',
    ]);

    $aset = new Peminjaman;
    $aset->nama = $request->nama;
    $aset->unit = $request->unit;
    $aset->nim = $request->nim;
    $aset->email = $request->email;
    $aset->aset_id = $request->aset_id;
    $aset->tanggal = $request->tanggal;
    $aset->waktu = $request->waktu;
    $aset->status = 'menunggu';

    $aset->save();

    return redirect('peminjaman_aset')->with('success', 'Berhasil tambah peminjaman aset.');
  }

  public function showStatusAset(Peminjaman $peminjaman)
  {
    return view('peminjaman.detail', [
      'beranda' => false,
      'title' => 'Status Aset',
      'active' => 'status_aset',
      'aset' => $peminjaman,
    ]);
  }

  public function updateStatusAset(Request $request, Peminjaman $peminjaman, $status)
  {
    $peminjaman->status = $status;

    if ($request->message) $peminjaman->message = $message;

    $peminjaman->save();
    return redirect()->back()->with('success', 'Berhasil edit status aset.');
  }

  public function status()
  {
    return view('peminjaman.status', [
      'beranda' => false,
      'title' => 'Status Aset',
      'active' => 'status_aset',
      'aset' => Peminjaman::groupBy('tanggal')->get(),
    ]);
  }
}
