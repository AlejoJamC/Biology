<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
