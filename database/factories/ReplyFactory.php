<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\model\Reply;
use App\model\Question;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [

        'body' => $faker->sentence,

        'question_id' => function(){
            return Question::all()->random();
        },
        'user_id' => function(){
            return User::all()->random();
        },
        //
    ];
});
