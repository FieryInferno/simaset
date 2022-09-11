@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="text-center mb-5">
        <img src="{{asset('images/' . auth()->user()->foto)}}" style="width: 15rem;" class="img-preview">
      </div>
      <div class="card" style="background-color: #018445;box-shadow: 0 0 0;">
        <x-alert-success/>
        <form action="{{url('akun/' . auth()->user()->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                  <input
                    type="file"
                    class="form-control-file"
                    name="foto"
                    onchange="previewImg()"
                    id="foto"
                  >
                </div>
              </div>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input
                    type="text"
                    class="form-control"
                    value="{{auth()->user()->name}}"
                    name="name"
                  >
                </div>
              </div>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input
                    type="text"
                    class="form-control"
                    value="{{auth()->user()->email}}"
                    name="email"
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer text-center">
            <button type="submit" class="btn btn-light">Simpan</button>
          </div>
        </form>
      </div>
    </div><!-- /.container-fluid -->
  </div>
@endsection