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
        Schema::create('kontaks', function (Blueprint $table) {
            $table->id();
            $table->string('address', 255); // Alamat 
            $table->string('phone', 50); // Nomor telepon
            $table->string('email', 100); // Email 
            $table->string('whatsapp_url', 255)->nullable(); // Link Whatsapp (opsional)
            $table->string('instagram_url', 255)->nullable(); // Link Instagram (opsional)
            $table->string('youtube_url', 255)->nullable(); // Link YouTube (opsional)
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kontaks');
    }
};
