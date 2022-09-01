@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row mb-1 d-flex justify-content-end">
        <a href="{{url('peminjaman_aset/create')}}" class="btn btn-primary">Tambah</a>
      </div>
      <x-alert-success/>
      <?php
        $columns = [
          'Nama Peminjam' => 'nama',
          'NIM/NIP' => 'nim',
          'Email' => 'email',
          'Nama Aset' => ['render' => function ($data) {
            return $data->aset->nama;
          }],
          'Tanggal' => 'tanggal',
          'Waktu' => 'waktu',
          'Status' => 'status',
        ];
      ?>
      <x-table :columns=$columns :dataList=$data/>
    </div><!-- /.container-fluid -->
  </div>
@endsection