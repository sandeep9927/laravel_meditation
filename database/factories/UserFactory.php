<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Blog;
use App\Story;
use App\FaqMgmt;
use App\FaqCatMgmt;
use App\Department;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'role_id' =>3,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});


$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(20),
        'short_description' => $faker->sentence(100),
        'description' => $faker->sentence(200),
        'status' =>'active',
        'techinque_id' => 2,
        'type' =>1,
        
    ];
});


$factory->define(Story::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(20),
        'short_description' => $faker->sentence(100),
        'description' => $faker->sentence(100),
        'status' =>'active',
        'writer_id' =>3,
        'dep_id' =>2,
        
    ];
});

$factory->define(FaqMgmt::class,function(Faker $faker){
    return [

        'title' => $faker->sentence(20),
        'short_description' => $faker->sentence(100),
        'description' => $faker->sentence(200),
        'status' =>'active',
        'faq_cat_id' =>3,
        
    ];
});


$factory->define(FaqCatMgmt::class,function(Faker $faker){
    return [

        'title' => $faker->sentence(20),
        'status' =>'active',
 
    ];
});

$factory->define(Department::class,function(Faker $faker){
    return [

        'title' => $faker->sentence(6),
        'status' =>'active',
 
    ];
});