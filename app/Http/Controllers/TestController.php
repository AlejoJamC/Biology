<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Auth;
use App\Http\Requests;
use App\Http\Requests\CreateTestRequest;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () {

        if (Auth::user()->tipo_id === 3){
            $tests = Test::get();

        }
        else{
            $tests = Test::where('usuario_id',Auth::user()->id)->get();
        }
        return view('test.mostrar',['tests'=> $tests]);
    }

    public function getCreate()
    {
        return view('test.create');
    }

    public function create (CreateTestRequest $request){
        Test::create
        ([
            'titulo' => $request->get('titulo'),
            'usuario_id' => Auth::user()->id
        ]);

        return redirect('/dashboard/test/')->with('creado','El questionario '.$request->get('titulo').', ha sido creado correctamente.');
    }

    public function update ($id) {
        $test = Test::Find($id);
        if ( $test <> null)
		{
			return view('test.update',['test'=> $test]);
		} else
		{
			return redirect('/dashboard/test')->with('error','El questionario '.$id.', no existe en la DB.');
		}
    }

    public function putUpdate (CreateTestRequest $request, $id) {
        
		$test = test::find($id);
		if ( $test <> null)
		{
			$test->titulo = $request->titulo;
			$test->save();
			return redirect('/dashboard/test')->with('actualizado','El questionario '.$test->titulo.', se ha actualizado');
		} else
		{
			return redirect('/dashboard/test')->with('error','El questionario '.$id.', no existe en la DB.');
		}
    }
}
