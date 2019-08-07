<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth/{provider}', 'SocialLoginController@redirect');
Route::get('/callback/{provider}', 'SocialLoginController@callback');
