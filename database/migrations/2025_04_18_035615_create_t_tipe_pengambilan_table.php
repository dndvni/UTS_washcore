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
        Schema::create('t_tipe_pengambilan', function (Blueprint $table) {
            $table->id('pengambilan_id'); //PK
            $table->string('nama_tipe_ambil'); // antar, ambil, cod
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_tipe_pengambilan');
    }
};
