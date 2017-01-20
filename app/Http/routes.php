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
Route::get('/addrecipe','RecipeController@add')->middleware('auth');
Route::post('/addrecipe','RecipeController@create')->middleware('auth');

Route::get('/mijnrecept','RecipeController@myRecipe')->middleware('auth');
Route::get('/recept/edit/{id}','RecipeController@edit')->middleware('auth');
Route::post('/recept/edit/{id}','RecipeController@update')->middleware('auth');
// delete recept
Route::post('/recipe/delete/{id}','RecipeController@delete')->middleware('auth');
Route::auth();
