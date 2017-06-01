<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

use App\Models\User;
use App\Models\Test;
use App\Models\CursoEstudiante;

class CourseStudenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index (){
        $estudiantes = DB::table('usuarios')->join('respuestas_estudiantes','usuarios.id','=','respuestas_estudiantes.estudiante_id')
                ->join('respuestas',function($join){
                        $join->on('respuestas_estudiantes.respuesta_id','=','respuestas.id')
                        ->on('respuestas_estudiantes.pregunta_id','=','respuestas.pregunta_id');
                    })
                ->Select('respuestas_estudiantes.estudiante_id','usuarios.nombre', 'usuarios.apellido','usuarios.email', 'usuarios.estado', 'respuestas_estudiantes.questionario_id',
                        DB::raw('SUM(CASE WHEN respuestas.correcta = 1 THEN 1 ELSE 0 END) AS correctas'),
                        DB::raw('Count(*) AS total_preguntas'))
                ->GroupBy('respuestas_estudiantes.estudiante_id','usuarios.nombre', 'usuarios.apellido','usuarios.email', 'usuarios.estado', 'respuestas_estudiantes.questionario_id')
                ->get();
        $tests = Test::All();
        //return ;
        return view('courseStuden.view',['tests' => $tests ,'estudiantes' => $estudiantes]);
    }
}
