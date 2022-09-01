<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aset;
use App\Models\PenghapusanAset;

class PenghapusanController extends Controller
{
  public function index()
  {
    return view('penghapusan.index', [
      'beranda' => false,
      'title' => 'Daftar Penghapusan Aset',
      'active' => 'penghapusan_aset',
      'data' => Aset::where('tipe', '=', 'penghapusan')->get(),
    ]);
  }

  public function create()
  {
    return view('penghapusan.form', [
      'beranda' => false,
      'title' => 'Penghapusan Aset',
      'active' => 'penghapusan_aset',
    ]);
  }

  public function store(Request $request)
  {
    $request->validate([
      'nama' => 'required',
      'tanggal' => 'required',
      'kode' => 'required',
      'jumlah' => 'required',
      'lokasi' => 'required',
    ]);

    $aset = new Aset;
    $aset->nama = $request->nama;
    $aset->kode = $request->kode;
    $aset->tanggal = $request->tanggal;
    $aset->jumlah = $request->jumlah;
    $aset->lokasi = $request->lokasi;
    $aset->tipe = 'penghapusan';

    $aset->save();

    return redirect('penghapusan_aset')->with('success', 'Berhasil tambah penghapusan aset.');
  }

  public function edit(PenghapusanAset $penghapusan_aset)
  {
    return view('penghapusan.form', [
      'beranda' => false,
      'title' => 'Penghapusan Aset',
      'active' => 'penghapusan_aset',
      'aset' => $penghapusan_aset,
    ]);
  }

  public function update(Request $request, PenghapusanAset $penghapusan_aset)
  {
    $request->validate([
      'nama' => 'required',
      'tanggal' => 'required',
      'kode' => 'required',
      'jumlah' => 'required',
      'lokasi' => 'required',
    ]);

    $penghapusan_aset->nama = $request->nama;
    $penghapusan_aset->kode = $request->kode;
    $penghapusan_aset->tanggal = $request->tanggal;
    $penghapusan_aset->jumlah = $request->jumlah;
    $penghapusan_aset->lokasi = $request->lokasi;

    $penghapusan_aset->save();

    return redirect('penghapusan_aset')->with('success', 'Berhasil edit penghapusan aset.');
  }

  public function destroy(PenghapusanAset $penghapusan_aset)
  {
    $penghapusan_aset->delete();
    
    return redirect('penghapusan_aset')->with('success', 'Berhasil hapus penghapusan pengajuan.');
  }
}
