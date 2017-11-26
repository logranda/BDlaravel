<?php

namespace App\Http\Controllers;

use App\Residencia;
use App\Http\Controllers\Controller;

class ResidenciaController extends Controller
{
    public function index()
    {
      $residencia = Residencia::all();
      return view('residencia.SeleccionResidencia', compact('residencia'));
      //return view('residencia.CreateResidencia', compact('residencia'));
    }
    public function create()
    {
        return view('residencia.CreateResidencia');
    }


    public function store()
    {
      $r = new Residencia();
      $r->direccion = request()->direccion;
      $r->barrio = request()->barrio;
      $r->municipio = request()->municipio;
      $r->estrato = request()->estrato;
      $r->tipo = request()->tipo;
      $r->codigo = request()->codigo;
      $r->location->$coordinates[0]=request()->longitude;
      $r->location->$coordinates[1]=request()->latitude;
      $r->location->$type="Point";
      $r->numero_residentes = request()->numero_residentes;
      $r->hab = request()->hab;
      $r->save();

      return redirect()->route('residencia.index');
    }

    public function mostrar()
    {
        return view('busquedas.busquedaResidencia');
    }

    public function mostrarLista()
    {
        $residencia = Residencia::where('codigo','=',request()->codigo)->get();
        return view('residencia.index', compact('residencia'));
    }
    
    public function resultado()
    {
      $residencia = Residencia::where('location', 'near', [
          '$geometry' => [
            'coordinates' => [ -73.9667, 40.78 ],
            'type' => 'Point',
          ],
          '$minDistance' => 0,
          '$maxDistance' => 500
        ])->get();

        return view('busquedas.sitio', compact('residencia'));
    }

}
