<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    public function newFournisseur(){

    }
    public function listeFournisseur(){
        $fournisseur = Fournisseur::all();
        return view('fournisseurs',['fournisseurs'=>$fournisseur]);
    }

    public function editFournisseur(){

    }
}
