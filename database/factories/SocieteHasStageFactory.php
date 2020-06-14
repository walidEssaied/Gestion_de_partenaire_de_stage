<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\societe_has_stage;
use App\societe;
use App\stage;
use Faker\Generator as Faker;

$factory->define(societe_has_stage::class, function (Faker $faker) {
    return [
        'idsociete' => societe::get('id')->random(),
        'idstage' => stage::get('id')->random(),
    ];
});
