<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Pemesanan\Pemesanan;
use App\Model\Transportasi\Transportasi;
use Faker\Generator as Faker;

$factory->define(App\Model\Route\Route::class, function (Faker $faker) {
   $word = $faker->word;
    return [
            'tujuan'=> $word,
            'rute_awal'=> $word,
            'rute_akhir'=> $word,
            'harga'=> rand(15000,100000),
            'id_transportasi'=> function()
            {
            	return Transportasi::all()->random();
            },
    ];
});
