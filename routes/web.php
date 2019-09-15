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
Route::get('/platform/services', [
    'uses' => 'BlogController@services',
    'as'   => 'services'
]);

Route::get('/platform/about', [
    'uses' => 'BlogController@about',
    'as'   => 'about'
]);
Route::get('/platform/contact-us', [
    'uses' => 'BlogController@contactUs',
    'as'   => 'contact-us'
]);
Route::get('/platform/create-value', [
    'uses' => 'BlogController@createValue',
    'as'   => 'create-value'
]);
Route::get('/platform/how-we-work', [
    'uses' => 'BlogController@howWeWork',
    'as'   => 'how-we-work'
]);
Route::get('/platform/blog', [
    'uses' => 'BlogController@index',
    'as'   => 'blog'
]);

Route::get('/platform/blog/{post}', [
    'uses' => 'BlogController@show',
    'as'   => 'blog.show'
]);

Route::post('/platform/blog/{post}/comments', [
    'uses' => 'CommentsController@store',
    'as'   => 'blog.comments'
]);

Route::get('/platform/category/{category}', [
    'uses' => 'BlogController@category',
    'as'   => 'category'
]);

Route::get('/platform/author/{author}', [
    'uses' => 'BlogController@author',
    'as'   => 'author'
]);

Route::get('/platform/tag/{tag}', [
    'uses' => 'BlogController@tag',
    'as'   => 'tag'
]);

Route::post('/platform/blog/{post}/comments', [
    'uses' => 'CommentsController@store',
    'as' => 'blog.comments'
]);

Route::auth();

Route::get('/platform/home', 'Backend\HomeController@index');
Route::get('/platform/edit-account', 'Backend\HomeController@edit');
Route::put('/platform/edit-account', 'Backend\HomeController@update');

Route::put('/platform/backend/blog/restore/{blog}', [
    'uses' => 'Backend\BlogController@restore',
    'as'   => 'backend.blog.restore'
]);
Route::delete('/platform/backend/blog/force-destroy/{blog}', [
    'uses' => 'Backend\BlogController@forceDestroy',
    'as'   => 'backend.blog.force-destroy'
]);
Route::resource('/platform/backend/blog', 'Backend\BlogController',['as' =>'backend']);

Route::resource('/platform/backend/categories', 'Backend\CategoriesController',['as' =>'backend']);

Route::get('/platform/backend/users/confirm/{users}', [
    'uses' => 'Backend\UsersController@confirm',
    'as' => 'backend.users.confirm'
]);
Route::resource('/platform/backend/users', 'Backend\UsersController',['as' =>'backend']);
Auth::routes();

