@extends('layouts.dash')

@section('title', 'Crear Respuesta | Proyecto de Grado Biologia 5 grado')

@section('content')
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-8 col-md-push-2 col-xs-12">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Al parece algo está mal.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-push-2 col-xs-12">
                <form method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="pregunta">Pregunta</label>
                        <select class="form-control" name="pregunta">
                                <option></option>
						    @foreach ($questions as $question)
							    <option value="{{ $question->id }}">{{ $question->pregunta }}</option>
							@endforeach									
						</select>
                    </div>
                    <div class="form-group">
                        <label for="respuesta">Respuesta</label>
                        <input type="text" class="form-control" name="respuesta" id="respuesta" placeholder="Respuesta">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="correcta" id="correcta" type="checkbox"> Rta Correcta
                        </label>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection