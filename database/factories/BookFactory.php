<?php

use Faker\Generator as Faker;


$factory->define(App\book::class, function (Faker $faker) {
    return [
       	'publishing_company' => $faker->unique()->company,
        'image' => str_random(5) . '.jpg',
        'author'=> $faker->name,
        'pages' => rand(50,200),
        'price' => rand(50000, 150000),
        'publishing_year' => rand(2015,2019),
        'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});
