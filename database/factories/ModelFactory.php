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
use Faker\Generator as Faker;
use App\SoccerModels\PlayerFoot;
use App\SoccerModels\SupportMember;
use App\SoccerModels\PlayerPosition;
use App\SoccerModels\ExecutiveMember;
use App\SoccerModels\ProductCategory;
use App\SoccerModels\SocialMediaName;
use App\SoccerModels\PlayerSocialMediaLink;
use App\SoccerModels\SupportMemberPosition;
use App\SoccerModels\SupportMemberSocialMediaLink;

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
        'verified'=>$verified = $faker->randomElement([User::VERIFIED_USER,User::UNVERIFIED_USER]),
        'verification_token'=> $verified == User::VERIFIED_USER ? null : User::generateVerificationCode(),
        'admin'=>$faker->randomElement([User::ADMIN_USER,User::REGULAR_USER]),
    ];
});

$factory->define(ProductCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'description' => $faker->paragraph(1),
    ];
});

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'description' => $faker->paragraph(1),
        'status' => $faker->randomElement([Product::AVAILABLE_PRODUCT,Product::UNAVAILABLE_PRODUCT]),
        'image' => $faker->randomElement(['thumb_T-shirt31.jpg','thumb_T-shirt21.jpg','thumb_T-shirt41.jpg']),
    ];
});

$factory->define(Shop::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'description' => $faker->paragraph(1),
        'address' => $faker->randomElement([Shop::ADDRESS1,Shop::ADDRESS2,Shop::ADDRESS3]),
        'image' => $faker->randomElement(['thumb_T-shirt31.jpg','thumb_T-shirt21.jpg','thumb_T-shirt41.jpg']),
    ];
});

$factory->define(SupportMemberPosition::class, function (Faker $faker) {
    return [
        'title' => $faker->randomElement(['Coach','ASP','Doctor','Performance Analyst']),
        'abbrev' => $faker->randomElement(['Coh','ASP','Dr.','P.A.']),
    ];
});

$factory->define(SocialMediaName::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement([SocialMediaName::FACEBOOK,SocialMediaName::LINKEDIN,SocialMediaName::TWITTER]),
    ];
});

$factory->define(SupportMember::class, function (Faker $faker) {
    return [
        'firstname' => $faker->name,
        'lastname' => $faker->name,
        'profile_pic' => $faker->randomElement(['trainer-img1.jpg','trainer-img.jpg','trainer-img2.jpg']),
        'support_member_position_id' => $faker->numberBetween(1,8),
        'bio' => $faker->paragraph(1),
        'is_executive'=>$faker->randomElement([SupportMember::TECHNICAL_Member,SupportMember::Executive_Member]),
    ];
});

$factory->define(SupportMemberSocialMediaLink::class, function (Faker $faker) {
    return [
        'support_member_id' => $faker->numberBetween(1,5),
        'url' => $faker->name.'.'.$faker->randomElement(['facebook.com','linkedin.com','twitter.com']),
        'media_name'=>$faker->randomElement([SocialMediaName::FACEBOOK,SocialMediaName::LINKEDIN,SocialMediaName::TWITTER]),
    ];
});

$factory->define(PlayerFoot::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement([PlayerFoot::BOTH,PlayerFoot::RIGHT,PlayerFoot::LEFT]),
    ];
});

$factory->define(PlayerPosition::class, function (Faker $faker) {
    return [
        'title' => $faker->randomElement([PlayerPosition::GOAL_KEEPER,PlayerPosition::STRIKER,PlayerPosition::DEFENDER,PlayerPosition::MID_FIELDER]),
        'abbrev' => $faker->randomElement([PlayerPosition::GK,PlayerPosition::STKR,PlayerPosition::DER,PlayerPosition::MFR]),
    ];
});
$factory->define(PlayerCategory::class,function(Faker $faker){
    return [
        'section_name'=> $faker->randomElement(['Senior','Junior','both_junior_and_senior']),
    ];
});
$factory->define(Player::class, function (Faker $faker) {
    return [
        'profile_pic'=> $faker->randomElement(['trainer-img1.jpg','trainer-img.jpg','trainer-img2.jpg']),
        'first_name'=>$faker->name,
        'last_name'=>$faker->name,
        'player_position_id' => $faker->numberBetween(1,4),
        'player_foot_id' => $faker->numberBetween(1,3),
        'shirt_no' => $faker->numberBetween(1,10),
        'age' => $faker->numberBetween(17,25),
        'nationality' => $faker->randomElement(['Ugandan','Sudanese','Kenyan','Rwandanese']),
        'previous_club' => $faker->randomElement(['Wakiso FC','Catda FC','Vimpers FC','Buddu League']),
        'bio'=>$faker->paragraph(1),
        'player_category_id' => $faker->numberBetween(1,3),
    ];
});

