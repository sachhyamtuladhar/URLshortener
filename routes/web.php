<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/submit/{id}', function ($id) {
//     return 'this is'.$id;
// });



Route::get('/submit', 'PostsController@submit');
Route::get('/code','PostsController@code');

Route::get('/','PostsController@index');

//Route::resource('urls','PostsController');

Route::get('/create','PostsController@create');
Route::post('/','PostsController@store');
Route::get('/search','PostsController@search');