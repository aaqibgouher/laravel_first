<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index');
Route::get('/about-us', 'PageController@about_us');

# auth route
// Route::get('/login', 'AuthController@login');
Route::get('/registration', 'AuthController@registration');
Route::post('/registration', 'AuthController@registration');