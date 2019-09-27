<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

|
*/
// react routes

Route::view('/', 'welcome')
     ->name('react');


// Blog routes for anything aport from soccer
Route::get('/platform', [
    'uses' => 'BlogController@landingPage',
    'as'   => 'landing-page'
]);
Route::get('/services', [
    'uses' => 'BlogController@services',
    'as'   => 'services'
]);

Route::get('/about', [
    'uses' => 'BlogController@about',
    'as'   => 'about'
]);
Route::get('/contact-us', [
    'uses' => 'BlogController@contactUs',
    'as'   => 'contact-us'
]);
Route::get('/create-value', [
    'uses' => 'BlogController@createValue',
    'as'   => 'create-value'
]);
Route::get('/how-we-work', [
    'uses' => 'BlogController@howWeWork',
    'as'   => 'how-we-work'
]);
Route::get('/blog', [
    'uses' => 'BlogController@index',
    'as'   => 'blog'
]);

Route::get('/blog/{post}', [
    'uses' => 'BlogController@show',
    'as'   => 'blog.show'
]);

Route::post('/blog/{post}/comments', [
    'uses' => 'CommentsController@store',
    'as'   => 'blog.comments'
]);

Route::get('/category/{category}', [
    'uses' => 'BlogController@category',
    'as'   => 'category'
]);

Route::get('/author/{author}', [
    'uses' => 'BlogController@author',
    'as'   => 'author'
]);

Route::get('/tag/{tag}', [
    'uses' => 'BlogController@tag',
    'as'   => 'tag'
]);

Route::post('/blog/{post}/comments', [
    'uses' => 'CommentsController@store',
    'as' => 'blog.comments'
]);

Route::auth();

Route::get('/home', 'Backend\HomeController@index');
Route::get('/edit-account', 'Backend\HomeController@edit');
Route::put('/edit-account', 'Backend\HomeController@update');

Route::put('/backend/blog/restore/{blog}', [
    'uses' => 'Backend\BlogController@restore',
    'as'   => 'backend.blog.restore'
]);
Route::delete('/backend/blog/force-destroy/{blog}', [
    'uses' => 'Backend\BlogController@forceDestroy',
    'as'   => 'backend.blog.force-destroy'
]);
Route::resource('/backend/blog', 'Backend\BlogController',['as' =>'backend']);

Route::resource('/backend/categories', 'Backend\CategoriesController',['as' =>'backend']);

Route::get('/backend/users/confirm/{users}', [
    'uses' => 'Backend\UsersController@confirm',
    'as' => 'backend.users.confirm'
]);
Route::resource('/backend/users', 'Backend\UsersController',['as' =>'backend']);
Auth::routes();

// soccer routes
Route::resource('/backend/social-media-names', 'Backend\SocialMedia\SocialMediaNameController',['as' =>'backend']);
//player
Route::resource('/backend/players/player-categories', 'Backend\Player\PlayerCategoryController',['as' =>'backend']);
Route::resource('/backend/players/player-feet', 'Backend\Player\PlayerFootController',['as' =>'backend']);
Route::resource('/backend/players/player-positions', 'Backend\Player\PlayerPositionController',['as' =>'backend']);
Route::resource('/backend/players/player-social-media', 'Backend\Player\PlayerSocialMediaLinkController',['as' =>'backend']);
Route::resource('/backend/players', 'Backend\Player\PlayerController',['as' =>'backend']);

//support member
Route::resource('/backend/support-members/support-member-positions', 'Backend\SupportMember\SupportMemberPositionController',['as' =>'backend']);
Route::resource('/backend/support-members/support-member-social-media', 'Backend\SupportMember\SupportMemberSocialMediaLinkController',['as' =>'backend']);
Route::resource('/backend/support-members', 'Backend\SupportMember\SupportMemberController',['as' =>'backend']);

//products
Route::resource('/backend/products/shops', 'Backend\Product\ShopController',['as' =>'backend']);
Route::resource('/backend/products/product-categories', 'Backend\Product\ProductCategoryController',['as' =>'backend']);
Route::resource('/backend/products', 'Backend\Product\ProductController',['as' =>'backend']);

//Team
Route::resource('/backend/teams', 'Backend\Team\TeamController',['as' =>'backend']);
//Team
Route::resource('/backend/matches/match-reports', 'Backend\Match\MatchReportController',['as' =>'backend']);
Route::resource('/backend/matches', 'Backend\Match\MatchController',['as' =>'backend']);

//videos
Route::resource('/backend/videos/video-categories', 'Backend\Video\VideoCategoryController',['as' =>'backend']);
Route::resource('/backend/videos', 'Backend\Video\VideoController',['as' =>'backend']);

//achievements
Route::resource('/backend/achievements/achievement-categories', 'Backend\Achievement\AchievementCategoryController',['as' =>'backend']);
Route::resource('/backend/achievements', 'Backend\Achievement\AchievementController',['as' =>'backend']);

//era
Route::resource('/backend/eras/video-categories', 'Backend\Era\EraCategoryController',['as' =>'backend']);
Route::resource('/backend/eras', 'Backend\Era\EraController',['as' =>'backend']);

//wall of fame
Route::resource('/backend/wall-of-fames/wall-of-fame-categories', 'Backend\WallOfFame\WallOfFameCategoryController',['as' =>'backend']);
Route::resource('/backend/wall-of-fames', 'Backend\WallOfFame\WallOfFameController',['as' =>'backend']);



