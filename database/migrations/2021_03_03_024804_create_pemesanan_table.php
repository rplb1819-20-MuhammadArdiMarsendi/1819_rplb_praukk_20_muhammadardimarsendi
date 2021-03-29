<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('petugas_id')->constrained('petugas');
            $table->foreignId('route_id')->constrained('routes');
            $table->foreignId('penumpang_id')->constrained('penumpang');           
            $table->date('tanggal_pemesanan');
            $table->string('tempat_pemesanan');
            $table->integer('qty');
            $table->date('tanggal_berangkat');
            $table->string('bukti_pembayaran',255);
            $table->boolean('status')->nullable()->default(false);
            $table->integer('total_bayar');
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
        Schema::dropIfExists('pemesanan');
    }
}
