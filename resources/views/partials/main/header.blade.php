@section('header')
    <header>
        <a href="index.html" id="logo"><img src="{{ URL::asset('img/theme-1/logo.png') }}" alt=""/><img class="act" src="{{ URL::asset('img/theme-1/logo-act.png') }}" alt=""/></a>
        <div class="mob-icon">
            <span></span>
        </div>
        <nav>
            <ul>
                <li class="submeny">
                    <a href="#home" class="submeny-top act scroll-to-link">Home</a>
                    <ul>
                        <li><a href="index-5.html">home app screens</a></li>
                        <li><a href="index-6.html">home sidebar menu</a></li>
                        <li><a href="index.html">home welcome banner</a></li>
                        <li><a href="index-2.html">home banner with tabs</a></li>
                        <li><a href="index-3.html">home banner-slider</a></li>
                        <li><a href="index-4.html">home video banner</a></li>
                    </ul>
                </li>
                <li><a href="#about" class="scroll-to-link">about</a></li>
                <li><a href="#how-it-work" class="scroll-to-link">how it work</a></li>
                <li><a href="#why" class="scroll-to-link">Why</a></li>
                <li><a href="#benefits" class="scroll-to-link">benefits</a></li>
                <li><a href="#testimonials" class="scroll-to-link">testimonials</a></li>
                <li><a href="#team" class="scroll-to-link">team</a></li>
                <li><a href="#contact" class="scroll-to-link">contact</a></li>
                <li class="submeny">
                    <a href="#" class="submeny-top">Pages</a>
                    <ul>
                        <li><a href="blog.html">blog standart</a></li>
                        <li><a href="blog-2.html">blog fullwidth</a></li>
                        <li><a href="blog-3.html">blog left/right post</a></li>
                        <li><a href="blog-detail.html">standart post</a></li>
                        <li><a href="blog-detail-2.html">fullwidth post</a></li>
                        <li><a href="gallery.html">gallery style 1</a></li>
                        <li><a href="gallery-2.html">gallery style 2</a></li>
                        <li><a href="el.html">elements</a></li>
                        <li><a href="teaser-background.html">teaser standart</a></li>
                        <li><a href="teaser-circles.html">teaser video</a></li>
                        <li><a href="page-404.html">page 404</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
@show