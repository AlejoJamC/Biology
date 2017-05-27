@extends('layouts.admin')

@section('title', 'Dashboard | Proyecto de Grado Biologia 5 grado')

@section('content')

    <div class="block type-1 scroll-to-block">
    @foreach($preguntas as $pregunta)
        <div class="col-md-12">
            <h4> {{ $pregunta->pregunta }}</h4>
        </div>
<div class="radio">
        @foreach($respuestas as $respuesta)

            @if ( $respuesta->pregunta_id == $pregunta->pregunta_id)
            <label><input type="radio" name="option{{ $pregunta->pregunta_id }}" value="{{ $respuesta->respuesta_id }}">
                {{ $respuesta->respuesta }}</label>

                @endif

            @endforeach
</div>
    @endforeach
    </div>


    <!-- FOOTER -->
    @include('partials.admin.footer')

    <!-- POPUP "VIDEO" -->
    <div class="video-popup">
        <span></span>
        <span></span>
        <iframe src="#"></iframe>
        <a href="#"></a>
    </div>
@endsection
<div class="theme-config">
    <div class="title">Select Color:</div>
    <div class="colours-wrapper">
        <div data-theme="theme-1" style="color: #fbc011;" class="entry active"></div>
        <div data-theme="theme-2" style="color: #00bbd2;" class="entry"></div>
        <div data-theme="theme-3" style="color: #4caf50;" class="entry"></div>
        <div data-theme="theme-4" style="color: #ba68c8;" class="entry"></div>
        <div data-theme="theme-5" style="color: #d80d0d;" class="entry"></div>
        <div data-theme="theme-6" style="color: #0045ad;" class="entry"></div>
        <div data-theme="theme-7" style="color: #dd137b;" class="entry"></div>
        <div data-theme="theme-8" style="color: #482d1d;" class="entry"></div>
    </div>
    <div class="open"><img src="img/gear-icon.png" alt="Icono Biova"><img src="img/gear-icon.png" alt="Icono Biova"><img src="img/gear-icon.png" alt="Icono Biova"></div>
</div>