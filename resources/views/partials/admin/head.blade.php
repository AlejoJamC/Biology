@section('head')
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('css/idangerous.swiper.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('css/devices.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="{{ URL::asset('img/favicon.ico') }}" />
        <title>@yield('title')</title>
    </head>
@show