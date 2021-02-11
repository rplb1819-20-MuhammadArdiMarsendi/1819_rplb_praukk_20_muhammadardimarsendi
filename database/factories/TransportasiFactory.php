<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Transportasi\Transportasi;
use App\Model\Type_Transportasi\Type_Transportasi;

use Faker\Generator as Faker;

$factory->define(App\Model\Transportasi\Transportasi::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        	'kode'=>rand(1,100),
           'jumlah_kursi'=>rand(1,50),
            'keterangan'=>$word,
           'id_type_transportasi'=>function()
           
           {
				return Type_Transportasi::all()->random();         
           },
    ];
});
