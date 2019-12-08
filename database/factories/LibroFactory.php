<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\Libro;//modelo que hacer referencnia para crear factori
use Faker\Generator as Faker;//modelo que crear facker

$factory->define(Libro::class, function (Faker $faker) {
    return [
        //
        'titulo'=> $faker-> name,//repositorio de github listas de faker que se ppueden utilizar

        'autor' => $faker -> name,
        'cantidad'=>$faker->randomDigit   ,
        'editorial'=>$faker->name,


    ];
});
