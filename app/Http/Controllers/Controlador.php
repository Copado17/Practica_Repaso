<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests\validador;


class Controlador extends Controller
{
    
    public function validador_campos(validador $req){

        $titulos=$req->input('Titulo');
     
        return redirect('/Formulario')->with('mensaje',compact('titulos'));

     }

    
}
