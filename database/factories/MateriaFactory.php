<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Materia::class, function (Faker $faker) {
    return [
        'nombre' => $faker->text(10),
        'profesor' => rand(1,10),
        'curricula' => rand(1,4),
        'IdCurso' => rand(1,10),
    ];
});
