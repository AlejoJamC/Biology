<!DOCTYPE html>
<html lang="es">
@include('partials.auth.head')
<body class="page-404" data-theme="theme-3">

<!-- LOADER -->
<div id="loader-wrapper">
    <div class="bubbles">
        <div class="title">loading</div>
        <span></span>
        <span id="bubble2"></span>
        <span id="bubble3"></span>
    </div>
</div>

@yield('content')

@include('partials.auth.scripts')

</body>
</html>