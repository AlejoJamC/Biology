@extends('layouts.admin')

@section('title', 'Dashboard | Proyecto de Grado Biologia 5 grado')

@section('content')

    <div class="block type-1 scroll-to-block">
        <div class="col-md-8 col-md-push-2 col-xs-12">
            <div class="row">
                @if(Session::has('error'))
					<div class="alert alert-danger">
						<p><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> {{ Session::get('error') }}</p>
					</div>
				@endif
            </div>
            <div clas="row" style="padding-top:5%;">
                <form method="POST">
                    <input class="hidden" type="text" name="questionario" id="questionario" value="{{ $questionario->id }}">
                    {{ csrf_field() }}
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $questionario->titulo }}</div>
                            <div class="panel-body">
                                @foreach($preguntas as $pregunta)
                                    <div class="form-group form-radio">
                                        <label> {{ $pregunta->pregunta }}</label>
                                        @foreach($respuestas as $respuesta)
                                            @if ( $respuesta->pregunta_id == $pregunta->pregunta_id)
                                                <div class="radio">
                                                    <label><input type="radio" name="pregunta{{ $pregunta->pregunta_id }}" value="{{ $respuesta->respuesta_id }}">{{ $respuesta->respuesta }}</label>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                @endforeach
                                <button type="submit" class="btn btn-success btn-block">Guardar</button>
                            </div>
                        </div>
                    </div>
                </form>  
            </div>
        </div>
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