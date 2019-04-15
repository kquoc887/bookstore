<?php

use Faker\Generator as Faker;

$factory->define(App\supplier::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->company,
    ];
});