$factory->define(PlayerSocialMediaLink::class, function (Faker $faker) {
    return [
        'player_id' => $faker->numberBetween(1,10),
        'media_name' => $faker->randomElement([SocialMediaName::FACEBOOK,SocialMediaName::LINKEDIN,SocialMediaName::TWITTER]),
        'url' => $faker->name.'.'.$faker->randomElement(['facebook.com','linkedin.com','twitter.com']),
    ];
});

$factory->define(Team::class, function (Faker $faker) {
    return [
        'logo' => $faker->randomElement(['team-ava2.png','team-ava3.png','team-ava4.png','team-ava5.png']),
        'name' => $faker->name.' .F.C.',
        'slogan' => $faker->sentence,
        'home_stadium' => $faker->randomElement(['Kisugi','Nambole']),
    ];
});



$factory->define(Match::class, function (Faker $faker) {

  
        return [
            'date' => $faker->date,
            'home_team_score' => $faker->numberBetween(1,6),
            'away_team_score' => $faker->numberBetween(1,6),
            'home_team_id' => $faker->numberBetween(1,3),
            'away_team_id' => $faker->numberBetween(4,6),
            'venue' => $faker->randomElement(['Kisugi','Nambole']),
        ];

    
});

$factory->define(MatchReport::class,function(Faker $faker){
    return [
        'image'=> $faker->randomElement(['trainer-img1.jpg','trainer-img.jpg','trainer-img2.jpg']),
        'title'=> $faker->sentence,
        'body'=> $faker->paragraph(2),
        'match_id'=> $faker->numberBetween(1,10),
    ];
});

$factory->define(AchievementCategory::class,function(Faker $faker){
    return [
        'title'=> $faker->word,
    ];
});

$factory->define(Achievement::class,function(Faker $faker){
    return [
        'image'=> $faker->randomElement(['trainer-img1.jpg','trainer-img.jpg','trainer-img2.jpg']),
        'title'=> $faker->sentence,
        'overview'=> $faker->sentence,
        'body'=> $faker->paragraph(2),
        'achievement_category_id'=> $faker->numberBetween(1,2),
    ];
});


$factory->define(EraCategory::class,function(Faker $faker){
    return [
        'title'=> $faker->word,
    ];
});

$factory->define(Era::class,function(Faker $faker){
    return [
        'image'=> $faker->randomElement(['trainer-img1.jpg','trainer-img.jpg','trainer-img2.jpg']),
        'title'=> $faker->sentence,
        'text'=> $faker->paragraph(2),
        'era_category_id'=> $faker->numberBetween(1,5),
    ];
});

$factory->define(VideoCategory::class,function(Faker $faker){
    return [
        'title'=> $faker->word,
    ];
});

$factory->define(Video::class,function(Faker $faker){
    return [
        'url'=> $faker->randomElement(['trainer-img1.jpg','trainer-img.jpg','trainer-img2.jpg']),
        'title'=> $faker->sentence,
        'overview'=> $faker->word,
        'body'=> $faker->paragraph(2),
        'video_category_id'=> $faker->numberBetween(1,3),
    ];
});

$factory->define(WallOfFameCategory::class,function(Faker $faker){
    return [
        'title'=> $faker->word,
    ];
});

$factory->define(WallOfFame::class,function(Faker $faker){
    return [
        'image'=> $faker->randomElement(['trainer-img1.jpg','trainer-img.jpg','trainer-img2.jpg']),
        'title'=> $faker->sentence,
        'text'=> $faker->paragraph(2),
        'wall_of_fame_category_id'=> $faker->numberBetween(1,4),
    ];
});
