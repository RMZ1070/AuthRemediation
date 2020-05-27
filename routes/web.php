<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'IndexController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// PROFIL

Route::get('/profil', 'ProfilController@index');
Route::get('/profil-edit', 'ProfilController@edit');
Route::post('/profil-update/{id}', 'ProfilController@update');

// ROLES

Route::get('/roles', 'RoleController@index')->name('role-index');
Route::get('/role-edit/{id}', 'RoleController@edit');
Route::post('/role-update/{id}', 'RoleController@update');
Route::post('/role-delete/{id}', 'RoleController@destroy');
Route::get('/role-create', 'RoleController@create');
Route::post('/role-store', 'RoleController@store');

// USERS

Route::get('/users', 'UserController@index')->name('user-index');
Route::get('/user-edit/{id}', 'UserController@edit');
Route::post('/user-update/{id}', 'UserController@update');
Route::post('/user-delete/{id}', 'UserController@destroy');
Route::get('/user-create', 'UserController@create');
Route::post('/user-store', 'UserController@store');
route::get('/usershere', 'UserController@indexII')->name('usershere');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
