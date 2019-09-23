<?php

use App\Post;
use Illuminate\Http\Request;
use App\SoccerModels\Product;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts',function(){ 
    $customers = Post::all();
    return response()->json($customers) ;
});

/*
Players
*/
Route::resource('/players','Player\PlayerController',['only'=>['index','show','store']]);
Route::resource('/players.categories','Player\PlayerCategoryPlayerController',['only'=>['index']]);

/*
Support Members
*/
Route::resource('/technical-members','SupportTeam\TechnicalMemberController',['only'=>['index','show']]);
Route::resource('/executive-members','SupportTeam\ExecutiveMemberController',['only'=>['index','show']]);

/*
Our Shops
*/
Route::resource('/shops','Shop\ShopController',['only'=>['index','show']]);
Route::resource('/products-categories','Shop\ProductCategoryController',['except'=>['create','edit']]);
Route::resource('/products','Shop\ProductController',['only'=>['index','show']]);
Route::resource('/products.products-categories','Shop\ProductCategoryProductController',['only'=>['index']]);

/*
matches
*/
Route::resource('/teams','Team\TeamController',['only'=>['index','show']]);
Route::resource('/matches','Match\MatchController',['only'=>['index','show']]);
Route::resource('/matches.teams','Match\MatchController',['only'=>['index']]);

/*
match report
*/
Route::resource('/match-reports','Match\MatchReportController',['only'=>['index','show']]);
Route::resource('/users','User\UserController',['excerpt'=>['create','edit']]);
/*
  Posts
*/
Route::resource('/sport-posts','ApiPostController',['only'=>['index','show']]);
// Route::resource('/sport-posts.comments','Post\PostCommentController',['only'=>['index','show','store']]);
Route::resource('/sport-posts.comments','Post\PostCommentController',['only'=>['index','store']]);
// Route::post('/sport-posts/{sport-posts}/comments','CommentsController@store');
