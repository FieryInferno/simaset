<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('aset', function (Blueprint $table) {
      $table->id();
      $table->string('nama');
      $table->string('spesifikasi');
      $table->string('kode');
      $table->string('lokasi');
      $table->string('jumlah');
      $table->string('gambar');
      $table->timestamps();
    });
  }
  
  public function down()
  {
    Schema::dropIfExists('aset');
  }
};
