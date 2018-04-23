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

 Route::get('/', 'DisplayController@get_home_page');
Route::post('/', 'CreatesController@create_user');

Route::get('/welcome_page2', 'DisplayController@get_home2_page');

 Route::get('/create_pool', 'DisplayController@get_create_pool_page');
Route::post('/create_pool', 'CreatesController@create_pool');

Route::get('/visual_pool', 'DisplayController@get_visual_pool_page');

 Route::get('/modif_pool', 'DisplayController@get_modif_pool_page');
Route::post('/modif_pool', 'EditsController@edit_pool');

 Route::get('/modif_profile', 'DisplayController@get_modif_profile_page');
Route::post('/modif_profile', 'EditsController@edit_profile');

Route::get('/inscription', function(){

	Auth::attempt(['email' => 'turlututu@email.fr', 'password' => '0000']);
	Auth::check();
	return view('pages/inscription');
});


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){
	Route::resource('posts', 'PostsController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
