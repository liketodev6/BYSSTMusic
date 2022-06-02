@extends('layouts.appMusic')

@section('content')
    <div id="content-page" class="content-page">
        <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="list-unstyled iq-menu-top d-flex justify-content-between mb-0 p-0">
                        <li class="active"><a href="{{route('music')}}">In-progress</a></li>
                        <li style="pointer-events: none"><a href="complete.html">Complete</a></li>
                        <li style="pointer-events: none"><a href="inactive.html">Inactive</a></li>
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

        <div class="container-fluid">
            <div class="row row-eq-height">
                <div style="margin-top: 10px !important;" class="inProgress-blocks">
                    @foreach($musics['ringbacktone'] as $music)
                        <div class="inProgress-block">
                            <div class="settled">
                                Settled
                            </div>
                            <div class="singer-info">
                                <div class="singer-img">
                                    <img src="{{asset('assets/image/music/song-pic.svg')}}" alt="">
                                </div>
                                <div class="song-name">
                                    <div class="page-title--2">
                                        {{$music->originalName}}
                                    </div>
                                    <div class="singer-name page-title--3"> {{$music->artistName}}</div>
                                </div>

                            </div>
                            <div class="song-info">
                                <div class="song-info--item">
                                    <p class="format">Format: </p>
                                    <span>.mp3</span>
                                </div>
                                <div class="song-info--item">
                                    <p class="label-name">Label Name: </p>
                                    <span>song1</span>
                                </div>
                                <div class="song-info--item">
                                    <p class="publisher-name">Publisher name: </p>
                                    <span>Jessica</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row row-eq-height">
                <div style="margin-top: 148px !important;" class="inProgress-blocks">
                    @foreach($musics['youtubeContent'] as $music)
                        <div class="inProgress-block">
                            <div class="settled">
                                Settled
                            </div>
                            <div class="singer-info">
                                <div class="singer-img">
                                    <img src="{{asset('assets/image/music/song-pic.svg')}}" alt="">
                                </div>
                                <div class="song-name">
                                    <div class="page-title--2">
                                        {{$music->originalName}}
                                    </div>
                                    <div class="singer-name page-title--3"> {{$music->artistName}}</div>
                                </div>

                            </div>
                            <div class="song-info">
                                <div class="song-info--item">
                                    <p class="format">Format: </p>
                                    <span>.mp3</span>
                                </div>
                                <div class="song-info--item">
                                    <p class="label-name">Label Name: </p>
                                    <span>{{$music->labelName}}</span>
                                </div>
                                <div class="song-info--item">
                                    <p class="publisher-name">Publisher name: </p>
                                    <span>{{$music->publisher}}</span>
                                </div>
                                <div class="song-info--item">
                                    <p class="catalog:">Catalog: </p>
                                    <span>example12</span>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <!-- Wrapper END -->
    <!-- Footer -->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="player row">
                        <div class="details col-6 col-sm-4 col-md-4 col-lg-4">
                            <div class="now-playing"></div>
                            <div class="track-art"></div>
                            <div>
                                <div class="track-name">Pop Smoke</div>
                                <div class="track-artist">Cascada</div>
                            </div>
                        </div>
                        <div class="slider_container slider_music col-sm-5 col-md-4 col-lg-4">
                            <div class="current-time">00:00</div>
                            <input type="range" min="1" max="100" value="0" class="seek_slider" onchange="seekTo()">
                            <div class="total-duration">00:00</div>
                        </div>
                        <div class="buttons col-6  col-sm-3 col-md-2  col-lg-2">
                            <div class="prev-track" onclick="prevTrack()"><i class="fa fa-step-backward fa-2x"></i>
                            </div>
                            <div class="playpause-track" onclick="playpauseTrack()"><i
                                    class="fa fa-play-circle fa-3x"></i></div>
                            <div class="next-track" onclick="nextTrack()"><i class="fa fa-step-forward fa-2x"></i></div>
                        </div>
                        <div class="slider_container sound col-sm-6 col-md-2  col-lg-2">
                            <i class="fa fa-volume-down"></i>
                            <input type="range" min="1" max="100" value="99" class="volume_slider"
                                   onchange="setVolume()">
                            <i class="fa fa-volume-up"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END -->


    <!-- modal start-->
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
@endsection
