<?php

namespace App\Http\Controllers;

use App\User;
use App\Pool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CreatesController extends Controller
{
    public function create_user()
    {

	    $user = new User;

		$user->nom = request('nom');
		$user->prenom = request('prenom');
		$user->date_de_naissance = request('birthday');
		$user->email = request('email');
		$user->password = Hash::make(request('password'));

		$user->save();

		return 'done';
    }

    public function create_pool()
    {

	    $pool = new Pool;

		$pool->titre = request('titre');
		$pool->destination = request('destination');
		$pool->description = request('description');
		$pool->cost_travel = request('cost_travel');
		$pool->start_date = request('start_date');
		$pool->vip = request('vip');

		$pool->save();

		return 'Done Create Pool';
    }
}
