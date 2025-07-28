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
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul artikel
            $table->text('content'); // Isi artikel
            $table->string('slug')->unique(); // URL-friendly title
            $table->string('media')->nullable(); // Nama file gambar, bisa null
            $table->timestamp('published_at')->nullable(); // Waktu publikasi artikel, bisa null
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikels');
    }
};
