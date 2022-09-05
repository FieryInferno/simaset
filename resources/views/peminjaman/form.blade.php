@extends('template')
@section('content')
  <div class="content">
    <div class="container-fluid">
      <?php
        $form = [
          'action' => isset($peminjaman) ? url('peminjaman_aset/' . $peminjaman->id) : url('peminjaman_aset'),
          'fields' => [
            'nama' => [
              'label' => 'Nama Peminjam',
              'type' => 'input',
              'value' => isset($peminjaman) ? $peminjaman->nama : null,
            ],
            'unit' => [
              'label' => 'Unit',
              'type' => 'input',
              'value' => isset($peminjaman) ? $peminjaman->unit : null,
            ],
            'nim' => [
              'label' => 'NIM/NIP',
              'type' => 'input',
              'value' => isset($peminjaman) ? $peminjaman->nim : null,
            ],
            'email' => [
              'label' => 'email',
              'type' => 'email',
              'value' => isset($peminjaman) ? $peminjaman->email : null
            ],
            'aset_id' => [
              'label' => 'Nama Aset',
              'type' => 'select',
              'value' => isset($peminjaman) ? $peminjaman->aset_id : null,
              'data' => $aset,
            ],
            'tanggal' => [
              'label' => 'Tanggal',
              'type' => 'date',
              'value' => isset($peminjaman) ? $peminjaman->tanggal : null,
            ],
            'waktu' => [
              'label' => 'Waktu',
              'type' => 'input',
              'value' => isset($peminjaman) ? $peminjaman->waktu : null,
            ],
          ],
          'buttonText' => 'Simpan',
          'mode' => isset($peminjaman) ? 'edit' : null,
        ];
      ?>
      <x-form :form=$form/>
    </div><!-- /.container-fluid -->
  </div>
@endsection