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
            ],
            'kode' => [
              'label' => 'kode',
              'type' => 'input',
            ],
          ],
          'buttonText' => 'Cari',
        ];
      ?>
      <x-form :form=$form/>
    </div><!-- /.container-fluid -->
  </div>
@endsection