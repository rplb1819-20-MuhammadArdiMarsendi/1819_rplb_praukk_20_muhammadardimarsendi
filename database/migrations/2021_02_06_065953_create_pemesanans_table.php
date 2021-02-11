<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
           $table->increments('id');
            $table->string('kode_pemesanan');
            $table->string('tanggal_pemesanan');
            $table->string('tempat_pemesanan');
             //FOREIGN PELANGGAN
            $table->unsignedBigInteger('id_pelanggan');
            $table->integer('kode_kursi');
            //FOREIGN ROUTE
            $table->unsignedBigInteger('id_rute');
            //
            $table->string('tujuan');
            $table->date('tanggal_berangkat');
            $table->string('jam_cekin');
            $table->string('jam_berangkat');
            $table->string('total_bayar');
            //FOREIGN PETUGAS
            $table->unsignedBigInteger('id_petugas');
            //
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
        Schema::dropIfExists('pemesanans');
    }
}
