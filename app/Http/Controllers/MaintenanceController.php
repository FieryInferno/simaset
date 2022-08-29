<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aset;

class MaintenanceController extends Controller
{
  public function index()
  {
    return view('maintenance', [
      'beranda' => false,
      'title' => 'Daftar Pengajuan maintenance Aset',
      'active' => 'maintenance_aset',
      'data' => Aset::where('tipe', '=', 'maintenance')->get(),
    ]);
  }

  public function create()
  {
    return view('form_maintenance', [
      'beranda' => false,
      'title' => 'Pengajuan Maintenance Aset',
      'active' => 'maintenance_aset',
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
      'foto' => 'required',
    ]);

    $file = $request->file('foto');
    $file->move('images', $file->getClientOriginalName());
    $aset = new Aset;
    $aset->nama = $request->nama;
    $aset->kode = $request->kode;
    $aset->tanggal = $request->tanggal;
    $aset->jumlah = $request->jumlah;
    $aset->lokasi = $request->lokasi;
    $aset->tipe = 'maintenance';
    $aset->status = 'menunggu_diterima';
    $aset->gambar = $file->getClientOriginalName();
    $aset->perkiraan_biaya = $request->perkiraan_biaya;
    $aset->kondisi = $request->kondisi;
    $aset->proses = $request->proses;

    $aset->save();

    return redirect('maintenance_aset')->with('success', 'Berhasil tambah aset.');
  }

  public function edit($id)
  {
    return view('form_maintenance', [
      'beranda' => false,
      'title' => 'Pengajuan Maintenance Aset',
      'active' => 'maintenance_aset',
      'aset' => Aset::find($id),
    ]);
  }

  public function update(Request $request, $id)
  {
    $request->validate([
      'nama' => 'required',
      'tanggal' => 'required',
      'kode' => 'required',
      'jumlah' => 'required',
      'lokasi' => 'required',
    ]);
    
    $aset = Aset::find($id);

    if ($request->file('foto')) {
      $file = $request->file('foto');
      $file->move('images', $file->getClientOriginalName());
      $aset->gambar = $file->getClientOriginalName();
    }
    
    $aset->nama = $request->nama;
    $aset->kode = $request->kode;
    $aset->tanggal = $request->tanggal;
    $aset->jumlah = $request->jumlah;
    $aset->lokasi = $request->lokasi;
    $aset->perkiraan_biaya = $request->perkiraan_biaya;
    $aset->kondisi = $request->kondisi;
    $aset->proses = $request->proses;

    $aset->save();

    return redirect('maintenance_aset')->with('success', 'Berhasil edit aset.');
  }

  public function destroy($id)
  {
    $aset = Aset::find($id);

    $aset->delete();
    
    return redirect('maintenance_aset')->with('success', 'Berhasil hapus pengajuan.');
  }
}
