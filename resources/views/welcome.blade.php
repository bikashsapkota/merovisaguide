<!DOCTYPE html>
<html lang="en">
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
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="page-scroll" href="#page-top">Home</a></li>
                        <li><a class="page-scroll" href="#visa-type">Visa Type</a></li>
                        <li><a class="page-scroll" href="#ourservices">Our Services</a></li>
                        <li><a class="page-scroll" href="#testimonials">Testimonials</a></li>
                        <li><a class="page-scroll" href="#pricing">Country</a></li>
                        <li><a class="page-scroll" href="#contact">Contact</a></li>
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
                    <h1>Before being cheated <br/>
                        consult the experts,<br/>
                        </h1>
                    <p>Consult Expert in this field</p>
                    <p>
<!--                        <a class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Click For Enquiry</a>-->
                        <a data-toggle="modal" class="btn btn-primary" href="#modal-form">Click for enquiry</a>
                    </p>
                </div>
                <div class="carousel-image wow zoomIn">
                    <img src="img/landing/laptop.png" alt="laptop"/>
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back one"></div>

        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption blank">
                    <h1>Before being cheated <br/>
                        consult the experts,<br/>
                    </h1>
                    <p>Consult Expert in this field</p>
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
            <div class="form-group">
                <label for="exampleInputEmail1">Country</label>
                <select class="form-control m-b" name="country">
                    @foreach($countries as $country)
                        <option value={{$country->id}}>{{$country->name}}</option>
                    @endforeach
                </select>
                <small id="emailHelp" class="form-text text-muted">Destination Country.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Purpose</label>
                <select class="form-control m-b" name="purpose">
                    @foreach($visatypes as $visatype)
                        <option value={{$visatype->id}}>{{$visatype->name}}</option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>

<section id="features" class="container services">
    <div class="row">
        <div class="col-sm-3">
            <h2>Need Passport in a hurry?</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>Mero Visa Guide Q/A?</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>Corporate Accounts and Travel Industry</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>Advanced Forms</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
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
                                <a href="#" class="product-name"> Visa Guidance</a>


                                <div class="small m-t-xs">
                                    Many desktop publishing packages and web page editors now. Many desktop publishing packages and web page editors now.
                                </div>
                                <div class="m-t text-right">

                                    <a href="#" class="btn btn-xs btn-outline btn-primary">More Info <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-desc">
                                <a href="#" class="product-name"> Visa Processing</a>


                                <div class="small m-t-xs">
                                    Many desktop publishing packages and web page editors now. Many desktop publishing packages and web page editors now.
                                </div>
                                <div class="m-t text-right">

                                    <a href="#" class="btn btn-xs btn-outline btn-primary">More Info <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-desc">
                                <a href="#" class="product-name"> Free Consultation</a>


                                <div class="small m-t-xs">
                                    Many desktop publishing packages and web page editors now. Many desktop publishing packages and web page editors now.
                                </div>
                                <div class="m-t text-right">

                                    <a href="#" class="btn btn-xs btn-outline btn-primary">More Info <i class="fa fa-long-arrow-right"></i> </a>
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
                                <a href="#" class="product-name"> Post Visa Counselling</a>


                                <div class="small m-t-xs">
                                    Many desktop publishing packages and web page editors now. Many desktop publishing packages and web page editors now.
                                </div>
                                <div class="m-t text-right">

                                    <a href="#" class="btn btn-xs btn-outline btn-primary">More Info <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-desc">
                                <a href="#" class="product-name"> Insurance Guidelines</a>


                                <div class="small m-t-xs">
                                    Many desktop publishing packages and web page editors now. Many desktop publishing packages and web page editors now.
                                </div>
                                <div class="m-t text-right">

                                    <a href="#" class="btn btn-xs btn-outline btn-primary">More Info <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!--                <div class="col-md-4">-->
