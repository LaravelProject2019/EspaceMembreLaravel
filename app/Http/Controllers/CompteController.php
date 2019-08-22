<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function acceuil()
    {

    	

	    if(auth()->guest())
	    {


	    	flash("Vous dévez être connecté pour voir cette page.")->error();
	    	return redirect('/connexion');

	    }

    	return view('compte');
    }

    public function deconnexion()
    {
    	
    	auth()->logout();

    	flash('Vous êtes déconnecté')->success();

    	return redirect('/connexion');
    }

}
