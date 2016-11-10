@extends('layouts.auth')

@section('css')
    <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('title', 'Login | Proyecto de Grado Biologia 5 grado')

@section('content')
    <div class="canvas-overflow" style="background-image: url(img/clouds.jpg);">
        <canvas class="canvas-background"></canvas>
        <div class="teaser-container table-view">
            <div class="row-view">
                <div class="cell-view">
                    <div class="teaser-logo">
                        <a href="index.html" class="logo"><img src="{{ URL::asset('img/theme-3/logo-big.png') }}" alt="" /></a>
                    </div>
                </div>
            </div>
            <div class="row-view">
                <div class="cell-view">
                    <div class="content-404">
                        <div class="title">404</div>
                        <div class="login-page">
                            <div class="form">
                                <form class="register-form">
                                    <input type="text" placeholder="name"/>
                                    <input type="password" placeholder="password"/>
                                    <input type="text" placeholder="email address"/>
                                    <button>create</button>
                                    <p class="message">Already registered? <a href="#">Sign In</a></p>
                                </form>
                                <form class="login-form">
                                    <input type="text" placeholder="username"/>
                                    <input type="password" placeholder="password"/>
                                    <button>login</button>
                                    <p class="message">Not registered? <a href="#">Create an account</a></p>
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