<!--                    <div class="ibox">-->
<!--                        <div class="ibox-content product-box">-->
<!---->
<!--                            <div class="product-desc">-->
<!--                                <a href="#" class="product-name"> Visa Guidance</a>-->
<!---->
<!---->
<!--                                <div class="small m-t-xs">-->
<!--                                    Many desktop publishing packages and web page editors now. Many desktop publishing packages and web page editors now.-->
<!--                                </div>-->
<!--                                <div class="m-t text-right">-->
<!---->
<!--                                    <a href="#" class="btn btn-xs btn-outline btn-primary">More Info <i class="fa fa-long-arrow-right"></i> </a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div> -->
            </div>

        </div>

</section>


<section id="testimonials" class="navy-section testimonials" style="margin-top: 0">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center wow zoomIn">
                <i class="fa fa-comment big-icon"></i>
                <h1>
                    What our users say
                </h1>
                <div class="testimonials-text">
                    <i>"Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."</i>
                </div>
                <small>
                    <strong>12.02.2014 - Andy Smith</strong>
                </small>
            </div>
        </div>
    </div>

</section>

<section class="comments gray-section" style="margin-top: 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>What our partners say</h1>
                <p>Donec sed odio dui. Etiam porta sem malesuada. </p>
            </div>
        </div>
        <div class="row features-block">
            <div class="col-lg-4">
                <div class="bubble">
                    "Uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."
                </div>
                <div class="comments-avatar">
                    <a href="" class="pull-left">
                        <img alt="image" src="img/landing/avatar3.jpg">
                    </a>
                    <div class="media-body">
                        <div class="commens-name">
                            Andrew Williams
                        </div>
                        <small class="text-muted">Company X from California</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bubble">
                    "Uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."
                </div>
                <div class="comments-avatar">
                    <a href="" class="pull-left">
                        <img alt="image" src="img/landing/avatar1.jpg">
                    </a>
                    <div class="media-body">
                        <div class="commens-name">
                            Andrew Williams
                        </div>
                        <small class="text-muted">Company X from California</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bubble">
                    "Uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."
                </div>
                <div class="comments-avatar">
                    <a href="" class="pull-left">
                        <img alt="image" src="img/landing/avatar2.jpg">
                    </a>
                    <div class="media-body">
                        <div class="commens-name">
                            Andrew Williams
                        </div>
                        <small class="text-muted">Company X from California</small>
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
                        <div class="dd" id="nestable2">
                            <ol class="dd-list">
                                <li class="dd-item noUi-dragable" data-id="1">
                                    <div class="dd-handle">
                                        <span class="flags"><img src="img/flags/32/United-States.png" alt="flag"></span> &nbsp;&nbsp; USA
                                    </div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-cog"></i></span> Student Visa
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-bolt"></i></span> Working Visa
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="4">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-laptop"></i></span> Tourist Visa
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-content">
                        <div class="dd" id="nestable3">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                        <span class="flags"><img src="img/flags/32/Australia.png" alt="flag"></span> &nbsp;&nbsp; AUSTRALIA
                                    </div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-cog"></i></span> Student Visa
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-bolt"></i></span> Working Visa
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="4">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-laptop"></i></span> Tourist Visa
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-content">
                        <div class="dd" id="nestable4">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                        <span class="flags"><img src="img/flags/32/Canada.png" alt="flag"></span> &nbsp;&nbsp; CANADA
                                    </div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-cog"></i></span> Student Visa
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-bolt"></i></span> Working Visa
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="4">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-laptop"></i></span> Tourist Visa
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">

                    <div class="ibox-content">
                        <div class="dd" id="nestable5">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                        <span class="flags"><img src="img/flags/32/New-Zealand.png" alt="flag"></span> &nbsp;&nbsp; NEW ZEALAND
                                    </div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-cog"></i></span> Student Visa
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-bolt"></i></span> Working Visa
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="4">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-laptop"></i></span> Tourist Visa
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-content">
                        <div class="dd" id="nestable5">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                        <span class="flags"><img src="img/flags/32/Denmark.png" alt="flag"></span> &nbsp;&nbsp; DENMARK
                                    </div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-cog"></i></span> Student Visa
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-bolt"></i></span> Working Visa
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="4">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-laptop"></i></span> Tourist Visa
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-content">
                        <div class="dd" id="nestable6">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                        <span class="flags"><img src="img/flags/32/United-Kingdom.png" alt="flag"></span> &nbsp;&nbsp; United Kingdom
                                    </div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-cog"></i></span> Student Visa
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-bolt"></i></span> Working Visa
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="4">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-laptop"></i></span> Tourist Visa
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-content">
                        <div class="dd" id="nestable7">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                        <span class="flags"><img src="img/flags/32/Germany.png" alt="flag"></span> &nbsp;&nbsp; GERMANY
                                    </div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-cog"></i></span> Student Visa
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-bolt"></i></span> Working Visa
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="4">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-laptop"></i></span> Tourist Visa
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">

                    <div class="ibox-content">
                        <div class="dd" id="nestable8">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                        <span class="flags"><img src="img/flags/32/Norway.png" alt="flag"></span> &nbsp;&nbsp; NORWAY
                                    </div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-cog"></i></span> Student Visa
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-bolt"></i></span> Working Visa
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="4">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-laptop"></i></span> Tourist Visa
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-content">
                        <div class="dd" id="nestable2">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                        <span class="flags"><img src="img/flags/32/United-Arab-Emirates.png" alt="flag"></span> &nbsp;&nbsp; UAE
                                    </div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-cog"></i></span> Student Visa
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-bolt"></i></span> Working Visa
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="4">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-laptop"></i></span> Tourist Visa
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-content">
                        <div class="dd" id="nestable3">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                        <span class="flags"><img src="img/flags/32/Malaysia.png" alt="flag"></span> &nbsp;&nbsp; MALAYSIA
                                    </div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-cog"></i></span> Student Visa
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-bolt"></i></span> Working Visa
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="4">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-laptop"></i></span> Tourist Visa
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-content">
                        <div class="dd" id="nestable4">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                        <span class="flags"><img src="img/flags/32/China.png" alt="flag"></span> &nbsp;&nbsp; CHINA
                                    </div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-cog"></i></span> Student Visa
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-bolt"></i></span> Working Visa
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="4">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-laptop"></i></span> Tourist Visa
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">

                    <div class="ibox-content">
                        <div class="dd" id="nestable5">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                        <span class="flags"><img src="img/flags/32/Singapore.png" alt="flag"></span> &nbsp;&nbsp; SINGAPORE
                                    </div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-cog"></i></span> Student Visa
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-bolt"></i></span> Working Visa
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="4">
                                            <div class="dd-handle">
                                                <span class="label label-info"><i class="fa fa-laptop"></i></span> Tourist Visa
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="contact" class="gray-section contact">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Contact Us</h1>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
            </div>
        </div>
        <div class="row m-b-lg">
            <div class="col-lg-3 col-lg-offset-3">
                <address>
                    <strong><span class="navy">Company name, Inc.</span></strong><br/>
                    795 Folsom Ave, Suite 600<br/>
                    San Francisco, CA 94107<br/>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
            </div>
            <div class="col-lg-4">
                <p class="text-color">
                    Consectetur adipisicing elit. Aut eaque, totam corporis laboriosam veritatis quis ad perspiciatis, totam corporis laboriosam veritatis, consectetur adipisicing elit quos non quis ad perspiciatis, totam corporis ea,
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="mailto:test@email.com" class="btn btn-primary">Send us mail</a>
                <p class="m-t-sm">
                    Or follow us on social platform
                </p>
                <ul class="list-inline social-icon">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <p><strong>&copy; 2015 Company Name</strong><br/> consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
        </div>
    </div>
</section>

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


<script>

    $(document).ready(function () {


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
            group: 1,
            maxDepth: 1
        }).nestable('collapseAll');


        $('#nestable-menu').on('click', function (e) {
            var target = $(e.target),
                action = target.data('action');
            if (action === 'expand-all') {
                $('.dd').nestable('expandAll');
            }
            if (action === 'collapse-all') {
                $('.dd').nestable('collapseAll');
            }
        });





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

</script>
@include('layouts.enquiry');
</body>
</html>
<!-- <script src="/js/chat.js"></script> -->