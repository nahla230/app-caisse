<?php

namespace App\Http\Controllers;

use App\Banque;
use Illuminate\Http\Request;

class BanqueController extends Controller{

    public function newBanque(){

    }

    public function listeBanque(){
        $banque = Banque::all();
        return view('banques',['banques'=>$banque]);
    }

    public function aganceBanque(){

    }

    public function editBanque(){

    }

    public function arreteBanque(){

    }
}
