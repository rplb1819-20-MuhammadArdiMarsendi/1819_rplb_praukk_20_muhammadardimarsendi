<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Level\Level;
use Faker\Generator as Faker;

$factory->define(App\Model\Level\Level::class, function (Faker $faker) {
    return [
        'nama_level'=>$faker->name,
    ];
});
