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

            $this->call(ModelSeeder::class);
            $this->call(ErasTableSeeder::class);
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
