@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
      @if ($aset === '')
        <div class="d-flex justify-content-center">
          <div class="row">
            <div class="col-5">
              <div class="card">
                <div class="card-body">
                  <a href="{{url('status_aset?status=masuk')}}"><h1>Aset Masuk</h1></a>
                </div>
              </div>
            </div>
            <div class="col-5">
              <div class="card">
                <div class="card-body">
                  <a href="{{url('status_aset?status=diperbaiki')}}"><h1>Aset Diperbaiki</h1></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      @else
        <div class="row">
          <div class="col-lg-3">
            <div class="card">
              <div class="card-body text-center">
                <h3>Aset {{$status}}</h3>
              </div>
            </div>
          </div>
        </div>
        <x-list-aset :aset=$aset :status=$status/>
      @endif
    </div><!-- /.container-fluid -->
  </div>
@endsection