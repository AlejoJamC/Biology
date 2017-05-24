<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Test;
use App\Models\Question;
use App\Models\TestQuestion;

class TestQuestionController extends Controller
{
    public function index ($id){
        $test = Test::Find($id);
        $testQuestions = TestQuestion::join('preguntas','pregunta_id','=','preguntas.id')
                ->Select('preguntas.id as id', 'preguntas.pregunta','preguntas.sugerencia')
                ->where('questionario_id','=',$id)
                ->get();
        $enteros = [];
        foreach ($testQuestions as $testQuestion => $value ) {
            array_push($enteros, $value["id"]);
        }
        $questions = Question::whereNotIn('id',[1,2])->get();
        return view('testQuestion.mostrar', ['test' => $test, 'questions' => $questions, 'testQuestions' => $testQuestions]);
    }
}
