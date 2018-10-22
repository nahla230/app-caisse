<?php

namespace App\Http\Controllers;

use App\Agence;
use Illuminate\Http\Request;

class AgenceController extends Controller
{
    function newAgence(){
        $newAgence = new Agence();
        $newAgence->name = 'Agence Belle vue';
        $newAgence->wilaya = 'Constantine';
        $newAgence->adresse = 'belle vue';
        $newAgence->tel = '03192457896';
        $newAgence->save();
    }
    function listeAgence(){
        $agence = Agence::all();
        return view('listeagence',['agence'=>$agence]);
    }
     function editAgenece(){

     }


}
