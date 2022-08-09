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
      @if (auth()->user()->role === 'wadek')
        @if ($aset->tipe)
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
                    <button type="button" class="btn btn-secondary" style="background-color: #58dfa0;">Tidak</button>
                    <button type="button" class="btn btn-primary" style="background-color: #58dfa0;">Ya</button>
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
                    <button type="button" class="btn btn-secondary" style="background-color: #58dfa0;">Tidak</button>
                    <button type="button" class="btn btn-primary" style="background-color: #58dfa0;">Ya</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endif
      @else
        <div class="d-flex justify-content-center">
          <a href="{{url('aset/' . $aset->id . '/edit')}}" class="btn btn-light mr-1 mb-5">Edit</a>
          <a href="{{url('aset/' . $aset->id . '/edit')}}" class="btn btn-light mb-5">Hapus</a>
        </div>
      @endif
    </div><!-- /.container-fluid -->
  </div>
@endsection