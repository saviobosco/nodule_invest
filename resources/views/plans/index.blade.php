@extends('layouts.home')

@section('content')
    <div class="carousel slide" data-ride="carousel" id="carousel-1" style="height:300px;width:100%;">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="jumbotron hero-nature carousel-hero" style="height:300px;background-image:url(assets/images/banner_11.jpg);"></div>
            </div>
        </div>
    </div>

    <div style="margin-top:-200px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 style="font-family:Montserrat, sans-serif;color:rgb(255,255,255);"><strong>Investment
                            plans</strong><br></h2>

                    <p style="font-family:'Open Sans', sans-serif;color:rgb(255,255,255);">Available</p>
                </div>
                <div class="col-md-6 text-center">
                    <iframe width="300" height="200" allowfullscreen="" frameborder="0"
                            src="https://www.youtube.com/embed/GmOzih6I1zs?showinfo=0&amp;rel=0" id="headervideo2"
                            style="padding-bottom:50px;"></iframe>
                </div>

            </div>
        </div>
        <div class="row" style="padding-top:100px;padding-bottom:80px;margin-right:0px;margin-left:0px;">
            <div class="col">
                <h1 class="heading text-center" style="padding-bottom:20px;font-family:Montserrat, sans-serif;">
                    <strong>Investment Plans Available today</strong></h1>

                <p class="text-center" style="padding-right:50px;padding-left:50px;">Your state-of-the-art mining
                    hardware is already running! Just choose your favorite cryptocurrency or mining algorithm and
                    get started in minutes! Nodule Investment uses an advanced turn-key solution that ensures our
                    users are always earning. Our highly skilled team ensures our customers are always profiting
                    even when mining is not profitable by trading already mined cryptocurrency during high
                    difficulty periods. Mining profitably has never been this easy! <br></p>
            </div>
        </div>
        <div class="row" style="margin-right:0px;margin-left:0px;width:100%;">


            <div class="col-md-4" style="padding-bottom:10px;">
                <div>
                    <ul class="list-group text-center pricing-table1"
                        style="/*box-shadow:0 2px 5.64px 0.36px rgba(0,0,0,.15), 0 3px 14.25px 0.75px rgba(0,0,0,.1);*/">
                        <li class="list-group-item" style="background-color:rgb(16,56,111);">
                            <h1 style="font-family:Montserrat, sans-serif;color:rgb(255,255,255);">GOLD</h1>

                            <p class="text-center" style="padding-top:20px;color:rgb(255,255,255);">$5000-$10000</p>
                        </li>
                        <li class="list-group-item"><span><strong>5% weekly Payout</strong></span></li>

                        <li class="list-group-item"><span>10% Referral Bonus</span></li>

                        <li class="list-group-item">
                            <span>100% Reimbursement Of Capital After Contract Duration</span></li>
                        <li class="list-group-item">
                            <a class="btn btn-primary" href="account/login.html"
                               style="background-color:rgb(241,183,58);border-color:rgb(241,183,58);border-radius:20px;padding-right:20px;padding-left:20px;">Purchase
                                plan</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4" style="padding-bottom:10px;">
                <div>
                    <ul class="list-group text-center pricing-table1"
                        style="/*box-shadow:0 2px 5.64px 0.36px rgba(0,0,0,.15), 0 3px 14.25px 0.75px rgba(0,0,0,.1);*/">
                        <li class="list-group-item" style="background-color:rgb(16,56,111);">
                            <h1 style="font-family:Montserrat, sans-serif;color:rgb(255,255,255);">SILVER</h1>

                            <p class="text-center" style="padding-top:20px;color:rgb(255,255,255);">$2000-$5000</p>
                        </li>
                        <li class="list-group-item"><span><strong>12% weekly Payout</strong></span></li>


                        <li class="list-group-item"><span>5% Referral Bonus</span></li>

                        <li class="list-group-item">
                            <span>100% Reimbursement Of Capital After Contract Duration</span></li>
                        <li class="list-group-item">
                            <a class="btn btn-primary" href="account/login.html"
                               style="background-color:rgb(241,183,58);border-color:rgb(241,183,58);border-radius:20px;padding-right:20px;padding-left:20px;">Purchase
                                plan</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4" style="padding-bottom:10px;">
                <div>
                    <ul class="list-group text-center pricing-table1"
                        style="/*box-shadow:0 2px 5.64px 0.36px rgba(0,0,0,.15), 0 3px 14.25px 0.75px rgba(0,0,0,.1);*/">
                        <li class="list-group-item" style="background-color:rgb(16,56,111);">
                            <h1 style="font-family:Montserrat, sans-serif;color:rgb(255,255,255);">BRONZE</h1>

                            <p class="text-center" style="padding-top:20px;color:rgb(255,255,255);">500-$2000</p>
                        </li>
                        <li class="list-group-item"><span><strong>10% weekly Payout</strong></span></li>


                        <li class="list-group-item"><span>5% Referral Bonus</span></li>

                        <li class="list-group-item">
                            <span>100% Reimbursement Of Capital After Contract Duration</span></li>
                        <li class="list-group-item">
                            <a class="btn btn-primary" href="account/login.html"
                               style="background-color:rgb(241,183,58);border-color:rgb(241,183,58);border-radius:20px;padding-right:20px;padding-left:20px;">Purchase
                                plan</a>
                        </li>
                    </ul>
                    <!--	</div>
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
                            </ul>-->
                </div>
            </div>
            <div class="col-md-4" style="padding-bottom:10px;">
                <div>
                    <ul class="list-group text-center pricing-table1"
                        style="/*box-shadow:0 2px 5.64px 0.36px rgba(0,0,0,.15), 0 3px 14.25px 0.75px rgba(0,0,0,.1);*/">
                        <li class="list-group-item" style="background-color:rgb(16,56,111);">
                            <h1 style="font-family:Montserrat, sans-serif;color:rgb(255,255,255);">PARTNER
                                PACKAGE</h1>

                            <p class="text-center" style="padding-top:20px;color:rgb(255,255,255);">
                                $30000-$50000</p>
                        </li>
                        <li class="list-group-item"><span><strong>15% weekly Payout</strong></span></li>


                        <li class="list-group-item"><span>10% Referral Bonus</span></li>

                        <li class="list-group-item">
                            <span>100% Reimbursement Of Capital After Contract Duration</span></li>
                        <li class="list-group-item">
                            <a class="btn btn-primary" href="account/login.html"
                               style="background-color:rgb(241,183,58);border-color:rgb(241,183,58);border-radius:20px;padding-right:20px;padding-left:20px;">Purchase
                                plan</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4" style="padding-bottom:10px;">
                <div>
                    <ul class="list-group text-center pricing-table1"
                        style="/*box-shadow:0 2px 5.64px 0.36px rgba(0,0,0,.15), 0 3px 14.25px 0.75px rgba(0,0,0,.1);*/">
                        <li class="list-group-item" style="background-color:rgb(16,56,111);">
                            <h1 style="font-family:Montserrat, sans-serif;color:rgb(255,255,255);">PARTNER
                                PACKAGE</h1>

                            <p class="text-center" style="padding-top:20px;color:rgb(255,255,255);">
                                $10000-$30000</p>
                        </li>
                        <li class="list-group-item"><span><strong>20% weekly Payout</strong></span></li>


                        <li class="list-group-item"><span>10% Referral Bonus</span></li>

                        <li class="list-group-item">
                            <span>100% Reimbursement Of Capital After Contract Duration</span></li>
                        <li class="list-group-item">
                            <a class="btn btn-primary" href="account/login.html"
                               style="background-color:rgb(241,183,58);border-color:rgb(241,183,58);border-radius:20px;padding-right:20px;padding-left:20px;">Purchase
                                plan</a>

                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="row" style="margin-bottom:-30px;">
            <div class="col">
                <div>
                    <!-- TradingView Widget BEGIN -->
                    <!--- <span id="tradingview-copyright"><a ref="nofollow noopener" target="_blank" href="http://www.tradingview.com" style="color: rgb(173, 174, 176); font-family: &quot;Trebuchet MS&quot;, Tahoma, Arial, sans-serif; font-size: 13px;">hjjhj by <span style="color: #3BB3E4">jhk</span></a></span>--->
                    <script src="s3.tradingview.com/external-embedding/embed-widget-tickers.html">{
                            "symbols"
                        :
                            [
                                {
                                    "proName": "BITFINEX:BTCUSD",
                                    "title": "BTC/USD"
                                },
                                {
                                    "proName": "BITFINEX:ETHUSD",
                                    "title": "ETH/USD"
                                },
                                {
                                    "description": "ZEC/USD",
                                    "proName": "BITFINEX:ZECUSD"
                                },
                                {
                                    "description": "LTC/USD",
                                    "proName": "BITFINEX:LTCUSD"
                                },
                                {
                                    "description": "BTG/USD",
                                    "proName": "BITFINEX:BTGUSD"
                                },
                                {
                                    "description": "XMR/USD",
                                    "proName": "BITFINEX:XMRUSD"
                                }
                            ],
                                    "locale"
                        :
                            "en"
                        }</script>
                    <!-- TradingView Widget END -->
                </div>
            </div>
        </div>

        <!-- END FOOTER SECTION -->

        <a href="#" class="scrollup" style="display: none;"><i class="fa fa-angle-up"></i></a>
    </div>
@endsection