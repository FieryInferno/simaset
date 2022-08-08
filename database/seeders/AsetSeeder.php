<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsetSeeder extends Seeder
{
  public function run()
  {
    DB::table('aset')->insert([
      [
        'nama' => 'Seagate 27',
        'spesifikasi' => 'kecepatan transfer data yang tinggi dengan antarmuka USB 3.0 dengan menyambungkan ke port USB 3.0 SuperSpeed. USB 3.0 juga kompatibel dengan USB 2.0 untuk kompatibilitas sistem tambahan',
        'kode' => 'Harddisk',
        'lokasi' => 'lab 1',
        'jumlah' => '1',
        'gambar' => 'harddisk.jpg',
      ], [
        'nama' => 'Epson DS-410',
        'spesifikasi' => 'Take your business productivity and effi ciency to the next level with Epson WorkForce DS-410 scanner. Featuring a built-in Automatic Document Feeder, this compact scanner can easily scan stacks of business cards and documents of up to A3 size.',
        'kode' => 'Printer',
        'lokasi' => 'lab 1',
        'jumlah' => '1',
        'gambar' => 'printer.jpg',
      ],
    ]); 
  }
}
