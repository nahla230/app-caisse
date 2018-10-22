<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caisse;
class CaisseController extends Controller
{
    public function newCaisse(){
        $newCaisse = new Caisse();
        $newCaisse->id_agence = 1;
        $newCaisse->somme = 0;
        $newCaisse->save();
    }

    public function listeCaisse(){
        $caisse = Caisse::all();
        return view('caisses',['caisses'=>$caisse]);
    }

    public function aganceCaisse(){

    }

    public function editCaisse(){

    }

    public function arreteCaisse(){

    }
}
