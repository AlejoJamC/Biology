<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateCourseContentRequest;

use App\Models\Course;
use App\Models\Content;
use App\Models\CursoContenido;

class CourseContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index ($id) {
        $course = Course::Find($id);
        $contenidos = CursoContenido::join('contenido','contenido_id','=','contenido.id')
                        ->Select('contenido.id', 'contenido.titulo', 'contenido.descripcion', 'curso_contenido.id as key')
                        ->where('curso_id',$id)
                        ->get();
        $enteros = [];
        foreach ($contenidos as $contenido => $value ) {
            array_push($enteros, $value["id"]);
        }
        $contents = Content::whereNotIn('id',$enteros)->get();

        return view('courseContent.view',[ 'course' => $course, 'contenidos' => $contenidos, 'contents' => $contents]);
    }

    public function create (CreateCourseContentRequest $request, $id) {
        if ( $id == $request->curso)
		{
            CursoContenido::create
            ([
                'curso_id' => $request->curso,
                'contenido_id' => $request->contenido
            ]);
            return redirect('/dashboard/course/content/'.$id)->with('creado','La relación del curso y el contenido selecionado, fue creado satisfactoriamente.');

		} else
		{
			return redirect('/dashboard/course/content/'.$id)->with('error','El curso '.$id.', no existe en la DB.');
		}
    }

    public function destroy ($curso, $contenido, $id){
        $cursoContenido = CursoContenido::Find($id);
        if ($cursoContenido <> null){
            CursoContenido::Destroy($id);
            return redirect('/dashboard/course/content/'.$curso)->with('error','El contenido fue eliminado del questionario consultado.');
        } else {
            return redirect('/dashboard/course/content/'.$curso)->with('error','El contenido no existe en la BD.');
        }
    }
}
