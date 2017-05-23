@extends('layouts.dash')

@section('title', 'Modificar Pregunta | Proyecto de Grado Biologia 5 grado')

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
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="pregunta">Pregunta</label>
                        <input type="text" class="form-control" value="{{ $question->pregunta }}" name="pregunta" id="pregunta" placeholder="Pregunta">
                    </div>
                    <div class="form-group">
                        <label for="sugerencia">Sugerencia</label>
                        <input type="text" class="form-control" value="{{ $question->sugerencia }}" name="sugerencia" id="sugerencia" placeholder="Sugerencia">
                    </div>
                    
                    <button type="submit" class="btn btn-success btn-block">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection