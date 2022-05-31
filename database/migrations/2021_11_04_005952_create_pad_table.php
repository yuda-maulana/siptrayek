<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pad', function (Blueprint $table) {
            $table->id();
            $table->char('kod_rek');
            $table->char('no_rek');
            $table->char('nama_rek');
            $table->date('tanggal');
            $table->integer('no_bukti');
            $table->char('grup');
            $table->integer('n_grup');
            $table->integer('n_sub');
            $table->integer('urut');
            $table->char('uraian');
            $table->integer('unit');
            $table->integer('retribusi');
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pad');
    }
}
