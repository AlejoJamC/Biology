<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Course;

class CourseTeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index (){
        $courses = Course::where('usuario_id',5)->get();
        return view('courseTeacher.view',['courses' => $courses]);
    }
}
