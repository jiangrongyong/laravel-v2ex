<?php
Route::controller('password', 'RemindersController');
Route::controller('user', 'UserController');

Route::resource('nodes', 'NodesController');
Route::resource('nodes.topics', 'NodesTopicsController');
Route::resource('members.topics', 'MembersTopicsController');
Route::resource('members.replies', 'MembersRepliesController');
Route::resource('members.favorites', 'MembersFavoritesController');
Route::resource('members.following', 'MembersFollowingController');
Route::resource('members.nodes', 'MembersNodesController');

Route::resource('topics', 'TopicsController');
Route::resource('replies', 'RepliesController');
Route::resource('members', 'MembersController');
Route::resource('settings', 'SettingsController');

Route::get('nodes/{node_id}/favorite', ['uses' => 'NodesController@postFavorite']);
Route::get('nodes/{node_id}/unfavorite', ['uses' => 'NodesController@postUnfavorite']);
