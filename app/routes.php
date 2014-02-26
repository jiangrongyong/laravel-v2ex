<?php
Route::controller('password', 'RemindersController');
Route::controller('user', 'UserController');

Route::resource('nodes', 'NodesController');
Route::resource('nodes.topics', 'NodesTopicsController');
Route::resource('members.topics', 'MembersTopicsController');
Route::resource('members.replies', 'MembersRepliesController');
Route::resource('members.favorites', 'MembersFavoritesController');
Route::resource('members.following', 'MembersFollowingController');

Route::resource('topics', 'TopicsController');
Route::resource('replies', 'RepliesController');
Route::resource('members', 'MembersController');
Route::resource('settings', 'SettingsController');

Route::get('topics/{topic_id}/favorite', ['uses' => 'TopicsController@postFavorite']);
Route::get('topics/{topic_id}/unfavorite', ['uses' => 'TopicsController@postUnfavorite']);
Route::get('members/{follow_user_id}/follow', ['uses' => 'MembersController@postFollow']);
Route::get('members/{follow_user_id}/unfollow', ['uses' => 'MembersController@postUnfollow']);
