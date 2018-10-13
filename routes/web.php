<?php

Route::get('/', 'PostController@index')->name('home');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts', 'PostController@store');


Route::post('/posts/{post}/comments', 'CommentsController@store');


Route::get('/login', 'Auth\LoginController@create')->name('login');
Route::get('/logout', 'Auth\LoginController@destroy');
Route::post('/login', 'Auth\LoginController@store');


Route::get('/register', 'Auth\RegisterController@create');
Route::post('/register', 'Auth\RegisterController@store');




// Route::get('/test', 'PostController@test');

