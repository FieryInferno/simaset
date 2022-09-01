<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('peminjaman', function (Blueprint $table) {
      $table->id();
      $table->string('nama');
      $table->string('nim');
      $table->string('email');
      $table->foreignId('aset_id')->constrained('aset')->onUpdate('cascade')->onDelete('cascade');
      $table->date('tanggal');
      $table->string('waktu');
      $table->enum('status', ['menunggu', 'diterima', 'ditolak']);
      $table->timestamps();
    });
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
};
