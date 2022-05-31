<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlsusahaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klsusaha', function (Blueprint $table) {
            $table->id();
            $table->char('no_uji');
            $table->char('no_kend');
            $table->char('pemilik');
            $table->integer('jbb');
            $table->integer('orang');
            $table->char('x_kelas');
            $table->integer('n_ret');
            $table->char('x_katagori');
            $table->date('terbit');
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
        Schema::dropIfExists('klsusaha');
    }
}
