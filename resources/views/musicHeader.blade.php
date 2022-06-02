<div class="iq-top-navbar">
    <div class="iq-search-bar">
        <form action="#" class="searchbox">
            <input type="text" class="text search-input" placeholder="Search music">
            <a class="search-link" href="#"><i class="ri-search-line text-black"></i></a>
        </form>
        <div class="line-height pt-3 mr-5 ">

            <a href="#" class="search-toggle iq-waves-effect iq-waves-effect-img d-flex align-items-center">
                <img src="{{asset('assets/image/user/11.png')}}" class="img-fluid rounded-circle" alt="user">
                <p class="name-popup">Name Surname</p>
                <img class="arrow-down" src="{{asset('assets/image/arrow-down.png')}}" alt="">
            </a>

            <div class="iq-sub-dropdown iq-user-dropdown">
                <div class="iq-card shadow-none m-0">
                    <div class="iq-card-body p-0 ">
                        <a href="my-account.html" class="iq-sub-card iq-bg-primary-hover">
                            <div class="media align-items-center">
                                <div class="rounded iq-card-icon iq-bg-primary">
                                    <img src="{{asset('assets/image/user/icon-account.svg')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <h6 class="mb-0 ">Account overview</h6>
                                </div>
                            </div>
                        </a>
                        <a href="order-history.html" class="iq-sub-card iq-bg-primary-hover">
                            <div class="media align-items-center">
                                <div class="rounded iq-card-icon iq-bg-primary">
                                    <img src="{{asset('assets/image/user/icon-history.svg')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <h6 class="mb-0 ">Order history</h6>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0)" onclick="$('#logout-form').submit();"
                           class="iq-sub-card iq-bg-primary-hover">
                            <div class="media align-items-center">
                                <div class="rounded iq-card-icon iq-bg-primary">
                                    <img src="{{asset('assets/image/user/log-out.svg')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <h6 class="mb-0 ">Logout</h6>
                                </div>
                            </div>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="iq-navbar-custom">--}}
{{--        <nav class="navbar navbar-expand-lg navbar-light p-0">--}}
{{--            <div class="iq-menu-bt d-flex align-items-center">--}}
{{--                <div class="wrapper-menu">--}}
{{--                    <div class="main-circle"><i class="las la-bars"></i></div>--}}
{{--                </div>--}}
{{--                <div class="iq-navbar-logo d-flex justify-content-between">--}}
{{--                    <a href="index.html" class="header-logo">--}}
{{--                        <img src="{{asset('assets/image/dashboard/logo/logo.svg')}}" class="img-fluid rounded-normal"--}}
{{--                             alt="">--}}
{{--                        <div class="pt-2 pl-2 logo-title">--}}
{{--                            <span class="text-primary text-uppercase">Royality</span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"--}}
{{--                    aria-controls="navbarSupportedContent" aria-label="Toggle navigation">--}}
{{--                <i class="ri-menu-3-line"></i>--}}
{{--            </button>--}}
{{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}

{{--                <ul class="list-unstyled iq-menu-top d-flex justify-content-between mb-0 p-0">--}}
{{--                    <li class="active"><a href="{{route('music')}}">In-progress</a></li>--}}
{{--                    <li style="pointer-events: none"><a href="complete.html">Complete</a></li>--}}
{{--                    <li style="pointer-events: none"><a href="inactive.html">Inactive</a></li>--}}
{{--                </ul>--}}
{{--                <ul class="navbar-nav ml-auto navbar-list">--}}
{{--                    <li class="nav-item nav-icon">--}}
{{--                    </li>--}}
{{--                    <li class="nav-item nav-icon search-content">--}}
{{--                        <a href="#" class="search-toggle iq-waves-effect text-gray rounded"><span--}}
{{--                                class="ripple rippleEffect "></span>--}}
{{--                            <i class="ri-search-line text-black"></i>--}}
{{--                        </a>--}}
{{--                        <form action="#" class="search-box p-0">--}}
{{--                            <input type="text" class="text search-input" placeholder="Type here to search...">--}}
{{--                            <a class="search-link" href="#"><i class="ri-search-line text-black"></i></a>--}}
{{--                            <a class="search-audio" href="#"><i class="las la-microphone text-black"></i></a>--}}
{{--                        </form>--}}
{{--                    </li>--}}
{{--                </ul>--}}


{{--            </div>--}}
{{--        </nav>--}}
{{--    </div>--}}

</div>
