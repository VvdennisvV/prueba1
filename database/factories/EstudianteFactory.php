<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Estudiante::class, function (Faker $faker) {
    return [
        'nombre' => $faker->text(10),
        'apellido' => $faker->text(30),
        'IdCurso' => rand(1,10),
        'carrera' => $faker->text(10),
    ];
});
