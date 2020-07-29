<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mailbox;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Mailbox::class, function (Faker $faker) {
    $type = array('Admin','My Team','Internal Mail','External Mail');
    return [
        'user_id' => rand(1,9),
        'type' => $type[rand(0,3)],
        'subject' => $faker->sentence(6),
        'parent' =>0,
        'message' => $faker->paragraph(3),
    ];
});
