<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests\validador;
use App\Http\Requests\validador_clientes;



class Controlador extends Controller
{
    
    public function validador_campos(validador $req){

        $titulos=$req->input('Titulo');
     
        return redirect('/Formulario')->with('mensaje',compact('titulos'));

     }
     
     Public function validador_clientes(validador_clientes $req){
        
        return redirect('/Clientes')->with('mensaje', 'Cliente guarado con exito');
     }

    
}
