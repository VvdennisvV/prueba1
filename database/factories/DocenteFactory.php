<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Docente::class, function (Faker $faker) {
    return [
        'nombre' => $faker->text(10),
        'apellido' => $faker->text(30),
        'profesion' => $faker->text(10),
        'direccion' => $faker->sentence(4),
        'celular' => rand(1,3000),
    ];
});
