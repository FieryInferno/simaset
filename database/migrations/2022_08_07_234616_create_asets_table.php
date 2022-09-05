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
      $table->string('unit');
      $table->string('spesifikasi')->nullable();
      $table->string('kode')->nullable();
      $table->string('lokasi')->nullable();
      $table->string('jumlah');
      $table->string('gambar')->nullable();
      $table->date('tanggal')->nullable();
      $table->string('keterangan')->nullable();
      $table->enum('tipe', ['pengadaan', 'maintenance'])->nullable();
      $table->enum('status', ['menunggu_diterima', 'ditolak', 'diterima'])->nullable();
      $table->timestamps();
    });
  }
  
  public function down()
  {
    Schema::dropIfExists('aset');
  }
};
