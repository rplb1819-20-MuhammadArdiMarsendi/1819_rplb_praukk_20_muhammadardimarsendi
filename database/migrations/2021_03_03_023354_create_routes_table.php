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
            $table->id();
            $table->foreignId('transportasi_id')->constrained('transportasi');
            $table->string('tujuan',255);
            $table->string('rute_awal',255);
            $table->string('rute_akhir',255);
            $table->integer('jam_cekin');
            $table->integer('jam_berangkat');
            $table->integer('harga');
           
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
