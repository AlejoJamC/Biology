<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateCourseRequest;
use App\Models\Course;
use App\Models\User;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index (){
        $courses = Course::All();
        $profesores = User::where('tipo_id',2)->get();
		return view('course.view',['courses'=> $courses, 'profesores' => $profesores]);
    }

    public function getCreate (){
        $profesores = User::where('tipo_id',2)->get();
		return view('course.create',['profesores'=> $profesores]);
    }

    public function postCreate (CreateCourseRequest $request){
        Course::create
        ([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'cantidad' => $request->cantidad,
            'usuario_id' => $request->profesor
        ]);

        return redirect('/dashboard/course/')->with('creado','El curso '.$request->get('descripcion').', ha sido creado correctamente.');
    }

    public function Update ($id) {
        $course = Course::find($id);
        if ( $course <> null)
		{
            $profesores = User::where('tipo_id',2)->get();
			return view('course.update',['course'=> $course, 'profesores' => $profesores]);
		} else
		{
			return redirect('/dashboard/course')->with('error','El artículo '.$id.', no existe en la DB.');
		}
        
    }

    public function putUpdate (CreateCourseRequest $request, $id) {
        
		$course = Course::find($id);
		if ( $course <> null)
		{
			$course->nombre = $request->nombre;
			$course->descripcion = $request->descripcion;
			$course->cantidad = $request->cantidad;
            $course->usuario_id = $request->profesor;
			$course->save();
			return redirect('/dashboard/course')->with('actualizado','El curso '.$course->descripcion.', se ha actualizado');
		} else
		{
			return redirect('/dashboard/course')->with('error','El artículo '.$id.', no existe en la DB.');
		}
    }
}
