<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Carbon\Carbon;

class ErasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset the eras table
        DB::table('eras')->delete();

        // generate 36 dummy eras data
        $eras = [];
        $faker = Factory::create();
        $date = Carbon::now()->modify('-40 year');

        for ($i = 1; $i <= 20; $i++)
        {
            $image = "Post_Image_" . rand(1, 5) . ".jpg";
            $date->addDays(rand(1, 1345));
            $occuranceDate = clone($date);
            $createdDate   = clone($date);

            $eras[] = [
                'era_category_id'    => rand(1, 3),
                'title'        => $faker->sentence(rand(8, 12)),
                'excerpt'      => $faker->text(rand(250, 300)),
                'body'         => $faker->paragraphs(rand(10, 15), true),
                'slug'         => $faker->slug(),
                'image'        => rand(0, 1) == 1 ? $image : NULL,
                'created_at'   => $createdDate,
                'updated_at'   => $createdDate,
                'occurance_date' => $i < 30 ? $occuranceDate : ( rand(0, 1) == 0 ? NULL : $occuranceDate->addDays(4) ),
            ];
        }

        DB::table('eras')->insert($eras);
    }
}
