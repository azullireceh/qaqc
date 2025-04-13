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
        Schema::create('materialmrs', function (Blueprint $table) {
            $table->id();
            $table->string('idmrs');
            $table->string('id_mrs');
            $table->string('tag_number');
            $table->string('description');
            $table->string('requirment');
            $table->string('size');
            $table->string('qty');
            $table->string('remark');
            $table->string('sertifikat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materialmrs');
    }
};
