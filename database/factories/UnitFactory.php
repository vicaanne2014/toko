<?php

use Faker\Generator as Faker;

$factory->define(App\Unit::class, function (Faker $faker) {
    return [ 
        'unit' => rtrim($faker->sentence(rand(5,10)), ".")
    ];
});
