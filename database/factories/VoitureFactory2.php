<?php

use Faker\Generator as Faker;

use App\Http\Model\Voiture;

$factory->define(Voiture::class, function (Faker $faker) {
    return [
       'nom' => $faker->nom,
       'marque' => $faker->marque,
   ];
});
