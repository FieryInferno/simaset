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
            @if (isset($aset->lokasi))
              <tr>
                <th scope="row">Lokasi</th>
                <td>
                  @switch($aset->lokasi)
                    @case('lantai2-338.5-146.43333435058594')
                      Lantai 2 Ruang Tata Usaha FRI
                      @break
                    @case('lantai2-440.5-138.43333435058594')
                      Lantai 2 Ruang Tata Usaha FTE
                      @break
                    @case('lantai2-535.5-149.43333435058594')
                      Lantai 2 Ruang Tata Usaha FIF
                      @break
                    @case('lantai2-330.5-490.43333435058594')
                      Lantai 2 Ruang Kegiatan Mahasiswa FRI
                      @break
                    @case('lantai2-547.5-489.43333435058594')
                      Lantai 2 Ruang Kegiatan Mahasiswa FTE
                      @break
                    @case('lantai2-604.5-452.43333435058594')
                      Lantai 2 Ruang Kegiatan Mahasiswa FIF
                      @break
                    @case('lantai3-392.5-178.43333435058594')
                      Lantai 3 Ruang Kegiatan Dosen
                      @break
                    @case('lantai3-688.5-295.43333435058594')
                      Lantai 3 Ruang Sidang Skripsi
                      @break
                    @case('lantai4-328.5-198.43333435058594')
                      Lantai 4 Ruang Kegiatan Dosen
                      @break
                    @case('lantai4-420.5-175.43333435058594')
                      Lantai 4 Ruang Sidang Skripsi
                      @break
                    @case('lantai5-312.5-205.43333435058594')
                      Lantai 5 Ruang Kegiatan Dosen
                      @break
                    @case('lantai5-402.5-184.43333435058594')
                      Lantai 5 Ruang Sidang Skripsi
                      @break
                    @case('lantai6-354.5-190.43333435058594')
                      Lantai 6 Common Lab
                      @break
                    @case('lantai6-261.5-87.43333435058594')
                      Lantai 6 Lab Information Science and Engineering
                      @break
                    @case('lantai6-294.5-68.43333435058594')
                      Lantai 6 Lab Data Science
                      @break
                    @case('lantai6-375.5-47.43333435058594')
                      Lantai 6 Lab Software Enginering
                      @break
                    @case('lantai7-382.5-194.43333435058594')
                      Lantai 7 Common Lab
                      @break
                    @case('lantai7-225.5-129.43333435058594')
                      Lantai 7 Kelas
                      @break
                    @case('lantai8-370.5-195.43333435058594')
                      Lantai 8 Integra Lab
                      @break
                    @case('lantai8-215.5-120.43333435058594')
                      Lantai 8 Lab Riset
                      @break
                    @case('lantai9-368.5-174.43333435058594')
                      Lantai 9 Integra Lab
                      @break
                    @case('lantai9-221.5-111.43333435058594')
                      Lantai 9 Kelas
                      @break
                  @endswitch
                      <a href="{{ url('detail_lokasi/' . $aset->id) }}" class="btn btn-light">Detail Lokasi</a></td>
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
      @endif
      @if (auth()->user()->role !== 'wadek')
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