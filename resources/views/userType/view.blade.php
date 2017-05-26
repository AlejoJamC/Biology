@extends('layouts.dash')

@section('title', 'Mantenimiento Tipo Usuario | Proyecto de Grado Biologia 5 grado')

@section('content')
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-10 col-md-push-1 col-xs-12">
                <div class="panel panel-default">
				<div class="panel-heading">Mantenimiento Preguntas</div>
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
                                        <th>Descripción</th>
                                        <th>Creado en:</th>
										<th>Acción</th>
									</thead>
									<tbody>

										@foreach ($usersTypes as $userType)											
											<tr>
												<td>{{ $userType->id }}</td>
												<td>{{ $userType->nombre }}</td>
                                                <td>{{ $userType->created_at }}</td>
												<td><a class="btn btn-success btn-block" href="/dashboard/userType/{{ $userType->id }}/update">Modificar</a></td>
											</tr>
										@endforeach
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal1">Nuevo</button>
						</div>
					</div>
				</div>
			</div>
            </div>
        </div>
    </div>

    <!-- Modal 1 -->
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Crear Tipo Usuario</h4>
                </div>
                <form action="/dashboard/userType/create" method="POST">
                    <div class="modal-body">
                        {{ csrf_field() }}
                        <div class="form-group">
							<label for="descripcion">Descripcion</label>
							<input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion" required>
						</div>
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
	<!-- Modal 2 -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Crear Tipo Usuario</h4>
                </div>
                <form action="/dashboard/userType/update" method="POST">
                    <div class="modal-body">
                        {{ csrf_field() }}
						<input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
							<label for="descripcion">Descripcion</label>
							<input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion" required>
						</div>
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