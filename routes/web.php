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
    return view('index');
})->name('index');

// pages
Route::get('admin', 'PagesController@master');
Route::get('agent', 'PagesController@agent');
Route::get('customer', 'PagesController@customer');
Route::get('index', 'PagesController@index');
Route::get('blog', 'PagesController@blog')->name('blog');
Route::get('contact', 'PagesController@contact')->name('contact');
Route::post('contact', 'PagesController@contactForm')->name('contact.contactForm');
Route::get('destination', 'PagesController@destination')->name('destination');
Route::get('destinationDetail', 'PagesController@destinationDetail');
Route::get('dashboard', 'PagesController@dashboard');

Auth::routes();
// socialite route
Route::get('login/{provider}', 'SocialController@redirect');
Route::get('login/{provider}/callback', 'SocialController@Callback');

Route::resource('agentCreate','AgentDetailsController');
Route::resource('agentList','AgentListController');
Route::resource('customerList','CustomerListController');
Route::resource('blogCreate','BlogController');
Route::resource('blogList','BlogListController');
Route::resource('profile','ProfileController');
Route::resource('userList','UserListController');

Route::get('/home', 'HomeController@index')->name('home');
