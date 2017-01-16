<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/','RecipeController@overview');
// Route::get('/','HomeController@index');
// Routes for recipes
Route::get('/recipe/{id}','RecipeController@index');
Route::get('/addrecipe','RecipeController@add');
Route::post('/addrecipe','RecipeController@create');
Route::auth();
