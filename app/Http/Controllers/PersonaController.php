<?php
namespace App\Http\Controllers;
use App\Persona;
use App\Residencia;
//use App\Http\Request;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $persona = Persona::all();
      return view('persona.SeleccionPersona', compact('persona'));
    }

    public function create()
    {
        $residencia = Residencia::all();
        return view('persona.CreatePersona', compact('residencia'));
    }

    public function store()
    {
        $p = new Persona();
        
        $p->documento = request()->documento;
        $p->nombre = request()->nombre;
        $p->fecha_nacimiento = request()->fecha_nacimiento;
        $p->municipio_nacimiento = request()->municipio_nacimiento;
        $p->grupo_sanguineo = request()->grupo_sanguineo;
        $p->residencia = request()->resident;
        $p->educacion=(object)array(
            "nombre_institucion"=>request()->nombre_institucion,
            "año_inicio"=>request()->año_inicio,
            "año_terminacion"=>request()->año_terminacion,
            "titulo_obtenido"=>request()->titulo_obtenido,
            "tipo"=>request()->tipo
        );
        $p->financiera=(object)array(
            "empresa"=> request()->empresa,
            "salario"=>request()->salario,
            "tipo_empleo"=>request()->tipo_empleo,
            "entidades_bancarias"=>request()->entidades_bancarias,
            "prestamo_vivienda"=>request()->prestamo_vivienda
        );
        $p->Grupo_Familiar=(object)array(
            "Hermana"=> request()->documetoHermana,
        );
        
        
        $p->save();   
        return redirect()->route('persona.index');
    }

    public function mostrar()
    {
        return view('persona.SeleccionPersona');
    }

    public function mostrarPersona()
    {
        $persona = Persona::where('_id','=',request()->_id)->get();
        return view('persona.index', compact('persona'));
    }

}
