@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
      <form action="" method="get">
        <div class="row mb-2">
          <div class="col-lg-4">
            <select name="bulan" class="form-control select2bs4">
              <option></option>
              <option value="Januari">Januari</option>
              <option value="Februari">Februari</option>
              <option value="Maret">Maret</option>
              <option value="April">April</option>
              <option value="Mei">Mei</option>
              <option value="Juni">Juni</option>
              <option value="Juli">Juli</option>
              <option value="Agustus">Agustus</option>
              <option value="September">September</option>
              <option value="Oktober">Oktober</option>
              <option value="November">November</option>
              <option value="Desember">Desember</option>
            </select>
          </div>
          <div class="col-lg-4">
            <select name="tahun" class="form-control select2bs4">
              <option></option>
              <?php
                $tgl_awal = date('Y') - 2;
                $tgl_akhir = date('Y');
                for ($i = $tgl_akhir; $i >= $tgl_awal; $i--) { ?>
                  <option value='{{$i}}'" <?php date('Y') == $i ? 'selected' : ''; ?>>{{$i}}</option>
                  <?php
                }
              ?>
            </select>
          </div>
          <button class="btn btn-primary" type="submit">
            <i class="fas fa-search nav-icon"></i>
          </button>
        </div>
      </form>
      <div class="pb-5">
        <table class="table" id="table">
          <thead>
            <th>Berkas</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            <?php
              $tgl_awal = $tahun ? $tahun : date('Y') - 2;
              $tgl_akhir = $tahun ? $tahun : date('Y');
              $bulan = $bulan ? [$bulan] : ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            ?>
            @for ($j = $tgl_awal; $j <= $tgl_akhir; $j++)
              @foreach ($bulan as $angka => $kata)
                @foreach (['Rencana pengadaan', 'Rencana maintenance', 'Data'] as $berkas)
                  <tr>
                    <td>{{$berkas}} aset {{$kata . ' ' . $j}}</td>
                    <td><a href="{{url('berkas/download/' . $berkas . '/' . $kata . '/' . $j)}}">Preview</a></td>
                  </tr>
                @endforeach
              @endforeach
            @endfor
          </tbody>
        </table>
      </div>
    </div><!-- /.container-fluid -->
  </div>
@endsection