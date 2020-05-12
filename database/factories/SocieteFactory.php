<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\societe;
use App\User;
use Faker\Generator as Faker;

$factory->define(societe::class, function (Faker $faker) {
    return [
        'user_id' => User::get('id')->random(),
        'nom' => $faker->name,
        'adresse' => $faker->streetAddress,
        'email' => $faker->unique()->safeEmail,
        'tel' =>$faker->e164PhoneNumber,
        'created_at'=> now(),
        'updated_at'=> now(),
    ];
});
