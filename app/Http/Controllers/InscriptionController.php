<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membre;

class InscriptionController extends Controller
{
    public function formulaire()
    {
    	return view('signUp');
    }


    public function traitement()
    {

    	#Verification des champs
		request()->validate([

			'nom' => ['required'],
			'prenom' => ['required'],
			'email' => ['required', 'email'],
			'matricule' => ['required'],
			'niveau' => ['required'],
			'ecole' => ['required'],
			'password' => ['required','min:8'],
		],[
			'password.min' => 'Veillez donner au moins :min caractères pour mot de pass',
		]);
		
		#Creation d'un nouveau membre
		$membres = Membre::create([

			"nom" => request("nom"),
			"prenom" => request("prenom"),
			"email" => request("email"),
			"matricule" => request("matricule"),
			"niveau" => request("niveau"),
			"ecole" => request("ecole"),
			"password" => bcrypt(request("password")),
		]);
		flash("Votre compte a bien été créer avec succés")->success();


		return view('signUp');
	}
}
