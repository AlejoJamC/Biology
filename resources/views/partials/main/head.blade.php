@section('head')
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="description"
              content="Biova, es una Objeto Virtual de Aprendizaje (OVA) interactivo mediado por las TIC usando HTML 5, CSS3 y JavaScript, incorporando los estándares de usabilidad y accesibilidad web, para mejorar el proceso de enseñanza y aprendizaje de la biología del grado quinto (5°). ">
        <meta name="keywords"
              content="HTML 5, CSS3, JavaScript, biova, objeto virtual aprendizaje, ova, biología, célula, grado quinto, la célula para niños,
              célula y sus partes, que es la célula, tipos de célula, página sobre la célula, procatiotas, eucariotas, organelos,
               clasificaion celular, division celular,  el núcleolo, el núcloe, citoplasma, citosol, membranas internas, citoesqueleto,
                mitocondrias, cloroplastos, videos sobre la célula, juegos de la célula, pruebas célula, aparato de golgi, vacuolas, lisosomas, mitocondrias,
                todo sobre la célula">
        <meta name="author" content="jonathan andres rodriguez perez, biova">
        <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('css/idangerous.swiper.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('css/devices.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet" type="text/css" />
        @section('css')
        @show
        <link rel="shortcut icon" href="{{ URL::asset('img/favicon.png') }}" />
        <title>@yield('title')</title>
    </head>
@show