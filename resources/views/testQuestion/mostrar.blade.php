@extends('layouts.dash')

@section('title', 'Crear Curso | Proyecto de Grado Biologia 5 grado')

@section('content')
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-10 col-md-push-1 col-xs-12">
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
                @if(Session::has('creado'))
					<div class="alert alert-success">
						<p><p><span class="glyphicon glyphicon-saved" aria-hidden="true"></span> {{ Session::get('creado') }}</p>
					</div>
				@endif
				@if(Session::has('actualizado'))
					<div class="alert alert-info" role="alert">
						<p><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> {{ Session::get('actualizado') }}</p>
					</div>
				@endif
				@if(Session::has('error'))
					<div class="alert alert-danger">
						<p><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> {{ Session::get('error') }}</p>
					</div>
				@endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-push-1 col-xs-12">
                <div class="panel panel-default">
				<div class="panel-heading"><h2>{{ $test->titulo }}</h2></div>
				<div class="panel-body">
					

					<div class="row">
						<div class="col-sm-12 col-md-12">
							<div class="table-responsive">
								<table class="table table-bordered table-striped" id="tabla-articulos">
									<thead>
                                        <th>Pregunta</th>
                                        <th>Sugerencia</th>
										<th>Acción</th>
									</thead>
									<tbody>
                                        @foreach ($testQuestions as $testQuestion)
											<tr>
												<td>{{ $testQuestion->pregunta }}</td>
												<td>{{ $testQuestion->sugerencia }}</td>
												<td><a class="btn btn-danger btn-block" href="/dashboard/test/{{ $test->id }}/update">Eliminar</a></td>
											</tr>
										@endforeach	
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Agregar</button>
						</div>
					</div>
				</div>
			</div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <form action="/dashboard/test/question/{{ $test->id }}/create" method="POST">
                    <div class="modal-body">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="questionario">Questionario</label>
                            <input type="text" class="form-control" name="questionario" id="questionario" value="{{ $test->titulo }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="pregunta">Pregunta</label>
                            <select class="form-control" name="pregunta">
                                    <option></option>
                                @foreach ($questions as $question)
                                    <option value="{{ $question->id }}">{{ $question->pregunta }}</option>
                                @endforeach									
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col-xs-6">
                            <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
                        </div>
                        <div class="col-xs-6">
                            <button type="submit" class="btn btn-success btn-block">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection