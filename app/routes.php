<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Event::listen('illuminate.query', function($query, $params, $time, $conn)
// {
//     Log::info(array($query, $params, $time, $conn));
// });

//Event::listen('Larabook.Registration.Events.UserRegistered', function(){
//
//});

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
    ]
);

/*
 * Registration!
 */

Route::get('register', [
    'as' => 'register_path',
    'uses' => 'RegistrationController@create'
]);

Route::post('register', [
    'as' => 'register_path',
    'uses' => 'RegistrationController@store'
]);


/*
 * Sessions
 */

Route::get('login', [
    'as' => 'login_path',
    'uses' =>'SessionsController@create'
]);

Route::post('login', [
    'as' => 'login_path',
    'uses' =>'SessionsController@store'
]);

Route::get('logout', [
    'as' => 'logout_path',
    'uses'=>'SessionsController@destroy'
]);

/**
 * Statuses
 */

Route::get('statuses', [
    'as' => 'statuses_path',
    'uses' => 'StatusController@index'
]);

Route::post('statuses', [
    'as' => 'statuses_path',
    'uses' => 'StatusController@store'
]);

/**
 * Comments
 */

Route::post('statuses/{id}/comments', [
    'as' => 'comment_path',
    'uses' => 'CommentsController@store'
]);

/**
 * Users
 */

Route::get('users', [
    'as' => 'users_path',
    'uses' => 'UsersController@index']
);

Route::get('@{username}', [
    'as' => 'profile_path',
    'uses' =>  'UsersController@show'
]);
/**
 * Follows
 */

Route::post('follows', [
    'as' => 'follow_path',
    'uses' => 'FollowsController@store'
]);

Route::delete('follows/{id}', [
    'as' => 'unfollow_path',
    'uses' => 'FollowsController@destroy'
]);

/**
 * Password resetting
 */

Route::controller('password', 'RemindersController');