@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row mb-1 d-flex justify-content-end">
        <a href="{{url('maintenance_aset/create')}}" class="btn btn-primary">Tambah</a>
      </div>
      <x-alert-success/>
      <?php
        $columns = [
          'Tanggal' => 'tanggal',
          'Nama Aset' => 'nama',
          'Kode' => 'kode',
          'Jumlah' => 'jumlah',
          'Lokasi' => ['render' => function ($data) { ?>
            @switch($data->lokasi)
              @case('lantai2-338.5-146.43333435058594')
                Lantai 2 Ruang Tata Usaha FRI
                @break
              @case('lantai2-440.5-138.43333435058594')
                Lantai 2 Ruang Tata Usaha FTE
                @break
              @case('lantai2-535.5-149.43333435058594')
                Lantai 2 Ruang Tata Usaha FIF
                @break
              @case('lantai2-330.5-490.43333435058594')
                Lantai 2 Ruang Kegiatan Mahasiswa FRI
                @break
              @case('lantai2-547.5-489.43333435058594')
                Lantai 2 Ruang Kegiatan Mahasiswa FTE
                @break
              @case('lantai2-604.5-452.43333435058594')
                Lantai 2 Ruang Kegiatan Mahasiswa FIF
                @break
              @case('lantai3-392.5-178.43333435058594')
                Lantai 3 Ruang Kegiatan Dosen
                @break
              @case('lantai3-688.5-295.43333435058594')
                Lantai 3 Ruang Sidang Skripsi
                @break
              @case('lantai4-328.5-198.43333435058594')
                Lantai 4 Ruang Kegiatan Dosen
                @break
              @case('lantai4-420.5-175.43333435058594')
                Lantai 4 Ruang Sidang Skripsi
                @break
              @case('lantai5-312.5-205.43333435058594')
                Lantai 5 Ruang Kegiatan Dosen
                @break
              @case('lantai5-402.5-184.43333435058594')
                Lantai 5 Ruang Sidang Skripsi
                @break
              @case('lantai6-354.5-190.43333435058594')
                Lantai 6 Common Lab
                @break
              @case('lantai6-261.5-87.43333435058594')
                Lantai 6 Lab Information Science and Engineering
                @break
              @case('lantai6-294.5-68.43333435058594')
                Lantai 6 Lab Data Science
                @break
              @case('lantai6-375.5-47.43333435058594')
                Lantai 6 Lab Software Enginering
                @break
              @case('lantai7-382.5-194.43333435058594')
                Lantai 7 Common Lab
                @break
              @case('lantai7-225.5-129.43333435058594')
                Lantai 7 Kelas
                @break
              @case('lantai8-370.5-195.43333435058594')
                Lantai 8 Integra Lab
                @break
              @case('lantai8-215.5-120.43333435058594')
                Lantai 8 Lab Riset
                @break
              @case('lantai9-368.5-174.43333435058594')
                Lantai 9 Integra Lab
                @break
              @case('lantai9-221.5-111.43333435058594')
                Lantai 9 Kelas
                @break
            @endswitch
            <a href="{{ url('detail_lokasi/' . $data->id) }}" class="btn btn-light">Detail Lokasi</a></td>
          <?php
          }],
          'Perkiraan Biaya' => 'perkiraan_biaya',
          'Kondisi' => 'kondisi',
          'Proses' => 'proses',
          'Status' => ['render' => function ($data) {
            switch ($data->status) {
              case 'menunggu_diterima':
                return 'Menunggu diterima';
                break;
              case 'ditolak':
                return 'Ditolak';
                break;
              
              default:
                # code...
                break;
            }
          }],
          'Aksi' => ['render' => function ($data) { ?>
            <a href="{{url('maintenance_aset/' . $data->id . '/edit')}}" class="btn btn-light">Edit</a>
            <button
              type="button"
              class="btn btn-light"
              data-toggle="modal"
              data-target="#hapus"
            >
              Hapus
            </button>
            <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Apakah anda yakin akan menghapus data ini?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #58dfa0;">Close</button>
                    <form action="{{url('maintenance_aset/' . $data->id)}}" method="post">
                      @csrf
                      {{method_field('DELETE')}}
                      <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          <?php
          }]
        ];
      ?>
      <x-table :columns=$columns :dataList=$data/>
    </div><!-- /.container-fluid -->
  </div>
@endsection