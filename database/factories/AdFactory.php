<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/


$factory->define(\App\Modules\Ad\Models\Ad::class, function (Faker $faker) {
    $items = ['free', 'paid'];
    return [
        'title' => $faker->title,
        'category_id' => $faker->numberBetween(1, 20),
        'description' => $faker->sentence,
        'start_date' => $faker->date,
        'status' => $items[array_rand($items)],
    ];
});
