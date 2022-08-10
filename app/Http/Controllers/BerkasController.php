<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Aset;

class BerkasController extends Controller
{
  public function index(Request $request)
  {
    $bulan = null;
    $tahun = null;

    if ($request->query('bulan') && $request->query('tahun')) {
      $bulan = $request->query('bulan');
      $tahun = $request->query('tahun');
    }

    return view('berkas', [
      'beranda' => false,
      'title' => 'Berkas',
      'active' => 'berkas',
      'bulan' => $bulan,
      'tahun' => $tahun,
    ]);
  }

  public function download($berkas, $bulan, $tahun)
  {
    $dataBulan = [
      'Januari' => '01',
      'Februari' => '02',
      'Maret' => '03',
      'April' => '04',
      'Mei' => '05',
      'Juni' => '06',
      'Juli' => '07',
      'Agustus' => '08',
      'September' => '09',
      'Oktober' => '10',
      'November' => '11',
      'Desember' => '12',
    ];

    switch ($berkas) {
      case 'Rencana pengadaan':
        $data = Aset::where('tipe', '=', 'pengadaan')->whereMonth('tanggal', $dataBulan[$bulan])->whereYear('tanggal', $tahun)->get();
        break;
      case 'Rencana maintenance':
        $data = Aset::where('tipe', '=', 'maintenance')->whereMonth('tanggal', $dataBulan[$bulan])->whereYear('tanggal', $tahun)->get();
        break;
      case 'Data':
        $data = Aset::where('tipe', '=', null)->whereMonth('created_at', $dataBulan[$bulan])->whereYear('created_at', $tahun)->get();
        break;
      
      default:
        # code...
        break;
    }

    $pdf = PDF::setOption('isHtml5ParserEnabled', true)->setOption('isRemoteEnabled', true)->loadview('file_data', [
      'data' => $data,
      'berkas' => $berkas,
      'bulan' => $bulan,
      'tahun' => $tahun,
    ]);
    
    return $pdf->stream('rekap');
  }
}
