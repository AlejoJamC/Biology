<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Test;
use App\Models\Question;
use App\Models\Answer;

class ExamenController extends Controller
{
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
}