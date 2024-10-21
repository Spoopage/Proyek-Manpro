<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaliTable extends Migration
{
    public function up()
    {
        Schema::create('wali', function (Blueprint $table) {
            $table->id('id_wali');
            $table->string('nama_wali', 100);
            $table->text('alamat')->nullable();
            $table->string('notelp', 14)->nullable();
            $table->string('hubungan', 50);
            $table->string('pekerjaan', 100)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('wali');
    }
}
