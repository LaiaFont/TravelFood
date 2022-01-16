<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\App;
use Closure;

class Idioma {
    public function handle($request, Closure $next)
    {
        if (session()->has('idioma')) {  // comprovem si hi ha un idioma en el session
            App::setlocale( session()->get('idioma'));   // posem l'idioma a la app per tal que les vistes l'utilitzin
        } 
        return $next($request);
    }
}