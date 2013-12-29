<?php

Route::get('/', function () {
    if (Auth::guest()) {
        return Redirect::route('user/login');
    }
    return Redirect::route('user/profile');
});

Route::any('login', [
    'as' => 'user/login',
    'uses' => 'UserController@loginAction'
]);

Route::any('profile', [
    'as' => 'user/profile',
    'uses' => 'UserController@profileAction'
]);

Route::any('logout', [
    'as' => 'user/logout',
    'uses' => 'UserController@logoutAction'
]);