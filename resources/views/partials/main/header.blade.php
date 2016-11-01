@section('header')
    <header>
        <a href="index.html" id="logo"><img src="{{ URL::asset('img/theme-3/logo.png') }}" alt=""/><img class="act" src="{{ URL::asset('img/theme-3/logo-act.png') }}" alt=""/></a>
        <div class="mob-icon">
            <span></span>
        </div>
        <nav>
            <ul>
                <li><a href="#home" class="submeny-top act scroll-to-link">Home</a></li>
                <li><a href="#about" class="scroll-to-link">about</a></li>
                <li><a href="#how-it-work" class="scroll-to-link">how it work</a></li>
                <li><a href="#why" class="scroll-to-link">Why</a></li>
                <li><a href="#benefits" class="scroll-to-link">benefits</a></li>
                <li><a href="#testimonials" class="scroll-to-link">testimonials</a></li>
                <li><a href="#team" class="scroll-to-link">team</a></li>
                <li><a href="#contact" class="scroll-to-link">contact</a></li>
                <li class="submeny">
                    <a href="#" class="submeny-top">Iniciar sesión</a>
                    <ul>
                        <li><a href="blog.html">Estudiante</a></li>
                        <li><a href="blog-2.html">Docente</a></li>
                        <li><a href="blog-3.html">Administrador</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
@show