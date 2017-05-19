<?php
// POSTS
Route::get('/', 'PostsController@index')->name('home'); // Shows all posts
Route::get('/posts/create', 'PostsController@create'); // Creates a post
Route::post('/posts', 'PostsController@store'); // Receives POST call from create form
Route::get('/posts/{post}', 'PostsController@show'); // Shows single post

// COMMENTS
Route::post('/posts/{post}/comments', 'CommentsController@store');

// REGISTRATION
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

// USERS
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
