<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
           $table->increments('id');
            $table->string('tujuan');
            $table->string('rute_awal');
            $table->string('rute_akhir');
            $table->string('harga');
            $table->string('jumlah_kursi');
            $table->unsignedInteger('id_transportasi');
            $table->foreign('id')->references('id')->on('transportasis')->onDelete('cascade');
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
        Schema::dropIfExists('routes');
    }
}
