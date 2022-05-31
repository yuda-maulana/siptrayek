<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsahaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usaha', function (Blueprint $table) {
            $table->id();
            $table->char('lintasan');
            $table->integer('urut');
            $table->char('no_uji');
            $table->char('no_kend');
            $table->char('pemilik');
            $table->char('alamat');
            $table->char('perusahaan');
            $table->char('kecamatan');
            $table->char('layanan');
            $table->char('domisili');
            $table->char('status');
            $table->char('rangka');
            $table->char('mesin');
            $table->integer('jbb');
            $table->integer('orang');
            $table->integer('barang');
            $table->char('merk');
            $table->char('tahun');
            $table->char('jenis');
            $table->string('kategori');
            $table->char('no_sk');
            $table->date('tgl_sk');
            $table->date('akh_sk');
            $table->char('no_kp');
            $table->integer('urut_kp');
            $table->date('tgl_kp');
            $table->date('akh_kp');
            $table->date('terbit');
            $table->integer('retri');
            $table->integer('per');
            $table->integer('periode');
            $table->integer('bulan');
            $table->integer('adminis');
            $table->char('no_bend');
            $table->char('no_kartu');
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
        Schema::dropIfExists('usaha');
    }
}
