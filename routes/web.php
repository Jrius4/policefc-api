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

// Route::view('/', 'welcome')
//      ->name('react');
//client
//sports
Route::get('/',['uses'=>'BlogController@landingPage','as'=>'index']);
Route::get('/news/{news}',['uses'=>'BlogController@showNews','as'=>'index']);
//endsports


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



Route::get('/eras', [
    'uses' => 'ServerRender\Era\EraController@index',
    'as'   => 'eras'
]);

Route::get('/eras/{era}', [
    'uses' => 'ServerRender\Era\EraController@show',
    'as'   => 'eras.show'
]);

Route::get('/history-categories/{category}', [
    'uses' => 'ServerRender\Era\EraController@category',
    'as'   => 'eras.era-category'
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
Route::resource('/backend/partners', 'Backend\Partners\PartnersController',['as' =>'backend']);
Auth::routes();

// soccer routes
Route::resource('/backend/social-media-names', 'Backend\SocialMedia\SocialMediaNameController',['as' =>'backend']);
//player
//server-render
Route::resource('/players','ServerRender\Player\PlayerController',['only'=>['index','show'],'as'=>'player']);
Route::resource('/backend/players/player-categories', 'Backend\Player\PlayerCategoryController',['as' =>'backend']);
Route::resource('/backend/players/player-feet', 'Backend\Player\PlayerFootController',['as' =>'backend']);
Route::resource('/backend/players/player-positions', 'Backend\Player\PlayerPositionController',['as' =>'backend']);
Route::resource('/backend/players/player-social-media', 'Backend\Player\PlayerSocialMediaLinkController',['as' =>'backend']);
Route::resource('/backend/players', 'Backend\Player\PlayerController',['as' =>'backend']);
// Route::resource('user', 'UserController');
Route::resource('/matches','ServerRender\Match\MatchController',['only'=>['index','show'],'as'=>'match']);

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
Route::resource('/backend/backend-eras', 'Backend\Era\EraController',['as' =>'backend']);
Route::put('/backend/eras/restore/{era}', [
    'uses' => 'Backend\Era\EraController@restore',
    'as'   => 'backend.eras.restore'
]);
Route::delete('/backend/eras/force-destroy/{era}', [
    'uses' => 'Backend\Era\EraController@forceDestroy',
    'as'   => 'backend.eras.force-destroy'
]);

//wall of fame
Route::resource('/backend/wall-of-fames/wall-of-fame-categories', 'Backend\WallOfFame\WallOfFameCategoryController',['as' =>'backend']);
Route::resource('/backend/wall-of-fames', 'Backend\WallOfFame\WallOfFameController',['as' =>'backend']);
Route::get('/routes', function() {
    $routeCollection = Route::getRoutes();

    echo "<table style='width:100%'>";
        echo "<tr>";
            echo "<td width='10%'><h4>HTTP Method</h4></td>";
            echo "<td width='10%'><h4>Route</h4></td>";
            echo "<td width='10%'><h4>Name</h4></td>";
            echo "<td width='70%'><h4>Corresponding Action</h4></td>";
        echo "</tr>";
        foreach ($routeCollection as $value) {
            echo "<tr>";
            echo "<td>" . $value->methods()[0] . "</td>";
            echo "<td>" . $value->uri() . "</td>";
            echo "<td>" . $value->getName() . "</td>";
            echo "<td>" . $value->getActionName() . "</td>";
            echo "</tr>";
        }
    echo "</table>";
});
Route::get('/about',function(){
    return view('platform.home.about');
 });
Route::get('/policefc-admin',function(){
   return redirect('/login');
});



