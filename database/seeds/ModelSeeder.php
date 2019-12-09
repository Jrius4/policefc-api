<?php


use App\User;
use App\Video;
use Faker\Factory;
use App\WallOfFame;
use App\Achievement;
use App\EraCategory;
use App\MatchReport;
use App\VideoCategory;
use App\SoccerModels\Shop;
use App\SoccerModels\Team;
use App\SoccerModels\Match;
use App\WallOfFameCategory;
use App\AchievementCategory;
use App\SoccerModels\Player;
use App\SoccerModels\Product;
use Illuminate\Database\Seeder;
use App\SoccerModels\PlayerFoot;
use Illuminate\Support\Facades\DB;
use App\SoccerModels\SupportMember;
use App\SoccerModels\PlayerPosition;
use App\SoccerModels\ProductCategory;
use App\SoccerModels\SocialMediaName;
use Illuminate\Support\Facades\Schema;
use App\SoccerModels\PlayerSocialMediaLink;
use App\SoccerModels\SupportMemberPosition;
use App\SoccerModels\SupportMemberSocialMediaLink;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(env('APP_ENV') === 'local')
        {
            // DB::statement('SET FOREIGN_KEY_CHECKS = 0');
            if (env('DB_CONNECTION') === 'pgsql') {
                Schema::disableForeignKeyConstraints();
            }
            else {
                Schema::disableForeignKeyConstraints();
            }



            $faker =Factory::create();
            User::truncate();
            $this->call(UsersTableSeeder::class);
            ProductCategory::truncate();
            Product::truncate();
            Shop::truncate();
            Team::truncate();
            Match::truncate();
            MatchReport::truncate();
            DB::table('match_team')->truncate();
            SocialMediaName::truncate();
            PlayerFoot::truncate();
            PlayerPosition::truncate();
            Player::truncate();
            PlayerSocialMediaLink::truncate();
            SupportMemberPosition::truncate();
            SupportMember::truncate();
            SupportMemberSocialMediaLink::truncate();


            $usersQty = 15;
            $productCategoriesQty = 5;
            $productQty = 10;
            $shopQty = 4;
            $teamQty = 6;
            $matchQty = 10;
            $matchReportQty = 8;
            $socialMediaNameQty = 3;
            $playerFootQty = 4;
            $playerPostionQty = 10;
            $playerCategoryQty = 4;
            $playerQty = 10;
            $playerSocialMediaLinkQty = 8;
            $supportMemberPositionQty = 2;
            $supportMemberQty = 8;
            $supportMemberSocialMediaLinkQty = 5;
            $achievementCategoryQty = 5;
            $achievementQty = 8;
            $eraCategoryQty = 5;
            $eraQty = 8;
            $videoCategoryQty = 15;
            $videoQty = 6;
            $wallOfFameCategoryQty = 4;
            $wallOfFameQty = 8;

            factory(User::class,$usersQty)->create();
            factory(ProductCategory::class,$productCategoriesQty)->create();
            factory(Product::class,$productQty)->create()->each(
                function($product){
                    $categories = ProductCategory::all()->random(mt_rand(1,5))->pluck('id');
                    $product->productCategories()->attach($categories);
                }
            );
            // factory(Shop::class,$shopQty)->create();
            DB::table('shops')->insert([
                [
                    'name' => $faker->unique()->word,
                    'slug' => $faker->unique()->slug,
                    'description' => $faker->paragraph(1),
                    'address' => $faker->randomElement([Shop::ADDRESS1,Shop::ADDRESS2,Shop::ADDRESS3]),
                    'image' => $faker->randomElement(['thumb_T-shirt31.jpg','thumb_T-shirt21.jpg','thumb_T-shirt41.jpg']),
                ],
                [
                    'name' => $faker->unique()->word,
                    'slug' => $faker->unique()->slug,
                    'description' => $faker->paragraph(1),
                    'address' => $faker->randomElement([Shop::ADDRESS1,Shop::ADDRESS2,Shop::ADDRESS3]),
                    'image' => $faker->randomElement(['thumb_T-shirt31.jpg','thumb_T-shirt21.jpg','thumb_T-shirt41.jpg']),
                ],
                [
                    'name' => $faker->unique()->word,
                    'slug' => $faker->unique()->slug,
                    'description' => $faker->paragraph(1),
                    'address' => $faker->randomElement([Shop::ADDRESS1,Shop::ADDRESS2,Shop::ADDRESS3]),
                    'image' => $faker->randomElement(['thumb_T-shirt31.jpg','thumb_T-shirt21.jpg','thumb_T-shirt41.jpg']),
                ],
            ]);
            factory(SocialMediaName::class,$socialMediaNameQty)->create();
            factory(PlayerFoot::class,$playerFootQty)->create();
            factory(PlayerPosition::class,$playerPostionQty)->create();
            // factory(PlayerCategory::class,$playerCategoryQty)->create();
            DB::table('player_categories')->insert([
                [
                    'section_name'=> 'Senior',
                    'slug'=> 'senior',

                ],
                [
                    'section_name'=>'Junior',
                    'slug'=>'junior',
                ],
                [
                    'section_name'=>'both_junior_and_senior',
                    'slug'=>'both_junior_and_senior',
                ],
            ]);
            // factory(Player::class,$playerQty)->create();
            DB::table('players')->insert([
                [
                    'profile_pic'=> $faker->randomElement(['player_1.jpg','player_2.jpg','player_3.jpg','player_4.jpg','player_5.jpg']),
                    'first_name'=>'Micheal',
                    'last_name'=>'Kato',
                    'slug'=>'kato-micheal',
                    'player_position_id' => $faker->numberBetween(1,4),
                    'player_foot_id' => $faker->numberBetween(1,3),
                    'shirt_no' => $faker->numberBetween(1,10),
                    'age' => $faker->numberBetween(17,25),
                    'nationality' => $faker->randomElement(['Ugandan','Sudanese','Kenyan','Rwandanese']),
                    'previous_club' => $faker->randomElement(['Wakiso FC','Catda FC','Vimpers FC','Buddu League']),
                    'bio'=>$faker->paragraph(rand(10, 15), true),
                    'player_category_id' => $faker->numberBetween(1,3),
                ],
                [
                    'profile_pic'=> $faker->randomElement(['player_1.jpg','player_2.jpg','player_3.jpg','player_4.jpg','player_5.jpg']),
                    'first_name'=>'Musa',
                    'last_name'=>'Balinya',
                    'slug'=>'musa-balinya',
                    'player_position_id' => $faker->numberBetween(1,4),
                    'player_foot_id' => $faker->numberBetween(1,3),
                    'shirt_no' => $faker->numberBetween(1,10),
                    'age' => $faker->numberBetween(17,25),
                    'nationality' => $faker->randomElement(['Ugandan','Sudanese','Kenyan','Rwandanese']),
                    'previous_club' => $faker->randomElement(['Wakiso FC','Catda FC','Vimpers FC','Buddu League']),
                    'bio'=>$faker->paragraph(rand(10, 15), true),
                    'player_category_id' => $faker->numberBetween(1,3),
                ],
                [
                    'profile_pic'=> $faker->randomElement(['player_1.jpg','player_2.jpg','player_3.jpg','player_4.jpg','player_5.jpg']),
                    'first_name'=>'Okello',
                    'last_name'=>'John',
                    'slug'=>'okello-john',
                    'player_position_id' => $faker->numberBetween(1,4),
                    'player_foot_id' => $faker->numberBetween(1,3),
                    'shirt_no' => $faker->numberBetween(1,10),
                    'age' => $faker->numberBetween(17,25),
                    'nationality' => $faker->randomElement(['Ugandan','Sudanese','Kenyan','Rwandanese']),
                    'previous_club' => $faker->randomElement(['Wakiso FC','Catda FC','Vimpers FC','Buddu League']),
                    'bio'=>$faker->paragraph(rand(10, 15), true),
                    'player_category_id' => $faker->numberBetween(1,3),
                ],
                [
                    'profile_pic'=> $faker->randomElement(['player_1.jpg','player_2.jpg','player_3.jpg','player_4.jpg','player_5.jpg']),
                    'first_name'=>'Joseph',
                    'last_name'=>'Kaggwa',
                    'slug'=>'joseph-kaggwa',
                    'player_position_id' => $faker->numberBetween(1,4),
                    'player_foot_id' => $faker->numberBetween(1,3),
                    'shirt_no' => $faker->numberBetween(1,10),
                    'age' => $faker->numberBetween(17,25),
                    'nationality' => $faker->randomElement(['Ugandan','Sudanese','Kenyan','Rwandanese']),
                    'previous_club' => $faker->randomElement(['Wakiso FC','Catda FC','Vimpers FC','Buddu League']),
                    'bio'=>$faker->paragraph(rand(10, 15), true),
                    'player_category_id' => $faker->numberBetween(1,3),
                ],
                [
                    'profile_pic'=> $faker->randomElement(['player_1.jpg','player_2.jpg','player_3.jpg','player_4.jpg','player_5.jpg']),
                    'first_name'=>'John Paul',
                    'last_name'=>'Kazibwe',
                    'slug'=>'john-paul-kazibwe',
                    'player_position_id' => $faker->numberBetween(1,4),
                    'player_foot_id' => $faker->numberBetween(1,3),
                    'shirt_no' => $faker->numberBetween(1,10),
                    'age' => $faker->numberBetween(17,25),
                    'nationality' => $faker->randomElement(['Ugandan','Sudanese','Kenyan','Rwandanese']),
                    'previous_club' => $faker->randomElement(['Wakiso FC','Catda FC','Vimpers FC','Buddu League']),
                    'bio'=>$faker->paragraph(rand(10, 15), true),
                    'player_category_id' => $faker->numberBetween(1,3),
                ],
                [
                    'profile_pic'=> $faker->randomElement(['player_1.jpg','player_2.jpg','player_3.jpg','player_4.jpg','player_5.jpg']),
                    'first_name'=>'Benard',
                    'last_name'=>'Tugume',
                    'slug'=>'benard-tugume',
                    'player_position_id' => $faker->numberBetween(1,4),
                    'player_foot_id' => $faker->numberBetween(1,3),
                    'shirt_no' => $faker->numberBetween(1,10),
                    'age' => $faker->numberBetween(17,25),
                    'nationality' => $faker->randomElement(['Ugandan','Sudanese','Kenyan','Rwandanese']),
                    'previous_club' => $faker->randomElement(['Wakiso FC','Catda FC','Vimpers FC','Buddu League']),
                    'bio'=>$faker->paragraph(rand(10, 15), true),
                    'player_category_id' => $faker->numberBetween(1,3),
                ],
                [
                    'profile_pic'=> $faker->randomElement(['player_1.jpg','player_2.jpg','player_3.jpg','player_4.jpg','player_5.jpg']),
                    'first_name'=>'kenneth',
                    'last_name'=>'Oola',
                    'slug'=>'kenneth-oola',
                    'player_position_id' => $faker->numberBetween(1,4),
                    'player_foot_id' => $faker->numberBetween(1,3),
                    'shirt_no' => $faker->numberBetween(1,10),
                    'age' => $faker->numberBetween(17,25),
                    'nationality' => $faker->randomElement(['Ugandan','Sudanese','Kenyan','Rwandanese']),
                    'previous_club' => $faker->randomElement(['Wakiso FC','Catda FC','Vimpers FC','Buddu League']),
                    'bio'=>$faker->paragraph(rand(10, 15), true),
                    'player_category_id' => $faker->numberBetween(1,3),
                ],
                [
                    'profile_pic'=> $faker->randomElement(['player_1.jpg','player_2.jpg','player_3.jpg','player_4.jpg','player_5.jpg']),
                    'first_name'=>'Tito',
                    'last_name'=>'Kizito',
                    'slug'=>'tito-kizito',
                    'player_position_id' => $faker->numberBetween(1,4),
                    'player_foot_id' => $faker->numberBetween(1,3),
                    'shirt_no' => $faker->numberBetween(1,10),
                    'age' => $faker->numberBetween(17,25),
                    'nationality' => $faker->randomElement(['Ugandan','Sudanese','Kenyan','Rwandanese']),
                    'previous_club' => $faker->randomElement(['Wakiso FC','Catda FC','Vimpers FC','Buddu League']),
                    'bio'=>$faker->paragraph(rand(10, 15), true),
                    'player_category_id' => $faker->numberBetween(1,3),
                ],
                [
                    'profile_pic'=> $faker->randomElement(['player_1.jpg','player_2.jpg','player_3.jpg','player_4.jpg','player_5.jpg']),
                    'first_name'=>'Paul',
                    'last_name'=>'Male',
                    'slug'=>'paul-male',
                    'player_position_id' => $faker->numberBetween(1,4),
                    'player_foot_id' => $faker->numberBetween(1,3),
                    'shirt_no' => $faker->numberBetween(1,10),
                    'age' => $faker->numberBetween(17,25),
                    'nationality' => $faker->randomElement(['Ugandan','Sudanese','Kenyan','Rwandanese']),
                    'previous_club' => $faker->randomElement(['Wakiso FC','Catda FC','Vimpers FC','Buddu League']),
                    'bio'=>$faker->paragraph(rand(10, 15), true),
                    'player_category_id' => $faker->numberBetween(1,3),
                ],
                [
                    'profile_pic'=> $faker->randomElement(['player_1.jpg','player_2.jpg','player_3.jpg','player_4.jpg','player_5.jpg']),
                    'first_name'=>'Jona',
                    'last_name'=>'Kigz',
                    'slug'=>'kigz-jona',
                    'player_position_id' => $faker->numberBetween(1,4),
                    'player_foot_id' => $faker->numberBetween(1,3),
                    'shirt_no' => $faker->numberBetween(1,10),
                    'age' => $faker->numberBetween(17,25),
                    'nationality' => $faker->randomElement(['Ugandan','Sudanese','Kenyan','Rwandanese']),
                    'previous_club' => $faker->randomElement(['Wakiso FC','Catda FC','Vimpers FC','Buddu League']),
                    'bio'=>$faker->paragraph(rand(10, 15), true),
                    'player_category_id' => $faker->numberBetween(1,3),
                ]
            ]);
            factory(PlayerSocialMediaLink::class,$playerSocialMediaLinkQty)->create();
            factory(SupportMemberPosition::class,$supportMemberPositionQty)->create();
            // factory(SupportMember::class,$supportMemberQty)->create();
            DB::table('support_members')->insert([
                [
                    'firstname' => 'Francis',
                    'lastname' => 'Kikuutegwe',
                    'slug' => 'francis-kikuutegwe',
                    'profile_pic' => $faker->randomElement(['member_img_1.jpg','member_img_2.jpg','member_img_5.jpg','member_img_4.jpg','member_img_3.jpg','member_img_10.jpg','member_img_9.jpg']),
                    'support_member_position_id' => $faker->numberBetween(1,8),
                    'bio' => $faker->paragraph(rand(10, 15), true),
                    'is_executive'=>$faker->randomElement([SupportMember::TECHNICAL_Member,SupportMember::Executive_Member]),
                ],
                [
                    'firstname' => 'Andrew',
                    'lastname' => 'Kirebwe',
                    'slug' => 'andrew-kirebwe',
                    'profile_pic' => $faker->randomElement(['member_img_1.jpg','member_img_2.jpg','member_img_5.jpg','member_img_4.jpg','member_img_3.jpg','member_img_10.jpg','member_img_9.jpg']),
                    'support_member_position_id' => $faker->numberBetween(1,8),
                    'bio' => $faker->paragraph(rand(10, 15), true),
                    'is_executive'=>$faker->randomElement([SupportMember::TECHNICAL_Member,SupportMember::Executive_Member]),
                ],
                [
                    'firstname' => 'Marvin',
                    'lastname' => 'Kiseka',
                    'slug' => 'marvin-kiseka',
                    'profile_pic' => $faker->randomElement(['member_img_1.jpg','member_img_2.jpg','member_img_5.jpg','member_img_4.jpg','member_img_3.jpg','member_img_10.jpg','member_img_9.jpg']),
                    'support_member_position_id' => $faker->numberBetween(1,8),
                    'bio' => $faker->paragraph(rand(10, 15), true),
                    'is_executive'=>$faker->randomElement([SupportMember::TECHNICAL_Member,SupportMember::Executive_Member]),
                ],
                [
                    'firstname' => 'Frank',
                    'lastname' => 'Mpuga',
                    'slug' => 'francis-kikuutegwe',
                    'profile_pic' => $faker->randomElement(['member_img_1.jpg','member_img_2.jpg','member_img_5.jpg','member_img_4.jpg','member_img_3.jpg','member_img_10.jpg','member_img_9.jpg']),
                    'support_member_position_id' => $faker->numberBetween(1,8),
                    'bio' => $faker->paragraph(rand(10, 15), true),
                    'is_executive'=>$faker->randomElement([SupportMember::TECHNICAL_Member,SupportMember::Executive_Member]),
                ]

            ]);
            factory(SupportMemberSocialMediaLink::class,$supportMemberSocialMediaLinkQty)->create();
            factory(Team::class,$teamQty)->create();
            factory(Match::class,$matchQty)->create()->each(
                function($match){
                    $teams = Team::all()->random(mt_rand(1,5))->pluck('id');
                    $match->teams()->attach($teams);
                }
            );

            // factory(MatchReport::class,$matchReportQty)->create();
            DB::table('match_reports')->insert([
                [
                    'image'=> $faker->randomElement(['Post_Image_1.jpg','Post_Image_3.jpg','Post_Image_2.jpg']),
                    'title'=> $faker->sentence,
                    'slug'=> $faker->slug,
                    'body'=> $faker->paragraph(rand(10, 15), true),
                    'match_id'=> $faker->numberBetween(1,10),
                ],
                [
                    'image'=> $faker->randomElement(['Post_Image_1.jpg','Post_Image_3.jpg','Post_Image_2.jpg']),
                    'title'=> $faker->sentence,
                    'slug'=> $faker->slug,
                    'body'=> $faker->paragraph(rand(10, 15), true),
                    'match_id'=> $faker->numberBetween(1,10),
                ],
                [
                    'image'=> $faker->randomElement(['Post_Image_1.jpg','Post_Image_3.jpg','Post_Image_2.jpg']),
                    'title'=> $faker->sentence,
                    'slug'=> $faker->slug,
                    'body'=> $faker->paragraph(rand(10, 15), true),
                    'match_id'=> $faker->numberBetween(1,10),
                ],
                [
                    'image'=> $faker->randomElement(['Post_Image_1.jpg','Post_Image_3.jpg','Post_Image_2.jpg']),
                    'title'=> $faker->sentence,
                    'slug'=> $faker->slug,
                    'body'=> $faker->paragraph(rand(10, 15), true),
                    'match_id'=> $faker->numberBetween(1,10),
                ],
                [
                    'image'=> $faker->randomElement(['Post_Image_1.jpg','Post_Image_3.jpg','Post_Image_2.jpg']),
                    'title'=> $faker->sentence,
                    'slug'=> $faker->slug,
                    'body'=> $faker->paragraph(rand(10, 15), true),
                    'match_id'=> $faker->numberBetween(1,10),
                ],
                [
                    'image'=> $faker->randomElement(['Post_Image_1.jpg','Post_Image_3.jpg','Post_Image_2.jpg']),
                    'title'=> $faker->sentence,
                    'slug'=> $faker->slug,
                    'body'=> $faker->paragraph(rand(10, 15), true),
                    'match_id'=> $faker->numberBetween(1,10),
                ],
            ]);
            factory(AchievementCategory::class,$achievementCategoryQty)->create();
            factory(Achievement::class,$achievementQty)->create();
            factory(EraCategory::class,$eraCategoryQty)->create();
            factory(VideoCategory::class,$videoCategoryQty)->create();
            factory(Video::class,$videoQty)->create();
            factory(WallOfFameCategory::class,$wallOfFameCategoryQty)->create();
            factory(WallOfFame::class,$wallOfFameQty)->create();





        }
    }
}
