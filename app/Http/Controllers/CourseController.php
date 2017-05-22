<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateCourseRequest;
use App\Models\Course;

class CourseController extends Controller
{

    public function index (){
        $courses = Course::All();

		return view('course.mostrar',['courses'=> $courses]);
    }

    public function create (CreateCourseRequest $request){

        Course::create
        ([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'cantidad' => $request->cantidad,
            'usuario_id' => 1
        ]);

        return redirect('/dashboard/course/')->with('creado','El curso '.$request->get('descripcion').', ha sido creado correctamente.');
    }

    public function Update ($id) {
        $course = Course::find($id);
        if ( $course <> null)
		{
			return view('course.update',['course'=> $course]);
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
			$course->save();
			return redirect('/dashboard/course')->with('actualizado','El curso '.$course->descripcion.', se ha actualizado');
		} else
		{
			return redirect('/dashboard/course')->with('error','El artículo '.$id.', no existe en la DB.');
		}
    }
}
