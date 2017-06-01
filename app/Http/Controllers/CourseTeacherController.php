<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Course;
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
}
