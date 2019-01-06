<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Nodule Investment is an online minning Agencies for digital crypto currency investment." />
    <title>Login | Nodule Investment</title>
    <!-- plugins:css -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('account/sprites/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('accounts/vendors/iconfonts/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('accounts/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('accounts/vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('accounts/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('accounts/images/favicon.png')}}" />
    <script src="{{asset('js/loginAjax.js')}}"></script>
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
            <div class="row flex-grow">
                @yield('content')
                <div class="col-lg-6 login-half-bg d-flex flex-row">
                    <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2016-2019.  All rights reserved.</p>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('accounts/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('accounts/vendors/js/vendor.bundle.addons.js')}}"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="{{asset('accounts/js/off-canvas.js')}}"></script>
<script src="{{asset('accounts/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('accounts/js/misc.js')}}"></script>
<script src="{{asset('accounts/js/settings.js')}}"></script>
<script src="{{asset('accounts/js/todolist.js')}}"></script>
<!-- endinject -->
</body>
</html>
