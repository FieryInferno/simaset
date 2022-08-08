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
      <div class="row">
        @foreach ($aset as $aset)
          <div class="col-lg-2">
            <div class="card">
              <div class="card-body text-center" style="padding: 0;">
                <img src="{{asset('images/' . $aset->gambar)}}" width="100%" style="width: 100%;height: 170px;">
                <div><b>{{$aset->kode}}</b></div>
                <div>{{$aset->nama}}</div>
                <div><a href="{{url('aset/show')}}">Detail</a></div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div><!-- /.container-fluid -->
  </div>
@endsection