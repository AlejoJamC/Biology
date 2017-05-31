@section('header')
    <header>
        <a href="#" id="logo"><img src="{{ URL::asset('img/logobiova.png') }}" alt="logo biova"/><img class="act"
            src="{{ URL::asset('img/logobiova.png') }}" alt="logo biova"/></a>
        <div class="mob-icon">
            <span></span>
        </div>
        <nav>
            <ul>
                <li class="submeny">
                    <a href="#inicio" class="submeny-top act scroll-to-link">Inicio</a>

                </li>
                <li><a href="#sabias-que" class="scroll-to-link">¿Sabias que?</a></li>
                <li><a href="#celula" class="scroll-to-link">La célula</a></li>
                <li><a href="#Partes_Celula" class="scroll-to-link">Partes de la Célula</a></li>
                <li><a href="#Clasificación_celular" class="scroll-to-link">Clasificación Célular</a></li>
                <li><a href="#divi_celular" class="scroll-to-link">División célular</a></li>
                <li><a href="#gallery" class="scroll-to-link">imágenes</a></li>
                <li class="submeny">
                    <a href="#" class="submeny-top">Examén</a>
                    <ul>
                   <li><a href="/dashboard/examen">Questionario</a></li>
                    </ul>
                </li>
                <li class="submeny">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Cerrar Sesion
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </nav>
    </header>
@show