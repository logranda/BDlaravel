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
<<<<<<< HEAD
        $p->residencia = (object)array("residencia", request()->residencia);
        $p->educacion = (object)array("nombre_institucion" => request()->nombre_institucion, "año_inicio" => request()->año_inicio, "año_terminacion" =>request()->año_terminacion, "titulo_obtenido" => request()->titulo_obtenido, "tipo" =>request()->tipo);
        $p->financiera = (object)array("empresa" => request()->empresa, "salario"=>request()->salario, "tipo_empleo" =>request()->tipo_empleo, "entidades_bancarias" => request()->entidades_bancarias, "prestamo_vivienda" => request()->prestamo_vivienda);

        $p->nucleo_familiar = (object)array(["documento" => request()->documentopadre, "tipo_vinculo" => request()->vinculopadre], ["documento" => request()->vinculomadre, "tipo_vinculo" => request()->vinculomadre],["documento" => request()->documentohermano, "tipo_vinculo" => request()->vinculohermano],["documento" => request()->documentohermana, "tipo_vinculo" => request()->vinculohermana],["documento" => request()->documentohijo, "tipo_vinculo" => request()->vinculohijo],["documento" => request()->documentohija, "tipo_vinculo" => request()->vinculohija]);

=======
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
        
        
>>>>>>> 2512ace803df452815abab694eb73d15b612b65e
        $p->save();   
        return view('welcome');
    }

    public function mostrar()
    {
        return view('persona.SeleccionPersona');
    }

    public function mostrarPersona()
    {
        $persona = Persona::where('_id','=',request()->_id)->get();
        var_dump($persona);
        
        return view('persona.index', compact('persona'));
    }

}
