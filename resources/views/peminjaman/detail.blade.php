@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
      <x-alert-success/>
      <div class="text-center mb-5">
        <img src="{{asset('images/' . $aset->aset->gambar)}}" style="width: 15rem;">
      </div>
      <div class="d-flex justify-content-center">
        <table class="table" style="width: 50%;">
          <tbody>
            <tr>
              <th scope="row">Nama Aset</th>
              <td>{{ $aset->aset->nama }}</td>
            </tr>
            <tr>
              <th scope="row">Nama Peminjam</th>
              <td>{{ $aset->nama }}</td>
            </tr>
            <tr>
              <th scope="row">NIM/NIP</th>
              <td>{{ $aset->nim }}</td>
            </tr>
            <tr>
              <th scope="row">Email</th>
              <td>{{ $aset->email }}</td>
            </tr>
            <tr>
              <th scope="row">Tanggal Pinjam</th>
              <td>{{ $aset->tanggal }}</td>
            </tr>
            <tr>
              <th scope="row">Waktu Peminjaman</th>
              <td>{{ $aset->waktu }}</td>
            </tr>
          </tbody>
        </table>
      </div>
      @if ($aset->status === 'menunggu')
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
                  <form action="{{url('status_peminjaman/' . $aset->id . '/diterima')}}" method="post">
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
                  <form action="{{url('status_peminjaman/' . $aset->id . '/ditolak')}}" method="post">
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
    </div><!-- /.container-fluid -->
  </div>
@endsection