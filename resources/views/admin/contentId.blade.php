@extends('admin.layouts.app')
@section('content')
    <div id="success-popup" class="modal">
        <div class="modal-content remove-content">
            <div class="remove-info">
                <div class="remove-content__icon">
                </div>
                <div class="remove-content__title monthly_title" id="message">

                </div>
            </div>
        </div>
    </div>
    <div class="iq-top-navbar">
        <div class="iq-search-bar">
            <form action="#" class="searchbox">
                <input type="text" class="text search-input text-white" placeholder="Search music">
                <a class="search-link" href="#"><i class="ri-search-line text-black"></i></a>
            </form>
            <div class="line-height pt-3 mr-5 ">

                <a href="#" class="search-toggle iq-waves-effect iq-waves-effect-img d-flex align-items-center">
                    <img src="{{asset('assets/image/user/11.png')}}" class="img-fluid rounded-circle" alt="user">
                    <p class="name-popup">Name Surname</p>
                </a>

                <div class="iq-sub-dropdown iq-user-dropdown">
                    <div class="iq-card shadow-none m-0">
                        <div class="iq-card-body p-0 ">
                            <a href="admin-my-account.html" class="iq-sub-card iq-bg-primary-hover">
                                <div class="media align-items-center">
                                    <div class="rounded iq-card-icon iq-bg-primary">
                                        <img src="{{asset('assets/image/user/icon-account.svg')}}" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-0 ">Account overview</h6>
                                    </div>
                                </div>
                            </a>
                            <a href="../HTML/html_front/order-history.html" class="iq-sub-card iq-bg-primary-hover">
                                <div class="media align-items-center">
                                    <div class="rounded iq-card-icon iq-bg-primary">
                                        <img src="{{asset('assets/image/user/icon-history.svg')}}" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-0 ">Order history</h6>
                                    </div>
                                </div>
                            </a>
                            <a href="../sign-in.html" class="iq-sub-card iq-bg-primary-hover">
                                <div class="media align-items-center">
                                    <div class="rounded iq-card-icon iq-bg-primary">
                                        <img src="{{asset('assets/image/user/log-out.svg')}}" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-0 ">Logout</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="iq-menu-bt d-flex align-items-center">
                    <div class="wrapper-menu">
                        <div class="main-circle"><i class="las la-bars"></i></div>
                    </div>
                    <div class="iq-navbar-logo d-flex justify-content-between">
                        <a href="index.html" class="header-logo">
                            <img src="{{asset('assets/image/dashboard/logo/logo.svg')}}"
                                 class="img-fluid rounded-normal" alt="">
                            <div class="pt-2 pl-2 logo-title">
                                <span class="text-primary text-uppercase">Royality</span>
                            </div>
                        </a>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul id="tabs" class="list-unstyled iq-menu-top d-flex justify-content-between mb-0 p-0">
                        <li class="active"><a href="javascript:void(0)" onclick="tabs($(this), 'in-progress')"
                                              class="tablinks">In-progress</a></li>
                        <li><a href="javascript:void(0)" onclick="tabs($(this), 'complete')"
                               class="tablinks">Complete</a></li>
                        <li><a href="javascript:void(0)" onclick="tabs($(this), 'inactive')"
                               class="tablinks">Inactive</a></li>
                    </ul>
                    <ul class="navbar-nav ml-auto navbar-list">
                        <li class="nav-item nav-icon">
                        </li>
                        <li class="nav-item nav-icon search-content">
                            <a href="#" class="search-toggle iq-waves-effect text-gray rounded"><span
                                    class="ripple rippleEffect "></span>
                                <i class="ri-search-line text-black"></i>
                            </a>
                            <form action="#" class="search-box p-0">
                                <input type="text" class="text search-input" placeholder="Type here to search...">
                                <a class="search-link" href="#"><i class="ri-search-line text-black"></i></a>
                                <a class="search-audio" href="#"><i class="las la-microphone text-black"></i></a>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

    </div>


    <div id="content-page-in-progress" class="content-page">
        <div class="container-fluid">
            <div class="row row-eq-height">
                <div class="inProgress-blocks">
{{--                    {{dd($songs)}}--}}
                    @if(count($songs) > 0)
                        @foreach($songs as $key => $song)
                            <div class="inProgress-block" id="inProgress-block" data-line="{{$key}}"
                                 data-id="{{$song->id}}">
                                <div class="settled">
                                    Settled
                                </div>
                                <div class="singer-info">
                                    <div class="singer-img">
                                        <img src="{{asset('assets/image/music/song-pic.svg')}}" alt="">
                                    </div>
                                    <div class="song-name">
                                        <div class="page-title--2">
                                            {{$song->songTitle}}
                                        </div>
                                        <div class="singer-name page-title--3">{{$song->labelName}}</div>
                                    </div>

                                </div>
                                <div class="song-info">
                                    <div class="song-info--item">
                                        <p class="format">Format: </p>
                                        <span>.{{explode('.', $song->originalName)[1]}}</span>
                                    </div>
                                    <div class="song-info--item">
                                        <p class="publisher-name">Publisher name: </p>
                                        <span>{{$song->publisher}}</span>
                                    </div>
                                </div>
                                <div class="song_edit">
                                    <a class="see_data" href="{{route('album.atwork', ['song_id' => $song->id, 'which' => 'contentId'])}}"
                                    >See MetaData
                                    </a>
                                    <div class="song_edit_block2">
                                        <a href="javascript:void(0)" data-modal="#remove"
                                           onclick="$('#remove form input[name=id]').val($(this).parents().find('#inProgress-block').attr('data-id'))">
                                            <img src="{{asset('assets/image/user/icon-delet.svg')}}" alt="">
                                        </a>
                                        <a href="javascript:void(0)" onclick="approveSong($(this).attr('data-id'))"
                                           data-id="{{$song->id}}">
                                            <img src="{{asset('assets/image/user/icon-success.svg')}}" alt="">
                                        </a>
                                        <img src="{{asset('assets/image/user/icon-error.svg')}}" alt="">
                                        <form id="approve-song" action="{{route('approve.song')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="approve-song" value>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div id="content-page-complete" style="display: none" class="content-page">
        <div class="block-3 users-tab" id="users-tab">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <table class="table users-table" cellspacing="0">
                        <thead>
                        <tr class="page-title--2">
                            <th class="page-title--2">#</th>
                            <th class="page-title--2">Cover</th>
                            <th class="page-title--2">Track Name</th>
                            <th class="page-title--2">Duration</th>
                            <th class="page-title--2">Size</th>
                            <th class="page-title--2">Upload Date</th>
                            <th class="page-title--2">Smartlink</th>
                        </tr>
                        </thead>
                        <tbody>

                        @if(count($songs) > 0)
                            @foreach($songs as $key => $song)
                                @if($song->status == 'complete')
                                    <tr class="green-bg" data-id="{{$song->id}}">
                                        <td class="block-1--description">{{$key+1}}</td>
                                        <td class="block-1--description">
                                            <img class="photo-track-tab"
                                                 src="{{asset('assets/image/music/song-pic.svg')}}"
                                                 alt="">
                                        </td>
                                        <td class="block-1--description">{{$song->originalName}}</td>
                                        <td class="block-1--description">{{$song->file_duration}}</td>
                                        <td class="block-1--description">{{$song->file_size}}</td>
                                        <td class="block-1--description">{{$song->created_at}}</td>
                                        <td class="block-1--description">
                                            @if($song->smart_link)
                                                <a href="{{$song->smart_link}}">{{$song->smart_link}}</a>
                                            @else
                                                <input id="smart_link" class="smart_link" oninput="addSmartLink($(this))"/>
                                            @endif
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <div id="modal-regards" class="modal">
        <div class="modal-content">
            <button type="button" data-modal="#modal-regards" class="modal-close">&times;</button>
            <form class="modal-form" action="" method="">
                <div class="modal-form--title page-title">
                    Withdrawal
                </div>
                <div class="modal-form--description page-title--2 mt-1 mb-3">
                    Amount to withdraw
                </div>
                <div class="form-group">
                    <label for="bankAccount" class="page-title--2">Country of bank account:</label>
                    <select class="form-control" id="bankAccount">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="withdrawAmount" class="page-title--2">Withdraw amount</label>
                    <input type="number" class="form-control" id="withdrawAmount" name="withdrawAmount">
                </div>
                <div class="modal-form--description page-title--2 mt-1 mb-3">
                    Bank information
                </div>
                <div class="form-group">
                    <label for="bankName" class="page-title--2">Bank name</label>
                    <input type="text" class="form-control" id="bankName" name="bankName">
                </div>
                <div class="form-group">
                    <label for="routingNumber" class="page-title--2">Routing number</label>
                    <input type="number" class="form-control" id="routingNumber" name="routingNumber">
                </div>
                <div class="form-group">
                    <label for="accountNumber" class="page-title--2">Account number</label>
                    <input type="number" class="form-control" id="accountNumber" name="accountNumber">
                </div>
                <button type="submit" class="modal-btn mt-3">Withdraw</button>
            </form>
        </div>
    </div>
    <div id="remove" class="modal">
        <div class="modal-content remove-content">
            <button type="button" data-modal="#modal-remove" class="modal-close">&times;</button>
            <div class="remove-info">
                <div class="remove-content__icon">
                    <img src="{{asset('assets/image/page-img/remove.svg')}}" alt="">
                </div>
                <div class="remove-content__title monthly_title">
                    Are you sure?
                </div>
                <div class="remove-content__description">
                    Do you really want to delete this Song?
                </div>
                <div class="remove-form">
                    <button class="remove-cancel" onclick="$('#remove').removeClass('is-active')">Cancel</button>
                    <button class="remove-button" onclick="$('#remove-form').submit()">Delete</button>
                </div>
                <form class="remove-form" id="remove-form" action="{{route('delete.content.id')}}" method="POST">
                    <input type="hidden" name="id" value>
                    @csrf
                    @method('delete')
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">

        function tabs(_this, tab) {
            if (tab == 'in-progress') {
                $('#content-page-in-progress').css('display', 'block');
                $('#content-page-complete').css('display', 'none');
            } else if (tab == 'complete') {
                $('#content-page-in-progress').css('display', 'none');
                $('#content-page-complete').css('display', 'block');
            } else {
                $('#content-page-in-progress').css('display', 'none');
                $('#content-page-complete').css('display', 'none');
            }
            let tabs = $('#tabs li a');
            $.each(tabs, function () {
                $(this).parent().removeClass('active');
            });
            $(_this).parent().addClass('active');
        }

        function approveSong(id) {
            jQuery.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                url: "{{ url(getenv('APP_URL') . '/approve-content-id') }}",
                method: 'post',
                data: {
                    id: id
                },
                success: function (resp) {
                    if (resp.message == "ok") {
                        $("#message").text('Song approved').css('color', '#10BA80');
                    } else {
                        $("#message").text('Approving error...').css('color', '#FF0000');
                    }
                    $("#success-popup").addClass('is-active');
                    setTimeout(function () {
                        $("#success-popup").removeClass('is-active');
                        location.reload();
                    }, 2000);
                }
            });
        }

        function addSmartLink(el) {
            jQuery.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                url: "{{ url(getenv('APP_URL') . '/add-smart-link-content-id') }}",
                method: 'post',
                data: {
                    id: $(el).closest('tr').attr('data-id'),
                    link: $('#smart_link').val()
                },
                success: function (resp) {
                    if (resp.message == "ok") {
                        $("#message").text('Link saved').css('color', '#10BA80');
                    } else {
                        $("#message").text('Adding error...').css('color', '#FF0000');
                    }
                    $("#success-popup").addClass('is-active');
                    setTimeout(function () {
                        $("#success-popup").removeClass('is-active');
                        location.reload();
                    }, 2000);
                }
            });
        }
    </script>
@endsection
