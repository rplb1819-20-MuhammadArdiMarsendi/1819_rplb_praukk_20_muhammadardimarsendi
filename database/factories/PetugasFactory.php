<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;
use App\Model\Petugas\Petugas;
use App\Model\Level\Level;
use Illuminate\Support\Str;

$factory->define(App\Model\Petugas\Petugas::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        
        'username'=>$word,
        'password'=>encrypt('password'), // password
        'nama_petugas'=>$faker->name,
        

    ];
});
