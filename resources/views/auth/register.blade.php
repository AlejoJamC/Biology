@extends('layouts.auth')

@section('css')
    <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet" type="text/css" >
@stop

@section('title', 'Registro | Proyecto de Grado Biologia 5 grado')

@section('content')
    <div class="canvas-overflow" style="background-image: url(img/clouds.jpg);">
        <canvas class="canvas-background"></canvas>
        <div class="teaser-container table-view">
            <div class="row-view">
                <div class="cell-view">
                    <div class="teaser-logo">
                        <a href="index.html" class="logo"><img src="{{ URL::asset('img/logobiova.png') }}" alt="Logo Biova"></a>
                    </div>
                </div>
            </div>
            <div class="row-view">
                <div class="cell-view">
                    <div class="content-404">
                        <div class="title" style="font-size: 50px;">Crear usuario</div>
                        <div class="login-page2">
                            <div class="form">
                                <form class="form-horizontal" role="form" method="POST" action="/register">
                                    {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                        <label for="nombre" class="col-md-5 control-label">Nombre</label>
                                        <div class="col-md-6">
                                            <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" placeholder="Nombres" required autofocus>
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
                                        <label for="apellido" class="col-md-5 control-label">Apellido</label>
                                        <div class="col-md-6">
                                            <input id="apellido" type="text" class="form-control" name="apellido" value="{{ old('apellido') }}" required>
                                            @if ($errors->has('apellido'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('apellido') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-5 control-label">E-Mail Address</label>
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('tipo_id') ? ' has-error' : '' }}">
                                        <label for="tipo_id" class="col-md-5 control-label">Tipo Usuario</label>
                                        <div class="col-md-6">
                                            <select name="tipo_id" id="tipo_id" class="form-control" style="width: 100%;">
                                                        <option value="0">seleccionar rol ...</option>
                                                        @if($registerData === 1)
                                                            <option value="1">Estudiante</option>
                                                        @elseif($registerData === 2)
                                                            <option value="2">Profesor</option>
                                                        @elseif($registerData === 3)
                                                            <option value="2">Administrador</option>
                                                        @endif

                                            </select>
                                            @if ($errors->has('tipo_id'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('tipo_id') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-5 control-label">Password</label>
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password" required>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password-confirm" class="col-md-5 control-label">Confirmar Password</label>
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>

                                    <button>Crear Usuario</button>
                                    <p class="message">Ya esta registrado? <a href="/login">iniciar sesion</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('partials.auth.footer')
        </div>
    </div>
    @section('js')
        <script>
            $('.message a').click(function(){
                $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
            });
        </script>
    @stop
@endsection