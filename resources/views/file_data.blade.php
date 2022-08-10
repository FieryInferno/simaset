<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Filedata</title>
  <link rel="stylesheet" href="{{ public_path('dist/css/adminlte.min.css') }}">
</head>
<body>
  <div style="font-size: 11px">
    <?php
      $columns = [];
      
      if (isset($data[0]->tanggal)) $columns['Tanggal'] = 'tanggal';
      if (isset($data[0]->nama)) $columns['Nama Aset'] = 'nama';
      if (isset($data[0]->spesifikasi)) $columns['Spesifikasi'] = 'spesifikasi';
      if (isset($data[0]->kode)) $columns['Kode'] = 'kode';
      if (isset($data[0]->lokasi)) $columns['Lokasi'] = 'lokasi';
      if (isset($data[0]->jumlah)) $columns['jumlah'] = 'jumlah';
      if (isset($data[0]->keterangan)) $columns['Keterangan'] = 'keterangan';
      if (isset($data[0]->status)) $columns['Status'] = ['render' => function ($data) {
        switch ($data->status) {
          case 'menunggu_diterima':
            return 'Menunggu diterima';
            break;
          case 'ditolak':
            return 'Ditolak';
            break;
          
          default:
            # code...
            break;
        }
      }];
      if (isset($data[0]->gambar)) $columns['Gambar'] = ['render' => function ($data) { ?>
        <img src="{{ public_path('images/' . $data->gambar) }}" width="100%"/>
      <?php }];
    ?>

    <h2 class="text-center">{{$berkas . ' Aset ' . $bulan . ' ' . $tahun}}</h2>
    <table class="table" id="table">
      <thead>
        <tr>
          @foreach ($columns as $key => $value)
            <th <?= $key === 'Gambar' ? 'width="30%"' : ''; ?>>{{$key}}</th>
          @endforeach
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $key)
          <tr>
            @foreach ($columns as $keyTh => $valueTh)
              <td>
                @if (isset($valueTh['render']))
                  {{$valueTh['render']($key)}}
                @else
                  {{$key->$valueTh}}
                @endif
              </td>
            @endforeach
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
