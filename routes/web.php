<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index');
Route::get('/about-us', 'PageController@about_us');

Route::get('/todo', 'TodoController@index')->name("todo");
Route::get('/todo/create', 'TodoController@create')->name("todo_create");
Route::post('/todo/create', 'TodoController@create');
Route::get('/todo/update/{id}', 'TodoController@update')->name("todo_update");
Route::post('/todo/update/{id}', 'TodoController@update');
Route::get('/todo/delete/{id}', 'TodoController@delete')->name("todo_delete");