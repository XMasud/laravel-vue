<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->sentence,

    ];
});

//$rate = random_int(1, 10);
$factory->define(App\Rating::class, function (Faker $faker) {
    return [
        'rating' => $faker->numberBetween($min = 1, $max = 10),
        'book_id' => factory(App\Book::class)->create()->id,
    ];
});