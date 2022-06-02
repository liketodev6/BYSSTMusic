<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="_token" content="{{csrf_token()}}" />
    <title>BYSSTMusic</title>
    <link rel="shortcut icon" href="{{asset('assets/image/Group_1104.png')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/typography.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link href="{{asset('assets/fullcalendar/core/main.css')}}" rel='stylesheet'/>
    <link href="{{asset('assets/fullcalendar/daygrid/main.css')}}" rel='stylesheet'/>
    <link href="{{asset('assets/fullcalendar/timegrid/main.css')}}" rel='stylesheet'/>
    <link href="{{asset('assets/fullcalendar/list/main.css')}}" rel='stylesheet'/>
    <link rel="stylesheet" href="{{asset('assets/css/flatpickr.min.css')}}">
</head>
<body class="sidebar-main-active right-column-fixed">

<div class="wrapper">
    @include('musicMenu')
    @include('musicHeader')
    @yield('content')
</div>
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

<script src="{{asset('assets/fullcalendar/core/main.js')}}"></script>
<script src="{{asset('assets/llcalendar/daygrid/main.js')}}"></script>
<script src="{{asset('assets/llcalendar/timegrid/main.js')}}"></script>
<script src="{{asset('assets/llcalendar/list/main.js')}}"></script>
<script src="{{asset('assets/js/flatpickr.js')}}"></script>
<script src="{{asset('assets/js/style-customizer.js')}}"></script>
<script src="{{asset('assets/js/chart-custom.js')}}"></script>
<script src="{{asset('assets/js/music-player.js')}}"></script>
<script src="{{asset('assets/js/music-player-dashboard.js')}}"></script>
<script src="{{asset('assets/js/tab.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="https://kit.fontawesome.com/8560705a3b.js" crossorigin="anonymous"></script>

<?php if(Illuminate\Support\Facades\Route::current()->getName() == 'uploadNow' || Illuminate\Support\Facades\Route::current()->getName() == 'ringbacktone' || Illuminate\Support\Facades\Route::current()->getName() == 'youtubecontent') : ?>
<script src="{{asset('assets/js/mainCustom.js')}}"
        type="text/javascript"></script>
<?php endif; ?>

</body>
</html>
