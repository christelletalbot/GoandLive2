<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        DB::table('users')->insert([[
        	'nom'=>'Dubois',
        	'prenom'=>'Marc',
        	'telephone'=>'068726271',
        	'date_de_naissance'=>'1987-01-12',
        	'email'=>'marc.dubois@email.fr',
        	'password'=>'marcdubois',
        ],
    	[
        	'nom'=>'Fresnes',
        	'prenom'=>'Christophe',
        	'telephone'=>'0617092751',
        	'date_de_naissance'=>'1997-07-27',
        	'email'=>'christophe.fresnes@email.fr',
        	'password'=>'cricri',    		
    	],
    	[
    		'nom'=>'Grosjean',
        	'prenom'=>'Jéremy',
        	'telephone'=>'0610924516',
        	'date_de_naissance'=>'1992-07-10',
        	'email'=>'jeremy.grosjean@email.fr',
        	'password'=>'jeje',
    	],
    	[
    		'nom'=>'Petitjean',
        	'prenom'=>'Antoine',
        	'telephone'=>'0602985012',
        	'date_de_naissance'=>'1999-02-22',
        	'email'=>'petitjean.antoine@email.fr',
        	'password'=>'toitoine',
    	],
    	[
    		'nom'=>'Labarde',
        	'prenom'=>'Jean',
        	'telephone'=>'0668230714',
        	'date_de_naissance'=>'1995-10-10',
        	'email'=>'jean.labarde@email.fr',
        	'password'=>'jeanjean',
        ]
    	]);
    }
}
