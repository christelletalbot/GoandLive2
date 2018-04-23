<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function get_home_page()
    {
    	
    	return view('pages/welcome_page1');

    }

    public function get_home2_page()
    {

    	return view('pages/welcome_page2');

    }

    public function get_create_pool_page()
    {

    	return view('pages/create_pool');

    }

    public function get_visual_pool_page()
    {

	    $titre = DB::table('pools')->find(1)->titre;
		$destination = DB::table('pools')->find(1)->destination;
		$description = DB::table('pools')->find(1)->description;
		$cost_travel = DB::table('pools')->find(1)->cost_travel;
		$ac_money = DB::table('pools')->find(1)->ac_money;

		// $date = date('Y-m-d H:i:s');

		return view('pages/visual_pool', compact('titre', 'destination', 'description', 'cost_travel', 'ac_money'));

    }

    public function get_modif_pool_page()
    {

	    $titre = DB::table('pools')->find(1)->titre;
		$destination = DB::table('pools')->find(1)->destination;
		$description = DB::table('pools')->find(1)->description;
		$cost_travel = DB::table('pools')->find(1)->cost_travel;
		$start_date = DB::table('pools')->find(1)->start_date;
		$vip = DB::table('pools')->find(1)->vip;

		return view('pages/modif_pool', compact('titre', 'destination', 'description', 'cost_travel', 'start_date', 'vip'));

    }

    public function get_modif_profile_page()
    {

	    $nom = DB::table('users')->first()->nom;
		$prenom = DB::table('users')->first()->prenom;
		$telephone = DB::table('users')->first()->telephone;
		$birthday = DB::table('users')->first()->date_de_naissance;
		$email = DB::table('users')->first()->email;

		return view ('pages/modif_profile', compact('nom', 'prenom', 'telephone', 'birthday', 'email'));
		
    }
}
