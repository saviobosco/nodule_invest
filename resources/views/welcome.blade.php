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

    <!--<div class="color-switch">
     <p>Color Switcher</p>
        <div class="color_box">
         <button value="theme" data-color="#ff880e" style="background:#ff880e;" class="active"></button>
            <button value="theme-red" data-color="#ff0000" style="background:#ff0000;"></button>
            <button value="theme-green" data-color="#1aca79" style="background:#1aca79;"></button>
            <button value="theme-pink" data-color="#F7378A" style="background:#F7378A;"></button>
            <button value="theme-purple" data-color="#8a2be2" style="background:#8a2be2;"></button>
            <button value="theme-lightblue" data-color="#05b5ff" style="background:#05b5ff;"></button>
        </div>
        <div class="icon"><i class="fa fa-cog" aria-hidden="true"></i></div>
    </div>-->


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
                    <a class="navbar-brand page-scroll" href="#home">
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

    <!-- START SECTION BANNER -->
    <section id="home" class="banner_section no-padding overlay background_bg" style="background-image:url(assets/images/banner_1.jpg);">
        <canvas id="circle-canvas"></canvas>
        <div class="banner_content_wrap home_slider owl-carousel">
            <div class="item active">
                <!-- <div class="container"><!-- STRART CONTAINER -->
                <!-- <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left">
                        <div class="banner_content">
                            <h2>Nodel Investment<br>The leading Investment Community!</h2>
                            <p>LEADING CRYPTO MINING EXPERTS<br> </p>
                            <div class="slider_btn">
                                <a href="account/register.html" class="btn btn-primary page-scroll">Get Started</a>
                                <a href="#footer" class="btn btn-default page-scroll">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>END CONTAINER
        </div> -->
                <div class="item">
                    <div class="container"><!-- STRART CONTAINER -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <div class="banner_content">
                                    <h2>WE ARE YOUR FINANCIAL SOLUTION</h2>
                                    <p>
                                        The easiest and most trusted place to Invest in Digital Crytocurrencies.<br></p>
                                    <div class="slider_btn">
                                        <a href="account/register.html" class="btn btn-primary page-scroll">Get Started</a>
                                        <a href="#footer" class="btn btn-default page-scroll">Contact Us</a></br>
                                        <a href="https://www.blockchain.com/learning-portal/bitcoin-faq" class="btn btn-primary">Want To Know More about Bitcoin? click here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- END CONTAINER-->
                    <!-- </div>
                    <div class="item">
                        <div class="container"><!-- STRART CONTAINER
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                                    <div class="banner_content">
                                        <h2>Nodel Investment <br> Lending & Investment Platform</h2>
                                        <p>Use Modern Progresive Technologies Of Mining to Earn Money!</p>
                                        <div class="slider_btn">
                                            <a href="account/register.html" class="btn btn-primary page-scroll">Get Started</a>
                                            <a href="#footer" class="btn btn-default page-scroll">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>END CONTAINER -->
                </div>
            </div>
    </section>
    <!-- END SECTION BANNER -->

    <!-- START PRICE LIST SECTION -->

    <section id="plan" class="price_rate wave_bg newwave">
        <script type="text/javascript">
            baseUrl = "https://widgets.cryptocompare.com/";
            var scripts = document.getElementsByTagName("script");
            var embedder = scripts[ scripts.length - 1 ];
            var cccTheme = {"General":{"enableMarquee":true}};
            (function (){
                var appName = encodeURIComponent(window.location.hostname);
                if(appName==""){appName="local";}
                var s = document.createElement("script");
                s.type = "text/javascript";
                s.async = true;
                var theUrl = baseUrl+'serve/v3/coin/header?fsyms=BTC,ETH,XMR,LTC,DASH&tsyms=USD,EUR,CNY,GBP';
                s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                embedder.parentNode.appendChild(s);
            })();
        </script>
        <div class="container"><!-- STRART CONTAINER -->

            <!-- <div class="row">
                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                     <div class="rate_list text-center">
                         <div class="rate_content">
                             <h3>XRP</h3>
                             <p>Ripple</p>
                             <ul class="currency_list">
                                 <li><span>USD</span><p>1.322</p></li>
                                 <li><span>EUR</span><p>1,065</p></li>
                                 <li><span>GBP</span><p>0,936</p></li>
                             </ul>
                         </div>
                     </div>
                 </div>-->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                <div class="rate_list text-center">
                    <div class="rate_content">
                        <h3>ETH</h3>
                        <p>Ethereum</p>
                        <script type="text/javascript" src="../files.coinmarketcap.com/static/widget/currency.js"></script><div class="coinmarketcap-currency-widget" data-currencyid="1027" data-base="USD" data-secondary="USD" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="rate_list text-center">
                    <div class="rate_content">
                        <h3>LTC</h3>
                        <p>Litecoin</p>
                        <script type="text/javascript" src="../files.coinmarketcap.com/static/widget/currency.js"></script><div class="coinmarketcap-currency-widget" data-currencyid="2" data-base="USD" data-secondary="USD" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="rate_list text-center">
                    <div class="rate_content">
                        <h3>BTC</h3>
                        <p>Bitcoin</p>
                        <script type="text/javascript" src="../files.coinmarketcap.com/static/widget/currency.js"></script><div class="coinmarketcap-currency-widget" data-currencyid="1" data-base="USD" data-secondary="USD" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div>
                    </div>
                </div>
            </div>
        </div>
        </div><!-- END CONTAINER-->
    </section>
    <!-- END PRICE LIST SECTION -->

    <!-- START ABOUT SECTION -->
    <section class="about" id="about">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="heading">
                        <h2>About Nodule Investment</h2>
                    </div>
                    <p>With years of successful experience, owns perfect management system and organizational structure. We have made the online platform of the safest, most efficient and convenient, so as to make the projects run more orderly and stably.Our financial portfolio is supported by an active pool of profits made from a strategic assortment of high yield assets located in key positions around the world.</p>
                    <p>nodule Investment is the world's leading Mining investment platform. Offering the largest production blockchain platform in the world, we are using new technology to build a radically better financial system. Our software has powered over 18,M transactions and empowered users in 140 countries across the globe to transact quickly and without costly intermediaries. We also offer tools for developers and real time transaction data for users to analyze the burgeoning digital economy. Join over 5,630 users from all over the world satisfied with our services.</p>
                    <a href="account/register.html" class="btn btn-default">Get Started</a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="single_img">
                        <img src="assets/images/about_img.jpg" alt="about_img" />
                    </div>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </section>
    <!-- END ABOUT SECTION -->

    <!-- START WHY CHOOSE SECTION -->
    <section class="gray_bg whychoose" id="whychoose">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="heading text-center">
                        <h2>Why Choose Nodule Investment</h2>
                        <p>We are here because we are passionate about open, transparent markets and aim to be a major driving force in widespread adoption, we are efficient in cryptocurrency Mining and trading. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="service_box text-center">
                        <div class="service_icon">
                            <img src="assets/images/icon1.png" alt="icon1" />
                        </div>
                        <div class="service_text">
                            <h4>Safe and Secure</h4>
                            <p>You have full access to your accounts, both withdrawals and deposits. Protection against DDoS attacks.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="service_box text-center">
                        <div class="service_icon">
                            <img src="assets/images/icon2.png" alt="icon2" />
                        </div>
                        <div class="service_text">
                            <h4>Experts Support</h4>
                            <p>Should you need help or have any question, our best in class support team will always be there for you. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="service_box text-center">
                        <div class="service_icon">
                            <img src="assets/images/icon3.png" alt="icon3" />
                        </div>
                        <div class="service_text">
                            <h4>World Coverage</h4>
                            <p>Providing services in 95% countries We serve investors from all around the Globe. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="service_box text-center">
                        <div class="service_icon">
                            <img src="assets/images/icon4.png" alt="icon4" />
                        </div>
                        <div class="service_text">
                            <h4>Instant Exchange</h4>
                            <p>We mine Bitcoin and various alternative crypto currencies and have the best Cryptomining Technology</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="service_box text-center">
                        <div class="service_icon">
                            <img src="assets/images/icon5.png" alt="icon5" />
                        </div>
                        <div class="service_text">
                            <h4>Secure Wallet</h4>
                            <p>Well Protected wallet to Buy and sell popular digital currencies, keep track of them in the one place. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="service_box text-center">
                        <div class="service_icon">
                            <img src="assets/images/icon6.png" alt="icon6" />
                        </div>
                        <div class="service_text">
                            <h4>Recuring Buys</h4>
                            <p>Invest in digital currency slowly over time by scheduling buys weekly, or monthly. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </section>
    <!-- END WHY CHOOSE SECTION -->

    <!-- START LIVE PRICE CHART SECTION -->
    <section id="chart">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="heading text-center">
                        <h2>CRYPTOCURRENCY LIVE PRICE</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <script type="text/javascript">
                        baseUrl = "https://widgets.cryptocompare.com/";
                        var scripts = document.getElementsByTagName("script");
                        var embedder = scripts[ scripts.length - 1 ];
                        var cccTheme = {"General":{"enableMarquee":true}};
                        (function (){
                            var appName = encodeURIComponent(window.location.hostname);
                            if(appName==""){appName="local";}
                            var s = document.createElement("script");
                            s.type = "text/javascript";
                            s.async = true;
                            var theUrl = baseUrl+'serve/v3/coin/header?fsyms=BTC,ETH,XMR,LTC,DASH&tsyms=USD,EUR,CNY,GBP';
                            s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                            embedder.parentNode.appendChild(s);
                        })();
                    </script>

                    <!-- TradingView Widget BEGIN -->
                    <div style="width: 100%; height: 500px;"><style>
                            .tradingview-widget-copyright {
                                font-size: 13px !important;
                                line-height: 32px !important;
                                text-align: center !important;
                                vertical-align: middle !important;
                                font-family: 'Trebuchet MS', Tahoma, Arial, sans-serif !important;
                                color: #9db2bd !important;
                            }

                            .tradingview-widget-copyright .blue-text {
                                color: #3bb3e4 !important;
                            }

                            .tradingview-widget-copyright a {
                                text-decoration: none !important;
                                color: #9db2bd !important;
                            }

                            .tradingview-widget-copyright a:visited {
                                color: #9db2bd !important;
                            }

                            .tradingview-widget-copyright a:hover .blue-text {
                                color: #38acdb !important;
                            }

                            .tradingview-widget-copyright a:active .blue-text {
                                color: #299dcd !important;
                            }

                            .tradingview-widget-copyright a:visited .blue-text {
                                color: #3bb3e4 !important;
                            }
                        </style><iframe allowtransparency="true" style="box-sizing: border-box; height: calc(468px); width: 100%;" src="https://s.tradingview.com/cryptomktscreenerwidget/?locale=en#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A%22500%22%2C%22defaultColumn%22%3A%22overview%22%2C%22screener_type%22%3A%22crypto_mkt%22%2C%22displayCurrency%22%3A%22USD%22%2C%22market%22%3A%22crypto%22%2C%22enableScrolling%22%3Atrue%2C%22utm_source%22%3A%22coinbasefinance.co%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22cryptomktscreener%22%7D" frameborder="0"></iframe><div style="height: 32px; line-height: 32px; width: 100%; text-align: center; vertical-align: middle;"><a style="color: rgb(173, 174, 176); font-family: &quot;Trebuchet MS&quot;,Tahoma,Arial,sans-serif; font-size: 13px;" href="http://www.tradingview.com/" target="_blank" ref="nofollow noopener">Cryptocurrency Market by <span style="color: #3BB3E4">TradingView</span></a></div></div>

                    <div class="tradingview-widget-container" style="width: 100%; height: 104px;">
                        <iframe scrolling="no" allowtransparency="true" style="box-sizing: border-box; height: calc(72px); width: 100%;" src="https://s.tradingview.com/tickerswidgetembed/?locale=en#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22BITFINEX%3ABTCUSD%22%2C%22title%22%3A%22BTC%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITFINEX%3AETHUSD%22%2C%22title%22%3A%22ETH%2FUSD%22%7D%2C%7B%22description%22%3A%22ZEC%2FUSD%22%2C%22proName%22%3A%22BITFINEX%3AZECUSD%22%7D%2C%7B%22description%22%3A%22LTC%2FUSD%22%2C%22proName%22%3A%22BITFINEX%3ALTCUSD%22%7D%2C%7B%22description%22%3A%22BTG%2FUSD%22%2C%22proName%22%3A%22BITFINEX%3ABTGUSD%22%7D%2C%7B%22description%22%3A%22XMR%2FUSD%22%2C%22proName%22%3A%22BITFINEX%3AXMRUSD%22%7D%5D%2C%22width%22%3A%22100%25%22%2C%22height%22%3A104%2C%22utm_source%22%3A%22coinbasefinance.co%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22tickers%22%7D" frameborder="0"></iframe>
                        <div class="tradingview-widget-copyright"><a href="https://tradingview.com/" rel="noopener" target="_blank"><span class="blue-text">Quotes</span> by TradingView</a></div>

                        <style>
                            .tradingview-widget-copyright {
                                font-size: 13px !important;
                                line-height: 32px !important;
                                text-align: center !important;
                                vertical-align: middle !important;
                                font-family: 'Trebuchet MS', Tahoma, Arial, sans-serif !important;
                                color: #9db2bd !important;
                            }

                            .tradingview-widget-copyright .blue-text {
                                color: #3bb3e4 !important;
                            }

                            .tradingview-widget-copyright a {
                                text-decoration: none !important;
                                color: #9db2bd !important;
                            }

                            .tradingview-widget-copyright a:visited {
                                color: #9db2bd !important;
                            }

                            .tradingview-widget-copyright a:hover .blue-text {
                                color: #38acdb !important;
                            }

                            .tradingview-widget-copyright a:active .blue-text {
                                color: #299dcd !important;
                            }

                            .tradingview-widget-copyright a:visited .blue-text {
                                color: #3bb3e4 !important;
                            }
                        </style></div>
                    <!-- TradingView Widget END -->
                </div>
            </div>

        </div><!-- END CONTAINER-->
    </section>
    <!-- END LIVE PRICE CHART SECTION -->

    <!-- START COUNTER SECTION -->
    <section class="counter_wrap overlay background_bg" style="background-image:url(assets/images/counter_bg.jpg);">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="counter_box">
                        <i class="fa fa-pie-chart"></i>
                        <span class="counter">4</span>
                        <h6>Mining Plans</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="counter_box">
                        <i class="fa fa-life-ring"></i>
                        <span class="counter">185</span>
                        <h6>Support Countries</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="counter_box">
                        <i class="fa fa-shield"></i>
                        <span class="counter">15,811</span>
                        <h6>Transactions</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="counter_box">
                        <i class="fa fa-users"></i>
                        <span class="counter">5630</span>
                        <h6>Active Clients</h6>
                    </div>
                </div>

            </div>
        </div><!-- END CONTAINER-->
    </section>
    <!-- END COUNTER SECTION -->

    <!-- START GET STARTED SECTION -->
    <section class="get_now_wrap">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="heading text-center">
                        <h2>Get Started Today With Nodule Investment</h2>
                        <p>It’s easy, and takes only a few minutes! </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-padding">
                    <div class="get_start_box bg_color1 text-center">
                        <i class="fa fa-download"></i>
                        <h3>Create an Account</h3>
                        <p>Click on "SIGN UP" on top of the page. Fill in all the data in the registration form to open an account in </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-padding">
                    <div class="get_start_box bg_color2 text-center">
                        <i class="fa fa-folder-open"></i>
                        <h3>Purchase Plan</h3>
                        <p>Login to User panel. Click on "Purchase Plan". Choose a payment system, investment plans and follow the instructions to create your deposit</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-padding">
                    <div class="get_start_box bg_color1 text-center">
                        <i class="fa fa-refresh"></i>
                        <h3>Receive with Wallet</h3>
                        <p>Enjoy the benefits.Invite your friends to join via your referral link and you’ll get more bonus in .</p>
                    </div>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </section>
    <!-- END GET STARTED SECTION -->

    <!-- SRTAT VIDEO SECTION -->
    <section class="overlay background_bg" style="background-image:url(assets/images/video_bg.jpg);">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="video_box">
                        <div class="heading text-center white">
                            <h2>Video Review</h2>
                            <p>How Crypto Mining Works</p>
                        </div>

                        <iframe src="https://www.youtube.com/embed/Gc2en3nHxA4?rel=0&amp;showinfo=0" allow="autoplay; encrypted-media" allowfullscreen="" width="400" height="400" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </section>
    <!-- END VIDEO SECTION -->
    <!----this is the partner section-->
    <section class="about" id="partner">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="heading">
                        <h2>Partner with Nodule Investment</h2>
                    </div>
                    <p>Nodule Investment partnership Has enriched many organizations, through proper management techniques and financial expertise. We own a large amount of partners in every area and sector in the crypto market and business world, We made our platform safest, most efficient and convenient, so as to make the projects run more orderly and stably.</p>
                    <p>Our financial portfolio is supported by an active pool which made it easy for investors to partner with us, so far partnership has helped us and our more than 100 partners in this investment to improve its financial state in a way that both the investor and our company will partake in the total financial outcome of this noble group annually, looking at the chart you will see the statistics of our award winning partakers in the partnership platform for the past three years, in the year 2016 PETRONNAS OIL & GAS won the award of the highest investors in our partnership platform which made them to earn up to 32% of the companys total income in 2016, after that COINGRADE TRADERS became the winner of the year 2017 award and also earned 29% of the total income of the year, in the year 2018 GRROZ VENTURS celebrated it as the winners of the year highest investors and also received 35% of the total revenue of the year, the 2019 award is still open and running, the best investor takes this good opportunity, Nodule investment have been very efficient in this platform to make sure that all partners will enjoy their investments percentages and the maximum investor of every year award, this is your life time investment, hope for the future comfort.</p>
                    <a href="account/register.html" class="btn btn-default">Partner Now</a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="single_img">
                        <img src="assets/images/partner_img.png" alt="partners_img" /></br>
                        </br>
                        <p>There will be more wins for the company in 2019 </p>
                    </div>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </section>
    <!--THIS ENDS THE PARTNER SECTION-->

    <!-- START TEAM SECTION -->
    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="heading text-center">
                        <h2>Our Core Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="team_slider owl-carousel owl-theme">
                        <div class="item">
                            <div class="team_box text-center">
                                <div class="team_img">
                                    <a href="#"><img src="assets/images/1.jpg" alt="team1"/></a>

                                </div>
                                <div class="team_content">
                                    <h3><a href="#">Andrew Max</a></h3>
                                    <p>(Co-Founder & CEO)</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="team_box text-center">
                                <div class="team_img">
                                    <a href="#"><img src="assets/images/2.jpg" alt="team3"/></a>

                                </div>
                                <div class="team_content">
                                    <h3><a href="#">Tamlyn Scruggs</a></h3>
                                    <p>(Board of Director)</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team_box text-center">
                                <div class="team_img">
                                    <a href="#"><img src="assets/images/team4.jpg" alt="team4"/></a>
                                    <!-- <div class="team_social_wrap">
                                        <ul class="team_social">
                                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                       </ul>
                                   </div> -->
                                </div>
                                <div class="team_content">
                                    <h3><a href="#">Lutsi Robin</a></h3>
                                    <p>(Co-Founder & CEO)</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div><!-- END
        </section>
    <!-- END TEAM SECTION


        <section class="gray_bg" id="invt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="heading text-center">
                            <h2>Investment plans</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row" style="margin-right:0px;margin-left:0px;width:100%;">


									<div class="col-md-4" style="padding-bottom:10px;">
										<div>
											<ul class="list-group text-center pricing-table1" style="/*box-shadow:0 2px 5.64px 0.36px rgba(0,0,0,.15), 0 3px 14.25px 0.75px rgba(0,0,0,.1);*/">
												<li class="list-group-item" style="background-color:rgb(16,56,111);">
													<h1 style="font-family:Montserrat, sans-serif;color:rgb(255,255,255);">Bitcoin</h1>
													<p class="text-center" style="padding-top:20px;color:rgb(255,255,255);">$5000</p>
												</li>
												<li class="list-group-item"><span><strong>5% weekly Payout</strong></span></li>

												<li class="list-group-item"><span>10% Referral Bonus</span></li>

												<li class="list-group-item"><span>100% Reimbursement Of Capital After Contract Duration</span></li>
												<li class="list-group-item">
													<a class="btn btn-primary" href="account/login.php" style="background-color:rgb(241,183,58);border-color:rgb(241,183,58);border-radius:20px;padding-right:20px;padding-left:20px;">Purchase plan</a>
												</li>
											</ul>
										</div>
									</div>
										<div class="col-md-4" style="padding-bottom:10px;">
										<div>
											<ul class="list-group text-center pricing-table1" style="/*box-shadow:0 2px 5.64px 0.36px rgba(0,0,0,.15), 0 3px 14.25px 0.75px rgba(0,0,0,.1);*/">
												<li class="list-group-item" style="background-color:rgb(16,56,111);">
													<h1 style="font-family:Montserrat, sans-serif;color:rgb(255,255,255);">ETHEREUM</h1>
													<p class="text-center" style="padding-top:20px;color:rgb(255,255,255);">$3000</p>
												</li>
												<li class="list-group-item"><span><strong>12% weekly Payout</strong></span></li>


												<li class="list-group-item"><span>5% Referral Bonus</span></li>

												<li class="list-group-item"><span>100% Reimbursement Of Capital After Contract Duration</span></li>
												<li class="list-group-item">
													<a class="btn btn-primary" href="account/login.php" style="background-color:rgb(241,183,58);border-color:rgb(241,183,58);border-radius:20px;padding-right:20px;padding-left:20px;">Purchase plan</a>
												</li>
											</ul>
										</div>
									</div>
										<div class="col-md-4" style="padding-bottom:10px;">
										<div>
											<ul class="list-group text-center pricing-table1" style="/*box-shadow:0 2px 5.64px 0.36px rgba(0,0,0,.15), 0 3px 14.25px 0.75px rgba(0,0,0,.1);*/">
												<li class="list-group-item" style="background-color:rgb(16,56,111);">
													<h1 style="font-family:Montserrat, sans-serif;color:rgb(255,255,255);">Litecoin</h1>
													<p class="text-center" style="padding-top:20px;color:rgb(255,255,255);">$2000</p>
												</li>
												<li class="list-group-item"><span><strong>10% weekly Payout</strong></span></li>


												<li class="list-group-item"><span>5% Referral Bonus</span></li>

												<li class="list-group-item"><span>100% Reimbursement Of Capital After Contract Duration</span></li>
												<li class="list-group-item">
													<a class="btn btn-primary" href="account/login.php" style="background-color:rgb(241,183,58);border-color:rgb(241,183,58);border-radius:20px;padding-right:20px;padding-left:20px;">Purchase plan</a>
												</li>
											</ul>
										</div>
									</div>
										<div class="col-md-4" style="padding-bottom:10px;">
										<div>
											<ul class="list-group text-center pricing-table1" style="/*box-shadow:0 2px 5.64px 0.36px rgba(0,0,0,.15), 0 3px 14.25px 0.75px rgba(0,0,0,.1);*/">
												<li class="list-group-item" style="background-color:rgb(16,56,111);">
													<h1 style="font-family:Montserrat, sans-serif;color:rgb(255,255,255);">SPECIAL PACKAGE</h1>
													<p class="text-center" style="padding-top:20px;color:rgb(255,255,255);">$20000-$100000</p>
												</li>
												<li class="list-group-item"><span><strong>150% Monthly Payout</strong></span></li>


												<li class="list-group-item"><span>10% Referral Bonus</span></li>

												<li class="list-group-item"><span>100% Reimbursement Of Capital After Contract Duration</span></li>
												<li class="list-group-item">
													<a class="btn btn-primary" href="account/login.php" style="background-color:rgb(241,183,58);border-color:rgb(241,183,58);border-radius:20px;padding-right:20px;padding-left:20px;">Purchase plan</a>
												</li>
											</ul>
										</div>
									</div>
											<div class="col-md-4" style="padding-bottom:10px;">
										<div>
											<ul class="list-group text-center pricing-table1" style="/*box-shadow:0 2px 5.64px 0.36px rgba(0,0,0,.15), 0 3px 14.25px 0.75px rgba(0,0,0,.1);*/">
												<li class="list-group-item" style="background-color:rgb(16,56,111);">
													<h1 style="font-family:Montserrat, sans-serif;color:rgb(255,255,255);">TRADER PACKAGE</h1>
													<p class="text-center" style="padding-top:20px;color:rgb(255,255,255);">$300-$5000</p>
												</li>
												<li class="list-group-item"><span><strong>15% weekly Payout</strong></span></li>


												<li class="list-group-item"><span>10% Referral Bonus</span></li>

												<li class="list-group-item"><span>100% Reimbursement Of Capital After Contract Duration</span></li>
												<li class="list-group-item">
													<a class="btn btn-primary" href="account/login.php" style="background-color:rgb(241,183,58);border-color:rgb(241,183,58);border-radius:20px;padding-right:20px;padding-left:20px;">Purchase plan</a>
												</li>
											</ul>
										</div>
									</div>
										<div class="col-md-4" style="padding-bottom:10px;">
										<div>
											<ul class="list-group text-center pricing-table1" style="/*box-shadow:0 2px 5.64px 0.36px rgba(0,0,0,.15), 0 3px 14.25px 0.75px rgba(0,0,0,.1);*/">
												<li class="list-group-item" style="background-color:rgb(16,56,111);">
													<h1 style="font-family:Montserrat, sans-serif;color:rgb(255,255,255);">TRADER PRO</h1>
													<p class="text-center" style="padding-top:20px;color:rgb(255,255,255);">$5000-$20000</p>
												</li>
												<li class="list-group-item"><span><strong>20% weekly Payout</strong></span></li>


												<li class="list-group-item"><span>10% Referral Bonus</span></li>

												<li class="list-group-item"><span>100% Reimbursement Of Capital After Contract Duration</span></li>
											<li class="list-group-item">
													<a class="btn btn-primary" href="account/login.php" style="background-color:rgb(241,183,58);border-color:rgb(241,183,58);border-radius:20px;padding-right:20px;padding-left:20px;">Purchase plan</a>

												</li>
											</ul>
										</div>
									</div>

									    </div>
        </section>
    <!-- END BLOG SECTION

    <!-- START PARTNER SECTION -->
        <section>
            <div class="container"><!-- STRART CONTAINER -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="heading text-center">
                            <h2>Our Partner</h2>
                            <p>Where to Buy Bitcoin.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="partner_slider owl-carousel owl-theme">
                            <div class="item">
                                <div class="partner_logo">
                                    <a href="http://www.blockchain.com/"><img src="assets/images/partner_logo1.jpg" alt="partner_logo1"/></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner_logo">
                                    <a href="http://www.gocoin.com/"><img src="assets/images/partner_logo2.jpg" alt="partner_logo2"/></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner_logo">
                                    <a href="http://www.coinbase.com/"><img src="assets/images/partner_logo3.jpg" alt="partner_logo3"/></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner_logo">
                                    <a href="http://www.bitflyer.com/"><img src="assets/images/partner_logo4.jpg" alt="partner_logo4"/></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner_logo">
                                    <a href="http://www.poloniex.com/"><img src="assets/images/partner_logo5.jpg" alt="partner_logo5"/></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner_logo">
                                    <a href="http://www.binance.com/"><img src="assets/images/partner_logo6.jpg" alt="partner_logo6"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- END CONTAINER-->
        </section>
        <!-- END PARTNER SECTION -->

        <!-- START CONTACT FORM SECTION -->
        <section id="footer" class="overlay background_bg" style="background-image:url({{asset('assets/images/contact_bg.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="heading text-center white">
                            <h2>Contact us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                        <div class="contact_form">

                            <form method="post" action="">

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" required placeholder="Name" id="first-name" class="form-control" name="name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" required placeholder="Email" id="email" class="form-control" name="email">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" required placeholder="Subject" id="subject" class="form-control" name="subject">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea required placeholder="Your Message" id="description" class="form-control" name="message" rows="6"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="actions">
                                            <input type="submit" title="Submit Your Message!" class="btn btn-default" name="submit" value="Send message">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div id="alert-msg" class="alert-msg"></div>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CONTACT FORM SECTION -->

        <!-- START FOOTER SECTION -->
        <footer>
            <div class="top_footer">
                <div class="container"><!-- STRART CONTAINER -->
                    <div class="row">
                        <div class="col-mg-4 col-md-4 col-sm-5 col-xs-12">
                            <div class="footer_logo">
                                <a href="index.html">
                                    <img src="assets/images/logo.png" alt="footer_logo" /></a>
                            </div>
                            <div class="site_info">
                                <ul class="list_none">
                                    <li><i class="fa fa-map-marker"></i><p>Luxemburg,Estonia</p></li>
                                    <li><i class="fa fa-phone"></i><a href="tel:123456789">+(352) 6721-678 </a></li>
                                    <li><i class="fa fa-clock"></i><a>Calling Hours 9:00AM To 8:00PM</a></li>
                                    <li><i class="fa fa-envelope"></i><a href="mailto:support@noduleinvestment.com">Support@noduleinvestment.com</a>	</li>
                                    <li><i class="fa fa-envelope"></i><a href="mailto:info@noduleinvestment.com">Info@noduleinvestment.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-mg-8 col-md-8 col-sm-7 col-xs-12">
                            <div class="newsletter_content">
                                <h3 class="footer_title">Newsletter</h3>
                                <p>By subscribing to our mailing list you will always be update with the latest news from us.</p>
                                <div class="newsletter_form">
                                    <form>
                                        <input type="email" required placeholder="Enter Your Email" class="form-control">
                                        <button type="submit" >Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- END CONTAINER-->
            </div>
            <div class="bottom_footer">
                <div class="container"><!-- STRART CONTAINER -->
                    <div class="row">
                        <div class="col-mg-6 col-md-6 col-sm-8 col-xs-12">
                            <div class="copyright_text">
                                <p class="footer-text">&copy; Copyright 2016-2019 by Nodle Investment. All Right Reserved </p>
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
                </div><!-- END CONTAINER-->
            </div>
        </footer>
        <!-- END FOOTER SECTION -->

        <a href="#" class="scrollup" style="display: none;"><i class="fa fa-angle-up"></i></a>

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
