<?php

namespace App\Http\Controllers;

use App\Pool;
use App\User;
use Illuminate\Http\Request;

class EditsController extends Controller
{
    public function edit_profile()
    {

		$user = User::find(1);

		$user->nom = request('nom');
		$user->prenom = request('prenom');
		$user->date_de_naissance = request('birthday');
		$user->telephone = request('telephone');
		$user->email = request('email');
		$user->password = request('password');	

		$user->save();

		return 'done';

    }

    public function edit_pool()
    {

	    $pool = Pool::find(1);

		$pool->titre = request('titre');
		$pool->destination = request('destination');
		$pool->description = request('description');
		$pool->cost_travel = request('cost_travel');
		$pool->start_date = request('start_date');
		$pool->vip = request('vip');

		$pool->save();

		return 'change modif pool done';

    }
}
