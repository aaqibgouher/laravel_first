<?php

use Illuminate\Support\Facades\Route;

/* The Program will start from here . Basically this file is inside the routes folder .
    so whatever the route we will hit in our localhost , that all things will be handle from here .
*/

/* Suppose if user hit this route i.e 'localhost/' , then what it will do is it will call a controller named HomeController (a class) and inside it method named index. controller is basically inside the app/controllers directory.
*/
Route::get('/', 'HomeController@index');

/*Suppose if user hit this rote i.e '/about-us' then it will call a PageController controller and then a method named about_us. */
Route::get('/about-us', 'PageController@about_us');

/*If user will hit that route then it will call this controller named TestController and then it will call a method named contact_us */
Route::get('/contact-us', 'TestController@contact_us');

/*If user will hit this route , then it will call a controller named TodoController and then the function named index will call.Doing this ->name("todo) means , we are naming it this else , we have to write /todo wherever we want to use. */
Route::get('/todo', 'TodoController@index')->name("todo");

/*This is same as the above. But here we are doing both for get and post. */
Route::get('/todo/create', 'TodoController@create')->name("todo_create");
Route::post('/todo/create', 'TodoController@create');

/*So this is for update . If user will hit that route then, it will call TodoController first and then update method, and then we are naming it as todo_update. this is both for get and post . */
Route::get('/todo/update/{id}', 'TodoController@update')->name("todo_update");
Route::post('/todo/update/{id}', 'TodoController@update');

/*If user will hit this route with the id of the user, then TodoController will called first then delete method will called, and then we are naming it to todo_delete. */
Route::get('/todo/delete/{id}', 'TodoController@delete')->name("todo_delete");

Route::get('/user', 'UserController@index')->name("user");
Route::get('/user/add', 'UserController@add')->name("add_user");
Route::post('/user/add', 'UserController@add');