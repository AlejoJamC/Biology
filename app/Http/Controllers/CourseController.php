<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Course;

class CourseController extends Controller
{

    public function index (){
        $courses = Course::All();

		return view('course.mostrar',['courses'=> $courses]);
    }
    public function create (Request $request){

        Course::create
        ([
            'nombre' => $request->txt_nombre,
            'descripcion' => $request->txt_descripcion,
            'cantidad' => $request->txt_cantidad,
            'usuario_id' => 1
        ]);

        //Return 'Curso creado';
        return redirect('/dashboard/course/')->with('creado','El curso '.$request->get('descripcion').', ha sido creado correctamente.');
    }
}
