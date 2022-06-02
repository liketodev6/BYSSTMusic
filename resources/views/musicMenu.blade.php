<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="#" class="header-logo">
            <img src="{{asset('assets/image/dashboard/logo/logo.svg')}}" style="pointer-events: none" class="img-fluid rounded-normal" alt="">
        </a>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="active">
                    <a href="{{route('music')}}" class="iq-waves-effect i-icon i-music"><span>Music</span></a>
                </li>
                <li>
                    <a href="{{route('musicRoyality')}}" class="iq-waves-effect i-icon i-royality"><span>Royality</span></a>
                </li>
                <li class="mb-5">
                    <a href="analytics.html" style="pointer-events: none" class="iq-waves-effect i-icon i-analytics"><span>Analytics</span></a>
                </li>
            </ul>
        </nav>
        <a href="{{route('uploadNow')}}" class="sidebar-link">  Upload Music  </a>
    </div>
</div>
