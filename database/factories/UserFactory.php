<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
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
        'user_type'=>'seeker',
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'user_id' => App\User::all()->random()->id,
           'cname'=>$title=$faker->company,
            'slug'=>Str::slug($title),
          'address'=>$faker->address,
           'phone'=>$faker->phoneNumber,
         'website'=>$faker->domainName,
          'logo'=>'avatar/company-logo.png',
         'cover_photo'=>'cover/cover-photo.jpg',
         'slogan'=>'build skill earn money',
         'description'=>$faker->paragraph(rand(2,10)),
    ];
});
$factory->define(App\Job::class, function (Faker $faker) {
    return [
        'user_id' =>App\user::all()->random()->id,
        'company_id' =>App\Company::all()->random()->id,
        'title' =>$name=$faker->text,
        'slug'=>Str::slug($name),
        'roles'=>$faker->text,
        'description' =>$faker->paragraph(rand(2,10)),
        'category_id'=>rand(0,1),
        'position' =>$faker->jobTitle,
        'status'=>rand(0,1),
        'type'=>'Full Time',
        'last_date'=>$faker->dateTime,
        'address'=>$faker->address,
    ];
});
