<?php

namespace App\Http\Controllers;

use App\Residencia;
use App\Http\Controllers\PersonaController;
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
      if (intval(request()->codigo) == 0) {
        echo "Error en la inserción, el código no puede ser cero";    
        return view('residencia.CreateResidencia');
      }else{
        $r->direccion = request()->direccion;
        $r->barrio = request()->barrio;
        $r->municipio = request()->municipio;
        $r->estrato = intval(request()->estrato);
        $r->tipo = request()->tipo;
        $r->codigo = intval(request()->codigo);
        $r->location = (object)array("coordinates"=>["latitude" => floatval(request()->latitude), "longitude" => floatval(request()->longitude)], "type" => "Point");
        $r->numero_residentes = intval(request()->numero_residentes);
        $r->save();
        return view('welcome');
      }
    }

    public function mostrar()
    {
        return view('busquedas.busquedaResidencia');
    }

    public function mostrarLista()
    {

      if (empty($_POST["codigo"])) {
          echo "Error, por favor vuelve a elegir";  
          $residencia = Residencia::all();
          return view('residencia.SeleccionResidencia', compact('residencia'));
      }else{
          $codigo = (int) $_POST["codigo"];
          $residencia = Residencia::where('codigo', '=', $codigo)->first();       
          return view('residencia.index', ['r' => $residencia]);
      }
    }
    
    public function resultado()
    {
      
      $latitude = (float) $_POST['latitude'];
      $longitude = (float) $_POST['longitude'];
      $distancia_mimina = floatval($_POST['distancia_mimina']);
      $distancia_maxima = floatval($_POST['distancia_maxima']);

      $residencia = Residencia::where('location', 'near', [
          '$geometry' => [
            'type' => "Point",
            'coordinates' => [$latitude, $longitude]
          ],
          '$minDistance' => $distancia_mimina,
          '$maxDistance' => $distancia_maxima
        ])->get();

        return view('busquedas.sitio', compact('residencia'));
    }

}
