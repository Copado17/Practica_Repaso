<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\controladorBD;
use App\Http\Requests\validador;

use DB;
use Carbon\Carbon;


class controladorBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultRec= DB::table('tb_libro')->get();
        return view('TLibros', compact('resultRec'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validador $request)
    {
        DB::table ('tb_libro')->insert([
            "ISBN" => $request->input ('ISBN'),
            "Titulo" => $request->input ('Titulo'),
            "Autor" => $request->input ('Autor'),
            "No_paginas" => $request->input ('Paginas'),
            "Editorial" => $request->input ('Editorial'),
            "Email_editorial" => $request->input ('Email'),
             "created_at" => Carbon::now(),
             "updated_at" => Carbon::now()
         ]);
         return redirect('Formulario')->with('Confirmacion','Tu recuerdo llego al controlador') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultarId= DB::table('tb_libro')->where('id', $id)->first();
        return view('ModalEliminar', compact('consultarId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultarId= DB::table('tb_libro')->where('id', $id)->first();
        return view('Editar', compact('consultarId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validador $request, $id)
    {
        DB::table('tb_libro')->where('id', $id)->update([
            "ISBN" => $request->input ('ISBN'),
            "Titulo" => $request->input ('Titulo'),
            "Autor" => $request->input ('Autor'),
            "No_paginas" => $request->input ('Paginas'),
            "Editorial" => $request->input ('Editorial'),
            "Email_editorial" => $request->input ('Email'),
             "updated_at" => Carbon::now()
        ]);
        return redirect('TLibros')->with('Editar','Tu recuerdo se ha actualizado') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_libro')->where('id', $id)->delete();
        return redirect('TLibros')->with('Eliminacion','Tu recuerdo se ha eliminado') ;
    }

   
}
