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

    public function listInactive()
    {
        $users = User::where('estado',0)->get();
        $usersTypes = UserType::ALL();
        return view('user.inactive', ['users' => $users, 'usersTypes' => $usersTypes]);
    }

    public function active(Request $request){
        $id = $request->id;
        $user = User::find($id);
		if ( $user <> null)
		{
			$user->estado = 1;
			$user->save();
			return redirect('/dashboard/user/inactive')->with('actualizado','El usuario '.$user->nombre.', ha sido activado.');
		} else
		{
			return redirect('/dashboard/user/inactive')->with('error','El usuario '.$id.', no existe en la DB.');
		}
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
