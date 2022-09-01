<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenghapusanAset extends Model
{
  use HasFactory;
  protected $table = 'aset';
  protected $fillable = ['nama', 'spesifikasi', 'kode', 'lokasi', 'jumlah', 'gambar', 'tanggal', 'keterangan', 'tipe'];
}
