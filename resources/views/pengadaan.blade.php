@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row mb-1 d-flex justify-content-end">
        <a href="{{url('pengadaan_aset/create')}}" class="btn btn-primary">Tambah</a>
      </div>
      @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
      <table class="table" id="table">
        <thead>
          <tr>
            <th>Tanggal</th>
            <th>Nama Aset</th>
            <th>Keterangan</th>
            <th>Jumlah</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($aset as $a)
            <tr>
              <td>{{$a->tanggal}}</td>
              <td>{{$a->nama}}</td>
              <td>{{$a->keterangan}}</td>
              <td>{{$a->jumlah}}</td>
              <td>
                @switch($a->status)
                  @case('menunggu_diterima')
                    Menunggu diterima
                    @break
                  @case('ditolak')
                    Ditolak
                    @break
                @endswitch
              </td>
              <td>
                <a href="{{url('pengadaan_aset/' . $a->id . '/edit')}}" class="btn btn-light">Edit</a>
                <x-button-modal url="{{url('pengadaan_aset/' . $a->id)}}"/>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div><!-- /.container-fluid -->
  </div>
@endsection