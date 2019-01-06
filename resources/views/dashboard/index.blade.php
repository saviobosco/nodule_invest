@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Dashboard Nodule Investment
        </h3>
    </div>
    <div class="row">
        <div class="content-wrapper">
            <h3 class="font-weight-normal mb-4">Account ID:&nbsp;</br>&nbsp;Referral Bonus:&rarr;$0&nbsp;<button class="btn btn-info" onclick="javascript:location.assign('cashout_ref5ee8.html?ref_id=')">Cashout</button></h3>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="alert alert-success alert-dismissible " style="background-color:#363 !important; color: #fff">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4> Message!</h4>
            Welcome to Nodule Investment. Please ensure you are logged into the correct URL. Secure your account by constantly changing your password. Make sure you check your wallet address before you request a payout.
        </div>

        <div class="col-lg-12">
            <div class="alert alert-success alert-dismissible " style="background-color:#ececec !important; color: #090909">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>Notice!</h4>

                <b>Mining Pack Status:</b>&nbsp;<button class='btn btn-danger'>INACTIVE</button></b><br/><br/>
                <!--<b>Trading Pack Status:</b>&nbsp;</b>-->
            </div>

            <div class="row grid-margin">
                <div class="col-12">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fa fa-user mr-2"></i>
                                        Total Funds
                                    </p>
                                    <h2>$0</h2>
                                    <label class="badge badge-outline-success badge-pill">Deposited</label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                                        Total Payout
                                    </p>
                                    <h2>$0</h2>
                                    <label class="badge badge-outline-danger badge-pill">Recieved</label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
                                        Referral Bonus
                                    </p>
                                    <h2>$0</h2>
                                    <label class="badge badge-outline-success badge-pill">Recieved</label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-check-circle mr-2"></i>
                                        BITCOIN
                                    </p>
                                    <h2>0</h2>
                                    <label class="badge badge-outline-success badge-pill">MINING</label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-chart-line mr-2"></i>
                                        ETHEREUM
                                    </p>
                                    <h2>0</h2>
                                    <label class="badge badge-outline-success badge-pill">MINING</label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-circle-notch mr-2"></i>
                                        LITECOIN
                                    </p>
                                    <h2>0</h2>
                                    <label class="badge badge-outline-danger badge-pill">MINING</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <i class="fas fa-gift"></i>
                                Noduleinvestment.com
                            </h4>
                            <canvas id="orders-chart"></canvas>
                            <div id="orders-chart-legend" class="orders-chart-legend"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <i class="fas fa-calendar-alt"></i>
                                Calendar
                            </h4>
                            <div id="inline-datepicker-example" class="datepicker"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <i class="fas fa-table"></i>
                                BITCOIN LITECOIN ETHEREUM MINING INVESTMENT ACCOUNT
                            </h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>ID Code</th>
                                        <th>Amount Deposited</th>
                                        <th>Mining Plan</th>
                                        <th>Duration</th>
                                        <th>Profit</th>
                                        <th>Date Deposited</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr><td colspan="7"><center>No Data Found</center></td></tr>                        </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2016-2019 . All rights reserved.</span>

                    </div>
                </footer>
                <!-- partial -->
        </div>
    </div>
</div>
@endsection