@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
      <?php
        $form = [
          'action' => isset($aset) ? url('maintenance_aset/' . $aset->id) : url('maintenance_aset'),
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
              'type' => 'input',
              'value' => isset($aset) ? $aset->lokasi : null,
            ],
            'gambar' => [
              'label' => 'Gambar',
              'type' => 'file',
              'value' => isset($aset) ? $aset->gambar : null,
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