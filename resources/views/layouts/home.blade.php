<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Nodule Investment is an online minning Agencies for digital crypto currency investment." />
    <!-- SITE TITLE -->
    <title> Nodule Investment - Mining Platform </title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}">
    <!-- Animation CSS -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/animate.css')}}" >
    <!-- Latest Bootstrap min CSS -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <!-- Navigation CSS -->
    <link type="text/css" href="{{asset('assets/css/bootsnav.css')}}" rel="stylesheet">
    <!-- Google Font -->
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <!--- owl carousel CSS-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/owlcarousel/css/owl.carousel.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/owlcarousel/css/owl.theme.css')}}">
    <!-- Magnific Popup CSS -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- Style CSS -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css')}}" media="all">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- Color CSS -->
    <link id="layoutstyle" type="text/css" rel="stylesheet" href="{{asset('assets/color/theme.css')}}">
</head>
<body data-spy="scroll" data-offset="110">
<!-- LOADER -->
<div class="pageloader">
    <div class="loader_wrap">
        <i class="fa fa-bitcoin"></i>
    </div>
</div>
<!-- END LOADER -->

<!-- START HEADER -->
<header class="navbar">
    <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container"><!-- STRART CONTAINER -->
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div><!-- END CONTAINER-->
        </div>
        <!-- End Top Search -->
        <div class="container"><!-- STRART CONTAINER -->
            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>

                    <li class="user"><a href="/login"><i class="fa fa-user"></i></a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="{{url('/')}}">
                    <img src="{{asset('assets/images/logo.png')}}" class="logo logo-display" alt="logo">
                    <img src="{{asset('assets/images/logo_black.png')}}" class="logo logo-scrolled" alt="logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li><a class="page-scroll" href="{{url('/')}}">Home</a></li>
                    <li><a class="page-scroll" href="{{url('/#about')}}">Company</a></li>
                    <li><a class="page-scroll" href="{{url('/#whychoose')}}">Features</a></li>
                    <li><a class="page-scroll" href="{{url('/#chart')}}">Price</a></li>
                    <li><a class="page-scroll" href="plans.html">Plans</a></li>
                    <li><a class="page-scroll" href="{{url('/#partner')}}">Partner</a></li>
                    <li><a class="page-scroll" href="/login">Login</a></li>
                    <li><a class="page-scroll" href="{{url('/register')}}">Sign Up</a></li>
                    <li><a class="page-scroll" href="#footer">Contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- END CONTAINER-->
    </nav>
</header>
<!-- END HEADER -->
@yield('content')
<footer>
    <div class="top_footer">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row">
                <div class="col-mg-4 col-md-4 col-sm-5 col-xs-12">
                    <div class="footer_logo">
                        <a href="{{url('/')}}">
                            <img src="{{asset('assets/images/logo.png')}}" alt="footer_logo"/></a>
                    </div>
                    <div class="site_info">
                        <ul class="list_none">
                            <li><i class="fa fa-map-marker"></i>

                                <p> Luxemburg, Estonia</p></li>
                            <li><i class="fa fa-phone"></i><a href="tel:123456789">(1234) 12345-678 </a>
                            </li>
                            <li><i class="fa fa-envelope"></i><a href="mailto:support@noduleinvestment.com">Support@noduleinvestment.com</a>
                            </li>
                            <li><i class="fa fa-envelope"></i><a href="mailto:info@noduleinvestment.com">Info@noduleinvestment.com</a>
                            </li>
                            <!-- <li><i class="fa fa-envelope"></i><a href="mailto:contact@noduleinvestment.com">contact@noduleinvestment.com</a>	</li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-mg-8 col-md-8 col-sm-7 col-xs-12">
                    <div class="newsletter_content">
                        <h3 class="footer_title">Newsletter</h3>

                        <p>By subscribing to our mailing list you will always be update with the latest news
                            from us.</p>

                        <div class="newsletter_form">
                            <form>
                                <input type="email" required placeholder="Enter Your Email"
                                       class="form-control">
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTAINER-->
    </div>
    <div class="bottom_footer">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row">
                <div class="col-mg-6 col-md-6 col-sm-8 col-xs-12">
                    <div class="copyright_text">
                        <p>&copy; Copyright 2016-2019 by Nodule Investment. All Right Reserved </p>
                    </div>
                </div>
                <div class="col-mg-6 col-md-6 col-sm-4 col-xs-12">
                    <div class="social_footer list_none text-right">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </Div>
            </div>
        </div>
        <!-- END CONTAINER-->
    </div>
</footer>
<!-- Latest jQuery -->
<script src="{{asset('assets/js/jquery-1.12.4.min.js')}}"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Bootsnavs -->
<script src="{{asset('assets/js/bootsnav.js')}}"></script>
<!-- owl-carousel min js  -->
<script src="{{asset('assets/owlcarousel/js/owl.carousel.min.js')}}"></script>
<!-- magnific-popup min js  -->
<script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
<!-- waypoints min js  -->
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<!-- counterup min js  -->
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<!-- scripts js -->
<script src="{{asset('assets/js/scripts.js')}}"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5c23949282491369ba9f8658/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
