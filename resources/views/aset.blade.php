@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
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
      <x-list-aset :aset=$aset/>
    </div><!-- /.container-fluid -->
  </div>
@endsection