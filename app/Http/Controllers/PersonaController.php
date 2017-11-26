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
        $p->residencia->$resident = request()->$resident;
        $p->educacion[0]->nombre_institucion=request()->nombre_institucion;
        $p->educacion[0]->año_inicio=request()->año_inicio;
        $p->educacion[0]->año_terminacion=request()->año_terminacion;
        $p->educacion[0]->titulo_obtenido=request()->titulo_obtenido;
        $p->educacion[0]->tipo=request()->tipo;
        $p->financiera[0]->empresa=request()->empresa;
        $p->financiera[0]->salario=request()->salario;
        $p->financiera[0]->tipo_empleo=request()->tipo_empleo;
        $p->financiera[0]->entidades_bancarias=request()->entidades_bancarias;
        $p->financiera[0]->prestamo_vivienda=request()->prestamo_vivienda;
        $p->nucleo_familiar[0]->documento=request()->documento;
        $p->nucleo_familiar[0]->tipo_vinculo=request()->tipo_vinculo;
        $p->nucleo_familiar[1]->documento=request()->documento;
        $p->nucleo_familiar[1]->tipo_vinculo=request()->tipo_vinculo;
        $p->nucleo_familiar[2]->documento=request()->documento;
        $p->nucleo_familiar[2]->tipo_vinculo=request()->tipo_vinculo;
        $p->nucleo_familiar[3]->documento=request()->documento;
        $p->nucleo_familiar[3]->tipo_vinculo=request()->tipo_vinculo;
        $p->nucleo_familiar[4]->documento=request()->documento;
        $p->nucleo_familiar[4]->tipo_vinculo=request()->tipo_vinculo;
        $p->nucleo_familiar[5]->documento=request()->documento;
        $p->nucleo_familiar[5]->tipo_vinculo=request()->tipo_vinculo;
        
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
