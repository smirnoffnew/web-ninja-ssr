<?php

use Illuminate\Http\Request;

Route::post('sign-in', 'AuthController@signIn');
Route::post('sign-up', 'AuthController@signUp');

Route::group([
    'middleware' => ['auth:api']
], function() {
    Route::get('sign-out', 'AuthController@signOut');

    Route::get('current', 'AuthController@getCurrentUser');
    Route::put('current', 'AuthController@updateCurrentUser');

    Route::get('users', 'UserController@getUsers');
    Route::get('users/{id}', 'UserController@getUser')->where('id', '[0-9]+');

    Route::get('users/{id}/posts', 'UserController@getUsersPosts')->where('id', '[0-9]+');

    Route::resource('posts', 'PostController');

    Route::group([
        'middleware' => 'admin'
    ], function() {
        Route::post('users', 'UserController@createUser');
        Route::delete('users/{id}', 'UserController@deleteUser')->where('id', '[0-9]+');
        Route::put('users/{id}', 'UserController@updateUser')->where('id', '[0-9]+');
    });
});
