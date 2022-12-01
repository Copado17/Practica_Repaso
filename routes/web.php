<?php

use App\Http\Controllers\Controlador;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorBD;
use App\Http\Controllers\controladorBDC;
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
Route::get('/TLibros', function () {
    return view('TLibros');
});
Route::get('/TClientes', function () {
    return view('TClientes');
});



route::post('Formulario_libro', [Controlador::class, 'validador_campos']);


//route::post('Formulario_cliente', [Controlador::class, 'validador_clientes']);

//Create
Route::get('Formulario/create',  [controladorBD::class, 'create'])->name('Formulario.create');

//Store
Route::post('Formulario/store',  [controladorBD::class, 'store'])->name('Formulario.store');

//Vista
Route::get('TLibros',  [controladorBD::class, 'index'])->name('Libros.index');

//Edit
Route::get('Editar/{id}/edit',  [controladorBD::class, 'edit'])->name('Editar.edit');

//Update
Route::put('Editar/{id}',  [controladorBD::class, 'update'])->name('Editar.update');

//show 
Route::get('Eliminar/{id}/show',  [controladorBD::class, 'show'])->name('Libros.show');

//Delete
Route::delete('Eliminar/{id}',  [controladorBD::class, 'destroy'])->name('Libros.destroy');

//Vista de clientes
//vista
Route::get('TClientes',  [controladorBDC::class, 'index'])->name('Clientes.index');

//Create
Route::get('Clientes/create',  [controladorBDC::class, 'create'])->name('Clientes.create');

//Store
Route::post('Clientes/store',  [controladorBDC::class, 'store'])->name('Clientes.store');

//Edit
Route::get('Clientes/{id}',  [controladorBDC::class, 'edit'])->name('Clientes.edit');

//Update
Route::put('Clientes/{id}',  [controladorBDC::class, 'update'])->name('Clientes.update');

//show
Route::get('EliminarC/{id}/show',  [controladorBDC::class, 'show'])->name('Clientes.show');

//Delete
Route::delete('EliminarC/{id}',  [controladorBDC::class, 'destroy'])->name('Clientes.destroy');