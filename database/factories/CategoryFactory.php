<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\model\Category;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        //
        'name' => $word,
        'slug' => Str::slug($word,'-'),

    ];
});
