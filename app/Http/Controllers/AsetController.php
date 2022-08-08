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
      $aset = Aset::all();
    }

    return view('aset', [
      'beranda' => false,
      'title' => 'Daftar Aset',
      'aset' => $aset,
      'active' => 'daftar_aset',
    ]);
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function show(Aset $aset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function edit(Aset $aset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aset $aset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aset $aset)
    {
        //
    }
}
