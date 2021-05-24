<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use Illuminate\Support\Facades\Session;

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

/*
Route::get('nombre', function () {
    return view('nom.nombre');
});

Route::get('apat', function(){
    return view('nom.apat');
});

Route::get('amat', function(){
    return view('nom.amat');
});

*/


	
/*
Route::get('Categorias', [CategoriasController::class, 'index'])->name('Categorias.index');
Route::get('Categorias/create', [CategoriasController::class, 'create'])->name('Categorias.create');
Route::post('Categorias', [CategoriasController::class, 'store'])->name('Categorias.store');
Route::get('Categorias/{categoria}', [CategoriasController::class, 'show'])->name('Categorias.show');
Route::get('Categorias/{categoria}/edit', [CategoriasController::class, 'edit'])->name('Categorias.edit');
Route::put('Categorias/{categoria}', [CategoriasController::class, 'update'])->name('Categorias.update');
Route::delete('Categorias/{categoria}', [CategoriasController::class, 'destroy'])->name('Categorias.destroy');
*/

Route::get('/', function (){
    $categorias = [1=>'Electronica', 2=>'Electrodomesticos', 3=>'Ropa'];
    Session::put('categorias', $categorias);
    //return view('layouts.plantilla_inicio', compact('categorias'));
});

Route::get('Categorias', 'App\Http\Controllers\CategoriasController@index');
Route::get('Categorias/create', 'App\Http\Controllers\CategoriasController@create');
Route::post('Categorias', 'App\Http\Controllers\CategoriasController@store');
Route::get('Categorias/{categoria}', 'App\Http\Controllers\CategoriasController@show');
Route::get('Categorias/{categoria}/edit', 'App\Http\Controllers\CategoriasController@edit');
Route::put('Categorias/{categoria}', 'App\Http\Controllers\CategoriasController@update'); 
Route::delete('Categorias/{categoria}', 'App\Http\Controllers\CategoriasController@destroy');

Route::get('Productos', 'App\Http\Controllers\ProductosController@index');
Route::get('Productos/create', 'App\Http\Controllers\ProductosController@create');
Route::post('Productos', 'App\Http\Controllers\ProductosController@store');
Route::get('Productos/{producto}', 'App\Http\Controllers\ProductosController@show');
Route::get('Productos/{producto}/edit', 'App\Http\Controllers\ProductosController@edit');
Route::put('Productos/{producto}', 'App\Http\Controllers\ProductosController@update'); 
Route::delete('Productos/{producto}', 'App\Http\Controllers\ProductosController@destroy');

Route::get('/', function () {
    return view('layouts.plantilla_inicio');
});

Route::get('/Tablero', function () {
    return view('supervisor.tablero');
})->middleware('auth');

Route::get('autenticar', function(){
    return view('autenticar');
});


Route::get('revisar', function(){
    return view('encargado.revisar');
});

Route::get('cuenta', function(){
    return view('cliente.cuenta');
});

Route::get('/Tablero', function () {
    return view('supervisor.tablero');
});

Route::post('validar', 'App\Http\Controllers\AutenticarController@validar');

//Route::get('listar_por_categoria/{categoria_id}', 'BuscarController@listar_por');

Route::resource('Usuarios', 'App\Http\Controllers\UsuariosController');


/*
Route::get('Categorias','CategoriasController@index');
Route::post('Categorias','CategoriasController@store');
Route::get('Categorias/create','CategoriasController@create');
Route::get('Categorias/{categoria}','CategoriasController@show');
Route::put('Categorias/{categoria}','CategoriasController@update');
Route::delete('Categorias/{categoria}','CategoriasController@destroy');
Route::get('Categorias/{categoria}/edit','CategoriasController@edit');
*/