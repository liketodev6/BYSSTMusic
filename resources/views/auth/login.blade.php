<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BYSSTMusic</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/image/Group_1104.png')}}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/typography.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body>
<section class="sign-in-page">
    <div class="container">
        <div class="row justify-content-center align-items-center height-self-center">
            <div class="col-md-8 col-sm-12 col-12 align-self-center">
                <div class="sign-user_card ">
                    <div class="d-flex justify-content-center">
                        <div class="sign-user_logo">
                            <img src="{{asset('assets/image/login/logo_signIn.svg')}}" class=" img-fluid" alt="Logo">
                        </div>
                    </div>
                    <div class="sign-in-page-data">
                        <div class="sign-in-from w-100 pt-4 m-auto">
                            <h1 class="mb-3 text-center">Welcome back!</h1>
                            @if(count($errors) > 0)
                                <div class="p-1">
                                    @foreach($errors->all() as $error)
                                        <div class="alert alert-warning alert-danger fade show" role="alert">{{$error}} <button type="button" class="close"
                                                                                                                                data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button></div>
                                    @endforeach
                                </div>
                            @endif
                            <form class="mt-4" action="{{route('login')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail2">Email</label>
                                    <input type="email" name="email" class="form-control mb-0" id="exampleInputEmail2" placeholder="" >
                                </div>
                                <div class="form-group form-group-pass">
                                    <label for="exampleInputPassword2">Password</label>
                                    <input type="password" name="password" class="form-control mb-0" id="exampleInputPassword2" placeholder="" >
                                    <img class="eye-off" src="{{asset('assets/image/login/ionic-eye-off.svg')}}" alt="">
                                </div>
                                <h2 class="form-line"><span>OR</span></h2>
                                <div class="sign-google">
                                    <button type="button" class="btn btn-google mb-3 btn-icon">Continue with Google</button>
                                </div>
                                <div class="sign-linkdin">
                                    <button type="button" class="btn btn-linkdin mb-3 btn-icon">Continue with Linkedin</button>
                                </div>

                                <div class="d-flex mb-4 mt-2 justify-content-center link2">
                                    <a href="pages-recoverpw.html">Forgot your password?</a>
                                </div>
                                <div class="sign-info">
                                    <button type="submit" class="btn btn-green mb-2">Login</button>
                                    <span class="dark-color d-block line-height-2">Don't have an account? <a href="sign-up.html">Sign up</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="d-flex justify-content-center link3">
                            Don’t have the  <a href="sign-up.html" class="ml-2 bysst">  BYSST </a> Music account?
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign in END -->
        <!-- color-customizer -->
    </div>
</section>
<div class="iq-colorbox color-fix">
    <div class="clearfix color-picker">
        <h3 class="iq-font-black">Muzik Awesome Color</h3>
        <p>This color combo available inside whole template. You can change on your wish, Even you can create your own with limitless possibilities! </p>
        <ul class="iq-colorselect clearfix">
            <li class="color-1 iq-colormark" data-style="color-1"></li>
            <li class="color-2" data-style="iq-color-2"></li>
            <li class="color-3" data-style="iq-color-3"></li>
            <li class="color-4" data-style="iq-color-4"></li>
            <li class="color-5" data-style="iq-color-5"></li>
            <li class="color-6" data-style="iq-color-6"></li>
            <li class="color-7" data-style="iq-color-7"></li>
            <li class="color-8" data-style="iq-color-8"></li>
            <li class="color-9" data-style="iq-color-9"></li>
            <li class="color-10" data-style="iq-color-10"></li>
            <li class="color-11" data-style="iq-color-11"></li>
            <li class="color-12" data-style="iq-color-12"></li>
            <li class="color-13" data-style="iq-color-13"></li>
            <li class="color-14" data-style="iq-color-14"></li>
            <li class="color-15" data-style="iq-color-15"></li>
            <li class="color-16" data-style="iq-color-16"></li>
            <li class="color-17" data-style="iq-color-17"></li>
            <li class="color-18" data-style="iq-color-18"></li>
            <li class="color-19" data-style="iq-color-19"></li>
            <li class="color-20" data-style="iq-color-20"></li>
        </ul>
        <a target="_blank" class="btn btn-primary d-block mt-3" href="https://themeforest.net/item/muzik-music-streaming-admin-template/27967164">Purchase Now</a>
    </div>
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
<script src="{{asset('assets/js/style-customizer.js')}}"></script>
<script src="{{asset('assets/js/chart-custom.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>
