<!DOCTYPE html>
<html lang="en">
@include('partials.admin.head')
<body data-theme="theme-3" class="sidebar-menu-added">

<!-- HEADER -->
@include('partials.admin.sidebar')

<!-- LOADER -->
<div id="loader-wrapper">
    <img src="{{ URL::asset('img/theme-3/logo.png') }}" alt=""/>
    <span></span>
</div>

<div id="content-wrapper">

    <div class="blocks-container">

        @yield('content')

    </div>

</div>

@include('partials.admin.scripts')

</body>
</html>
