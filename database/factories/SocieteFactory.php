<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\societe;
use Faker\Generator as Faker;

$factory->define(societe::class, function (Faker $faker) {
    return [
        'nom' => $faker->name,
        'adresse' => $faker->streetAddress,
        'email' => $faker->unique()->safeEmail,
        'tel' =>$faker->e164PhoneNumber,
        'created_at'=> now(),
        'updated_at'=> now(),
    ];
});
