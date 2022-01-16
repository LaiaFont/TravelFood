<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class LocalitzacioController extends Controller {
    public function index($idioma){
        App::setlocale( $idioma );  // posem l'idioma a la app per tal que les vistes l'utilitzin 
        session()->put('idioma', $idioma); // posem l'idioma al session per recordar-lo en properes connexions 
        return redirect()->back();
    }
}