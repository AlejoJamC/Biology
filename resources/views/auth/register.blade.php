@extends('layouts.auth')

@section('css')
    <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('title', 'Registro | Proyecto de Grado Biologia 5 grado')

@section('content')
    <div class="canvas-overflow" style="background-image: url(img/clouds.jpg);">
        <canvas class="canvas-background"></canvas>
        <div class="teaser-container table-view">
            <div class="row-view">
                <div class="cell-view">
                    <div class="teaser-logo">
                        <a href="index.html" class="logo"><img src="{{ URL::asset('img/logobiova_168_min.png') }}" alt="" /></a>
                    </div>
                </div>
            </div>
            <div class="row-view">
                <div class="cell-view">
                    <div class="content-404">
                        <div class="title" style="font-size: 70px;">Crear usuario</div>
                        <div class="login-page2">
                            <div class="form">
                                <form class="login-form">
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Nombres"/>
                                        <input type="text" placeholder="Apellidos"/>
                                        <input type="password" placeholder="contraseña"/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="email"/>
                                        <select style="width: 100%;">
                                            <option value="0">seleccionar rol ...</option>
                                            @if($registerData === 1)
                                                <option value="1">Estudiante</option>
                                            @elseif($registerData === 2)
                                                <option value="2">Profesor</option>
                                            @elseif($registerData === 3)
                                                <option value="2">Administrador</option>
                                            @endif

                                        </select>
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