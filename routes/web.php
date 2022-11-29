<?php

use App\Http\Controllers\Controlador;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Principal');
});
Route::get('/Formulario', function () {
    return view('Formulario');
});

Route::get('/Clientes', function () {
    return view('Clientes');
});

route::post('Formulario_libro', [Controlador::class, 'validador_campos']);


route::post('Formulario_cliente', [Controlador::class, 'validador_clientes']);