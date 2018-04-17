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
	$name = 'Javanet-Florian';

	dump( DB::table('Stock')->whereMarqueOrModele('peugeot', 'clio')->orderBy('kilometrage', 'desc')->get() );


    return view('welcome', compact('name'));
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/help', function () {
    return view('pages/help');
});

Route::get('/events', function(){
	$events = [
		'Make php Confrence',
		'Makeup Confrence',
		'Laravel teach',
		'jQuery Condrence'
	];

	return view('events/index', compact('events'));
});

Route::get('/visual_pool', function(){
	return view('pages/visual_pool');
});

Route::get('/welcome_page1', function(){
	return view('pages/welcome_page1');
});

Route::get('/welcome_page2', function(){
	return view('pages/welcome_page2');
});
