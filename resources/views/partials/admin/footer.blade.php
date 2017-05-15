@section('footer')
    <footer>
        <div class="subscribe">
            <span class="subscribe-text">Ponte en contacto con nosotros</span>
            <form>
                <input type="email" placeholder="Escribe aca tu correo" required/>
                <input type="submit" value="" />
            </form>
        </div>
        <div class="footer-bottom">

            <div class="media-icon">
                <a target="_blank" href="https://www.linkedin.com/in/jonathan-andres-rodriguez-0b3264139/"><img src="{{ URL::asset('img/theme-3/c-icon1.png') }}" alt=""/></a>
                <a target="_blank" href="https://twitter.com/mineducacion?lang=es"><img src="{{ URL::asset('img/theme-3/c-icon3.png') }}" alt=""/></a>
            </div>
            <div class="copy">
                <span>© 2016 DERECHOS RESERVADOS BIO.VA</span>
            </div>
        </div>
        <div class="back-to-top"><i class="fa fa-chevron-up"></i></div>
    </footer>
@show