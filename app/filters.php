<?php

Route::filter("auth", function () {
    if (Auth::guest()) {
        return Redirect::action("UserController@getLogin");
    }
});

Route::filter("guest", function () {
    if (Auth::check()) {
        return Redirect::action("UserController@getProfile");
    }
});
