<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mero Visa Guide</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="css/plugins/slick/slick.css" rel="stylesheet">
    <link href="css/plugins/slick/slick-theme.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/mvg.css" rel="stylesheet">
</head>
<body id="page-top" class="landing-page no-skin-config">
<div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-left">
                         <img src="/img/logo.jpg" width="50px" height="50px">
                    </ul>
                    </ul>          
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="page-scroll" href="#page-top">Home</a></li>
                        <li><a class="page-scroll" href="#visa-type">Visa Type</a></li>
                        <li><a class="page-scroll" href="#ourservices">Our Services</a></li>
                        <li><a class="page-scroll" href="#pricing">Country</a></li>
                        <li><a class="page-scroll" href="#testimonials">Testimonials</a></li>
                        <li><a class="page-scroll" href="#contact">Contact</a></li>
                        <li><a class="page-scroll" href="{{ url('/') }}/news">News</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</div>
<div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#inSlider" data-slide-to="0" class="active"></li>
        <li data-target="#inSlider" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <br><br><br><br>

                    <h1>Before being misguided, <br/>
                        consult the experts<br/>
                    </h1>

                    <ul class="homep">
                        <li>Incredible Visa Facilitation </li>
                        <li>Facilitation of Booking appointment with Embassy</li>
                        <li>Increase chances of Visa approval with merovisaguide.com expertise </li>
                        <li>Real time Visa updates and news</li>
                    </ul>

                    <p>
                        <a data-toggle="modal" class="btn btn-primary" href="#modal-form">Click for enquiry</a>
                    </p>
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back one"></div>

        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption ">
                    <br><br><br><br>
                    <h1>Before being misguided, <br/>
                        consult the experts<br/>
                    </h1>
                    <ul class="homep">
                        <li>Incredible Visa Facilitation </li>
                        <li>Facilitation of Booking appointment with Embassy</li>
                        <li>Increase chances of Visa approval with merovisaguide.com expertise </li>
                        <li>Real time Visa updates and news</li>
                    </ul>
                    <p>
                        <a data-toggle="modal" class="btn btn-primary" href="#modal-form">Click for enquiry</a>
                    </p>
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back two"></div>
        </div>
    </div>
    <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<section id="visa-type" class="container services">
    @if (Session::has('error'))
       <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif
    <div>
        <form method="post" action="{{ route('landingtopost') }}">
            @csrf
            <div class="form-group col-lg-4">
                <label for="exampleInputEmail1">Country</label>
                <select class="select2 form-control m-b" name="country" id="country">
                    @foreach($countr as $country)
                        <option value={{$country->id}}>{{$country->name}}</option>
                    @endforeach
                </select>
