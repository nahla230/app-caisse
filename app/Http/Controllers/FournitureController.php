<?php

namespace App\Http\Controllers;

use App\Fourniture;
use Illuminate\Http\Request;

class FournitureController extends Controller
{
    public function newFourniture(){

    }

    public function listeFourniture(){
        $fournitures = Fourniture::all();
        return view('fournitures',['fournitures'=>$fournitures]);
    }

    public function editFourniture(){

    }
}
