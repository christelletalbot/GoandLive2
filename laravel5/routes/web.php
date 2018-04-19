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
use App\User;


Route::get('/', function () {
// App\Pool::find(1)

    return view('pages/welcome_page1');

});

Route::post('/', function(){
	$user = new User;
	$user->nom = request('nom');
	$user->prenom = request('prenom');
	$user->date_de_naissance = request('birthday');
	$user->email = request('email');
	$user->password = request('password');

	$user->save();

	return 'done';

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

	$ac_money = DB::table('pool')->first()->actual_money;
	$name = DB::table('pool')->first()->name;
	$destination = DB::table('pool')->first()->destination;
	$description = DB::table('pool')->first()->description;
	$date = date('Y-m-d H:i:s');

	return view('pages/visual_pool', compact('ac_money', 'name', 'destination', 'description', 'date'));
});

Route::get('/welcome_page1', function(){
	return view('pages/welcome_page1');
});

Route::get('/welcome_page2', function(){
	return view('pages/welcome_page2');
});

Route::get('/create_pool', function(){
	return view('pages/create_pool');
});

Route::post('/create_pool', function(){


	return 'Done Create Pool';
});

Route::get('/modif_profile', function(){
	return view ('pages/modif_profile');
});

Route::get('/inscription', function(){

	return view('pages/inscription');
});

Route::post('/inscription', function () {

	$user = new User;
	$user->nom = request('nom');
	$user->prenom = request('prenom');
	$user->email = request('email');
	$user->password = request('password');

	$user->save();

	return 'done';
});


