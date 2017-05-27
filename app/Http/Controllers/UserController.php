<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

use App\Models\User;
use App\Models\UserType;

class UserController extends Controller
{
    public function index (){
        $profesores = User::where('tipo_id',2)->get();
        $alumnos = User::where('tipo_id',1)->get();
        $usersTypes = UserType::ALL();
        $cuentausuarios = User::where('tipo_id',1)->get()->count();
        $cuentaprofesores = User::where('tipo_id',2)->get()->count();
        return view('admin.dash', ['alumnos' => $alumnos,'profesores' => $profesores, 'usersTypes' => $usersTypes,
            'cuentausuarios' => $cuentausuarios, 'cuentaprofesores'=> $cuentaprofesores]);
    }
}
