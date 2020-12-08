<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    //return text
    public function index(){
        return view('forminput');
    }

    public function tambah(Request $request){
        $a = $request->variablesatu;
        $b = $request->variabledua;

        $c = $a + $b;

        return $c;
    }
    
}
