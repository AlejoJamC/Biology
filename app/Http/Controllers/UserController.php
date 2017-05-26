<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\User;
use App\Models\UserType;

class UserController extends Controller
{
    public function index (){
        $profesores = User::where('tipo_id',2)->get();
        $alumnos = User::where('tipo_id',1)->get();
        $usersTypes = UserType::ALL();

        return view('admin.dash', ['alumnos' => $alumnos,'profesores' => $profesores, 'usersTypes' => $usersTypes]);
    }
}
