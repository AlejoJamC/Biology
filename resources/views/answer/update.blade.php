@extends('layouts.dash')

@section('title', 'Modificar Respuesta | Proyecto de Grado Biologia 5 grado')

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
                        @foreach ($questions as $question)
						    @if ( $answer->pregunta_id == $question->id )
                                <input type="text" class="form-control" value="{{ $question->pregunta }}" disabled>
							@endif
						@endforeach
                    </div>
                    <div class="form-group">
                        <label for="respuesta">Respuesta</label>
                        <input type="text" class="form-control" value="{{ $answer->respuesta }}" name="respuesta" id="respuesta" placeholder="Respuesta">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="correcta" id="correcta" type="checkbox"
                            @if ( $answer->correcta )
                                checked
                            @endif
                            > Rta Correcta
                        </label>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection