@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
      <x-alert-success/>
      <div class="text-center mb-5">
        <img src="{{asset('images/' . $aset->gambar)}}" style="width: 15rem;">
      </div>
      <div class="d-flex justify-content-center">
        <table class="table" style="width: 50%;">
          <tbody>
            @if (isset($aset->tanggal))
              <tr>
                <th scope="row">Tanggal</th>
                <td>{{$aset->tanggal}}</td>
              </tr>
            @endif
            @if (isset($aset->nama))
              <tr>
                <th scope="row">Nama Aset</th>
                <td>{{$aset->nama}}</td>
              </tr>
            @endif
            @if (isset($aset->kode))
              <tr>
                <th scope="row">Kode</th>
                <td>{{$aset->kode}}</td>
              </tr>
            @endif
            @if (isset($aset->spesifikasi))
              <tr>
                <th scope="row">Spesifikasi</th>
                <td>{{$aset->spesifikasi}}</td>
              </tr>
            @endif
            @if (isset($aset->lokasi))
              <tr>
                <th scope="row">Lokasi</th>
                <td>{{$aset->lokasi}}</td>
              </tr>
            @endif
            @if (isset($aset->keterangan))
              <tr>
                <th scope="row">Keterangan</th>
                <td>{{$aset->keterangan}}</td>
              </tr>
            @endif
            @if (isset($aset->jumlah))
              <tr>
                <th scope="row">Jumlah</th>
                <td>{{$aset->jumlah}}</td>
              </tr>
            @endif
          </tbody>
        </table>
      </div>
      @if (auth()->user()->role === 'wadek' && $aset->tipe)
        @if ($aset->status !== 'menunggu_diterima')
          <div class="d-flex justify-content-center">
            <button
              type="button"
              class="btn btn-light mr-5 mb-5"
              data-toggle="modal"
              data-target="#setuju"
            >
              Setuju
            </button>
            <div class="modal fade" id="setuju" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    Apakah anda yakin akan menyetujui pengajuan ini?
                  </div>
                  <div class="modal-footer" style="justify-content: center;">
                    <button type="button" class="btn btn-primary">Tidak</button>
                    <form action="{{url('status_aset/4/diterima')}}" method="post">
                      @csrf
                      {{method_field('PUT')}}
                      <button type="submit" class="btn btn-primary">Ya</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <button
              type="button"
              class="btn btn-light mb-5"
              data-toggle="modal"
              data-target="#tolak"
            >
              Tolak
            </button>
            <div class="modal fade" id="tolak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    Apakah anda yakin akan menolak pengajuan ini?
                  </div>
                  <div class="modal-footer" style="justify-content: center;">
                    <button type="button" class="btn btn-primary">Tidak</button>
                    <form action="{{url('status_aset/4/ditolak')}}" method="post">
                      @csrf
                      {{method_field('PUT')}}
                      <button type="submit" class="btn btn-primary">Ya</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endif
      @else
        <div class="d-flex justify-content-center">
          <div class="mb-5">
            <a href="{{url('aset/' . $aset->id . '/edit')}}" class="btn btn-light mr-1">Edit</a>
            <x-button-modal url="{{url('aset/' . $aset->id)}}"/>
          </div>
        </div>
      @endif
    </div><!-- /.container-fluid -->
  </div>
@endsection