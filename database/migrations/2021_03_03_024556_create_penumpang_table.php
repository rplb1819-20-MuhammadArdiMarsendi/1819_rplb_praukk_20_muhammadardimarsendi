<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenumpangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penumpang', function (Blueprint $table) {
           $table->id();
           $table->foreignId('route_id')->constrained('routes');
            $table->string('username',255);
            $table->string('password',255);
            $table->string('nama_penumpang',255);
            $table->text('alamat_penumpang');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin',['laki-laki','perempuan']);
            $table->string('telephone');
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
        Schema::dropIfExists('penumpang');
    }
}
