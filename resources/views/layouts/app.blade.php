<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Nodule Investment') }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('accounts/vendors/iconfonts/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('accounts/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('accounts/vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('accounts/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('accounts/images/favicon.html')}}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
</head>
<body>
    <div class="container-scroller">
        <!-- header here -->
        @include('element.loggedInHeader')
        <div class="container-fluid page-body-wrapper">
            <!-- sidebar -->
            @include('element.sidebar')
            <div class="main-panel">
                @yield('content')
            </div>
        </div>

    </div>
    <!-- plugins:js -->
    <script src="{{asset('accounts/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('accounts/vendors/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('accounts/js/off-canvas.js')}}"></script>
    <script src="{{asset('accounts/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('accounts/js/misc.js')}}"></script>
    <script src="{{asset('accounts/js/settings.js')}}"></script>
    <script src="{{asset('accounts/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('accounts/js/dashboard.js')}}"></script>
    <!-- End custom js for this page-->
</body>
</html>
