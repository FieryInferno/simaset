@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
      <?php
        $form = [
          'action' => url('aset'),
          'fields' => [
            'nama' => [
              'label' => 'Nama Aset',
              'type' => 'input',
            ],
            'spesifikasi' => [
              'label' => 'Spesifikasi',
              'type' => 'textarea',
            ],
            'kode' => [
              'label' => 'kode',
              'type' => 'input',
            ],
            'lokasi' => [
              'label' => 'Lokasi Aset',
              'type' => 'input',
            ],
            'jumlah' => [
              'label' => 'Jumlah',
              'type' => 'input',
            ],
            'gambar' => [
              'label' => 'Gambar',
              'type' => 'file',
            ],
          ],
          'buttonText' => 'Simpan',
        ];
      ?>
      <x-form :form=$form/>
    </div><!-- /.container-fluid -->
  </div>
@endsection