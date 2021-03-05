<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Type_Transportasi\Type_Transportasi;
use Faker\Generator as Faker;

	$factory->define(App\Model\Type_Transportasi\Type_Transportasi::class, function (Faker $faker) {
     $word = $faker->word;
    return [
        'nama_type'=>$faker->randomElement(['kereta' ,'pesawat']),
        'keterangan'=>$word,
    ];
});
