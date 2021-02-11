<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Petugas\Petugas;
use App\Model\Level\Level;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Petugas::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        'username'=>$word,
        'password'=>encrypt('password'), // password
        'nama_petugas'=>$faker->name,
        'id_level'=>function()
        {
        	return Level::all()->random();
        }

    ];
});
