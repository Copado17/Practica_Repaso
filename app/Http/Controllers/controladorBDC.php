<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\controladorBDC;

use App\Http\Requests\validador_clientes;
use DB;
use Carbon\Carbon;

class controladorBDC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultRec= DB::table('tb_cliente')->get();
        return view('/TClientes', compact('resultRec'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('TClientes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validador_clientes $request)
    {
        DB::table ('tb_cliente')->insert([
            "nombre" => $request->input ('nombre'),
            "correo" => $request->input ('correo'),
            "no_serie_ine" => $request->input ('no_serie_ine'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
         ]);
         return redirect('TClientes')->with('Confirmacion','Tu recuerdo llego al controlador') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultarId= DB::table('tb_cliente')->where('id', $id)->first();
        return view('ModalEliminarClientes', compact('consultarId'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultarId= DB::table('tb_cliente')->where('id', $id)->first();
        return view('EditarC', compact('consultarId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validador_clientes $request, $id)
    {
        DB::table ('tb_cliente')->where('id', $id)->update([
            "nombre" => $request->input ('nombre'),
            "correo" => $request->input ('correo'),
            "no_serie_ine" => $request->input ('no_serie_ine'),
            "updated_at" => Carbon::now()
         ]);
         return redirect('TClientes')->with('Editar','Tu recuerdo llego al controlador') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_cliente')->where('id', $id)->delete();
        return redirect('TClientes')->with('Eliminacion','Tu recuerdo se ha eliminado') ;
    }
}
