<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\etudiant_has_stage;
use Faker\Generator as Faker;
use App\etudiant;
use App\stage;
$factory->define(etudiant_has_stage::class, function (Faker $faker) {
    return [
        'idetud' => etudiant::get('id')->random(),
        'idstage' => stage::get('id')->random(),
    ];
});
