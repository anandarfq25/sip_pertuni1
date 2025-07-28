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
        Schema::create('strukturs', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama anggota struktur
            $table->string('position'); // Posisi atau jabatan
            $table->string('photo')->nullable(); // Nama file foto anggota, bisa null
            $table->text('description')->nullable(); // Deskripsi tugas atau peran, bisa null
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('strukturs');
    }
};
