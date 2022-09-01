@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header">Pengajuan Penambahan Aset</div>
                <div class="card-body text-center"><h1>{{$pengadaan}}</h1></div>
              </div>
              <div class="card">
                <div class="card-header">Aset Masuk</div>
                <div class="card-body text-center"><h1>{{$aset_masuk}}</h1></div>
              </div>
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header">Pengajuan Maintenance Aset</div>
                <div class="card-body text-center"><h1>{{$maintenance}}</h1></div>
              </div>
              <div class="card">
                <div class="card-header">Proses Maintenance Aset</div>
                <div class="card-body text-center"><h1>{{$aset_diperbaiki}}</h1></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3"></div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection