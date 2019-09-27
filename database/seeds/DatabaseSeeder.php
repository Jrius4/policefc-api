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
