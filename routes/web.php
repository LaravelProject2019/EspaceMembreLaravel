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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/','welcome');


Route::get('/imobilier', function () {
    return view('index');
});
Route::get('/acceuil', function(){

	return view('acceuil');
});

// Route::get('/membre', function () {
//     return view('espace');
// });

Route::get('/inscription', 'InscriptionController@formulaire')->name('signUp');

Route::post('/inscription', 'InscriptionController@traitement');

Route::get('/membre','MembresController@liste');

Route::get('/connexion','ConnexionController@formulaire')->name('connexion');
Route::post('/connexion','ConnexionController@traitement');

Route::get('/compte','CompteController@acceuil');
Route::get('/deconnexion','CompteController@deconnexion');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
