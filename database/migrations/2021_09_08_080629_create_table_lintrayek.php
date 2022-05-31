<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLintrayek extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lintrayek', function (Blueprint $table) {
            $table->id();
            $table->char('kode');
            $table->string('lintasan');
            $table->integer('alokasi');
            $table->integer('realisasi');
            $table->integer('aktif');
            $table->integer('nonaktif');
            $table->string('rute');
            $table->string('jenis');
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
        Schema::dropIfExists('lintrayek');
    }
}
