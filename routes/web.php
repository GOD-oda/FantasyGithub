<?php

Route::get('/', 'TopController@index');

// authentication
Route::get('login/', 'Auth\LoginController@login');
Route::get('login/callback', 'Auth\LoginController@callback');

Route::get('home', function () {
    dd(true);
});