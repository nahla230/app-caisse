<?php

namespace App\Http\Controllers;

use App\Achat;
use Illuminate\Http\Request;

class AchatController extends Controller
{
    public function newAchat(){

    }

    public function valdieAchat(){

    }

    public function listeAchat(){
        $achats = Achat::all();
        return view('achats',['achats'=>$achats]);
    }
}
