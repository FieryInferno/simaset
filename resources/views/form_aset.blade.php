@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
      <?php
        $form = [
          'action' => isset($aset) ? url('aset/' . $aset->id) : url('aset'),
          'fields' => [
            'nama' => [
              'label' => 'Nama Aset',
              'type' => 'input',
              'value' => isset($aset) ? $aset->nama : null,
            ],
            'spesifikasi' => [
              'label' => 'Spesifikasi',
              'type' => 'textarea',
              'value' => isset($aset) ? $aset->spesifikasi : null,
            ],
            'kode' => [
              'label' => 'kode',
              'type' => 'input',
              'value' => isset($aset) ? $aset->kode : null
            ],
            'lokasi' => [
              'label' => 'Lokasi Aset',
              'type' => 'input',
              'value' => isset($aset) ? $aset->lokasi : null
            ],
            'jumlah' => [
              'label' => 'Jumlah',
              'type' => 'input',
              'value' => isset($aset) ? $aset->jumlah : null,
            ],
            'gambar' => [
              'label' => 'Gambar',
              'type' => 'file',
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