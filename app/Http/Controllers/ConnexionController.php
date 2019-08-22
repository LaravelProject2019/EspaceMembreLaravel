<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function formulaire()
    {
    	return view('login');
    } 

    public function traitement()
    {
    	request()->validate([

    		"email" => ['required'],
    		"password" => ['required'],

    	]);

    	$result = auth()->attempt([

    		"email" => request('email'),
    		"password" => request('password'),
    	]);

    	if($result)
    	{
    		
    		flash("Vous êtes bien connecté")->success();
    		return redirect('/compte');
    	}

    	return back()->withInput()->withErrors([

    		"email" => "Vos identifiants sont incorrect",
    	]);

    	return "Traitement formulaire connexion votre email est";
    }
}
