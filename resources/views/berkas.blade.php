@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
      <form action="" method="get">
        <div class="row mb-2">
          <div class="col-lg-4">
            <select name="bulan" class="form-control select2bs4">
              <option></option>
              <option value="januari">Januari</option>
              <option value="februari">Februari</option>
              <option value="maret">Maret</option>
              <option value="april">April</option>
              <option value="mei">Mei</option>
              <option value="juni">Juni</option>
              <option value="juli">Juli</option>
              <option value="agustus">Agustus</option>
              <option value="september">September</option>
              <option value="oktober">Oktober</option>
              <option value="november">November</option>
              <option value="desember">Desember</option>
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
            @for ($j = $tgl_awal; $j <= $tgl_akhir; $j++)
              @foreach (['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'] as $angka => $kata)
                @foreach (['Rencana pengadaan', 'Rencana maintenance', 'data'] as $berkas)
                  <tr>
                    <td>{{$berkas}} aset {{$kata . ' ' . $j}}</td>
                    <td><a href="#">Preview</a></td>
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