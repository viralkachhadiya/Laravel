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



Route::resource('companies','CompaniesController');
Route::resource('projects','ProjectsController');
Route::get('projects/create/{company_id?}','ProjectsController@create');
Route::resource('roles','RolesController');
Route::resource('tasks','TasksController');
Route::resource('users','UsersController');

// Route::get('/', function () {
//      return redirect()->route('companies.index');
// });
// Route::get('/', function () {
//     return redirect('/companies');
// });

Route::get('/','CompaniesController@index');

