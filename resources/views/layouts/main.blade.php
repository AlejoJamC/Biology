<!DOCTYPE html>
<html lang="es">
@include('partials.main.head')
<body data-theme="theme-3">
<!-- HEADER -->
@include('partials.main.header')

<!-- LOADER -->
<div id="loader-wrapper">
    <img src="{{ URL::asset('img/logobiova_69.png') }}" alt="">
    <span></span>
</div>

<div id="content-wrapper">

    <div class="blocks-container">

    @yield('content')

    </div>

</div>

@include('partials.main.scripts')

</body>
</html>