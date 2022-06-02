<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="_token" content="{{csrf_token()}}" />
    <title>music-list</title>
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/typography.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/adminStyle.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/remixicon.css')}}">
</head>
<body class="sidebar-main-active right-column-fixed">


<div class="wrapper">
    @include('admin.menu')
    @include('admin.header')

    <main class="py-4">
        @yield('content')
    </main>
</div>
@include('admin.footer')
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('assets/js/countdown.min.js')}}"></script>
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/apexcharts.js')}}"></script>
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<script src="{{asset('assets/js/select2.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/smooth-scrollbar.js')}}"></script>
<script src="{{asset('assets/js/flatpickr.js')}}"></script>
<script src="{{asset('assets/js/style-customizer.js')}}"></script>
<script src="{{asset('assets/js/chart-custom.js')}}"></script>
<script src="{{asset('assets/js/music-player.js')}}"></script>
<script src="{{asset('assets/js/music-player-dashboard.js')}}"></script>
<script src="{{asset('assets/js/tab.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/accordion.js')}}"></script>
</body>
</html>
