<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\UserType;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function adminLogin()
    {
        return view('auth.login');
    }

    public function teacherLogin()
    {
        return view('auth.login');
    }

    public function registrarEstudiante()
    {
        $registerType = 1;
        return view('auth.register')->with('registerData', $registerType);
    }

    public function registrarProfesor()
    {
        $registerType = 2;
        return view('auth.register')->with('registerData', $registerType);
    }

    public function registrarAdmnistrador()
    {
        $registerType = 3;
        return view('auth.register')->with('registerData', $registerType);
    }

    public function doLogin(Request $request){
        $email = $request->email;
        $password = $request->password;
        $query = 'email = "' . $email . '" AND password = "' . $password . '"';
        $userLogin = User::whereRaw($query, array(1))->get();

        //var_dump($userLogin[0]->tipo_id);
        //die;

        if ( $userLogin <> null) {
            $userType = $userLogin[0]->tipo_id;
            if ($userType === 1) {
                return redirect('/dashboard');
            } else {
                return redirect('/dashboard/user');
            }
        }else{
            return redirect('/login');
        }
    }

    public function doRegister(Request $request){

    }

}
