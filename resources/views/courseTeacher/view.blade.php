@extends('layouts.dash')

@section('title', 'Mantenimiento Curso | Proyecto de Grado Biologia 5 grado')

@section('content')
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Tabla de Profesores <small>Profesores activos / Por Aprobar</small></h2>
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
                                    <th class="column-title">Profesor</th>
                                    <th class="column-title">Fecha de Registro</th>
                                    <th class="column-title">Correo</th>
                                    <th class="column-title">Estado </th>
                                    <th class="bulk-actions" colspan="7">
                                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                    </th>
                                </tr>
                                </thead>

                                <tbody>
                                   @foreach ($courses as $course)											
											<tr>
												<td>{{ $course->id }}</td>
												<td>{{ $course->nombre }}</td>
												<td>{{ $course->descripcion }}</td>
												<td>{{ $course->cantidad }}</td>											
                                                <td>{{ $course->created_at }}</td>
												<td><a class="btn btn-success btn-block" href="/dashboard/course/content/{{ $course->id }}/">Contenidos</a></td>
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