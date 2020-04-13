<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Societe;
use Faker\Generator as Faker;

$factory->define(Societe::class, function (Faker $faker) {
    return [

        'nom' => $faker->name,
        'adresse' => $faker->streetAddress,
        'tel' =>$faker->e164PhoneNumber,
        'email' => $faker->unique()->safeEmail,
        'created_at'=> now(),
        'updated_at'=> now(),
    ];
});
