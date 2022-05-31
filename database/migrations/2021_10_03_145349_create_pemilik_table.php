<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemilikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemilik', function (Blueprint $table) {
            $table->id();
            $table->integer('lintrayek_id');
            $table->char('urut');
            $table->string('no_uji');
            $table->string('no_kend');
            $table->string('pemilik');
            $table->string('perusahaan');
            $table->string('alamat');
            $table->string('no_rangka');
            $table->string('mesin');
            $table->integer('seat');
            $table->integer('barang');
            $table->string('merk');
            $table->char('tahun');
            $table->integer('jeniskend_id');
            $table->date('hbs_uji');
            $table->string('no_sk');
            $table->date('tgl_sk');
            $table->date('akhir_sk');
            $table->string('no_kp');
            $table->date('tgl_kp');
            $table->date('akhir_kp');
            $table->date('terbit');
            $table->string('catatan');
            $table->char('ret_sk');
            $table->char('ret_kp');
            $table->char('denda_periode');
            $table->char('denda_admin');
            $table->string('pimpinan');
            $table->string('no_bend');
            $table->string('ket');
            $table->string('ket1');
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
        Schema::dropIfExists('pemilik');
    }
}
