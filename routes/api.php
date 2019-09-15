<?php

use Illuminate\Http\Request;

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
    $customers = App\Post::all();
    return response()->json($customers) ;
});

/*
Players
*/
Route::resource('/players','Player\PlayerController',['only'=>['index','show']]);

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

/*
matches
*/
Route::resource('/teams','Team\TeamController',['only'=>['index','show']]);
Route::resource('/matches','Match\MatchController',['only'=>['index','show']]);
Route::resource('/results','Match\ResultController',['only'=>['index','show']]);

/*
match report
*/
Route::resource('/match-reports','Match\MatchReportController',['only'=>['index','show']]);


