<?php

namespace App\Http\Controllers;

use App\Residencia;
//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $residencia = Residencia::all();
      return view('residencia.index', compact('residencia'));
      //return view('residencia.CreateResidencia', compact('residencia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('residencia.CreateResidencia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
      $r = new Residencia();
      $r->direccion = request()->direccion;
      $r->barrio = request()->barrio;
      $r->municipio = request()->municipio;
      $r->estrato = request()->estrato;
      $r->tipo = request()->tipo;
      $r->codigo = request()->codigo;
      $r->location->type="Point";
      $r->location->coordinates[0]=request()->longitude;
      $r->location->coordinates[1]=request()->latitude;
      $r->numero_residentes = request()->numero_residentes;
      $r->hab = request()->hab;
      $r->save();

      return redirect()->route('residencia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mostrar()
    {
        return view('busquedas.busquedaResidencia');
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
