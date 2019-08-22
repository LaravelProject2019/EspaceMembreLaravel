<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membre;
class MembresController extends Controller
{
    public function liste(){

    	$members = Membre::all();

		return view('membre', compact('members'));


    }
	
}
