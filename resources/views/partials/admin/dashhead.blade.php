@section('head')
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap -->
        <link href="{{ URL::asset('dash/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ URL::asset('dash/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{ URL::asset('dash/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
        <!-- iCheck -->
        <link href="{{ URL::asset('dash/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
        <!-- bootstrap-progressbar -->
        <link href="{{ URL::asset('dash/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
        <!-- JQVMap -->
        <link href="{{ URL::asset('dash/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="{{ URL::asset('dash/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="{{ URL::asset('dash/build/css/custom.min.css') }}" rel="stylesheet">
        @section('css')
        @show
        <link rel="shortcut icon" href="{{ URL::asset('img/favicon.png') }}" />
        <title>@yield('title')</title>
    </head>
@show