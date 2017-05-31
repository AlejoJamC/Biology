<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Test;
use App\Models\Question;
use App\Models\Answer;
use App\Models\RespuestasEstudiantes;

class ExamenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index (){
        $questionario = Test::Find(1);
        $preguntas = Question::join('questionario_preguntas','preguntas.id','=','questionario_preguntas.pregunta_id')
                    ->Select('preguntas.id AS pregunta_id','preguntas.pregunta')
                    ->where('questionario_preguntas.questionario_id','=',1)
                    ->get();
        $respuestas = Question::join('questionario_preguntas','preguntas.id','=','questionario_preguntas.pregunta_id')
                                    ->join('respuestas','preguntas.id','=','respuestas.pregunta_id')
                                    ->Select('preguntas.id AS pregunta_id','respuestas.id as respuesta_id','respuestas.respuesta')
                                    ->where('questionario_preguntas.questionario_id','=',1)
                                    ->get();
        return view('examen.view',['questionario' => $questionario, 'preguntas' => $preguntas, 'respuestas' => $respuestas]);
    }

    public function respuesta (Request $request){
        $cantidad = Question::join('questionario_preguntas','preguntas.id','=','questionario_preguntas.pregunta_id')
                    ->Select('preguntas.id')
                    ->where('questionario_preguntas.questionario_id','=',1)
                    ->groupBy('preguntas.id')
                    ->get();

        foreach ($cantidad as $valor) {
            $variable = 'pregunta' . $valor['id'];
            if ( !$request->has($variable)) {
                return redirect('/dashboard/examen/')->with('error','Falta responder la pregunta ' . $valor['id']);
            }
        }

        foreach ($cantidad as $valor) {
            $variable = 'pregunta' . $valor['id'];
            RespuestasEstudiantes::create
            ([
                'estudiante_id' => 1,
                'questionario_id' => $request->questionario,
                'pregunta_id' => $valor['id'],
                'respuesta_id' => $request->$variable
            ]);
        }
        return redirect('/dashboard/')->with('creado','Su respuestas fueron guardadas satisfactoriamente.');

    }
}