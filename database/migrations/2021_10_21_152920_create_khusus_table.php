<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhususTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khusus', function (Blueprint $table) {
            $table->id();
            $table->char('urut');
            $table->char('no_uji');
            $table->char('no_kend');
            $table->string('pemilik');
            $table->string('perusahaan');
            $table->string('alamat');
            $table->string('rangka');
            $table->string('mesin');
            $table->string('merk');
            $table->char('tahun');
            $table->string('jenis');
            $table->string('layanan');
            $table->integer('dy_akt');
            $table->string('no_sk');
            $table->date('tgl_sk');
            $table->date('akhir_sk');
            $table->string('no_kp');
            $table->date('tgl_kp');
            $table->date('akhir_kp');
            $table->date('terbit');
            $table->string('catatan');
            $table->char('retri');
            $table->char('periode');
            $table->char('administrasi');
            $table->string('pimpinan');
            $table->string('keperluan');
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
        Schema::dropIfExists('khusus');
    }
}
