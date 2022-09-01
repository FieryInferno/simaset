@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
      @if ($klasifikasi)
        @if (auth()->user()->role !== 'wadek')
          <div class="row mb-1 d-flex justify-content-end">
            <a href="{{url('aset/create')}}?klasifikasi={{ $_GET['klasifikasi'] }}" class="btn btn-primary">Tambah</a>
          </div>
        @endif
        <x-alert-success/>
        <x-list-aset :aset=$aset/>
      @else
        <div class="d-flex justify-content-center">
          <a href="?klasifikasi=sekretariat" class="btn btn-light" style="width: 16rem;"><h2>Sekretariat</h2></a>
        </div>
        <div class="d-flex justify-content-center mt-2">
          <a href="?klasifikasi=akademik" class="btn btn-light" style="width: 16rem;"><h2>Akademik</h2></a>
        </div>
        <div class="d-flex justify-content-center mt-2">
          <a href="?klasifikasi=kemahasiswaan" class="btn btn-light" style="width: 16rem;"><h2>Kemahasiswaan</h2></a>
        </div>
        <div class="d-flex justify-content-center mt-2">
          <a href="?klasifikasi=keuangan" class="btn btn-light" style="width: 16rem;"><h2>Keuangan & SDM</h2></a>
        </div>
        <div class="d-flex justify-content-center mt-2">
          <a href="?klasifikasi=laboratorium" class="btn btn-light" style="width: 16rem;"><h2>Laboratorium</h2></a>
        </div>
      @endif
    </div><!-- /.container-fluid -->
  </div>
@endsection