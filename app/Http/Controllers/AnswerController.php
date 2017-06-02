<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Http\Requests;
use App\Http\Requests\CreateAnswerRequest;
use App\Http\Requests\UpdateAnswerRequest;
use Auth;
use App\Models\Answer;
use App\Models\Question;

class AnswerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () {
        $answers = Answer::Where('usuario_id',Auth::user()->id)->get();
        $questions = Question::Where('usuario_id',Auth::user()->id)->get();
        return View('answer.mostrar', ['answers' => $answers, 'questions' => $questions]);
    }

    public function getCreate () {
        $questions = Question::Where('usuario_id',Auth::user()->id)->get();
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
            'correcta' => $correcta,
            'usuario_id' => Auth::user()->id
        ]);

        return redirect('/dashboard/answer/')->with('creado','La respuesta '.$request->get('respuesta').', ha sido creado correctamente.');
        
    }

    public function update ($id) {
        $answer = Answer::Find($id);
        if ( $answer <> null)
		{
            $questions = Question::Where('usuario_id',Auth::user()->id)->get();
			return view('answer.update',['answer'=> $answer, 'questions' => $questions]);
		} else
		{
			return redirect('/dashboard/answer')->with('error','La respuesta '.$id.', no existe en la DB.');
		}
    }

    public function putUpdate (UpdateAnswerRequest $request, $id) {
        
		$answer = answer::find($id);
		if ( $answer <> null)
		{
            $correcta;
            if ($request->has('correcta')){
                $correcta = 1;
            } else {
                $correcta = 0;
            }
			$answer->respuesta = $request->respuesta;
			$answer->correcta = $correcta;
			$answer->save();
			return redirect('/dashboard/answer')->with('actualizado','La respuesta ' . $answer->respuesta . ', se ha actualizado');
		} else
		{
			return redirect('/dashboard/answer')->with('error','El artículo ' . $id . ', no existe en la DB.');
		}
    }
}
