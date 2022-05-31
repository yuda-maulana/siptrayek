<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrinsipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prinsip', function (Blueprint $table) {
            $table->id();
            $table->date('terbit');
            $table->date('tanggal');
            $table->char('urut');
            $table->char('kode');
            $table->char('no_rekom');
            $table->date('tgl_rekom');
            $table->string('pemilik');
            $table->string('perusahaan');
            $table->string('alamat');
            $table->string('mohon');
            $table->string('jenis');
            $table->char('retri');
            $table->char('leges');
            $table->string('catatan');
            $table->string('trayek');
            $table->string('merk');
            $table->char('tahun');
            $table->integer('orang');
            $table->char('no_mohon');
            $table->char('leges_ket');
            $table->date('tgl_mohon');
            $table->char('no_bend');
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
        Schema::dropIfExists('prinsip');
    }
}
