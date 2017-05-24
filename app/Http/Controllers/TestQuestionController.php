<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateTestQuestionRequest;

use App\Models\Test;
use App\Models\Question;
use App\Models\TestQuestion;

class TestQuestionController extends Controller
{
    public function index ($id){
        $test = Test::Find($id);
        $testQuestions = TestQuestion::join('preguntas','pregunta_id','=','preguntas.id')
                ->Select('questionario_preguntas.id','preguntas.id as id', 'preguntas.pregunta','preguntas.sugerencia')
                ->where('questionario_id','=',$id)
                ->get();
        $enteros = [];
        foreach ($testQuestions as $testQuestion => $value ) {
            array_push($enteros, $value["id"]);
        }
        $questions = Question::whereNotIn('id',$enteros)->get();
        return view('testQuestion.mostrar', ['test' => $test, 'questions' => $questions, 'testQuestions' => $testQuestions]);
    }

    public function create (CreateTestQuestionRequest $request, $id) {
        if ( $id == $request->questionario)
		{
            TestQuestion::create
            ([
                'questionario_id' => $request->questionario,
                'pregunta_id' => $request->pregunta
            ]);
            return redirect('/dashboard/test/question/'.$id)->with('creado','La relación del questinario y la pregunta selecionada, fue creado satisfactoriamente.');

		} else
		{
			return redirect('/dashboard/test/question/'.$id)->with('error','El questionario '.$id.', no existe en la DB.');
		}
    }

    public function destroy ($id, $pregunta){
        return 'function destroy';
    }
}
