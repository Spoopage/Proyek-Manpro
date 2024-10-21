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
        Schema::create('pengasuh', function (Blueprint $table) {
            $table->id('id_pengasuh');
            $table->string('nama', 128);
            $table->string('notelp', 14);
            $table->date('tgl_masuk');
            $table->string('pekerjaan_pengasuh', 45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengasuh');
    }
};