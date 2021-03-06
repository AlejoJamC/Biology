<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Test;
use App\Models\Question;
use App\Models\Answer;
use App\Models\RespuestasEstudiantes;

use Auth;

class ExamenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index ($id){
        $questionario = Test::Find($id);
        $preguntas = Question::join('questionario_preguntas','preguntas.id','=','questionario_preguntas.pregunta_id')
                    ->Select('preguntas.id AS pregunta_id','preguntas.pregunta')
                    ->where('questionario_preguntas.questionario_id','=',$id)
                    ->get();
        $respuestas = Question::join('questionario_preguntas','preguntas.id','=','questionario_preguntas.pregunta_id')
                                    ->join('respuestas','preguntas.id','=','respuestas.pregunta_id')
                                    ->Select('preguntas.id AS pregunta_id','respuestas.id as respuesta_id','respuestas.respuesta')
                                    ->where('questionario_preguntas.questionario_id','=',$id)
                                    ->get();
        return view('examen.view',['questionario' => $questionario, 'preguntas' => $preguntas, 'respuestas' => $respuestas]);
    }

    public function respuesta (Request $request){
        $cantidad = Question::join('questionario_preguntas','preguntas.id','=','questionario_preguntas.pregunta_id')
                    ->Select('preguntas.id')
                    ->where('questionario_preguntas.questionario_id','=',$request->questionario)
                    ->groupBy('preguntas.id')
                    ->get();

        //return $cantidad;
        foreach ($cantidad as $valor) {
            $variable = 'pregunta' . $valor['id'];
            if ( !$request->has($variable)) {
                return redirect('/dashboard/examen/'.$request->questionario)->with('error','Falta responder la pregunta ' . $valor['id']);
            }
        }

        foreach ($cantidad as $valor) {
            $variable = 'pregunta' . $valor['id'];
            RespuestasEstudiantes::create
            ([
                'estudiante_id' => Auth::user()->id,
                'questionario_id' => $request->questionario,
                'pregunta_id' => $valor['id'],
                'respuesta_id' => $request->$variable
            ]);
        }
        return redirect('/dashboard/')->with('creado','Su respuestas fueron guardadas satisfactoriamente.');

    }
}