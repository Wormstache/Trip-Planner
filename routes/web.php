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

Route::get('admin', 'PagesController@master');
Route::get('agent', 'PagesController@agent');
Route::get('customer', 'PagesController@customer');

Auth::routes();

Route::resource('agentCreate','AgentCreateController');

Route::get('/home', 'HomeController@index')->name('home');