<!--                <small id="emailHelp" class="form-text text-muted">Destination Country.</small>-->
            </div>
            <div class="form-group col-lg-4">
                <label for="exampleInputPassword1">Visa Type</label>
                <select class="select2 form-control m-b" name="purpose" id="purpose">
                    @foreach($visatypes as $visatype)
                        <option value={{$visatype->id}}>{{$visatype->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-lg-4">
                </br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</section>

<section id="features" class="container services">
    <div class="row m-b-lg">
        <div class="col-lg-12 text-center">
            <div class="navy-line"></div>
            <h1>Visa Type</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="grid-item" style="margin-bottom: 25px; width: 300px">
                <div class="ibox" style="margin-bottom: 0;">
                    <div class="ibox-content">
                        <ul class="list-group clear-list" style="font-size: medium; text-align: center">
                            <li class="list-group-item fist-item">
                                <a href="/visatypes/Student" class="product-name">Student Visa</a>
                            </li>
                            <li class="list-group-item">
                                <a href="/visatypes/Dependent-(Spouse)" class="product-name">Dependent (Spouse) Visa</a>
                            </li>
                            <li class="list-group-item">
                                <a href="/visatypes/Parents" class="product-name">Parents Visa</a>
                            </li>
                            <li class="list-group-item">
                                <a href="/visatypes/Tourist" class="product-name">Tourist Visa</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="grid-item" style="margin-bottom: 25px; width: 300px">
                <div class="ibox" style="margin-bottom: 0;">
                    <div class="ibox-content" style="background-color: #f4f4f4">
                        <ul class="list-group clear-list" style="font-size: medium; text-align: center">
                            <li class="list-group-item fist-item">
                                <a href="/visatypes/Immigration" class="product-name">Immigration Visa</a>
                            </li>
                            <li class="list-group-item">
                                <a href="/visatypes/High-Skilled" class="product-name">High Skilled (Work) Visa</a>
                            </li>
                            <li class="list-group-item">
                                <a href="/visatypes/Conference" class="product-name">Conference/Seminar Visa</a>
                            </li>
                            <li class="list-group-item">
                                <a href="/visatypes/Event" class="product-name">Event/Exhibition Visa</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="grid-item" style="margin-bottom: 25px; width: 300px">
                <div class="ibox" style="margin-bottom: 0;">
                    <div class="ibox-content">
                        <ul class="list-group clear-list" style="font-size: medium; text-align: center">
                            <li class="list-group-item fist-item">
                                <a href="/visatypes/" class="product-name">Diplomatic Visa</a>
                            </li>
                            <li class="list-group-item">
                                <a href="/visatypes/" class="product-name">Business Visa</a>
                            </li>
                            <li class="list-group-item">
                                <a href="/visatypes/" class="product-name">Medical Treatment Visa</a>
                            </li>
                            <li class="list-group-item">
                                <a href="/visatypes/" class="product-name">Temporary Stay Visa</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="ourservices" class="gray-section team">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Our Services</h1>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-md-4">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-desc">
                                <a href="/service#1" class="product-name"> Visa Guidance</a>


                                <div class="small m-t-xs">
                                    Merovisaguide.com has provided countless people globally expert advice and support through the visa application process; and we can help you too.
                                </div>
                                <div class="m-t text-right">

                                    <a href="/service#1" class="btn btn-xs btn-outline btn-primary">More Info <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-desc">
                                <a href="/service#2" class="product-name"> Visa Processing</a>


                                <div class="small m-t-xs">
                                    Visa processing is a key factor to be understood. Visa processing varies accordingly Visa type and the country that we proceed for.
                                </div>
                                <div class="m-t text-right">

                                    <a href="/service#2" class="btn btn-xs btn-outline btn-primary">More Info <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-desc">
                                <a href="/service#3" class="product-name"> Insurance Guidelines</a>


                                <div class="small m-t-xs">
                                    Merovisaguide.com can help you understand and choose insurance company and reliable policy so that if needed, process for health covering
                                </div>
                                <div class="m-t text-right">

                                    <a href="/service#3" class="btn btn-xs btn-outline btn-primary">More Info <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-desc">
                                <a href="/service#4" class="product-name"> Post Visa Counselling</a>


                                <div class="small m-t-xs">
                                    After obtaining Visa with a particular purpose, your work is not done , you need to prepare for your departure and you must be conscious about
                                </div>
                                <div class="m-t text-right">

                                    <a href="/service#4" class="btn btn-xs btn-outline btn-primary">More Info <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-desc">
                                <a href="/service#5" class="product-name"> Documentation</a>


                                <div class="small m-t-xs">
                                    You are required to submit proper and precise documentations to apply for Visa. A mistake in documentation can prospect for refusal.
                                </div>
                                <div class="m-t text-right">

                                    <a href="/service#5" class="btn btn-xs btn-outline btn-primary">More Info <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-desc">
                                <a href="/service#6" class="product-name"> Free Consultation</a>


                                <div class="small m-t-xs">
                                    We also provide free consultation service. You can instantly ask your questions and clear any doubts with our experts at merovisaguide.com.
                                </div>
                                <div class="m-t text-right">

                                    <a href="/service#6" class="btn btn-xs btn-outline btn-primary">More Info <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pricing" class="pricing">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Some of the popular countries you might be interested in </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-content">
                        <a href="/country/United-States">
                            <div class="dd-handle">
                                <span class="flags"><img src="img/flags/32/United-States.png" alt="flag"></span> &nbsp;&nbsp; USA
                            </div>
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-content">
                        <a href="/country/Australia">
                            <div class="dd-handle">
                                <span class="flags"><img src="img/flags/32/Australia.png" alt="flag"></span> &nbsp;&nbsp; AUSTRALIA
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-content">
                        <a href="/country/Canada">
                            <div class="dd-handle">
                                <span class="flags"><img src="img/flags/32/Canada.png" alt="flag"></span> &nbsp;&nbsp; CANADA
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-content">
                        <a href="/country/New-Zealand">
                            <div class="dd-handle">
                                <span class="flags"><img src="img/flags/32/New-Zealand.png" alt="flag"></span> &nbsp;&nbsp; NEW ZEALAND
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-content">
                        <a href="/country/Denmark">
                            <div class="dd-handle">
                                <span class="flags"><img src="img/flags/32/Denmark.png" alt="flag"></span> &nbsp;&nbsp; DENMARK
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-content">
                        <a href="/country/United-Kingdom">
                            <div class="dd-handle">
                                <span class="flags"><img src="img/flags/32/United-Kingdom.png" alt="flag"></span> &nbsp;&nbsp; United Kingdom
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-content">
                        <a href="/country/Germany">
                            <div class="dd-handle">
                                <span class="flags"><img src="img/flags/32/Germany.png" alt="flag"></span> &nbsp;&nbsp; GERMANY
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">

                    <div class="ibox-content">
                        <a href="/country/Norway">
                            <div class="dd-handle">
                                <span class="flags"><img src="img/flags/32/Norway.png" alt="flag"></span> &nbsp;&nbsp; NORWAY
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="ibox ">
                    <a href="/country/UAE">
                        <div class="ibox-content">
                            <div class="dd-handle">
                                <span class="flags"><img src="img/flags/32/United-Arab-Emirates.png" alt="flag"></span> &nbsp;&nbsp; UAE
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-content">
                        <a href="/country/Malaysia">
                            <div class="dd-handle">
                                <span class="flags"><img src="img/flags/32/Malaysia.png" alt="flag"></span> &nbsp;&nbsp; MALAYSIA
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-content">
                        <a href="/country/China">
                            <div class="dd-handle">
                                <span class="flags"><img src="img/flags/32/China.png" alt="flag"></span> &nbsp;&nbsp; CHINA
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">
                    <a href="/country/Singapore">
                        <div class="ibox-content">
                            <div class="dd-handle">
                                <span class="flags"><img src="img/flags/32/Singapore.png" alt="flag"></span> &nbsp;&nbsp; SINGAPORE
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>


<section id="testimonials" class="comments gray-section" style="margin-top: 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>What our clients say !!</h1>
            </div>
        </div>

        <div class="wrapper wrapper-content">

            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="ibox">
                        <div class="slick_demo_1">
                            @foreach($testomonials as $testomonial)
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="ibox-custom-content">
                                    <div class="profile-image">
                                        <img src="img/{{$testomonial->photo}}" class="img-circle circle-border" alt="profile" height="128" width="128">
                                        <h4>{{$testomonial->name}}</h4>
                                    </div>
                                    <p style="text-align: justify">
                                        {{$testomonial->description}}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>

</section>

<!-- Footer -->
@include('layouts.post.footer')

<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Nestable List -->
<script src="js/plugins/nestable/jquery.nestable.js"></script>


<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<script src="js/plugins/wow/wow.min.js"></script>

<script src="js/plugins/i18next/i18next.min.js"></script>


<link href="/css/plugins/select2/select2.min.css" rel="stylesheet">
<script src="/js/plugins/select2/select2.full.min.js"></script>

<!-- slick carousel-->
<script src="js/plugins/slick/slick.min.js"></script>
<script src="js/plugins/masonary/masonry.pkgd.min.js"></script>

<script>
    $(document).ready(function () {
        $(".select2").select2();


        var updateOutput = function (e) {
            var list = e.length ? e : $(e.target),
                output = list.data('output');
            if (window.JSON) {
                output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
            } else {
                output.val('JSON browser support required for this demo.');
            }
        };

        // activate Nestable for list 2
        $('.dd').nestable({
            maxDepth: 0,
        }).nestable('collapseAll');


        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 80
        });

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
            $("#navbar").collapse('hide');
        });

        $('.slick_demo_1').slick({
            dots: true,
            autoplay: true,
            slidesToShow: 2,
            slidesToScroll: 1
        });

        $('.slick_demo_2').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            centerMode: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $('.slick_demo_3').slick({
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            adaptiveHeight: true
        });


    });

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
                header = document.querySelector( '.navbar-default' ),
                didScroll = false,
                changeHeaderOn = 200;
        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 250 );
                }
            }, false );
        }
        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                $(header).addClass('navbar-scroll')
            }
            else {
                $(header).removeClass('navbar-scroll')
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

    $('#country').on('change',function(){
        //updateVisaOption(this.value)        
    });

    //updateVisaOption(231)

    function updateVisaOption(id){
        url = '/api/visatype/'+id
        console.log(url)
        $.get(url,function(data){
            options= ""
            data.forEach(function(element) {
                console.log(element)
                options +='<option value='+element.visa_type_id+'>'+element.name+'</option>'
            });

            $("#purpose").html(options)

        });
    }



</script>
@include('layouts.enquiry');
</body>
</html>
<script src="/js/chat.js"></script>