<?php

use App\User;
use Illuminate\Support\Str;
use App\SoccerModels\Product;
use Faker\Generator as Faker;
use App\SoccerModels\ProductCategory;

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
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'verified'=>$faker->randomElement([User::VERIFIED_USER,User::UNVERIFIED_USER]),
        'verification_token'=> $verified == User::VERIFIED_USER ? null : User::generateVerificationCode(),
        'admin'=>$faker->randomElement([User::ADMIN_USER,User::REGULAR_USER]),
    ];
});

$factory->define(ProductCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->word->unique(),
        'description' => $faker->paragraph(1),
    ];
});

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word->unique(),
        'description' => $faker->paragraph(1),
        'status' => $faker->randomElement([Product::AVAILABLE_PRODUCT,Product::UNAVAILABLE_PRODUCT]),
        'image' => $faker->randomElement([Product::AVAILABLE_PRODUCT,Product::UNAVAILABLE_PRODUCT]),
    ];
});
