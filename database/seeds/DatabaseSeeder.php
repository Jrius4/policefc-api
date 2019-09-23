<?php

use App\Era;
use App\User;
use App\Video;
use App\WallOfFame;
use App\Achievement;
use App\EraCategory;
use App\MatchReport;
use App\VideoCategory;
use App\PlayerCategory;
use App\SoccerModels\Shop;
use App\SoccerModels\Team;
use App\SoccerModels\Match;
use App\WallOfFameCategory;
use Illuminate\Support\Str;
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
use App\SoccerModels\PlayerSocialMediaLink;
use App\SoccerModels\SupportMemberPosition;
use App\SoccerModels\SupportMemberSocialMediaLink;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env('APP_ENV') === 'local')
        {
            // $this->call(UsersTableSeeder::class);

            $faker = \Faker\Factory::create();
            DB::statement('SET FOREIGN_KEY_CHECKS = 0');
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


            $usersQty = 100;
            $productCategoriesQty = 30;
            $productQty = 80;
            $shopQty = 10;
            $teamQty = 24;
            $matchQty = 125;
            $matchReportQty = 125;
            $socialMediaNameQty = 3;
            $playerFootQty = 4;
            $playerPostionQty = 25;
            $playerCategoryQty = 25;
            $playerQty = 25;
            $playerSocialMediaLinkQty = 100;
            $supportMemberPositionQty = 2;
            $supportMemberQty = 25;
            $supportMemberSocialMediaLinkQty = 100;
            $achievementCategoryQty = 15;
            $achievementQty = 125;
            $eraCategoryQty = 15;
            $eraQty = 125;
            $videoCategoryQty = 15;
            $videoQty = 125;
            $wallOfFameCategoryQty = 15;
            $wallOfFameQty = 125;

            factory(User::class,$usersQty)->create();
            factory(ProductCategory::class,$productCategoriesQty)->create();
            factory(Product::class,$productQty)->create()->each(
                function($product){
                    $categories = ProductCategory::all()->random(mt_rand(1,5))->pluck('id');
                    $product->productCategories()->attach($categories);
                }
            );
            factory(Shop::class,$shopQty)->create();
            factory(SocialMediaName::class,$socialMediaNameQty)->create();
            factory(PlayerFoot::class,$playerFootQty)->create();
            factory(PlayerPosition::class,$playerPostionQty)->create();
            factory(PlayerCategory::class,$playerCategoryQty)->create();
            factory(Player::class,$playerQty)->create();
            factory(PlayerSocialMediaLink::class,$playerSocialMediaLinkQty)->create();
            factory(SupportMemberPosition::class,$supportMemberPositionQty)->create();
            factory(SupportMember::class,$supportMemberQty)->create();
            factory(SupportMemberSocialMediaLink::class,$supportMemberSocialMediaLinkQty)->create();
            factory(Team::class,$teamQty)->create();
            factory(Match::class,$matchQty)->create()->each(
                function($match){
                    $teams = Team::all()->random(mt_rand(1,5))->pluck('id');
                    $match->teams()->attach($teams);
                }
            );

            factory(MatchReport::class,$matchReportQty)->create();
            factory(AchievementCategory::class,$achievementCategoryQty)->create();
            factory(Achievement::class,$achievementQty)->create();
            factory(EraCategory::class,$eraCategoryQty)->create();
            factory(Era::class,$eraQty)->create();
            factory(VideoCategory::class,$videoCategoryQty)->create();
            factory(Video::class,$videoQty)->create();
            factory(WallOfFameCategory::class,$wallOfFameCategoryQty)->create();
            factory(WallOfFame::class,$wallOfFameQty)->create();
            
            
            



            $this->call(PostsTableSeeder::class);
            $this->call(CategoriesTableSeeder::class);
            $this->call(RolesTableSeeder::class);
            $this->call(PermissionsTableSeeder::class);
            $this->call(TagsTableSeeder::class);
            $this->call(CommentsTableSeeder::class);
        }
        else
        {
            $this->call(UsersTableSeeder::class);
            $this->call(CategoriesTableSeeder::class);
            $this->call(RolesTableSeeder::class);
            $this->call(PermissionsTableSeeder::class);
        }
    }
}
