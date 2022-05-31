<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsidentilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insidentil', function (Blueprint $table) {
            $table->id();
            $table->char('urut');
            $table->string('no_uji');
            $table->string('no_kend');
            $table->string('pemilik');
            $table->string('perusahaan');
            $table->string('alamat');
            $table->string('merk');
            $table->char('tahun');
            $table->date('habis_uji');
            $table->date('terbit');
            $table->string('catatan');
            $table->string('retri');
            $table->string('leges');
            $table->string('maksud');
            $table->string('tujuan');
            $table->date('tgl_awal_perjalanan');
            $table->date('tgl_akhir_perjalanan');
            $table->date('tanggal');
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
        Schema::dropIfExists('insidentil');
    }
}
