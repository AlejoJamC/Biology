<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CrearTipoUsuarioRequest;

use App\Models\UserType;

class UserTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () {
        $usersTypes = UserType::All();
        return view('userType.view', ['usersTypes' => $usersTypes]);
    }

    public function create (CrearTipoUsuarioRequest $request){
        UserType::create
        ([
            'nombre' => $request->get('descripcion')
        ]);
        return redirect('/dashboard/userType/')->with('creado','El tipo de usuario '.$request->get('descripcion').', ha sido creado correctamente.');
    }

    public function Update ($id) {
        $userType = UserType::find($id);
        if ( $userType <> null)
		{
			return view('userType.update',['userType'=> $userType]);
		} else
		{
			return redirect('/dashboard/userType')->with('error','El artículo '.$id.', no existe en la DB.');
		}
        
    }

    public function putUpdate (CrearTipoUsuarioRequest $request, $id) {
        
		$userType = UserType::find($id);
		if ( $userType <> null)
		{
			$userType->nombre = $request->descripcion;
			$userType->save();
			return redirect('/dashboard/userType')->with('actualizado','El curso '.$userType->nombre.', se ha actualizado');
		} else
		{
			return redirect('/dashboard/userType')->with('error','El artículo '.$id.', no existe en la DB.');
		}
    }
}
