@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row mb-1 d-flex justify-content-end">
        <a href="{{url('penghapusan_aset/create')}}" class="btn btn-primary">Tambah</a>
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
              @case ('lantai1-338.5-146.43333435058594')
                Lantai 1 Ruang LAAK
                @break
              @case ('lantai1-440.5-138.43333435058594')
                Lantai 4 Ruang Dosen FRI
                @break
              @case ('lantai1-535.5-149.43333435058594')
                Lantai 8 Ruang Kelas
                @break
              @case ('lantai1-330.5-490.43333435058594')
                Lantai 8 Gudang
                @break
              @case ('lantai1-547.5-489.43333435058594')
                Lantai 8 Lab Research
                @break
              @case ('lantai1-604.5-452.43333435058594')
                Lantai 8 Enterprise Industrial System Riset 4
                @break
              @case ('lantai3-392.5-178.43333435058594')
                Lantai 8 Integra International Conference Industrial Enterprise
                @break
              @case ('lantai3-688.5-295.43333435058594')
                Lantai 8 Enterprise Industrial System Riset 3
                @break
              @case ('lantai4-328.5-198.43333435058594')
                Lantai 8 Integra R2
                @break
              @case ('lantai4-420.5-175.43333435058594')
                Lantai 8 EIS 2
                @break
              @case ('lantai5-312.5-205.43333435058594')
                Lantai 8 EIS 1
                @break
              @case ('lantai5-402.5-184.43333435058594')
                Lantai 8 Cybernetic 3
                @break
              @case ('lantai6-354.5-190.43333435058594')
                Lantai 8 Cybernetic 2
                @break
              @case ('lantai6-261.5-87.43333435058594')
                Lantai 8 Cybernetic 1
                @break
              @case ('lantai6-294.5-68.43333435058594')
                Lantai 8 Proses Manufaktur 1
                @break
              @case ('lantai6-375.5-47.43333435058594')
                Lantai 8 Proses Manufaktur 2
                @break
              @case ('lantai7-382.5-194.43333435058594')
                Lantai 8 Proses Manufaktur 3
                @break
              @case ('lantai7-225.5-129.43333435058594')
                Lantai 8 Lab Riset 1 Ahli Engineer Management System
                @break
              @case ('lantai8-370.5-195.43333435058594')
                Lantai 8 EMS 2
                @break
              @case ('lantai8-215.5-120.43333435058594')
                Lantai 8 EMS 3
                @break
              @case ('lantai9-368.5-174.43333435058594')
                Lantai 8 Integra L2
                @break
              @case ('lantai9-221.5-111.43333435058594')
                Lantai 8 Studio
                @break
              @case ('lantai9-221.5-111.43333435058594')
                Lantai 8 Logistik
                @break
              @case ('lantai9-221.5-111.43333435058594')
                Lantai 8 Laboran
                @break
              @case ('lantai9-221.5-111.43333435058594')
                Lantai 8 APK
                @break
              @case ('lantai9-221.5-111.43333435058594')
                Lantai 8 Ruang Kelas
                @break
              @case ('lantai9-221.5-111.43333435058594')
                Lantai 9 Ruang Kelas
                @break
              @case ('lantai9-221.5-111.43333435058594')
                Lantai 18 Ruang Dekan
                @break
              @case ('lantai9-221.5-111.43333435058594')
                Lantai 18 Ruang Wakil Dekan 1
                @break
              @case ('lantai9-221.5-111.43333435058594')
                Lantai 18 Ruang Sekretariat
                @break
              @case ('lantai9-221.5-111.43333435058594')
                Lantai 18 Ruang Wakil Dekan 2
                @break
              @case ('lantai9-221.5-111.43333435058594')
                Lantai 18 Ruang Ketua Prodi Teknik Industri
                @break
              @case ('lantai9-221.5-111.43333435058594')
                Lantai 18 Ruang Ketua Prodi Sistem Informasi
                @break
              @case ('lantai9-221.5-111.43333435058594')
                Lantai 18 Ruang Rapat
                @break
              @case ('lantai9-221.5-111.43333435058594')
                Lantai 18 Ruang Secretary of Internal Affairs
                @break
              @case ('lantai9-221.5-111.43333435058594')
                Lantai 18 Ruang Ketua Prodi S2 Teknik Industri
                @break
              @case ('lantai9-221.5-111.43333435058594')
                Lantai 18 Ruang Ketua Prodi Teknik Logistik
                @break
              @case ('lantai9-221.5-111.43333435058594')
                Lantai 18 Ruang Ketua Prodi S2 Sistem Informasi
                @break
              @case ('lantai9-221.5-111.43333435058594')
                Lantai 18 Ruang Keuangan dan Sumber Daya
                @break
              @case ('lantai9-221.5-111.43333435058594')
                Lantai 18 Klinik JAD
                @break
                
              ],
            @endswitch
            <a href="{{ url('detail_lokasi/' . $data->id) }}" class="btn btn-light">Detail Lokasi</a></td>
          <?php
          }],
          'Aksi' => ['render' => function ($data) { ?>
            <a href="{{url('penghapusan_aset/' . $data->id . '/edit')}}" class="btn btn-light">Edit</a>
            <button
              type="button"
              class="btn btn-light"
              data-toggle="modal"
              data-target="#hapus{{ $data->id }}"
            >
              Hapus
            </button>
            <div class="modal fade" id="hapus{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #018445;">Close</button>
                    <form action="{{url('penghapusan_aset/' . $data->id)}}" method="post">
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