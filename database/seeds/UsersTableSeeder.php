<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset the users table
        // DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->delete();

        if (env('APP_ENV') === 'local')
        {
            // generate 3 users/author
            $faker = \Faker\Factory::create();

            DB::table('users')->insert([
                [
                    'name' => "Kazibwe Julius Junior",
                    'slug' => 'kazibwe-julius-junior',
                    'email' => "kazibwejuliusjunior@gmail.com",
                    'password' => bcrypt('admins3cret'),
                    'bio' => $faker->paragraph(1),
                    'remember_token' => Str::random(10),
                    'verified'=>$verified = $faker->randomElement([User::VERIFIED_USER,User::UNVERIFIED_USER]),
                    'verification_token'=> $verified == User::VERIFIED_USER ? null : User::generateVerificationCode(),
                    'admin'=>$faker->randomElement([User::ADMIN_USER]),
                ],
                [
                    'name' => "Male Paul",
                    'slug' => 'male-paul',
                    'email' => "mp@test.com",
                    'password' => bcrypt('s3cret'),
                    'bio' => $faker->paragraph(1),
                    'remember_token' => Str::random(10),
                    'verified'=>$verified = $faker->randomElement([User::VERIFIED_USER,User::UNVERIFIED_USER]),
                    'verification_token'=> $verified == User::VERIFIED_USER ? null : User::generateVerificationCode(),
                    'admin'=>$faker->randomElement([User::ADMIN_USER]),
                ],
                [
                    'name' => "Jjuuko Henry",
                    'slug' => 'jjuuku-henry',
                    'email' => "jh@test.com",
                    'password' => bcrypt('s3cret'),
                    'bio' => $faker->paragraph(1),
                    'remember_token' => Str::random(10),
                    'verified'=>$verified = $faker->randomElement([User::VERIFIED_USER,User::UNVERIFIED_USER]),
                    'verification_token'=> $verified == User::VERIFIED_USER ? null : User::generateVerificationCode(),
                    'admin'=>$faker->randomElement([User::ADMIN_USER]),
                ],
            ]);
        }
        else
        {
            DB::table('users')->insert([
                [
                    'name' => "Administrator",
                    'slug' => 'admin',
                    'email' => "admin@test.com",
                    'password' => bcrypt('admin'),
                    'bio' => "I'm an Administrator"
                ]
            ]);
        }
    }
}
