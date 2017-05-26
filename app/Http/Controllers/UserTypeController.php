<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CrearTipoUsuarioRequest;

use App\Models\UserType;

class UserTypeController extends Controller
{
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
}
