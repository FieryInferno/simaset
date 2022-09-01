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
                  'nama' => 'Lantai 1 Ruang Tata Usaha FRI',
                ],
                (object) [
                  'id' => 'lantai1-440.5-138.43333435058594',
                  'nama' => 'Lantai 1 Ruang Tata Usaha FTE',
                ],
                (object) [
                  'id' => 'lantai1-535.5-149.43333435058594',
                  'nama' => 'Lantai 1 Ruang Tata Usaha FIF',
                ],
                (object) [
                  'id' => 'lantai1-330.5-490.43333435058594',
                  'nama' => 'Lantai 1 Ruang Kegiatan Mahasiswa FRI',
                ],
                (object) [
                  'id' => 'lantai1-547.5-489.43333435058594',
                  'nama' => 'Lantai 1 Ruang Kegiatan Mahasiswa FTE',
                ],
                (object) [
                  'id' => 'lantai1-604.5-452.43333435058594',
                  'nama' => 'Lantai 1 Ruang Kegiatan Mahasiswa FIF',
                ],
                (object) [
                  'id' => 'lantai3-392.5-178.43333435058594',
                  'nama' => 'Lantai 3 Ruang Kegiatan Dosen',
                ],
                (object) [
                  'id' => 'lantai3-688.5-295.43333435058594',
                  'nama' => 'Lantai 3 Ruang Sidang Skripsi',
                ],
                (object) [
                  'id' => 'lantai4-328.5-198.43333435058594',
                  'nama' => 'Lantai 4 Ruang Kegiatan Dosen',
                ],
                (object) [
                  'id' => 'lantai4-420.5-175.43333435058594',
                  'nama' => 'Lantai 4 Ruang Sidang Skripsi',
                ],
                (object) [
                  'id' => 'lantai5-312.5-205.43333435058594',
                  'nama' => 'Lantai 5 Ruang Kegiatan Dosen',
                ],
                (object) [
                  'id' => 'lantai5-402.5-184.43333435058594',
                  'nama' => 'Lantai 5 Ruang Sidang Skripsi',
                ],
                (object) [
                  'id' => 'lantai6-354.5-190.43333435058594',
                  'nama' => 'Lantai 6 Common Lab',
                ],
                (object) [
                  'id' => 'lantai6-261.5-87.43333435058594',
                  'nama' => 'Lantai 6 Lab Information Science and Engineering',
                ],
                (object) [
                  'id' => 'lantai6-294.5-68.43333435058594',
                  'nama' => 'Lantai 6 Lab Data Science',
                ],
                (object) [
                  'id' => 'lantai6-375.5-47.43333435058594',
                  'nama' => 'Lantai 6 Lab Software Enginering',
                ],
                (object) [
                  'id' => 'lantai7-382.5-194.43333435058594',
                  'nama' => 'Lantai 7 Common Lab',
                ],
                (object) [
                  'id' => 'lantai7-225.5-129.43333435058594',
                  'nama' => 'Lantai 7 Kelas',
                ],
                (object) [
                  'id' => 'lantai8-370.5-195.43333435058594',
                  'nama' => 'Lantai 8 Integra Lab',
                ],
                (object) [
                  'id' => 'lantai8-215.5-120.43333435058594',
                  'nama' => 'Lantai 8 Lab Riset',
                ],
                (object) [
                  'id' => 'lantai9-368.5-174.43333435058594',
                  'nama' => 'Lantai 9 Integra Lab',
                ],
                (object) [
                  'id' => 'lantai9-221.5-111.43333435058594',
                  'nama' => 'Lantai 9 Kelas',
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