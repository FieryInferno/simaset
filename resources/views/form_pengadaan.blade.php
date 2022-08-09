@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
      <?php
        $form = [
          'action' => isset($aset) ? url('pengadaan_aset/' . $aset->id) : url('pengadaan_aset'),
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
            'keterangan' => [
              'label' => 'Keterangan',
              'type' => 'textarea',
              'value' => isset($aset) ? $aset->keterangan : null
            ],
            'jumlah' => [
              'label' => 'Jumlah',
              'type' => 'input',
              'value' => isset($aset) ? $aset->jumlah : null,
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