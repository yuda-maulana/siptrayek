<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukubesarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukubesar', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->char('kode_rek');
            $table->char('nama_rek');
            $table->date('tgl_terima');
            $table->integer('jml_terima');
            $table->date('tgl_setor');
            $table->integer('no_setor');
            $table->integer('jm_tg_i');
            $table->integer('jm_tg_l');
            $table->integer('jm_stg_i');
            $table->integer('jm_bl_i');
            $table->integer('jm_bl_l');
            $table->integer('jm_sbl_i');
            $table->integer('target_id');
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
        Schema::dropIfExists('bukubesar');
    }
}
