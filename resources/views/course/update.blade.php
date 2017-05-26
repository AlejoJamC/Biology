@extends('layouts.dash')

@section('title', 'Modificar Curso | Proyecto de Grado Biologia 5 grado')

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
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" value="{{ $course->nombre }}" name="nombre" id="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" class="form-control" value="{{ $course->descripcion }}" name="descripcion" id="descripcion" placeholder="Descripcion">
                    </div>
                    <div class="form-group">
                        <label for="profesor">Profesor</label>
                        <select class="form-control" name="profesor">
                            @foreach ($profesores as $profesor)
								@if ( $profesor->id == $course->usuario_id )
									<option value="{{ $profesor->id }}" selected>{{ $profesor->nombre . ' ' . $profesor->apellido }}</option>
                                @else
                                    <option value="{{ $profesor->id }}">{{ $profesor->nombre . ' ' . $profesor->apellido }}</option>
								@endif
							@endforeach	
						    @foreach ($profesores as $profesor)
							    
							@endforeach									
						</select>
                    </div>
                    <div class="form-group">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" class="form-control" value="{{ $course->cantidad }}" name="cantidad" id="cantidad" placeholder="Cantidad">
                    </div>
                    
                    <button type="submit" class="btn btn-success btn-block">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection