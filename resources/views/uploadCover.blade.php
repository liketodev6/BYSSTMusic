@extends('layouts.appMusic')

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
    <div>

        <form id="song-form" action="{{route('upload.song')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="cover-tab">
                {{--                @if(count($errors) > 0)--}}
                {{--                    --}}{{--                    {{$data = json_decode($errors, true)}}--}}
                {{--                    {{dd(json_decode($errors, true)['release_title'])}}--}}
                {{--                    <div class="p-1">--}}
                {{--                        @foreach($errors->all() as $error)--}}
                {{--                            <div class="alert alert-warning alert-danger fade show" role="alert">{{$error}}--}}
                {{--                                --}}{{--                        <button type="button" class="close"--}}
                {{--                                --}}{{--                                data-dismiss="alert" aria-label="Close">--}}
                {{--                                <span aria-hidden="true">&times;</span>--}}
                {{--                                --}}{{--                        </button>--}}
                {{--                            </div>--}}
                {{--                        @endforeach--}}
                {{--                    </div>--}}
                {{--                @endif--}}
                <div class="analytics-diagram-media">
                    <div class="iq-menu-bt d-flex align-items-center">
                        <div class="wrapper-menu open">
                            <div class="main-circle"><i class="las la-bars"></i></div>
                        </div>
                        <div class="iq-navbar-logo d-flex justify-content-between">
                            <a href="index.html" class="header-logo">
                                <img src="{{asset('assets/image/dashboard/logo/logo.svg')}}"
                                     class="img-fluid rounded-normal"
                                     alt="">
                                <div class="pt-2 pl-2 logo-title">
                                    <span class="text-primary text-uppercase">Royality</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                        <i class="ri-menu-3-line"></i>
                    </button>
                </div>
                <div id="content-page" class="content-page">
                    <div class="container-fluid"><h3 class="page-title--4 mb-1">Add your release to BYSST Music</h3>
                        <p class="page-title--2 analytics-title">Artwork Cover</p>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="file-drop-area upload-file">
                                    <div class="file-icon">
                                        <img src="{{asset('assets/image/page-img/Icon-upload.svg')}}" alt="">
                                    </div>
                                    <span class="file-message">Upload Release Cover</span>
                                    <span class="file-message">Max size 3000x3000</span>
                                    <input class="file-input" id="file" name="cover_upload" type="file" required>
                                </div>
                                @if(count($errors) > 0)
                                    @if(key_exists('cover_upload', json_decode($errors, true)))
                                        <span class="alert-error alert-danger fade show"
                                              role="alert">{{json_decode($errors, true)['cover_upload'][0]}}
       </span>
                                    @endif
                                @endif
                                <div class="release-form">
                                    <div class="form-group mb-4 mt-3">
                                        <label for="release-title">Release Title</label>
                                        <input type="text" class="form-control" id="release-title"
                                               name="release_title"
                                               required>
                                    </div>
                                    @if(count($errors) > 0)
                                        @if(key_exists('release_title', json_decode($errors, true)))
                                            <span class="alert-error alert-danger fade show"
                                                  role="alert">{{json_decode($errors, true)['release_title'][0]}}
       </span>
                                        @endif
                                    @endif
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="copyright-holder">Copyright Holder</label>
                                            <input type="text" class="form-control" id="copyright-holder"
                                                   name="copyright_holder"
                                                   placeholder="Please enter copyright holder.">
                                        </div>
                                        @if(count($errors) > 0)
                                            @if(key_exists('copyright_holder', json_decode($errors, true)))
{{--                                                {{dd(json_decode($errors, true)['copyright_holder'][0])}}--}}
                                                <span class="alert-error alert-danger fade show"
                                                      role="alert">{{json_decode($errors, true)['copyright_holder'][0]}}
       </span>
                                            @endif
                                        @endif
                                        <div class="form-group col-md-6">
                                            <label for="copyright-year">Copyright Year</label>
                                            <select id="copyright-year" name="copyright_year" class="form-control"
                                                    required>
                                                <option selected>2021</option>
                                                <option>2022</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="primary-genre">Primary Genre</label>
                                            <select id="primary-genre" name="primary_genre" class="form-control"
                                                    required>
                                                <option selected>Blues</option>
                                                <option>...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="language">Language</label>
                                            <select id="language" name="language" class="form-control" required>
                                                <option selected>Abkhaz</option>
                                                <option>...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="record-label">Record Label</label>
                                            <input type="text" class="form-control" id="record-label"
                                                   name="record_label"
                                                   placeholder="Please enter record label" required>
                                        </div>
                                        @if(count($errors) > 0)
                                            @if(key_exists('record_label', json_decode($errors, true)))
                                                <span class="alert-error alert-danger fade show"
                                                      role="alert">{{json_decode($errors, true)['record_label'][0]}}
       </span>
                                            @endif
                                        @endif
                                        <div class="form-group col-md-6">
                                            <label for="record-artist">Record Artist</label>
                                            <input type="text" class="form-control" id="record-artist"
                                                   name="record_artist"
                                                   placeholder="Please enter record artist" required>
                                        </div>
                                        @if(count($errors) > 0)
                                            @if(key_exists('record_artist', json_decode($errors, true)))
                                                <span class="alert-error alert-danger fade show"
                                                      role="alert">{{json_decode($errors, true)['record_artist'][0]}}
       </span>
                                            @endif
                                        @endif
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="lyricist">Lyricist</label>
                                            <input type="text" class="form-control" id="lyricist" name="lyricist"
                                                   required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="music-composer">Music composer</label>
                                            <input type="text" class="form-control" id="music-composer"
                                                   name="music_composer" required>
                                        </div>
                                        @if(count($errors) > 0)
                                            @if(key_exists('music_composer', json_decode($errors, true)))
                                                <span class="alert-error alert-danger fade show"
                                                      role="alert">{{json_decode($errors, true)['music_composer'][0]}}
               </span>
                                            @endif
                                        @endif
                                        <div class="form-group col-md-6">
                                            <label for="music-composer">Publisher</label>
                                            <input type="text" class="form-control" id="music-composer"
                                                   name="music_publisher" required>
                                        </div>
                                        @if(count($errors) > 0)
                                            @if(key_exists('music_publisher', json_decode($errors, true)))
                                                <span class="alert-error alert-danger fade show"
                                                      role="alert">{{json_decode($errors, true)['music_publisher'][0]}}
               </span>
                                            @endif
                                        @endif
                                    </div>
                                    <a href="javascript:void(0)" onclick="changeTab($(this))" tab="cover"
                                       class="upload-music--btn mb-5">Next
                                        <img class="ml-2"
                                             src="{{asset('assets/image/page-img/icon-arrow-right.svg')}}"
                                             alt=""></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="music-tab" id="music-tab" style="display: none">
                <div class="analytics-diagram-media">
                    <div class="iq-menu-bt d-flex align-items-center">
                        <div class="wrapper-menu open">
                            <div class="main-circle"><i class="las la-bars"></i></div>
                        </div>
                        <div class="iq-navbar-logo d-flex justify-content-between">
                            <a href="index.html" class="header-logo">
                                <img src="images/dashboard/logo/logo.svg" class="img-fluid rounded-normal" alt="">
                                <div class="pt-2 pl-2 logo-title">
                                    <span class="text-primary text-uppercase">Royality</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                        <i class="ri-menu-3-line"></i>
                    </button>
                </div>
                <div id="content-page" class="content-page">
                    <div class="container-fluid">
                        <h3 class="page-title--4 mb-1">Upload your music</h3>
                        <p class="page-title--2 analytics-title">Artwork Cover</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="upload__music-form">
                                    <div class="file-drop-area upload-file">
                                        <div id="normal_state">
                                            <div class="file-icon">
                                                <img src="{{asset('assets/image/page-img/icon-musical.svg')}}" alt="">
                                            </div>
                                        </div>
                                        <span class="file-message">Upload files</span>
                                        <input class="file-input" id="music-upload" name="music_upload" type="file"
                                               accept="audio/mpeg3">
                                        <input class="file-duration" id="file_duration" name="file_duration"
                                               type="hidden">
                                        <input class="file-size" id="file_size" name="file_size" type="hidden">
                                        <input class="file-input" id="music-upload" name="music_upload" type="file"
                                               accept="audio/mpeg3">
                                        <div id="uploaded_state" style="display: none !important">
                                            <p class="track_length">Track-Length</p>
                                            <div class="track_length_duration" id="track_length_duration"
                                                 style="display: none"><span></span>
                                            </div>
                                            <div class="loading_">
                                                <div class="loading_inner"></div>
                                            </div>
                                            <p class="loading_name">Loading...</p>
                                            <audio id="audio"></audio>
                                        </div>
                                    </div>
                                    @if(count($errors) > 0)
                                        @if(key_exists('music_upload', json_decode($errors, true)))
                                            <span class="alert-error alert-danger fade show"
                                                  role="alert">{{json_decode($errors, true)['music_upload'][0]}}
           </span>
                                        @endif
                                    @endif
                                    <p class="page-title--2 analytics-title mt-4">Track list</p>
                                    <div class="track-list">
                                        <div class="track-list--info">
                                            <div class="track-info--icon">
                                                <img src="{{asset('assets/image/page-img/icon-info-green.svg')}}"
                                                     alt="">
                                            </div>
                                            <div>This release does not have any tracks, use the button on the left to
                                                start
                                                adding some.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input form-check--square" [] type="checkbox" value="1"
                                               name="exampleCheckBox1"
                                               id="uploadCheck1">
                                        <label class="form-check-label page-title--5" for="uploadCheck1">
                                            I understand my release may be rejected from stores if I don't correctly
                                            label
                                            tracks as explicit that contain swear words or obscenities.
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input form-check--square" type="checkbox" value="1"
                                               name="exampleCheckBox2"
                                               id="uploadCheck2">
                                        <label class="form-check-label page-title--5" for="uploadCheck2">
                                            I am authorised to distribute this music to stores and territories I select.
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input form-check--square" type="checkbox" value="1"
                                               name="exampleCheckBox3"
                                               id="uploadCheck3">
                                        <label class="form-check-label page-title--5" for="uploadCheck3">
                                            I'm not using any other artist's name in my name, song titles, or album
                                            title,
                                            without their approval.
                                        </label>
                                    </div>
                                    <h3 class="page-title--4 mb-1">Covers and copyrighted materials</h3>
                                    <p class="page-title--5">
                                        If your release contains any copyrighted material such as samples, please upload
                                        the
                                        documentation proving you own the copyright to the audio. Without the required
                                        licensing documentation, music containing copyrighted material may be rejected
                                        by
                                        stores.
                                    </p>
                                    <div class="form-check">
                                        <input class="form-check-input form-check--round" type="radio"
                                               name="exampleRadios"
                                               id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Continue without uploading copyright documentation
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input form-check--round" type="radio"
                                               name="exampleRadios"
                                               id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Upload documentation proving I own the copyright to the audio
                                        </label>
                                    </div>
                                    <div class="upload-document upload-file">
                                        <div class="file-icon">
                                            <img src="{{asset('assets/image/page-img/Icon-upload.svg')}}" alt="">
                                        </div>
                                        <span class="file-message">Upload files</span>
                                        <input class="file-input" id="musics-upload" name="musics_upload" type="file"
                                               accept="audio/mpeg3">
                                    </div>
                                    <div class="control-btn">
                                        <a class="prev" href="javascript:void(0)" onclick="changeTab($(this))"
                                           tab="music"><img
                                                class="mr-2"
                                                src="{{asset('assets/image/page-img/icon-arrow-left.svg')}}"
                                                alt="">
                                            Previous</a>
                                        <a href="javascript:void(0)" onclick="changeTab($(this))" tab="store"
                                           class="upload-music--btn mb-5">Next
                                            <img class="ml-2"
                                                 src="{{asset('assets/image/page-img/icon-arrow-right.svg')}}"
                                                 alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="store-tab" style="display: none">
                <div class="analytics-diagram-media">
                    <div class="iq-menu-bt d-flex align-items-center">
                        <div class="wrapper-menu open">
                            <div class="main-circle"><i class="las la-bars"></i></div>
                        </div>
                        <div class="iq-navbar-logo d-flex justify-content-between">
                            <a href="index.html" class="header-logo">
                                <img src="images/dashboard/logo/logo.svg" class="img-fluid rounded-normal" alt="">
                                <div class="pt-2 pl-2 logo-title">
                                    <span class="text-primary text-uppercase">Royality</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                        <i class="ri-menu-3-line"></i>
                    </button>
                </div>


                <!-- Page Content  -->
                <div id="content-page_2" class="content-page stores">
                    <div class="container-fluid">
                        <div class="row row-eq-height">
                            <div class="stores-content">
                                <p class="page-title stores-title">Select the stores</p>
                                <p class="stores-description">Track pricing</p>
                                <p class="stores-text">How much would you like to charge for each track?</p>


                                <div class="social-form" action="" method="">
                                    <div class="radio-group" id="radio-group">
                                        <div class="form-check radio-inline">
                                            <input class="form-check-input form-check--round" type="radio"
                                                   name="trackPricing"
                                                   id="inlineRadio1" value="option1" checked>
                                            <label class="form-check-label" for="inlineRadio1">80c</label>
                                        </div>
                                        <div class="form-check radio-inline">
                                            <input class="form-check-input form-check--round" type="radio"
                                                   name="trackPricing"
                                                   id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">99c</label>
                                        </div>


                                        <div class="form-check radio-inline">
                                            <input class="form-check-input form-check--round" type="radio"
                                                   name="trackPricing"
                                                   id="inlineRadio3" value="option3">
                                            <label class="form-check-label" for="inlineRadio3">$1.25</label>
                                        </div>
                                    </div>
                                    <div class="radio-group--text" style="display: flex"><img src="images/icon.svg"
                                                                                              alt=""
                                                                                              style="margin-right: 15px">Prices
                                        may vary on different stores.
                                    </div>
                                    <p class="stores-description mt-5">Digital Stores</p>
                                    <p class="stores-text mt-3">Which stores would you like to distribute your release
                                        on?</p>
                                    <div class="radio-group radio-group-2" id="radio-group-2">
                                        <div class="form-check radio-inline roles">
                                            <input class="form-check-input form-check--round" type="radio"
                                                   name="digitalStores"
                                                   id="inlineRadio4" value="option4" checked>
                                            <label class="form-check-label" for="inlineRadio4">All stores</label>
                                            <p class="radio-inline--text">
                                                Select all stores.
                                            </p>
                                        </div>
                                        <div class="form-check radio-inline">
                                            <input class="form-check-input form-check--round" type="radio"
                                                   name="digitalStores"
                                                   id="inlineRadio5" value="option5">
                                            <label class="form-check-label" for="inlineRadio5">Downloads only
                                                stores</label>
                                            <p class="radio-inline--text">
                                                Only select stores which allow fans to purchase your music.
                                            </p>
                                        </div>
                                        <div class="form-check radio-inline">
                                            <input class="form-check-input form-check--round" type="radio"
                                                   name="digitalStores"
                                                   id="inlineRadio6" value="option6">
                                            <label class="form-check-label" for="inlineRadio6">Streaming only
                                                stores</label>
                                            <p class="radio-inline--text">
                                                Only select stores which allow fans to stream your music. Your tracks
                                                will not
                                                be available for personal download.
                                            </p>
                                        </div>
                                        <div class="form-check radio-inline">
                                            <input class="form-check-input form-check--round" type="radio"
                                                   name="digitalStores"
                                                   id="inlineRadio7" value="option7">
                                            <label class="form-check-label" for="inlineRadio7">Custom selection of
                                                stores</label>
                                            <p class="radio-inline--text">
                                                Select the individual stores you want to distribute you music onto
                                                yourself.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="social-block">
                                        <div class="social-block--line">
                                            <table class="table " cellspacing="0" style="overflow-y:scroll">
                                                <thead>
                                                <tr class="page-title--2">
                                                    <th class="page-title--2">
                                                        <div class="form-check form-check-inline store_item">
                                                            <div style="display: flex; align-items: center">
                                                                <input class="form-check-input" type="checkbox"
                                                                       name="inlineRadioOptions[]" id="inlineCheckbox1"
                                                                       value="option8">
                                                                <label class="form-check-label" for="inlineCheckbox1">Apple
                                                                    Music</label>
                                                            </div>
                                                            <div class="form-check-img">
                                                                <img
                                                                    src="{{asset('assets/image/page-img/apple_music_logo.svg.png')}}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th class="page-title--2">
                                                        <div class="form-check form-check-inline store_item">
                                                            <div style="display: flex; align-items: center">
                                                                <input class="form-check-input" type="checkbox"
                                                                       name="inlineRadioOptions[]"
                                                                       id="inlineCheckbox2" value="option9">
                                                                <label class="form-check-label" for="inlineCheckbox2">AMI</label>
                                                            </div>
                                                            <div class="form-check-img">
                                                                <img src="{{asset('assets/image/page-img/AWA.png')}}"
                                                                     alt="">
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th class="page-title--2">
                                                        <div class="form-check form-check-inline store_item">
                                                            <div style="display: flex; align-items: center">
                                                                <input class="form-check-input" type="checkbox"
                                                                       name="inlineRadioOptions[]"
                                                                       id="inlineCheckbox3" value="option10">
                                                                <label class="form-check-label" for="inlineCheckbox3">BMAT</label>
                                                            </div>
                                                            <div class="form-check-img">
                                                                <img src="{{asset('assets/image/page-img/BMAT.png')}}"
                                                                     alt="">
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th class="page-title--2">
                                                        <div class="form-check form-check-inline store_item">
                                                            <div style="display: flex; align-items: center">
                                                                <input class="form-check-input" type="checkbox"
                                                                       name="inlineRadioOptions[]"
                                                                       id="inlineCheckbox4" value="option11">
                                                                <label class="form-check-label" for="inlineCheckbox4">Facebook_AAP</label>
                                                            </div>
                                                            <div class="form-check-img">
                                                                <img
                                                                    src="{{asset('assets/image/page-img/facebook-logo.png')}}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="">
                                                    <td class="">
                                                        <div class="form-check form-check-inline store_item">
                                                            <div style="display: flex; align-items: center">
                                                                <input class="form-check-input" type="checkbox"
                                                                       name="inlineRadioOptions[]"
                                                                       id="inlineCheckbox5" value="option12">
                                                                <label class="form-check-label" for="inlineCheckbox5">ACRCloud</label>
                                                            </div>
                                                            <div class="form-check-img">
                                                                <img
                                                                    src="{{asset('assets/image/page-img/ACR_Cloud_Logo@2x.png')}}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class="form-check form-check-inline store_item">
                                                            <div style="display: flex; align-items: center">
                                                                <input class="form-check-input" type="checkbox"
                                                                       name="inlineRadioOptions[]"
                                                                       id="inlineCheckbox6" value="option13">
                                                                <label class="form-check-label" for="inlineCheckbox6">Anghami</label>
                                                            </div>
                                                            <div class="form-check-img">
                                                                <img
                                                                    src="{{asset('assets/image/page-img/anghami-logo-colored-1@2x.png')}}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class="form-check form-check-inline store_item">
                                                            <div style="display: flex; align-items: center">
                                                                <input class="form-check-input" type="checkbox"
                                                                       name="inlineRadioOptions[]"
                                                                       id="inlineCheckbox7" value="option14">
                                                                <label class="form-check-label" for="inlineCheckbox7">Boomplay</label>
                                                            </div>
                                                            <div class="form-check-img">
                                                                <img
                                                                    src="{{asset('assets/image/page-img/Boom_play.png')}}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class="form-check form-check-inline store_item">
                                                            <div style="display: flex; align-items: center">
                                                                <input class="form-check-input" type="checkbox"
                                                                       name="inlineRadioOptions[]"
                                                                       id="inlineCheckbox8" value="option8">
                                                                <label class="form-check-label" for="inlineCheckbox8">Facebook_SRP</label>
                                                            </div>
                                                            l
                                                            <div class="form-check-img">
                                                                <img
                                                                    src="{{asset('assets/image/page-img/facebook-logo.png')}}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">
                                                        <div class="form-check form-check-inline store_item">
                                                            <div style="display: flex; align-items: center">
                                                                <input class="form-check-input" type="checkbox"
                                                                       name="inlineRadioOptions[]"
                                                                       id="inlineCheckbox9" value="option15">
                                                                <label class="form-check-label" for="inlineCheckbox9">7digital</label>
                                                            </div>
                                                            <div class="form-check-img">
                                                                <img
                                                                    src="{{asset('assets/image/page-img/7digital.png')}}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td cla

                                                        ss="">
                                                        <div class="form-check form-check-inline store_item">
                                                            <div style="display: flex; align-items: center">
                                                                <input class="form-check-input" type="checkbox"
                                                                       name="inlineRadioOptions[]"
                                                                       id="inlineCheckbox10" value="option16">
                                                                <label class="form-check-label" for="inlineCheckbox10">AudibleMagic</label>
                                                            </div>
                                                            <div class="form-check-img">
                                                                <img
                                                                    src="{{asset('assets/image/page-img/Audio_magic.png')}}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class="form-check form-check-inline store_item">
                                                            <div style="display: flex; align-items: center">
                                                                <input class="form-check-input" type="checkbox"
                                                                       name="inlineRadioOptions[]"
                                                                       id="inlineCheckbox11" value="option17">
                                                                <label class="form-check-label" for="inlineCheckbox11">ClickNClear</label>
                                                            </div>
                                                            <div class="form-check-img">
                                                                <img
                                                                    src="{{asset('assets/image/page-img/ClickClear.png')}}"
                                                                    alt="">
                                                            </div>

                                                        </div>
                                                    </td>
                                                    {{--                                                    <!--                                        <td class="">-->--}}
                                                    {{--                                                    <!--                                            <div class="form-check form-check-inline">-->--}}
                                                    {{--                                                    <!--                                                <input class="form-check-input" type="checkbox" name="inlineRadioOptions18" id="inlineCheckbox12" value="option18">-->--}}
                                                    {{--                                                    <!--                                                <label class="form-check-label" for="inlineCheckbox12">Facebook</label>-->--}}
                                                    {{--                                                    <!--                                                <div class="form-check-img">-->--}}
                                                    {{--                                                    <!--                                                    <img src="{{asset('assets/image/page-img/facebook-logo.png')}}" alt="">-->--}}
                                                    {{--                                                    <!--                                                </div>-->--}}
                                                    {{--                                                    <!--                                            </div>-->--}}
                                                    {{--                                                    <!--                                        </td>-->--}}
                                                </tr>
                                                <tr class="">
                                                    <td class="">
                                                        <div class="form-check form-check-inline store_item">
                                                            <div style="display: flex; align-items: center">
                                                                <input class="form-check-input" type="checkbox"
                                                                       name="inlineRadioOptions[]"
                                                                       id="inlineCheckbox13" value="option19">
                                                                <label class="form-check-label" for="inlineCheckbox13">Amazon</label>
                                                            </div>
                                                            <div class="form-check-img">
                                                                <img
                                                                    src="{{asset('assets/image/page-img/Amazon_music.png')}}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class="form-check form-check-inline store_item">
                                                            <div style="display: flex; align-items: center">
                                                                <input class="form-check-input" type="checkbox"
                                                                       name="inlineRadioOptions[]"
                                                                       id="inlineCheckbox14" value="option20">
                                                                <label class="form-check-label" for="inlineCheckbox14">AWA</label>
                                                            </div>
                                                            <div class="form-check-img">
                                                                <img src="{{asset('assets/image/page-img/AWA.png')}}"
                                                                     alt="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class="form-check form-check-inline store_item">
                                                            <div style="display: flex; align-items: center">
                                                                <input class="form-check-input" type="checkbox"
                                                                       name="inlineRadioOptions[]"
                                                                       id="inlineCheckbox15" value="option21">
                                                                <label class="form-check-label" for="inlineCheckbox15">Deezer</label>
                                                            </div>
                                                            <div class="form-check-img">
                                                                <img
                                                                    src="{{asset('assets/image/page-img/Deezer-Logo.wine@2x.png')}}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    {{--                                    <div class="social-block">--}}
                                    {{--                                        <div class="social-block--line">--}}
                                    {{--                                            <table class="table " cellspacing="0">--}}
                                    {{--                                                <thead>--}}
                                    {{--                                                <tr class="page-title--2">--}}
                                    {{--                                                    <th class="page-title--2">--}}
                                    {{--                                                        <div class="form-check form-check-inline">--}}
                                    {{--                                                            <input class="form-check-input" type="checkbox"--}}
                                    {{--                                                                   name="inlineRadioOptions[]" id="inlineCheckbox1"--}}
                                    {{--                                                                   value="option8">--}}
                                    {{--                                                            <label class="form-check-label" for="inlineCheckbox1">Apple--}}
                                    {{--                                                                Music</label>--}}
                                    {{--                                                            <div class="form-check-img">--}}
                                    {{--                                                                <img--}}
                                    {{--                                                                    src="{{asset('assets/image/page-img/apple_music_logo.svg.png')}}"--}}
                                    {{--                                                                    alt="">--}}
                                    {{--                                                            </div>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </th>--}}
                                    {{--                                                    <th class="page-title--2">--}}
                                    {{--                                                        <div class="form-check form-check-inline">--}}
                                    {{--                                                            <input class="form-check-input" type="checkbox"--}}
                                    {{--                                                                   name="inlineRadioOptions[]" id="inlineCheckbox2"--}}
                                    {{--                                                                   value="option9">--}}
                                    {{--                                                            <label class="form-check-label"--}}
                                    {{--                                                                   for="inlineCheckbox2">Facebook</label>--}}
                                    {{--                                                            <div class="form-check-img">--}}
                                    {{--                                                                <img--}}
                                    {{--                                                                    src="{{asset('assets/image/page-img/facebook-logo.png')}}"--}}
                                    {{--                                                                    alt="">--}}
                                    {{--                                                            </div>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </th>--}}
                                    {{--                                                    <th class="page-title--2">--}}
                                    {{--                                                        <div class="form-check form-check-inline">--}}
                                    {{--                                                            <input class="form-check-input" type="checkbox"--}}
                                    {{--                                                                   name="inlineRadioOptions[]" id="inlineCheckbox3"--}}
                                    {{--                                                                   value="option10">--}}
                                    {{--                                                            <label class="form-check-label"--}}
                                    {{--                                                                   for="inlineCheckbox3">Facebook</label>--}}
                                    {{--                                                            <div class="form-check-img">--}}
                                    {{--                                                                <img--}}
                                    {{--                                                                    src="{{asset('assets/image/page-img/facebook-logo.png')}}"--}}
                                    {{--                                                                    alt="">--}}
                                    {{--                                                            </div>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </th>--}}
                                    {{--                                                    <th class="page-title--2">--}}
                                    {{--                                                        <div class="form-check form-check-inline">--}}
                                    {{--                                                            <input class="form-check-input" type="checkbox"--}}
                                    {{--                                                                   name="inlineRadioOptions[]" id="inlineCheckbox4"--}}
                                    {{--                                                                   value="option11">--}}
                                    {{--                                                            <label class="form-check-label"--}}
                                    {{--                                                                   for="inlineCheckbox4">Facebook</label>--}}
                                    {{--                                                            <div class="form-check-img">--}}
                                    {{--                                                                <img--}}
                                    {{--                                                                    src="{{asset('assets/image/page-img/facebook-logo.png')}}"--}}
                                    {{--                                                                    alt="">--}}
                                    {{--                                                            </div>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </th>--}}
                                    {{--                                                </tr>--}}
                                    {{--                                                </thead>--}}
                                    {{--                                                <tbody>--}}
                                    {{--                                                <tr class="">--}}
                                    {{--                                                    <td class="">--}}
                                    {{--                                                        <div class="form-check form-check-inline">--}}
                                    {{--                                                            <input class="form-check-input" type="checkbox"--}}
                                    {{--                                                                   name="inlineRadioOptions[]" id="inlineCheckbox5"--}}
                                    {{--                                                                   value="option12">--}}
                                    {{--                                                            <label class="form-check-label"--}}
                                    {{--                                                                   for="inlineCheckbox5">Spotify</label>--}}
                                    {{--                                                            <div class="form-check-img">--}}
                                    {{--                                                                <img--}}
                                    {{--                                                                    src="{{asset('assets/image/page-img/spotify_logo.svg.png')}}"--}}
                                    {{--                                                                    alt="">--}}
                                    {{--                                                            </div>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </td>--}}
                                    {{--                                                    <td class="">--}}
                                    {{--                                                        <div class="form-check form-check-inline">--}}
                                    {{--                                                            <input class="form-check-input" type="checkbox"--}}
                                    {{--                                                                   name="inlineRadioOptions[]" id="inlineCheckbox6"--}}
                                    {{--                                                                   value="option13">--}}
                                    {{--                                                            <label class="form-check-label"--}}
                                    {{--                                                                   for="inlineCheckbox6">Instagram</label>--}}
                                    {{--                                                            <div class="form-check-img">--}}
                                    {{--                                                                <img--}}
                                    {{--                                                                    src="{{asset('assets/image/page-img/znachok-instagram-.png')}}"--}}
                                    {{--                                                                    alt="">--}}
                                    {{--                                                            </div>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </td>--}}
                                    {{--                                                    <td class="">--}}
                                    {{--                                                        <div class="form-check form-check-inline">--}}
                                    {{--                                                            <input class="form-check-input" type="checkbox"--}}
                                    {{--                                                                   name="inlineRadioOptions[]" id="inlineCheckbox7"--}}
                                    {{--                                                                   value="option14">--}}
                                    {{--                                                            <label class="form-check-label"--}}
                                    {{--                                                                   for="inlineCheckbox7">Instagram</label>--}}
                                    {{--                                                            <div class="form-check-img">--}}
                                    {{--                                                                <img--}}
                                    {{--                                                                    src="{{asset('assets/image/page-img/znachok-instagram-.png')}}"--}}
                                    {{--                                                                    alt="">--}}
                                    {{--                                                            </div>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </td>--}}
                                    {{--                                                    <td class="">--}}
                                    {{--                                                        <div class="form-check form-check-inline">--}}
                                    {{--                                                            <input class="form-check-input" type="checkbox"--}}
                                    {{--                                                                   name="inlineRadioOptions[]" id="inlineCheckbox8"--}}
                                    {{--                                                                   value="option8">--}}
                                    {{--                                                            <label class="form-check-label"--}}
                                    {{--                                                                   for="inlineCheckbox8">Instagram</label>--}}
                                    {{--                                                            <div class="form-check-img">--}}
                                    {{--                                                                <img--}}
                                    {{--                                                                    src="{{asset('assets/image/page-img/znachok-instagram-.png')}}"--}}
                                    {{--                                                                    alt="">--}}
                                    {{--                                                            </div>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </td>--}}
                                    {{--                                                </tr>--}}
                                    {{--                                                <tr>--}}
                                    {{--                                                    <td class="">--}}
                                    {{--                                                        <div class="form-check form-check-inline">--}}
                                    {{--                                                            <input class="form-check-input" type="checkbox"--}}
                                    {{--                                                                   name="inlineRadioOptions[]" id="inlineCheckbox9"--}}
                                    {{--                                                                   value="option15">--}}
                                    {{--                                                            <label class="form-check-label" for="inlineCheckbox9">Apple--}}
                                    {{--                                                                Music</label>--}}
                                    {{--                                                            <div class="form-check-img">--}}
                                    {{--                                                                <img--}}
                                    {{--                                                                    src="{{asset('assets/image/page-img/apple_music_logo.svg.png')}}"--}}
                                    {{--                                                                    alt="">--}}
                                    {{--                                                            </div>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </td>--}}
                                    {{--                                                    <td class="">--}}
                                    {{--                                                        <div class="form-check form-check-inline">--}}
                                    {{--                                                            <input class="form-check-input" type="checkbox"--}}
                                    {{--                                                                   name="inlineRadioOptions[]" id="inlineCheckbox10"--}}
                                    {{--                                                                   value="option16">--}}
                                    {{--                                                            <label class="form-check-label"--}}
                                    {{--                                                                   for="inlineCheckbox10">Facebook</label>--}}
                                    {{--                                                            <div class="form-check-img">--}}
                                    {{--                                                                <img--}}
                                    {{--                                                                    src="{{asset('assets/image/page-img/facebook-logo.png')}}"--}}
                                    {{--                                                                    alt="">--}}
                                    {{--                                                            </div>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </td>--}}
                                    {{--                                                    <td class="">--}}
                                    {{--                                                        <div class="form-check form-check-inline">--}}
                                    {{--                                                            <input class="form-check-input" type="checkbox"--}}
                                    {{--                                                                   name="inlineRadioOptions[]" id="inlineCheckbox11"--}}
                                    {{--                                                                   value="option17">--}}
                                    {{--                                                            <label class="form-check-label"--}}
                                    {{--                                                                   for="inlineCheckbox11">Facebook</label>--}}
                                    {{--                                                            <div class="form-check-img">--}}
                                    {{--                                                                <img--}}
                                    {{--                                                                    src="{{asset('assets/image/page-img/facebook-logo.png')}}"--}}
                                    {{--                                                                    alt="">--}}
                                    {{--                                                            </div>--}}

                                    {{--                                                        </div>--}}
                                    {{--                                                    </td>--}}
                                    {{--                                                    <td class="">--}}
                                    {{--                                                        <div class="form-check form-check-inline">--}}
                                    {{--                                                            <input class="form-check-input" type="checkbox"--}}
                                    {{--                                                                   name="inlineRadioOptions[]" id="inlineCheckbox12"--}}
                                    {{--                                                                   value="option18">--}}
                                    {{--                                                            <label class="form-check-label"--}}
                                    {{--                                                                   for="inlineCheckbox12">Facebook</label>--}}
                                    {{--                                                            <div class="form-check-img">--}}
                                    {{--                                                                <img--}}
                                    {{--                                                                    src="{{asset('assets/image/page-img/facebook-logo.png')}}"--}}
                                    {{--                                                                    alt="">--}}
                                    {{--                                                            </div>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </td>--}}
                                    {{--                                                </tr>--}}
                                    {{--                                                <tr class="">--}}
                                    {{--                                                    <td class="">--}}
                                    {{--                                                        <div class="form-check form-check-inline">--}}
                                    {{--                                                            <input class="form-check-input" type="checkbox"--}}
                                    {{--                                                                   name="inlineRadioOptions[]" id="inlineCheckbox13"--}}
                                    {{--                                                                   value="option19">--}}
                                    {{--                                                            <label class="form-check-label"--}}
                                    {{--                                                                   for="inlineCheckbox13">Spotify</label>--}}
                                    {{--                                                            <div class="form-check-img">--}}
                                    {{--                                                                <img--}}
                                    {{--                                                                    src="{{asset('assets/image/page-img/spotify_logo.svg.png')}}"--}}
                                    {{--                                                                    alt="">--}}
                                    {{--                                                            </div>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </td>--}}
                                    {{--                                                    <td class="">--}}
                                    {{--                                                        <div class="form-check form-check-inline">--}}
                                    {{--                                                            <input class="form-check-input" type="checkbox"--}}
                                    {{--                                                                   name="inlineRadioOptions[]" id="inlineCheckbox14"--}}
                                    {{--                                                                   value="option20">--}}
                                    {{--                                                            <label class="form-check-label"--}}
                                    {{--                                                                   for="inlineCheckbox14">Instagram</label>--}}
                                    {{--                                                            <div class="form-check-img">--}}
                                    {{--                                                                <img--}}
                                    {{--                                                                    src="{{asset('assets/image/page-img/znachok-instagram-.png')}}"--}}
                                    {{--                                                                    alt="">--}}
                                    {{--                                                            </div>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </td>--}}
                                    {{--                                                    <td class="">--}}
                                    {{--                                                        <div class="form-check form-check-inline">--}}
                                    {{--                                                            <input class="form-check-input" type="checkbox"--}}
                                    {{--                                                                   name="inlineRadioOptions[]" id="inlineCheckbox15"--}}
                                    {{--                                                                   value="option21">--}}
                                    {{--                                                            <label class="form-check-label"--}}
                                    {{--                                                                   for="inlineCheckbox15">Instagram</label>--}}
                                    {{--                                                            <div class="form-check-img">--}}
                                    {{--                                                                <img--}}
                                    {{--                                                                    src="{{asset('assets/image/page-img/znachok-instagram-.png')}}"--}}
                                    {{--                                                                    alt="">--}}
                                    {{--                                                            </div>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </td>--}}
                                    {{--                                                    <td class="">--}}
                                    {{--                                                        <div class="form-check form-check-inline">--}}
                                    {{--                                                            <input class="form-check-input" type="checkbox"--}}
                                    {{--                                                                   name="inlineRadioOptions[]" id="inlineCheckbox16"--}}
                                    {{--                                                                   value="option22">--}}
                                    {{--                                                            <label class="form-check-label"--}}
                                    {{--                                                                   for="inlineCheckbox16">Instagram</label>--}}
                                    {{--                                                            <div class="form-check-img">--}}
                                    {{--                                                                <img--}}
                                    {{--                                                                    src="{{asset('assets/image/page-img/znachok-instagram-.png')}}"--}}
                                    {{--                                                                    alt="">--}}
                                    {{--                                                            </div>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </td>--}}
                                    {{--                                                </tr>--}}
                                    {{--                                                </tbody>--}}
                                    {{--                                            </table>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}

                                    <div class="control-btn">
                                        <a class="prev" href="javascript:void(0)" onclick="changeTab($(this))"
                                           tab="music_1"><img
                                                class="mr-2"
                                                src="{{asset('assets/image/page-img/icon-arrow-left.svg')}}"
                                                alt="">
                                            Previous</a>
                                        <a class="btn-done" href="javascript:void(0)" onclick="sendData()">Done</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>

        <script>
            function changeTab(tab) {
                switch (tab.attr('tab')) {
                    case "cover":
                    case "music_1":
                        $('.cover-tab').css('display', 'none');
                        $('.store-tab').css('display', 'none');
                        $('.music-tab').css('display', 'block');
                        break;
                    case "music":
                        $('.cover-tab').css('display', 'block');
                        $('.store-tab').css('display', 'none');
                        $('.music-tab').css('display', 'none');
                        break;
                    case "store":
                        $('.cover-tab').css('display', 'none');
                        $('.store-tab').css('display', 'block');
                        $('.music-tab').css('display', 'none');
                        break;
                }
            }

            function sendData() {
                $('#song-form').submit();

// let form_data = {
//     cover_upload: $('$cover-upload').val(),
//     release_title: $('#release-title').val(),
//     copyright_holder: $('#copyright-holder').val(),
//     copyright_year: $('#copyright-year').val(),
//     primary_genre: $('#primary-genre').val(),
//     language: $('#language').val(),
//     record_label: $('#record-label').val(),
//     record_artist: $('#record-artist').val(),
//     lyricist: $('#lyricist').val(),
//     music_composer: $('#music-composer').val(),
//     music_upload: $('#music-upload').val(),
//     uploadCheck1: $('#uploadCheck1').val(),
//     uploadCheck2: $('#uploadCheck2').val(),
//     uploadCheck3: $('#uploadCheck3').val(),
//     exampleRadios1: $('#exampleRadios1').val(),
//     exampleRadios2: $('#exampleRadios2').val(),
//     musics_upload: $('#musics-upload').val(),
//     track_pricing: $("#radio-group input[type='radio']:checked").siblings().text(),
//     digital_stores: $("#radio-group-2 input[type='radio']:checked").val()
// };
                {{--jQuery.ajax({--}}
                {{--    headers: {--}}
                {{--        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')--}}
                {{--    },--}}
                {{--    url: "{{ url(getenv('APP_URL') . '/upload-song') }}",--}}
                {{--    method: 'post',--}}
                {{--    data: {--}}
                {{--        cover_upload: $('#cover-upload').val(),--}}
                {{--        release_title: $('#release-title').val(),--}}
                {{--        copyright_holder: $('#copyright-holder').val(),--}}
                {{--        copyright_year: $('#copyright-year').val(),--}}
                {{--        primary_genre: $('#primary-genre').val(),--}}
                {{--        language: $('#language').val(),--}}
                {{--        record_label: $('#record-label').val(),--}}
                {{--        record_artist: $('#record-artist').val(),--}}
                {{--        lyricist: $('#lyricist').val(),--}}
                {{--        music_composer: $('#music-composer').val(),--}}
                {{--        music_upload: $('#music-upload').val(),--}}
                {{--        uploadCheck1: $('#uploadCheck1').val(),--}}
                {{--        uploadCheck2: $('#uploadCheck2').val(),--}}
                {{--        uploadCheck3: $('#uploadCheck3').val(),--}}
                {{--        exampleRadios1: $('#exampleRadios1').val(),--}}
                {{--        exampleRadios2: $('#exampleRadios2').val(),--}}
                {{--        musics_upload: $('#musics-upload').val(),--}}
                {{--        track_pricing: $("#radio-group input[type='radio']:checked").siblings().text(),--}}
                {{--        digital_stores: $("#radio-group-2 input[type='radio']:checked").val()--}}
                {{--    },--}}
                {{--    success: function (resp) {--}}
                {{--        if (resp.message == "ok") {--}}
                {{--            $("#message").text('Song was uploaded successfully...').css('color', '#10BA80');--}}
                {{--        } else {--}}
                {{--            $("#message").text('Upload error...').css('color', '#FF0000');--}}
                {{--        }--}}
                {{--        $("#success-popup").addClass('is-active');--}}
                {{--        setTimeout(function () {--}}
                {{--            $("#success-popup").removeClass('is-active');--}}
                {{--            location.reload();--}}
                {{--        }, 2000);--}}
                {{--    }--}}
                {{--});--}}
            }

            function secondsToTimeString(seconds) {
                var minutes = 0, hours = 0;
                if (seconds / 60 > 0) {
                    minutes = parseInt(seconds / 60, 10);
                    seconds = seconds % 60;
                }
                if (minutes / 60 > 0) {
                    hours = parseInt(minutes / 60, 10);
                    minutes = minutes % 60;
                }
                return ('0' + hours).slice(-2) + ':' + ('0' + minutes).slice(-2) + ':' + ('0' + seconds).slice(-2);
            }

            function bytesToSize(bytes) {
                var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
                if (bytes == 0) return '0 Byte';
                var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
                return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
            }

            setTimeout(function () {
                $("#music-tab #audio").on("canplaythrough", function (e) {
                    var seconds = e.currentTarget.duration;
                    var duration = secondsToTimeString(seconds);
                    $('#file_duration').val(duration);
                    $('#music-tab #normal_state').css('display', 'none');
                    $('#music-tab #uploaded_state').css('display', 'block');
                    $("#music-tab #track_length_duration span").text(duration);

                    var loading = 0;
                    var interval = setInterval(function () {
                        if (loading == 100) {
                            clearInterval(interval);
                            $('#music-tab  .loading_name').text('Loaded');
                            $('#music-tab  #track_length_duration').css('display', 'block');
                        }
                        $('#music-tab .loading_inner').css('width', loading + '%');
                        loading = loading + 2;
                    }, 20);
                });

                $("#music-tab  #music-upload").change(function (e) {
                    var file = e.currentTarget.files[0];
                    $("#file_size").val(bytesToSize(file.size));
                    objectUrl = URL.createObjectURL(file);
                    $("#music-tab  #audio").prop("src", objectUrl);
                });
            }, 2000);
        </script
@endsection
