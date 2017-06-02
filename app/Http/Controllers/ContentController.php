<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateContentRequest;
use Auth;
use App\Models\Content;

class ContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index () {

        $contents = Content::Where('usuario_id',Auth::user()->id)->get();
        return view('content.mostrar',['contents'=> $contents]);
    }

    public function getCreate()
    {
        return view('content.create');
    }


    public function create (CreateContentRequest $request){

        Content::create
        ([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'usuario_id' => Auth::user()->id
        ]);

        return redirect('/dashboard/content/')->with('creado','El contenido '.$request->get('descripcion').', ha sido creado correctamente.');
    }

    public function Update ($id) {
        $content = Content::find($id);
        if ( $content <> null)
		{
			return view('content.update',['content'=> $content]);
		} else
		{
			return redirect('/dashboard/content')->with('error','El artículo '.$id.', no existe en la DB.');
		}
        
    }

    public function putUpdate (CreateContentRequest $request, $id) {
        
		$content = Content::find($id);
		if ( $content <> null)
		{
			$content->titulo = $request->titulo;
			$content->descripcion = $request->descripcion;
			$content->save();
			return redirect('/dashboard/content')->with('actualizado','El curso '.$content->titulo.', se ha actualizado');
		} else
		{
			return redirect('/dashboard/content')->with('error','El artículo '.$id.', no existe en la DB.');
		}
    }
}
