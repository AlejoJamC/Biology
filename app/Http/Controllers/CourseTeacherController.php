<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\http\Requests\CreateCourseStudentRequest;

use App\Models\Course;
use app\Models\User;
use App\Models\CursoEstudiante;
use Auth;

class CourseTeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index (){
        $courses = Course::where('usuario_id', Auth::user()->id)->get();
        return view('courseTeacher.view',['courses' => $courses]);
    }

    public function studensCourse ($id) {
        $course = Course::Find($id);
        $students = User::join('curso_estudiantes','usuarios.id','=','curso_estudiantes.estudiante_id')
                    ->join('cursos','curso_estudiantes.curso_id','=','cursos.id')
                    ->Select('usuarios.*','cursos.nombre as curso','curso_estudiantes.id AS key')
                    ->where('curso_estudiantes.curso_id',$id)
                    ->get();
        $enteros = [];
        foreach ($students as $student => $value ) {
            array_push($enteros, $value["id"]);
        }
        $users = User::whereNotIn('id',$enteros)->get();
        return view('courseTeacher.list',['students' => $students, 'course' => $course, 'users' => $users]);
    }

    public function create ($id, CreateCourseStudentRequest $request) {
        CursoEstudiante::create
        ([
            'curso_id' => $request->curso,
            'estudiante_id' => $request->estudiante
        ]); 

        return redirect('/dashboard/teacher/course/student/'.$id)->with('creado','El estudiante ha sido asignado correctamente.');
    }

    public function destroy ($id, Request $request){
        CursoEstudiante::Destroy($request->student);
        return redirect('/dashboard/teacher/course/student/'.$id)->with('error','El estudiante ha sido eliminado correctamente.');
        //return '<pre>' . $request . '</pre>';
    }
}
