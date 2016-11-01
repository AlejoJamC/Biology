@section('scripts')
    <script src="{{ URL::asset('js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/idangerous.swiper.min.js') }}"></script>
    <script src="{{ URL::asset('js/global.js') }}"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="{{ URL::asset('js/map.js') }}"></script>
    <script src="{{ URL::asset('js/wow.min.js') }}"></script>
    <script>
        var wow = new WOW(
                {
                    boxClass:     'wow',      // animated element css class (default is wow)
                    animateClass: 'animated', // animation css class (default is animated)
                    offset:       100,          // distance to the element when triggering the animation (default is 0)
                    mobile:       true,       // trigger animations on mobile devices (default is true)
                    live:         true,       // act on asynchronously loaded content (default is true)
                    callback:     function(box) {
                        // the callback is fired every time an animation is started
                        // the argument that is passed in is the DOM node being animated
                    }
                }
        );
        $(window).load(function(){
            wow.init();
        });

    </script>
    <script src="{{ URL::asset('js/subscription.js') }}"></script>
@show