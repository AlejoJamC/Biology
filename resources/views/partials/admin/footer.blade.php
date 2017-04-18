@section('footer')
    <footer>
        <div class="subscribe">
            <span class="subscribe-text">Stay informed our updates</span>
            <form>
                <input type="email" placeholder="Enter your email" required/>
                <input type="submit" value="" />
            </form>
        </div>
        <div class="footer-bottom">

            <div class="media-icon">
                <a href="#"><img src="{{ URL::asset('img/theme-3/c-icon1.png') }}" alt=""/></a>
                <a href="#"><img src="{{ URL::asset('img/theme-3/c-icon3.png') }}" alt=""/></a>
            </div>
            <div class="copy">
                <span>© 2015 All rights reserved. O.MNI</span>
            </div>
        </div>
        <div class="back-to-top"><i class="fa fa-chevron-up"></i></div>
    </footer>
@show