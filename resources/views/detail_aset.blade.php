@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="text-center mb-5">
        <img src="{{asset('images/' . $aset->gambar)}}" style="width: 15rem;">
      </div>
      <div class="d-flex justify-content-center">
        <table class="table" style="width: 50%;">
          <tbody>
            <tr>
              <th scope="row">Nama Aset</th>
              <td>{{$aset->nama}}</td>
            </tr>
            <tr>
              <th scope="row">Kode</th>
              <td>{{$aset->kode}}</td>
            </tr>
            <tr>
              <th scope="row">Spesifikasi</th>
              <td>{{$aset->spesifikasi}}</td>
            </tr>
            <tr>
              <th scope="row">Lokasi Aset</th>
              <td>{{$aset->lokasi}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div><!-- /.container-fluid -->
  </div>
@endsection