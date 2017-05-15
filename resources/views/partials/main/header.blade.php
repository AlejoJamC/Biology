@section('header')
    <header>
        <a href="#" id="logo"><img src="{{ URL::asset('img/logobiova_168_min.png') }}" alt=""/><img class="act" src="{{ URL::asset('img/logobiova_168_min.png') }}" alt=""/></a>
        <div class="mob-icon">
            <span></span>
        </div>
        <nav>
            <ul>
                <li><a href="#home" data-toggle="popover" title="Bienvenido a Biova" class="submeny-top act scroll-to-link">Inicio</a></li>
                <li><a href="#about" data-toggle="popover" title="La Biología en la Célula" class="scroll-to-link">Acerca de </a></li>
                <li><a href="#how-it-work" data-toggle="popover" title="Resgistrate y aprende" class="scroll-to-link">Como Funciona</a></li>
                <li><a href="#team" data-toggle="popover" title="Quien la creó" class="scroll-to-link">Desarrollo</a></li>
                <li><a href="#contact" data-toggle="popover" title="Comunicate con nosotros" class="scroll-to-link">Contacto</a></li>
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