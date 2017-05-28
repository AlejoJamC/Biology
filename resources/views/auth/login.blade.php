@extends('layouts.auth')

@section('css')
    <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet" type="text/css" >
@stop

@section('title', 'Login | Proyecto de Grado Biologia 5 grado')

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
            <div class="row-view">
                <div class="cell-view">
                    <div class="content-404">
                        <div class="title" style="font-size: 70px;">Iniciar sesión</div>
                        <div class="login-page">
                            <div class="form" >
                                <form class="login-form" method="POST">
                                    {{ csrf_field() }}
                                    <input type="text" name="email" id="email" placeholder="email">
                                    <input type="password" name="password" id="password"  placeholder="contraseña">
                                    <button>Iniciar sesión</button>
                                    <p class="message">No esta registrado? <a href="/register">Crear una cuenta</a></p>
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