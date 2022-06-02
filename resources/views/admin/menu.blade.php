<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="#" class="header-logo">
            <img src="{{asset('/assets/image/logo/logo.svg')}}" class="img-fluid rounded-normal" alt="">
        </a>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="active">
                    <a href="{{route('music.list')}}" class="iq-waves-effect i-icon i-music"><span>Music</span></a>
                </li>
                <li class="">
                    <a href="{{route('content.id')}}" class="iq-waves-effect i-icon i-music"><span>Content ID</span></a>
                </li>
                <li>
                    <a href="{{route('royality')}}" class="iq-waves-effect i-icon i-royality"><span>Royality</span></a>
                </li>
                <li>
                    <a href="{{route('users')}}" class="iq-waves-effect i-icon i-users"><span>Users</span></a>
                </li>
                <li style="pointer-events: none;">
                    <a href="admin-revenue.html" class="iq-waves-effect i-icon i-revenue"><span>Revenue</span></a>
                </li>
                <li style="display: flex;align-items: center;pointer-events: none">
                    <img src="{{asset('assets/image/page-img/ringbacktone.svg')}}"  class="ringbacktone_img" alt="">
                    <a  href="admin-ringbacktone.html"  style="padding: 20px 18px;" class="iq-waves-effect i-icon i-ringbacktone"><span>Ringbacktone</span></a>
                </li>

                <li style="pointer-events: none;">
                    <a href="withdraw-request.html" class="iq-waves-effect i-icon i-request"><span>Withdraw Request</span></a>
                </li>
                <li style="pointer-events: none" class="mb-5">
                    <a href="transfer-list.html" class="iq-waves-effect i-icon i-transfer"><span>Transfer List</span></a>
                </li>

            </ul>
        </nav>
        <a href="#" class="add__user-btn page-title--3">  Upload Music  </a>
    </div>
</div>
