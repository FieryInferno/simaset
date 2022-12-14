<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
  use HasFactory;
  protected $table = 'peminjaman';

  public function aset()
  {
    return $this->hasOne(Aset::class, 'id', 'aset_id');
  }
}
