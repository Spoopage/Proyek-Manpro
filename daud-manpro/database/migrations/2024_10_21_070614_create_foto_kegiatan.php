<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoKegiatanTable extends Migration
{
    public function up()
    {
        Schema::create('foto_kegiatan', function (Blueprint $table) {
            $table->id('id_foto');
            $table->foreignId('id_kegiatan')->constrained('kegiatan')->onDelete('cascade'); // FK ke tabel kegiatan
            $table->string('path_foto'); // Path foto
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('foto_kegiatan');
    }
}
