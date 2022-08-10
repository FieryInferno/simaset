@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
      @if (auth()->user()->role !== 'wadek')
        <div class="row mb-1 d-flex justify-content-end">
          <a href="{{url('aset/create')}}" class="btn btn-primary">Tambah</a>
        </div>
      @endif
      <form action="" method="get">
        <div class="row mb-2">
            <div class="col-lg-11">
              <input
                type="text"
                class="form-control"
                name="aset"
                placeholder="Cari aset"
              >
            </div>
            <div class="col-lg-1">
              <button class="btn btn-primary" type="submit">
                <i class="fas fa-search nav-icon"></i>
              </button>
            </div>
        </div>
      </form>
      <x-alert-success/>
      <x-list-aset :aset=$aset/>
    </div><!-- /.container-fluid -->
  </div>
@endsection