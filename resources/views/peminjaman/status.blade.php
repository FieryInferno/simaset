@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="pb-5">
        <table class="table" id="table">
          <tbody>
            <?php
              function tgl_indo($tanggal){
                $bulan = array (
                  1 =>   'Januari',
                  'Februari',
                  'Maret',
                  'April',
                  'Mei',
                  'Juni',
                  'Juli',
                  'Agustus',
                  'September',
                  'Oktober',
                  'November',
                  'Desember'
                );
                $pecahkan = explode('-', $tanggal);
                return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
              }
            ?>
            @foreach ($aset as $aset)
              <tr>
                <td>Pinjam Aset {{ tgl_indo($aset->tanggal) }}</td>
                <td>Lihat</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div><!-- /.container-fluid -->
  </div>
@endsection