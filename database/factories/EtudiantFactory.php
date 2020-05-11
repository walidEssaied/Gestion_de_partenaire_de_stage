<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\etudiant;
use App\societe;
use Faker\Generator as Faker;

$factory->define(etudiant::class, function (Faker $faker) {
    return [
        'cin'=>$faker->ean8,
        'Nom' => $faker->firstName,
        'Prenom' => $faker->lastName,
        'adresse' => $faker->address,
        'tel' => $faker->e164PhoneNumber,
        'email' => $faker->unique()->safeEmail,
        'niveau' => $faker->name,
        //'id' => $faker->,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
