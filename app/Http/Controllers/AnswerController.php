<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Http\Requests;
use App\Http\Requests\CreateAnswerRequest;

use App\Models\Answer;
use App\Models\Question;

class AnswerController extends Controller
{
    public function index () {
        $answers = Answer::All();
        $questions = Question::All();
        return View('answer.mostrar', ['answers' => $answers, 'questions' => $questions]);
    }

    public function getCreate () {
        $questions = Question::All();
        return View('answer.create', ['questions' => $questions]);
    }

    public function postCreate (CreateAnswerRequest $request){
        $correcta;
        if ($request->has('correcta')){
            $correcta = 1;
        } else {
            $correcta = 0;
        }
        
        Answer::create
        ([
            'pregunta_id' => $request->get('pregunta'),
            'respuesta' => $request->get('respuesta'),
            'correcta' => $correcta
        ]);

        return redirect('/dashboard/answer/')->with('creado','La respuesta '.$request->get('respuesta').', ha sido creado correctamente.');
        
    }
}
