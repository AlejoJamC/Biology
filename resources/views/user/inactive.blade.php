@extends('layouts.dash')

@section('title', 'Usuarios Inactivos | Proyecto de Grado Biologia 5 grado')

@section('content')
    <div class="right_col" role="main">
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
            <div class="col-md-10 col-md-push-1 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Tabla de Usuario <small>Usuarios por Aprobar</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="table-responsive">
                             <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                <tr class="headings">
                                    <th>
                                        <input type="checkbox" id="check-all" class="flat">
                                    </th>
                                    <th class="column-title">ID</th>
                                    <th class="column-title">Alumno</th>
                                    <th class="column-title">Fecha de Registro</th>
                                    <th class="column-title">Correo</th>
                                    <th class="column-title" colspan="2">Estado </th>
                                    
                                </tr>
                                </thead>

                                <tbody>
                                    @foreach ($users as $user)											
											<tr>
                                                <th>
                                                    <input type="checkbox" id="check-all" class="flat">
                                                </th>
												<td>{{ $user->id }}</td>
												<td>{{ $user->nombre . ' ' .$user->apellido }}</td>
												<td>{{ $user->created_At }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    @if ($user->estado == 0)
                                                        Inactivo
                                                    @else
                                                        Activo
                                                    @endif
                                                </td>
                                                <td>
                                                    <form action="/dashboard/activar/{{ $user->id }}" method="POST">
                                                        {{ csrf_field() }}
                                                        <input hidden type="text" name="usuario" value="{{ $user->id }}">
                                                        <button type="submit" class="btn btn-success">Activar</button>
                                                    </form>
                                                </td>
											</tr>
									@endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection