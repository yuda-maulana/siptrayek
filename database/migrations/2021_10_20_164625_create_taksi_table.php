<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taksi', function (Blueprint $table) {
            $table->id();
            $table->char('urut');
            $table->char('no_uji');
            $table->char('no_kend');
            $table->string('pemilik');
            $table->string('perusahaan');
            $table->string('alamat');
            $table->string('rangka');
            $table->string('mesin');
            $table->char('orang');
            $table->char('barang');
            $table->string('merk');
            $table->char('tahun');
            $table->string('jenis_kendaraan');
            $table->char('no_sk');
            $table->date('tgl_sk');
            $table->date('akhir_sk');
            $table->char('no_kp');
            $table->date('tgl_kp');
            $table->date('akhir_kp');
            $table->date('terbit');
            $table->string('catatan');
            $table->char('retri');
            $table->char('periode');
            $table->char('administrasi');
            $table->string('pimpinan');
            $table->char('no_bend');
            $table->string('ket');
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
        Schema::dropIfExists('taksi');
    }
}
