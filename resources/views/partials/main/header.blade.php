@section('header')
    <header>
        <a href="#" id="logo"><img src="{{ URL::asset('img/logobiova.png') }}" alt="logo biova"/><img class="act" src="{{ URL::asset('img/logobiova.png') }}" alt="logo biova"/></a>
        <div class="mob-icon">
            <span></span>
        </div>
        <nav>
            <ul>
                <li><a href="#inicio" data-toggle="popover" title="Bienvenido a Biova" class="submeny-top act scroll-to-link">Inicio</a></li>
                <li><a href="#acerca_de" data-toggle="popover" title="La Biología en la Célula" class="scroll-to-link">Acerca de </a></li>
                <li><a href="#como_funciona" data-toggle="popover" title="Resgistrate y aprende" class="scroll-to-link">Como Funciona</a></li>
                <li><a href="#desarrollo" data-toggle="popover" title="Quien la creó" class="scroll-to-link">Desarrollo</a></li>
                <li><a href="#contacto" data-toggle="popover" title="Comunicate con nosotros" class="scroll-to-link">Contacto</a></li>
                <li>
                    <a href="/login" >Iniciar sesión</a>
                </li>
            </ul>
        </nav>
    </header>
@show