<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekomendasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekomendasi', function (Blueprint $table) {
            $table->primary('id');
            $table->date('terbit');
            $table->char('urut');
            $table->string('pemilik');
            $table->string('perusahaan');
            $table->string('alamat');
            $table->string('mohon');
            $table->string('layanan');
            $table->string('jenis');
            $table->char('jumlah');
            $table->char('retri');
            $table->char('leges');
            $table->string('catatan');
            $table->string('trayek');
            $table->string('sifat');
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
        Schema::dropIfExists('rekomendasi');
    }
}
