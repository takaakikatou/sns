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

Route::get('/posts/index', function () {
    return view('');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@home');

Route::resource('posts', 'PostController');

Route::resource('comments', 'CommentController');

Route::get('/home/profile', 'HomeController@profile')->name('home.profile');

Route::get('/home/profile/edit/{id}', 'HomeController@edit')->where('id', '[0-9]+');

Route::post('/home/profile/update/{id}', 'HomeController@update')->where('id', '[0-9]+');

Route::get('/home/activity', 'HomeController@activity')->name('home.activity');

Route::get('/posts/index', 'PostController@index')->name('posts.index');

Route::get('/layouts/template', 'PostController@template')->name('layouts.template');

Route::get('/layouts/template', 'HomeController@template')->name('layouts.template');

Route::get('/posts/create', 'PostController@create')->name('posts.create');

Route::get('/home/user_profile/{id}', 'HomeController@user_profile')->name('home.user_profile')->where('id', '[0-9]+');

Route::get('logout', 'UserController@getLogout')->name('user.logout');

Route::resource('users', 'UsersController', ['only' => ['show']]);

Route::group(['prefix' => 'users/{id}'], function () {
    Route::get('followings', 'UsersController@followings')->name('followings');
    Route::get('followers', 'UsersController@followers')->name('followers');
    });

Route::group(['middleware' => 'auth'], function () {
    Route::put('users', 'UsersController@rename')->name('rename');
    
    Route::group(['prefix' => 'users/{id}'], function () {
        Route::post('follow', 'UserFollowController@store')->name('follow');
        Route::delete('unfollow', 'UserFollowController@destroy')->name('unfollow');
    });
    
    Route::resource('movies', 'MoviesController', ['only' => ['create', 'store', 'destroy']]);
});