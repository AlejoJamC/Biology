@extends('layouts.dash')

@section('title', 'Modificar Curso | Proyecto de Grado Biologia 5 grado')

@section('content')
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-8 col-md-push-2 col-xs-12">
                <form method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="txt_nombre">Nombre</label>
                        <input type="text" class="form-control" value="{{ $course->nombre }}" name="txt_nombre" id="txt_nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="txt_descripcion">Descripcion</label>
                        <input type="text" class="form-control" value="{{ $course->descripcion }}" name="txt_descripcion" id="txt_descripcion" placeholder="Descripcion">
                    </div>
                    <div class="form-group">
                        <label for="txt_cantidad">Cantidad</label>
                        <input type="number" class="form-control" value="{{ $course->cantidad }}" name="txt_cantidad" id="txt_cantidad" placeholder="Cantidad">
                    </div>
                    
                    <button type="submit" class="btn btn-success btn-block">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection