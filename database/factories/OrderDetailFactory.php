<?php

use Faker\Generator as Faker;

$factory->define(App\oderdetail::class, function (Faker $faker) {
    return [
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
