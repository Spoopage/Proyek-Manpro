<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonasiTable extends Migration
{
    public function up()
    {
        Schema::create('donasi', function (Blueprint $table) {
            $table->id('id_donasi');
            $table->string('item_donasi', 100);
            $table->date('tgl_donasi');
            $table->decimal('jumlah_donasi', 10, 2)->nullable();
            $table->text('keterangan')->nullable();
            $table->foreignId('id_donatur')->nullable()->constrained('donatur')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('donasi');
    }
}
