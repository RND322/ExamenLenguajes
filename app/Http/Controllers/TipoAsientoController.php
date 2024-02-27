<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\TipoAsiento;

class TipoAsientoController extends Controller
{
    public function agregar(){
        return view("agregarTipoAsiento");
    }


    public function guardar (Request $request){
     $nvoAsiento = new TipoAsiento();
     $nvoAsiento->descripcion = $request->input('descripcion');
     $nvoAsiento->precio = $request->input('precio');   
     $nvoAsiento->estado = $request->input('estado');
     $nvoAsiento->save();
     return redirect ('/vuelos/tipoasientos');
    }


}
