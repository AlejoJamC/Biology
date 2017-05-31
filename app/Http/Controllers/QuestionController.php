<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateQuestionRequest;

use App\Models\Question;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () {
        $questions = Question::All();
        return View('question.mostrar', ['questions' => $questions]);
    }

    public function getCreate()
    {
        return view('question.create');
    }

    public function create (CreateQuestionRequest $request) {
        Question::create
        ([
            'pregunta' => $request->get('pregunta'),
            'sugerencia' => $request->get('sugerencia')
        ]);
        return redirect('/dashboard/question/')->with('creado','La pregunta '.$request->get('pregunta').', ha sido creado correctamente.');
    }

    public function update ($id) {
        $question = Question::Find($id);
        if ( $question <> null)
		{
			return View('question.update',['question'=> $question]);
		} else
		{
			return redirect('/dashboard/question')->with('error','La pregunta '.$id.', no existe en la DB.');
		}
    }

    public function putUpdate (CreateQuestionRequest $request, $id) {
        
		$question = Question::find($id);
		if ( $question <> null)
		{
			$question->pregunta = $request->get('pregunta');
            $question->sugerencia = $request->get('sugerencia');
			$question->save();
			return redirect('/dashboard/question')->with('actualizado','El questionario '.$question->titulo.', se ha actualizado');
		} else
		{
			return redirect('/dashboard/question')->with('error','El questionario '.$id.', no existe en la DB.');
		}
    }
}
