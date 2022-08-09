<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aset;

class PengadaanController extends Controller
{
  public function index()
  {
    return view('pengadaan', [
      'beranda' => false,
      'title' => 'Daftar Pengajuan Pengadaan Aset',
      'active' => 'pengadaan_aset',
      'data' => Aset::where('tipe', '=', 'pengadaan')->get(),
    ]);
  }

  public function create()
  {
    return view('form_pengadaan', [
      'beranda' => false,
      'title' => 'Pengajuan Pengadaan Aset',
      'active' => 'pengadaan_aset',
    ]);
  }

  public function store(Request $request)
  {
    $request->validate([
      'nama' => 'required',
      'tanggal' => 'required',
      'keterangan' => 'required',
      'jumlah' => 'required',
      'foto' => 'required',
    ]);

    $file = $request->file('foto');
    $file->move('images', $file->getClientOriginalName());
    $aset = new Aset;
    $aset->nama = $request->nama;
    $aset->keterangan = $request->keterangan;
    $aset->tanggal = $request->tanggal;
    $aset->kode = $request->kode;
    $aset->jumlah = $request->jumlah;
    $aset->tipe = 'pengadaan';
    $aset->status = 'menunggu_diterima';
    $aset->gambar = $file->getClientOriginalName();

    $aset->save();

    return redirect('pengadaan_aset')->with('success', 'Berhasil tambah aset.');
  }

  public function edit($id)
  {
    return view('form_pengadaan', [
      'beranda' => false,
      'title' => 'Pengajuan Pengadaan Aset',
      'active' => 'pengadaan_aset',
      'aset' => Aset::find($id),
    ]);
  }

  public function update(Request $request, $id)
  {
    $request->validate([
      'nama' => 'required',
      'tanggal' => 'required',
      'keterangan' => 'required',
      'jumlah' => 'required',
    ]);

    $aset = Aset::find($id);

    if ($request->file('foto')) {
      $file = $request->file('foto');
      $file->move('images', $file->getClientOriginalName());
      $aset->gambar = $file->getClientOriginalName();
    }
    
    $aset->nama = $request->nama;
    $aset->keterangan = $request->keterangan;
    $aset->tanggal = $request->tanggal;
    $aset->kode = $request->kode;
    $aset->jumlah = $request->jumlah;

    $aset->save();

    return redirect('pengadaan_aset')->with('success', 'Berhasil tambah aset.');
  }

  public function destroy($id)
  {
    $aset = Aset::find($id);

    $aset->delete();
    
    return redirect('pengadaan_aset')->with('success', 'Berhasil hapus pengajuan.');
  }
}
