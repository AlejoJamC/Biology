@section('header')
    <header>
        <a href="index.html" id="logo"><img src="{{ URL::asset('img/theme-3/logo.png') }}" alt=""/><img class="act" src="{{ URL::asset('img/theme-3/logo-act.png') }}" alt=""/></a>
        <div class="mob-icon">
            <span></span>
        </div>
        <nav>
            <ul>
                <li><a href="#home" class="submeny-top act scroll-to-link">Inicio</a></li>
                <li><a href="#about" class="scroll-to-link">Acerca de </a></li>
                <li><a href="#how-it-work" class="scroll-to-link">Como Funciona</a></li>
                <li><a href="#team" class="scroll-to-link">Desarrollo</a></li>
                <li><a href="#contact" class="scroll-to-link">Contacto</a></li>
                <li class="submeny">
                    <a href="#" class="submeny-top">Iniciar sesión</a>
                    <ul>
                        <li><a href="/login">Estudiante</a></li>
                        <li><a href="/teacher/login">Docente</a></li>
                        <li><a href="/admin/login">Administrador</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
@show