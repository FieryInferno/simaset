@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row mb-1 d-flex justify-content-end">
        <a href="{{url('maintenance_aset/create')}}" class="btn btn-primary">Tambah</a>
      </div>
      @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
      <?php
        $columns = [
          'Tanggal' => 'tanggal',
          'Nama Aset' => 'nama',
          'Kode' => 'kode',
          'Jumlah' => 'jumlah',
          'Lokasi' => 'lokasi',
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