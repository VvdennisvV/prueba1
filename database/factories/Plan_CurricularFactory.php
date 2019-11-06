<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Plan_Curricular::class, function (Faker $faker) {
    return [
        'nombre' => $faker->text(10),
    ];
});
