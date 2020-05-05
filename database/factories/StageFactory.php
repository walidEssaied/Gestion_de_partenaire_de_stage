<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\stage;
use App\User;
use Faker\Generator as Faker;

$factory->define(stage::class, function (Faker $faker) {
    return [
        'user_id' => User::get('id')->random(),
        'type' => $faker->name,
        'date_debut' => $faker->date,
        'date_fin'=> $faker->date,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
