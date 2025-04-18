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
        Schema::create('t_pegawai', function (Blueprint $table) {
            $table->id('pegawai_id'); // PK
            $table->unsignedBigInteger('user_id')->index(); // FK ke table user 
            $table->string('nama_pegawai'); // nama pegawai lengkap 
            $table->string('email')->unique(); // email hrs unique
            $table->bigInteger('no_telepon'); // nomor HP
            $table->text('alamat'); // alamat pegawai 
            $table->timestamps();

            // Relasi Foreign Keysya
            $table->foreign('user_id')->references('user_id')->on('t_user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_pegawai');
    }
};
