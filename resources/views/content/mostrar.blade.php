@extends('layouts.dash')

@section('title', 'Crear Curso | Proyecto de Grado Biologia 5 grado')

@section('content')
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-10 col-md-push-1 col-xs-12">
                <div class="panel panel-default">
				<div class="panel-heading">Mantenimiento Cursos</div>
				<div class="panel-body">
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

					<div class="row">
						<div class="col-sm-12 col-md-12">
							<div class="table-responsive">
								<table class="table table-bordered" id="tabla-articulos">
									<thead>
                                        <th>ID</th>
                                        <th>Titulo</th>
                                        <th>descripcion</th>
                                        <th>Creado en</th>
                                        <th>Acción</th>
									</thead>
									<tbody>

										@foreach ($contents as $content)											
											<tr>
												<td>{{ $content->id }}</td>
												<td>{{ $content->titulo }}</td>
												<td>{{ $content->descripcion }}</td>
                                                <td>{{ $content->created_at }}</td>
												<td><a class="btn btn-success btn-block" href="/dashboard/content/{{ $content->id }}/update">Modificar</a></td>
											</tr>
										@endforeach
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<a href="/dashboard/content/create" class="btn btn-primary btn-block" role="button">Nuevo</a>
						</div>
					</div>
				</div>
			</div>
            </div>
        </div>
    </div>
@endsection