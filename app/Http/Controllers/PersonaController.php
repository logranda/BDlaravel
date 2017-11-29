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
        $codigo = (int) $_POST["codigo"];
        //$residencia = Residencia::where('codigo', '=', $codigo)->get();       
        //var_dump($residencia);
        
        $p = new Persona();

        if($codigo == 0 || intval(request()->documento) == 0) {
            echo "Error en la inserción, el código y el documento no puede ser cero";    
            $residencia = Residencia::all();
            return view('persona.CreatePersona', compact('residencia'));
        }else{
            $p->documento = intval(request()->documento);
            $p->nombre = request()->nombre;
            $p->fecha_nacimiento = request()->fecha_nacimiento;
            $p->municipio_nacimiento = request()->municipio_nacimiento;
            $p->grupo_sanguineo = request()->grupo_sanguineo;
            $p->codigo_residencia = intval($codigo);
            $p->educacion = (object)array("nombre_institucion" => request()->nombre_institucion, "año_inicio" => request()->año_inicio, "año_terminacion" =>request()->año_terminacion, "titulo_obtenido" => request()->titulo_obtenido, "tipo" =>request()->tipo);
            $p->financiera = (object)array("empresa" => request()->empresa, "salario"=>intval(request()->salario), "tipo_empleo" =>request()->tipo_empleo, "entidades_bancarias" => request()->entidades_bancarias, "prestamo_vivienda" => request()->prestamo_vivienda);

            $p->nucleo_familiar = (object)array("padre"=>["documento" => intval(request()->documentopadre), "tipo_vinculo" => request()->vinculopadre], "madre"=>["documento" => intval(request()->vinculomadre), "tipo_vinculo" => request()->vinculomadre], "hermano"=>["documento" => intval(request()->documentohermano), "tipo_vinculo" => request()->vinculohermano],"hermana"=>["documento" => intval(request()->documentohermana), "tipo_vinculo" => request()->vinculohermana], "hijo"=>["documento" => intval(request()->documentohijo), "tipo_vinculo" => request()->vinculohijo],"hija"=>["documento" => intval(request()->documentohija), "tipo_vinculo" => request()->vinculohija]);

            $p->save();   
            return view('welcome');
        }

    }

    public function mostrar()
    {
        return view('persona.SeleccionPersona');
    }

    public function mostrarPersona()
    {
        if (empty($_POST["documento"])) {
            echo "Error, por favor vuelve a elegir";  
            $persona = Persona::all();  
            return view('persona.SeleccionPersona', compact('persona'));
        
        }else{
            $documento = (int) $_POST["documento"];
            $persona = Persona::where('documento','=',$documento)->first();
            $resicenciaPersona = Residencia::where("codigo", '=' ,$persona->codigo_residencia)->first();
            return view('persona.index', ['p'=> $persona, 'r' => $resicenciaPersona]);
        }
        
    }

}
