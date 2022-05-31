<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->id_kend();
            $table->integer('id_jnskend');
            $table->string('no_uji');
            $table->string('no_kend');
            $table->string('no_rangka');
            $table->string('mesin');
            $table->integer('orang');
            $table->string('barang');
            $table->string('merk');
            $table->string('tahun');
            $table->$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kendaraan');
    }
}
