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
        Schema::create('historymrs', function (Blueprint $table) {
            $table->id();
            $table->string('idmrs');
            $table->string('id_mrs');
            $table->string('id_historymrs');
            $table->string('project');
            $table->string('spesifikasi');
            $table->string('jenis_meter');
            $table->string('stream');
            $table->string('qty_evc');
            $table->string('qty_psv_prv');
            $table->string('qty_filter_pv');
            $table->string('pnid');
            $table->date('tanggal_sertifikasi');
            $table->string('sertifikat_coiplo');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historymrs');
    }
};
