<?php

use App\Http\Controllers\TipoAsientoController;
use App\Http\Controllers\VuelosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/



Route::get('/vuelos',[VuelosController::class, 'index'])->name('vuelos.inicio');

Route::get('/vuelos/tipoasientos',[VuelosController::class, 'tipoasientos'])->name('vuelos.asientos');

Route::get('/vuelos/vuelosver',[VuelosController::class, 'vuelosver'])->name('vuelos.vuelosver');



Route::get('/vuelos/agregarasiento',[TipoAsientoController::class, 'agregar'])->name('vuelos.agregarasiento');
Route::post('/vuelos/guardarasiento',[TipoAsientoController::class, 'guardar'])->name('asiento.guardar');



Route::get('/vuelos/nuevovuelo',[VuelosController::class, 'agregarvuelo'])->name('vuelos.agregarvuelo');


Route::post('/vuelos/guardarvuelo',[VuelosController::class, 'guardarvuelo'])->name('vuelos.guardar');