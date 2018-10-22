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

Route::get('/', function () {
    return view('index');
});
// caisses
Route::get('/liste-caisses', 'CaisseController@listeCaisse');
Route::get('/aliment-caisse', 'CaisseController@editCaisse');
Route::get('/arrete-caisse', 'CaisseController@arreteCaisse');

//banques
Route::get('/liste-banques', 'BanqueController@listeBanque');
Route::get('/aliment-banque', 'BanqueController@editBanque');
Route::get('/arrete-banque', 'BanqueController@arreteBanque');

//agances
Route::get('/liste-agences', 'AgenceController@listeAgence');
Route::get('/edit-agence', 'AgenceController@editAgenece');
Route::get('/add-agence', 'AgenceController@newAgence');

//fournisseurs
Route::get('/liste-fournisseurs', 'FournisseurController@listeFournisseur');
Route::get('/edit-fournisseur', 'FournisseurController@editFournisseur');
Route::get('/add-fournisseur', 'FournisseurController@newFournisseur');

//fournitures
Route::get('/liste-fournitures', 'FournitureController@listeFourniture');
Route::get('/edit-fourniture', 'FournitureController@editFourniture');
Route::get('/add-fourniture', 'FournitureController@newFourniture');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
