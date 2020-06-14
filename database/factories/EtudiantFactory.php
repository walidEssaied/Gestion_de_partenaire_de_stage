<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\etudiant;
use App\societe;
use App\User;
use Faker\Generator as Faker;

$factory->define(etudiant::class, function (Faker $faker) {
    return [
        'user_id' => User::get('id')->random(),
        'cin'=>$faker->ean8,
        'Nom' => $faker->firstName,
        'Prenom' => $faker->lastName,
        'adresse' => $faker->address,
        'tel' => $faker->e164PhoneNumber,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'niveau' => $faker->name,
        //'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'idsociete' => societe::get('id')->random(),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
