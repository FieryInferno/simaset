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
                    @case ('lantai1-338.5-146.43333435058594')
                      Lantai 1 Ruang LAAK
                      @break
                    @case ('lantai1-440.5-138.43333435058594')
                      Lantai 4 Ruang Dosen FRI
                      @break
                    @case ('lantai1-535.5-149.43333435058594')
                      Lantai 8 Ruang Kelas
                      @break
                    @case ('lantai1-330.5-490.43333435058594')
                      Lantai 8 Gudang
                      @break
                    @case ('lantai1-547.5-489.43333435058594')
                      Lantai 8 Lab Research
                      @break
                    @case ('lantai1-604.5-452.43333435058594')
                      Lantai 8 Enterprise Industrial System Riset 4
                      @break
                    @case ('lantai3-392.5-178.43333435058594')
                      Lantai 8 Integra International Conference Industrial Enterprise
                      @break
                    @case ('lantai3-688.5-295.43333435058594')
                      Lantai 8 Enterprise Industrial System Riset 3
                      @break
                    @case ('lantai4-328.5-198.43333435058594')
                      Lantai 8 Integra R2
                      @break
                    @case ('lantai4-420.5-175.43333435058594')
                      Lantai 8 EIS 2
                      @break
                    @case ('lantai5-312.5-205.43333435058594')
                      Lantai 8 EIS 1
                      @break
                    @case ('lantai5-402.5-184.43333435058594')
                      Lantai 8 Cybernetic 3
                      @break
                    @case ('lantai6-354.5-190.43333435058594')
                      Lantai 8 Cybernetic 2
                      @break
                    @case ('lantai6-261.5-87.43333435058594')
                      Lantai 8 Cybernetic 1
                      @break
                    @case ('lantai6-294.5-68.43333435058594')
                      Lantai 8 Proses Manufaktur 1
                      @break
                    @case ('lantai6-375.5-47.43333435058594')
                      Lantai 8 Proses Manufaktur 2
                      @break
                    @case ('lantai7-382.5-194.43333435058594')
                      Lantai 8 Proses Manufaktur 3
                      @break
                    @case ('lantai7-225.5-129.43333435058594')
                      Lantai 8 Lab Riset 1 Ahli Engineer Management System
                      @break
                    @case ('lantai8-370.5-195.43333435058594')
                      Lantai 8 EMS 2
                      @break
                    @case ('lantai8-215.5-120.43333435058594')
                      Lantai 8 EMS 3
                      @break
                    @case ('lantai9-368.5-174.43333435058594')
                      Lantai 8 Integra L2
                      @break
                    @case ('lantai9-221.5-111.43333435058594')
                      Lantai 8 Studio
                      @break
                    @case ('lantai9-221.5-111.43333435058594')
                      Lantai 8 Logistik
                      @break
                    @case ('lantai9-221.5-111.43333435058594')
                      Lantai 8 Laboran
                      @break
                    @case ('lantai9-221.5-111.43333435058594')
                      Lantai 8 APK
                      @break
                    @case ('lantai9-221.5-111.43333435058594')
                      Lantai 8 Ruang Kelas
                      @break
                    @case ('lantai9-221.5-111.43333435058594')
                      Lantai 9 Ruang Kelas
                      @break
                    @case ('lantai9-221.5-111.43333435058594')
                      Lantai 18 Ruang Dekan
                      @break
                    @case ('lantai9-221.5-111.43333435058594')
                      Lantai 18 Ruang Wakil Dekan 1
                      @break
                    @case ('lantai9-221.5-111.43333435058594')
                      Lantai 18 Ruang Sekretariat
                      @break
                    @case ('lantai9-221.5-111.43333435058594')
                      Lantai 18 Ruang Wakil Dekan 2
                      @break
                    @case ('lantai9-221.5-111.43333435058594')
                      Lantai 18 Ruang Ketua Prodi Teknik Industri
                      @break
                    @case ('lantai9-221.5-111.43333435058594')
                      Lantai 18 Ruang Ketua Prodi Sistem Informasi
                      @break
                    @case ('lantai9-221.5-111.43333435058594')
                      Lantai 18 Ruang Rapat
                      @break
                    @case ('lantai9-221.5-111.43333435058594')
                      Lantai 18 Ruang Secretary of Internal Affairs
                      @break
                    @case ('lantai9-221.5-111.43333435058594')
                      Lantai 18 Ruang Ketua Prodi S2 Teknik Industri
                      @break
                    @case ('lantai9-221.5-111.43333435058594')
                      Lantai 18 Ruang Ketua Prodi Teknik Logistik
                      @break
                    @case ('lantai9-221.5-111.43333435058594')
                      Lantai 18 Ruang Ketua Prodi S2 Sistem Informasi
                      @break
                    @case ('lantai9-221.5-111.43333435058594')
                      Lantai 18 Ruang Keuangan dan Sumber Daya
                      @break
                    @case ('lantai9-221.5-111.43333435058594')
                      Lantai 18 Klinik JAD
                      @break
                      
                    ],
                  @endswitch
                  <a href="{{ url('detail_lokasi/' . $aset->id) }}" class="btn btn-light">Detail Lokasi</a></td>
              </tr>
            @endif
          </tbody>
        </table>
      </div>
      @if ((auth()->user()->role === 'wadek' || auth()->user()->role === 'staff' || auth()->user()->role === 'kaur') && $aset->tipe)
        @if ($aset->status === 'menunggu_diterima')
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
                    <form action="{{url('status_aset/' . $aset->id . '/diterima')}}" method="post">
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
                    <form action="{{url('status_aset/' . $aset->id . '/ditolak')}}" method="post">
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
        @if (!$aset->tipe)
          <div class="d-flex justify-content-center">
            <div class="mb-5">
              <a href="{{ url('aset/' . $aset->id . '/edit?klasifikasi=' . $aset->klasifikasi) }}" class="btn btn-light mr-1">Edit</a>
              <x-button-modal url="{{url('aset/' . $aset->id)}}"/>
            </div>
          </div>
        @endif
      @endif
    </div><!-- /.container-fluid -->
  </div>
@endsection