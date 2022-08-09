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

    $aset->save();

    return redirect('maintenance_aset')->with('success', 'Berhasil tambah aset.');
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
