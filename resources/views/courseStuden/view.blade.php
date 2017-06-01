@extends('layouts.dash')

@section('title', 'Mantenimiento estudiante por curso | Proyecto de Grado Biologia 5 grado')

@section('content')
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-10 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Tabla de estudiantes</h2>
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
                                    <th class="column-title">Correo</th>
                                    <th class="column-title">Questionario</th>
                                    <th class="column-title">Preguntas Correctas</th>
                                    <th class="column-title">Total Preguntas</th>
                                    <th class="column-title">Resultado Questionario</th>
                                </tr>
                                </thead>

                                <tbody>
                                  @foreach ($estudiantes as $estudiante)
                                    <tr>
                                        <td></td>
                                        <td>{{ $estudiante->estudiante_id }}</td>
                                        <td>{{ $estudiante->nombre . ' ' . $estudiante->apellido }}</td>
                                        <td>{{ $estudiante->email }}</td>
                                        <td>
                                            @foreach ($tests AS $test)
                                                @if ($estudiante->questionario_id == $test->id)
                                                    {{ $test->titulo }}
                                                @endif
                                            @endforeach                     
                                        </td>
                                        <td>{{ $estudiante->correctas }}</td>
                                        <td>{{ $estudiante->total_preguntas }}</td>
                                        <td>{{ (( $estudiante->correctas / $estudiante->total_preguntas ) * 100 ) . '%' }}</td>
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