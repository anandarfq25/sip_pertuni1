<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('judul_laporan');
            $table->text('isi_laporan');
            $table->date('tanggal_kejadian');
            $table->string('lokasi_kejadian');
            $table->string('instansi_tujuan');
            $table->string('kategori');
            $table->string('lampiran')->nullable(); // untuk menyimpan file
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};
