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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/users/create','UserController@create');
Route::post('/admin/users','UserController@store');

Route::get('/admin/users', 'UserController@index');
Route::get('/admin/users/{user}','UserController@show');

Route::get('/admin/users/{user}/edit','UserController@edit');
Route::patch('/admin/users/{user}','UserController@update');

Route::delete('/admin/users/{user}','UserController@destroy');


Route::get('/posts/create','PostController@create');
Route::post('/home','PostController@store');

Route::get('/home', 'PostController@index');

Route::get('/posts/{post}/edit','PostController@edit');
Route::patch('/posts/{post}','PostController@update');

Route::delete('/posts/{post}','PostController@destroy');




Route::get('/themes/create','ThemeController@create');
Route::post('/themes','ThemeController@store');

Route::get('/themes', 'ThemeController@index');
Route::get('/themes/{theme}','ThemeController@show');

Route::get('/themes/{theme}/edit','ThemeController@edit');
Route::patch('/themes/{theme}','ThemeController@update');

Route::delete('/themes/{theme}','ThemeController@destroy');



