<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tutorizado;
use Faker\Generator as Faker;

$factory->define(Tutorizado::class, function (Faker $faker) {
    return [
        'verificado' => $faker->boolean($chanceOfGettingTrue = 80),
        'verificadoToken' => Str::random(10)
    ];
});
