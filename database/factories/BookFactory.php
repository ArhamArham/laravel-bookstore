<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'thumbnail' => 'b'.$faker->randomDigit,
        'price'=>$faker->numberBetween($min = 1000, $max = 9000),
        'description'=>$faker->text($maxNbChars = 200)

    ];
});
