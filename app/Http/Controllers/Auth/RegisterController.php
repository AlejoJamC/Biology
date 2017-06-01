<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
//use Illuminate\Foundation\Auth\RegistersUsers;
//use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    //use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
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

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($usuario = $this->create($request->all())));

        //$this->guard()->login($usuario);

        return redirect($this->redirectPath());
    }

    protected function guard()
    {
        return Auth::guard();
    }

    public function redirectPath()
    {
        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/login';
    }
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|string|email|max:100|unique:usuarios',
            'password' => 'required|string|min:6|confirmed',
            'tipo_id' => 'required|numeric|exists:tipo_usuario,id'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'tipo_id' => $data['tipo_id'],
            'estado' => 0
        ]);
    }
}
