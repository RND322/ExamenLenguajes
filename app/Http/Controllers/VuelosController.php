<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vuelo;
use Illuminate\Http\Request;
use App\Models\TipoAsiento;

class VuelosController extends Controller
{
        public function index(){
            return view("inicio");
        }

        public function tipoasientos(){
            $tipoasientos=TipoAsiento::where('estado','A')->get();
            return view('tiposAsientos', compact('tipoasientos'));
}

        public function vuelosver(){
            $vuelos = Vuelo::all();
           
            return view('vuelos', compact('vuelos'));
        }

        public function agregarvuelo(){
            return view("nuevoVuelo");
        }


        public function guardarvuelo (Request $request){
            $nvovuelo = new Vuelo();
            $nvovuelo->numeroVuelo = $request->input('numero');
            $nvovuelo->origen = $request->input('origen');
            $nvovuelo->destino = $request->input('destino');
            $nvovuelo->numeroAsientos = $request->input('cantidad');
            $nvovuelo->fechaSalida = $request->input('fechavuelo');
            $nvovuelo->save();
            return redirect ('/vuelos/vuelosver');
           }

           public function vervuelos(){
           
        }
}

