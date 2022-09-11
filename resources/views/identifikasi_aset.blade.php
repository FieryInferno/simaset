@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
      <?php
        $form = [
          'action' => url('identifikasi_aset'),
          'fields' => [
            'nama' => [
              'label' => 'Nama Aset',
              'type' => 'input',
              'value' => null,
            ],
            'kode' => [
              'label' => 'Kode',
              'type' => 'input',
              'value' => null,
            ],
          ],
          'buttonText' => 'Cari',
          'mode' => 'search',
        ];
      ?>
      <x-form :form=$form/>
    </div><!-- /.container-fluid -->
  </div>
@endsection