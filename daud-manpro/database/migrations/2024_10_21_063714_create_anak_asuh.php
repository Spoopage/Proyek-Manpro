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
        Schema::create('anak_asuh', function (Blueprint $table) {
            $table->id('id_anak_asuh');
            $table->string('nama_anak_asuh', 128);
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->date('tgl_masuk');
            $table->foreignId('id_wali')->nullable()->constrained('wali')->onDelete('set null');
            $table->foreignId('id_pengasuh')->nullable()->constrained('pengasuh')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anak_asuh');
    }
};
