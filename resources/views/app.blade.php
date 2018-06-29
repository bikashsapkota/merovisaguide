<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MVG - @yield('title') </title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
    <!--  Custom style for mvg  -->
    <link href="/css/mvg.css" rel="stylesheet">
    <script src="/js/jquery-3.1.1.min.js"></script>

</head>
<body id="page-top" class="article landing-page no-skin-config" >
<!-- Wrapper-->
<div id="wrapper" class="post" style="background-color: #f3f3f4">

    <!-- Navigation -->
    @include('layouts.post.topnavbar')
    <div class="col-md-2">

        @include('layouts.post.left_navigation')
    </div>
    <div class="col-md-8">
        @yield('content')
    </div>
</div>
<!-- End wrapper-->

<!-- Footer -->
@include('layouts.post.footer')


<!-- Mainly scripts -->

<script src="/js/bootstrap.min.js"></script>
<script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="/js/inspinia.js"></script>
<script src="/js/plugins/pace/pace.min.js"></script>
<script src="/js/plugins/wow/wow.min.js"></script>


<script>


    $(document).ready(function () {
        //$(header).addClass('navbar-scroll')
        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 0
        });

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 100);
            event.preventDefault();
            $("#navbar").collapse('hide');
        });
    });

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
            header = document.querySelector( '.navbar-default' ),
            didScroll = false,
            changeHeaderOn = 1;
        $(header).addClass('navbar-scroll')
        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 100 );
                }
            }, true );
        }
        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                $(header).addClass('navbar-scroll')
            }
            else {
                //$(header).removeClass('navbar-scroll')
            }
            didScroll = false;
        }
        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }
        init();

    })();

    // Activate WOW.js plugin for animation on scrol
    new WOW().init();

</script>

</body>
</html>