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
	$isWeekend = date('N') >= 6;
    return view('welcome', compact('name','isWeekend'));
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
