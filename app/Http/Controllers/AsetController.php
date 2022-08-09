<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use Illuminate\Http\Request;

class AsetController extends Controller
{

  public function index(Request $request)
  {
    $aset = $request->query('aset');
    
    if ($aset) {
      $aset = Aset::where('nama', 'like', '%' . $aset . '%')->get();
    } else {
      $aset = Aset::where('tipe', '=', null)->get();
    }

    return view('aset', [
      'beranda' => false,
      'title' => 'Daftar Aset',
      'aset' => $aset,
      'active' => 'daftar_aset',
    ]);
  }

  public function identifikasiAset()
  {
    return view('identifikasi_aset', [
      'beranda' => false,
      'title' => 'Identifikasi Aset',
      'active' => 'identifikasi_aset',
    ]);
  }

  public function getIdentifikasiAset(Request $request)
  {
    return view('detail_aset', [
      'beranda' => false,
      'title' => 'Identifikasi Aset',
      'active' => 'identifikasi_aset',
      'aset' => Aset::where('nama', '=', $request->nama)
                      ->where('kode', '=', $request->kode)
                      ->first(),
    ]);
  }

  public function show(Aset $aset)
  {
    return view('detail_aset', [
      'beranda' => false,
      'title' => 'Detail Aset',
      'active' => 'detail_aset',
      'aset' => $aset,
    ]);
  }

  public function statusAset(Request $request)
  {
    $status = $request->query('status');
    $aset = '';

    switch ($status) {
      case 'masuk':
        $aset = Aset::where('tipe', '=', 'pengadaan')->get();
        break;
      case 'diperbaiki':
        $aset = Aset::where('tipe', '=', 'maintenance')->get();
        break;
      
      default:
        # code...
        break;
    }

    return view('status_aset', [
      'beranda' => false,
      'title' => 'Status Aset',
      'active' => 'status_aset',
      'aset' => $aset,
      'status' => $status,
    ]);
  }

  public function showStatusAset(Aset $aset)
  {
    return view('detail_aset', [
      'beranda' => false,
      'title' => 'Status Aset',
      'active' => 'status_aset',
      'aset' => $aset,
    ]);
  }

  public function create()
  {
    return view('form_aset', [
      'beranda' => false,
      'title' => 'Tambah Aset',
      'active' => 'tambah_aset',
    ]);
  }

  public function store(Request $request)
  {
    $request->validate([
      'nama' => 'required',
      'spesifikasi' => 'required',
      'kode' => 'required',
      'lokasi' => 'required',
      'jumlah' => 'required',
      'foto' => 'required',
    ]);

    $file = $request->file('foto');
    $file->move('images', $file->getClientOriginalName());
    $aset = new Aset;
    $aset->nama = $request->nama;
    $aset->spesifikasi = $request->spesifikasi;
    $aset->kode = $request->kode;
    $aset->lokasi = $request->lokasi;
    $aset->jumlah = $request->jumlah;
    $aset->gambar = $file->getClientOriginalName();

    $aset->save();

    return redirect('aset')->with('success', 'Berhasil tambah aset.');
  }

  public function edit(Aset $aset)
  {
    return view('form_aset', [
      'beranda' => false,
      'title' => 'Edit Aset',
      'active' => 'tambah_aset',
      'aset' => $aset,
    ]);
  }

  public function update(Request $request, Aset $aset)
  {
    $request->validate([
      'nama' => 'required',
      'spesifikasi' => 'required',
      'kode' => 'required',
      'lokasi' => 'required',
      'jumlah' => 'required',
    ]);

    if ($request->file('foto')) {
      $file = $request->file('foto');
      $file->move('images', $file->getClientOriginalName());
      $aset->gambar = $file->getClientOriginalName();
    }

    $aset->nama = $request->nama;
    $aset->spesifikasi = $request->spesifikasi;
    $aset->kode = $request->kode;
    $aset->lokasi = $request->lokasi;
    $aset->jumlah = $request->jumlah;

    $aset->save();

    return redirect('aset')->with('success', 'Berhasil edit aset.');
  }

  public function destroy(Aset $aset)
  {
    $aset->delete();
    
    return redirect('aset')->with('success', 'Berhasil hapus aset.');
  }
}
