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
        Schema::create('mrs', function (Blueprint $table) {
            $table->id();
            $table->string('id_mrs');
            $table->string('spesifikasi');
            $table->date('tahun_pembuatan');
            $table->string('jenis_meter');
            $table->string('g_size');
            $table->string('tahun_akhir_sertifikasi');
            //$table->string('lokasi');
            //$table->string('status');
            $table->string('link');
            $table->date('path_qr');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mrs');
    }
};
