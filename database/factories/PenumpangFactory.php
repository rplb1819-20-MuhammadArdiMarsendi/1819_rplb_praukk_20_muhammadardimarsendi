<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Penumpang;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(App\Model\Penumpang\Penumpang::class, function (Faker $faker) {
	$word = $faker->word;
    return [
       'username'=> $word,
		'password'=>bcrypt('password'),
		'nama_penumpang'=>$faker->name,
		'alamat_penumpang'=>$faker->address,
		'tanggal_lahir'=>$faker->dateTimeThisCentury()->format('Y-m-d'),
		'jenis_kelamin'=>$word,
		'telephone'=>$faker->PhoneNumber,

    ];
});
