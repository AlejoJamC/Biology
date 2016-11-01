@extends('layouts.auth')

@section('title', 'Registro | Proyecto de Grado Biologia 5 grado')

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
                        <div class="title">Nuevo 404</div>
                        <div class="description">The page you are looking for is missing or currently unavailable. Please use the correct link or visit <a href="index.html">homepage</a>.</div>
                    </div>
                </div>
            </div>
            @include('partials.auth.footer')
        </div>
    </div>
@endsection