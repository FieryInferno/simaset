@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
      <?php
        $form = [
          'action' => isset($aset) ? url('penghapusan_aset/' . $aset->id) : url('penghapusan_aset'),
          'fields' => [
            'tanggal' => [
              'label' => 'Tanggal',
              'type' => 'date',
              'value' => isset($aset) ? $aset->tanggal : null,
            ],
            'nama' => [
              'label' => 'Nama Aset',
              'type' => 'input',
              'value' => isset($aset) ? $aset->nama : null,
            ],
            'kode' => [
              'label' => 'Kode',
              'type' => 'input',
              'value' => isset($aset) ? $aset->kode : null
            ],
            'jumlah' => [
              'label' => 'Jumlah',
              'type' => 'input',
              'value' => isset($aset) ? $aset->jumlah : null,
            ],
            'lokasi' => [
              'label' => 'Lokasi',
              'type' => 'select',
              'value' => isset($aset) ? $aset->lokasi : null,
              'data' => [
                (object) [
                  'id' => 'lantai1-338.5-146.43333435058594',
                  'nama' => 'Lantai 1 Ruang LAAK',
                ],
                (object) [
                  'id' => 'lantai1-440.5-138.43333435058594',
                  'nama' => 'Lantai 4 Ruang Dosen FRI',
                ],
                (object) [
                  'id' => 'lantai1-535.5-149.43333435058594',
                  'nama' => 'Lantai 8 Ruang Kelas',
                ],
                (object) [
                  'id' => 'lantai1-330.5-490.43333435058594',
                  'nama' => 'Lantai 8 Gudang',
                ],
                (object) [
                  'id' => 'lantai1-547.5-489.43333435058594',
                  'nama' => 'Lantai 8 Lab Research',
                ],
                (object) [
                  'id' => 'lantai1-604.5-452.43333435058594',
                  'nama' => 'Lantai 8 Enterprise Industrial System Riset 4',
                ],
                (object) [
                  'id' => 'lantai3-392.5-178.43333435058594',
                  'nama' => 'Lantai 8 Integra International Conference Industrial Enterprise',
                ],
                (object) [
                  'id' => 'lantai3-688.5-295.43333435058594',
                  'nama' => 'Lantai 8 Enterprise Industrial System Riset 3',
                ],
                (object) [
                  'id' => 'lantai4-328.5-198.43333435058594',
                  'nama' => 'Lantai 8 Integra R2',
                ],
                (object) [
                  'id' => 'lantai4-420.5-175.43333435058594',
                  'nama' => 'Lantai 8 EIS 2',
                ],
                (object) [
                  'id' => 'lantai5-312.5-205.43333435058594',
                  'nama' => 'Lantai 8 EIS 1',
                ],
                (object) [
                  'id' => 'lantai5-402.5-184.43333435058594',
                  'nama' => 'Lantai 8 Cybernetic 3',
                ],
                (object) [
                  'id' => 'lantai6-354.5-190.43333435058594',
                  'nama' => 'Lantai 8 Cybernetic 2',
                ],
                (object) [
                  'id' => 'lantai6-261.5-87.43333435058594',
                  'nama' => 'Lantai 8 Cybernetic 1',
                ],
                (object) [
                  'id' => 'lantai6-294.5-68.43333435058594',
                  'nama' => 'Lantai 8 Proses Manufaktur 1',
                ],
                (object) [
                  'id' => 'lantai6-375.5-47.43333435058594',
                  'nama' => 'Lantai 8 Proses Manufaktur 2',
                ],
                (object) [
                  'id' => 'lantai7-382.5-194.43333435058594',
                  'nama' => 'Lantai 8 Proses Manufaktur 3',
                ],
                (object) [
                  'id' => 'lantai7-225.5-129.43333435058594',
                  'nama' => 'Lantai 8 Lab Riset 1 Ahli Engineer Management System',
                ],
                (object) [
                  'id' => 'lantai8-370.5-195.43333435058594',
                  'nama' => 'Lantai 8 EMS 2',
                ],
                (object) [
                  'id' => 'lantai8-215.5-120.43333435058594',
                  'nama' => 'Lantai 8 EMS 3',
                ],
                (object) [
                  'id' => 'lantai9-368.5-174.43333435058594',
                  'nama' => 'Lantai 8 Integra L2',
                ],
                (object) [
                  'id' => 'lantai9-221.5-111.43333435058594',
                  'nama' => 'Lantai 8 Studio',
                ],
                (object) [
                  'id' => 'lantai9-221.5-111.43333435058594',
                  'nama' => 'Lantai 8 Logistik',
                ],
                (object) [
                  'id' => 'lantai9-221.5-111.43333435058594',
                  'nama' => 'Lantai 8 Laboran',
                ],
                (object) [
                  'id' => 'lantai9-221.5-111.43333435058594',
                  'nama' => 'Lantai 8 APK',
                ],
                (object) [
                  'id' => 'lantai9-221.5-111.43333435058594',
                  'nama' => 'Lantai 8 Ruang Kelas',
                ],
                (object) [
                  'id' => 'lantai9-221.5-111.43333435058594',
                  'nama' => 'Lantai 9 Ruang Kelas',
                ],
                (object) [
                  'id' => 'lantai9-221.5-111.43333435058594',
                  'nama' => 'Lantai 18 Ruang Dekan',
                ],
                (object) [
                  'id' => 'lantai9-221.5-111.43333435058594',
                  'nama' => 'Lantai 18 Ruang Wakil Dekan 1',
                ],
                (object) [
                  'id' => 'lantai9-221.5-111.43333435058594',
                  'nama' => 'Lantai 18 Ruang Sekretariat',
                ],
                (object) [
                  'id' => 'lantai9-221.5-111.43333435058594',
                  'nama' => 'Lantai 18 Ruang Wakil Dekan 2',
                ],
                (object) [
                  'id' => 'lantai9-221.5-111.43333435058594',
                  'nama' => 'Lantai 18 Ruang Ketua Prodi Teknik Industri',
                ],
                (object) [
                  'id' => 'lantai9-221.5-111.43333435058594',
                  'nama' => 'Lantai 18 Ruang Ketua Prodi Sistem Informasi',
                ],
                (object) [
                  'id' => 'lantai9-221.5-111.43333435058594',
                  'nama' => 'Lantai 18 Ruang Rapat',
                ],
                (object) [
                  'id' => 'lantai9-221.5-111.43333435058594',
                  'nama' => 'Lantai 18 Ruang Secretary of Internal Affairs',
                ],
                (object) [
                  'id' => 'lantai9-221.5-111.43333435058594',
                  'nama' => 'Lantai 18 Ruang Ketua Prodi S2 Teknik Industri',
                ],
                (object) [
                  'id' => 'lantai9-221.5-111.43333435058594',
                  'nama' => 'Lantai 18 Ruang Ketua Prodi Teknik Logistik',
                ],
                (object) [
                  'id' => 'lantai9-221.5-111.43333435058594',
                  'nama' => 'Lantai 18 Ruang Ketua Prodi S2 Sistem Informasi',
                ],
                (object) [
                  'id' => 'lantai9-221.5-111.43333435058594',
                  'nama' => 'Lantai 18 Ruang Keuangan dan Sumber Daya',
                ],
                (object) [
                  'id' => 'lantai9-221.5-111.43333435058594',
                  'nama' => 'Lantai 18 Klinik JAD',
                ],
                
              ],
            ],
          ],
          'buttonText' => 'Simpan',
          'mode' => isset($aset) ? 'edit' : null,
        ];
      ?>
      <x-form :form=$form/>
    </div><!-- /.container-fluid -->
  </div>
@endsection