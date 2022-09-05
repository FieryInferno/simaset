@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
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
      <div class="card">
        <div class="card-header">Pengadaan <i class="fas fa-bell"></i></div>
        <div class="card-body overflow-auto" style="max-height: 12rem;">
          @foreach ($pengadaan as $p)
            <div>
              Pengajuan pengadaan aset {{ tgl_indo($p->tanggal) }} sudah
              @switch ($p->status)
                @case ('menunggu_diterima')
                  diajukan. Menunggu persetujuan.
                  @break
                @case ('diterima')
                  disetujui.
                  @break
                @case ('ditolak')
                  ditolak.
                  @break
              @endswitch
            </div>
          @endforeach
        </div>
      </div>
      <div class="card">
        <div class="card-header">Maintenance <i class="fas fa-bell"></i></div>
        <div class="card-body overflow-auto" style="max-height: 12rem;">
          @foreach ($maintenance as $p)
            <div>
              Pengajuan pengadaan aset {{ tgl_indo($p->tanggal) }} sudah
              @switch ($p->status)
                @case ('menunggu_diterima')
                  diajukan. Menunggu persetujuan.
                  @break
                @case ('diterima')
                  disetujui.
                  @break
                @case ('ditolak')
                  ditolak.
                  @break
              @endswitch
            </div>
          @endforeach
        </div>
      </div>
      <div class="card">
        <div class="card-header">Peminjaman <i class="fas fa-bell"></i></div>
        <div class="card-body overflow-auto" style="max-height: 12rem;">
          @foreach ($peminjaman as $p)
            <div>
              Pengajuan pengadaan aset {{ tgl_indo($p->tanggal) }} sudah
              @switch ($p->status)
                @case ('menunggu_diterima')
                  diajukan. Menunggu persetujuan.
                  @break
                @case ('diterima')
                  disetujui.
                  @break
                @case ('ditolak')
                  ditolak.
                  @break
              @endswitch
            </div>
          @endforeach
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection