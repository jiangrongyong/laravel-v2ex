<?php
Route::controller('password', 'RemindersController');
Route::controller('user', 'UserController');

Route::resource('nodes', 'NodesController');
Route::resource('nodes.topics', 'NodesTopicsController');

Route::resource('topics', 'TopicsController');
Route::resource('replies', 'RepliesController');
