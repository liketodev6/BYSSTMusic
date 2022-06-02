@extends('admin.layouts.app')

@section('content')
    <div id="content-page" class="container_page">
        <div class="container-fluid">
            <div style="height: 50px;display: flex;">
                <ul class="list-unstyled iq-menu-top d-flex justify-content-between mb-0 p-0">
                    <li class="active"><a href="javascript:void(0)" onclick="tabChange($(this))"
                                          data-tab="info">Info</a></li>
                    <li><a href="javascript:void(0)" onclick="tabChange($(this))" data-tab="track">Track</a></li>
                </ul>
            </div>
            <div id="info-tab">
                <h3 style=" padding-top: 10px; color: #0BAC76" class="page-title--4 mb-1">Album
                    Artwork</h3>
                <div class="album_artworks_cont">

                    <div class="pic_block">
                        <img src="{{$which == 'song' ? url('/').'/storage/uploads/cover_photos/'.$song[0]['cover_name'] : asset('assets/image/music/song-pic.svg')}}" alt=""
                             class="artworks_img">
                        <div class="show_links_block">
                            <div class="show_links_block_inner">
                                <div
                                    style="display: flex;flex-direction: row; align-items: center; justify-content: space-between">
                                    <p style="color: #0AA773" class="share_link_title">Share Links</p>
                                    <a href="#"><img
                                            src="{{asset('assets/image/page-img/edit_icon.png')}}" alt=""
                                            style="cursor: pointer"></a>
                                </div>
                                <div class="share_links_block_dir">
                                    <p class="private_link_title">Private Streaming Link</p>
                                    <div
                                        style="display:flex;flex-direction: row; align-items: center; justify-content: center">
                                        <img src="{{asset('assets/image/page-img/copy_icon.png')}}" alt=""
                                             style="cursor: pointer">
                                        <a href="{{$song[0]['smart_link']}}">
                                            <div class="link">{{$song[0]['smart_link']}}</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="share_links_block_dir">
                                    <p class="private_link_title">Smart Link</p>
                                    <div
                                        style="display:flex;flex-direction: row; align-items: center; justify-content: center">
                                        <img src="{{asset('assets/image/page-img/copy_icon.png')}}" alt=""
                                             style="cursor: pointer">
                                        <a href="">
                                            <div class="link">Loremfjsakjlkskgjlag/g...</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="show_links_block">
                            @if($which == 'song')
                            <div class="show_links_block_inner">
                                <div style="color: #0AA773; margin-bottom: 20px" class="share_link_title">Metadata</div>
                                <div class="share_links_block_dir">
                                    <div class="private_link_title">Release Title</div>
                                    <div class="meta_data_disc">{{$song[0]['release_title']}}</div>
                                </div>
                                <div class="share_links_block_dir">
                                    <div class="private_link_title">Copyright Holder</div>
                                    <div class="meta_data_disc">{{$song[0]['copyright_holder']}}</div>
                                </div>
                                <div class="share_links_block_dir">
                                    <div class="private_link_title">Copyright Holder</div>
                                    <div class="meta_data_disc">{{$song[0]['copyright_year']}}</div>
                                </div>
                                <div class="share_links_block_dir">
                                    <div class="private_link_title">Primary Genre</div>
                                    <div class="meta_data_disc">{{$song[0]['primary_genre']}}</div>
                                </div>
                                <div style="border-top: 1px solid #BEBEBE; margin-bottom: 20px"></div>
                                <div class="accordion"></div>
                                <div class="panel">
                                    <div class="share_links_block_dir" style="margin-top: 20px">
                                        <div class="private_link_title">Language</div>
                                        <div class="meta_data_disc">{{$song[0]['language']}}</div>
                                    </div>
                                    <div class="share_links_block_dir">
                                        <div class="private_link_title">Record label</div>
                                        <div class="meta_data_disc">{{$song[0]['record_label']}}</div>
                                    </div>
                                    <div class="share_links_block_dir">
                                        <div class="private_link_title">Record Artist</div>
                                        <div class="meta_data_disc">{{$song[0]['record_artist']}}</div>
                                    </div>
                                    <div class="share_links_block_dir">
                                        <div class="private_link_title">Lyricist</div>
                                        <div class="meta_data_disc">{{$song[0]['lyricist']}}</div>
                                    </div>
                                    <div class="share_links_block_dir">
                                        <div class="private_link_title">Music Composer</div>
                                        <div class="meta_data_disc">{{$song[0]['music_composer']}}</div>
                                    </div>
                                    <div class="share_links_block_dir">
                                        <div class="private_link_title">Publisher</div>
                                        <div class="meta_data_disc">{{$song[0]['music_publisher']}}</div>
                                    </div>
                                </div>
                            </div>
                                @else
                                <div class="show_links_block_inner">
                                    <div style="color: #0AA773; margin-bottom: 20px" class="share_link_title">Metadata</div>
                                    <div class="share_links_block_dir">
                                        <div class="private_link_title">Release Title</div>
                                        <div class="meta_data_disc">{{$song[0]['songTitle']}}</div>
                                    </div>
                                    <div class="share_links_block_dir">
                                        <div class="private_link_title">Record Artist</div>
                                        <div class="meta_data_disc">{{$song[0]['artistName']}}</div>
                                    </div>
                                    <div class="share_links_block_dir">
                                        <div class="private_link_title">Record label</div>
                                        <div class="meta_data_disc">{{$song[0]['labelName']}}</div>
                                    </div>
                                    <div class="share_links_block_dir">
                                        <div class="private_link_title">Publisher</div>
                                        <div class="meta_data_disc">{{$song[0]['publisher']}}</div>
                                    </div>
                                </div>

                            @endif
                        </div>
                    </div>
                    <div class="destination_block">
                        <div class="destination_block_inner">
                            <p class="destination_title">Destination</p>
                            <div class="destination_block_content">
                                <table class="table" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th class="destination_table_title">Destination</th>
                                        <th class="destination_table_title" style="text-align: left">Status</th>
                                        <th class="destination_table_title" style="text-align: left">Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="" style="background-color: #F7F7F7">
                                        <td class="track-title"><img
                                                src="{{asset('assets/image/page-img/apple_music_logo.svg.png')}}" alt=""
                                                style="margin-right: 27px;,width:107px; height: max-content">Apple Music
                                        </td>
                                        <td class="delivered_td">
                                            <div class="check_delivered"></div>
                                            Delivered
                                        </td>
                                        <td style="text-align: left">18.05.2022</td>
                                    </tr>
                                    <tr>
                                        <td class="track-title"><img
                                                src="{{asset('assets/image/page-img/ACR_Cloud_Logo@2x.png')}}" alt=""
                                                style="margin-right: 27px; width:107px; height: max-content">ACRCloud
                                        </td>
                                        <td class="delivered_td">
                                            <div class="check_delivered"></div>
                                            Delivered
                                        </td>
                                        <td style="text-align: left">25.05.2022</td>
                                    </tr>
                                    <tr class="" style="background-color: #F7F7F7">
                                        <td class="total-title"><img
                                                src="{{asset('assets/image/page-img/7digital.png')}}"
                                                alt=""
                                                style="margin-right: 27px; width:107px; height: max-content">7digital
                                        </td>
                                        <td class="delivered_td">
                                            <div class="check_delivered"></div>
                                            Delivered
                                        </td>
                                        <td style="text-align: left">01.05.2022</td>
                                    </tr>
                                    <tr class="" style="background-color: white">
                                        <td class="total-title"><img
                                                src="{{asset('assets/image/page-img/Amazon_music.png')}}" alt=""
                                                style="margin-right: 43px; margin-left: 20px; width:75px; height: 44px">Amazon
                                        </td>
                                        <td class="delivered_td">
                                            <div class="check_delivered"></div>
                                            Delivered
                                        </td>
                                        <td style="text-align: left">15.05.2022</td>
                                    </tr>
                                    <tr class="" style="background-color: #F7F7F7">
                                        <td class="total-title"><img
                                                src="{{asset('assets/image/page-img/ami_music.png')}}"
                                                alt=""
                                                style="margin-right: 64px; margin-left: 30px; width:44px; height: 43px">AMI
                                        </td>
                                        <td class="delivered_td">
                                            <div class="check_delivered"></div>
                                            Delivered
                                        </td>
                                        <td style="text-align: left">18.05.2022</td>
                                    </tr>
                                    <tr class="" style="background-color: white">
                                        <td class="total-title"><img
                                                src="{{asset('assets/image/page-img/ACR_Cloud_Logo@2x.png')}}" alt=""
                                                style="margin-right: 27px; width:107px; height: max-content">ACRCloud
                                        </td>
                                        <td class="delivered_td">
                                            <div class="check_delivered"></div>
                                            Delivered
                                        </td>
                                        <td style="text-align: left">18.04.2022</td>
                                    </tr>
                                    <tr class="" style="background-color: #F7F7F7">
                                        <td class="total-title"><img
                                                src="{{asset('assets/image/page-img/7digital.png')}}"
                                                alt=""
                                                style="margin-right: 27px; width:107px; height: max-content">7digital
                                        </td>
                                        <td class="delivered_td">
                                            <div class="check_delivered"></div>
                                            Delivered
                                        </td>
                                        <td style="text-align: left">18.05.2022</td>
                                    </tr>
                                    <tr class="" style="background-color: white">
                                        <td class="total-title"><img
                                                src="{{asset('assets/image/page-img/Amazon_music.png')}}" alt=""
                                                style="margin-right: 43px; margin-left: 20px; width:75px; height: 44px">Amazon
                                        </td>
                                        <td class="delivered_td">
                                            <div class="check_delivered"></div>
                                            Delivered
                                        </td>
                                        <td style="text-align: left">18.05.2022</td>
                                    </tr>
                                    <tr class="" style="background-color: #F7F7F7">
                                        <td class="total-title"><img
                                                src="{{asset('assets/image/page-img/ami_music.png')}}"
                                                alt=""
                                                style="margin-right: 64px; margin-left: 30px;; width:44px; height: 43px">AWI
                                        </td>
                                        <td class="delivered_td">
                                            <div class="check_delivered"></div>
                                            Delivered
                                        </td>
                                        <td style="text-align: left">18.05.2022</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="track-tab" style="display: none">
                <div class="block-3 users-tab" id="users-tab">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            @if($which == 'song')
                            <table class="table users-table" cellspacing="0">
                                <thead >
                                <tr class="page-title--2">
                                    <th class="page-title--2">#</th>
                                    <th class="page-title--2">Cover</th>
                                    <th class="page-title--2">Track Name</th>
                                    <th class="page-title--2">Duration</th>
                                    <th class="page-title--2">Size</th>
                                    <th class="page-title--2">Upload Date</th>
                                    <th class="page-title--2">Download</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr class="green-bg">
                                        <td class="block-1--description">1</td>
                                        <td class="block-1--description">
                                            <img class="photo-track-tab" src="<?php echo (url('/').'/storage/uploads/cover_photos/'.$song[0]['cover_name']); ?>" alt="">
                                        </td>
                                        <td class="block-1--description">{{$song[0]['music_original_name']}}</td>
                                        <td class="block-1--description">{{$song[0]['file_duration']}}</td>
                                        <td class="block-1--description">{{$song[0]['file_size']}}</td>
                                        <td class="block-1--description">{{$song[0]['created_at']}}</td>
                                        <td class="action-icons">
                                            <a  href="{{route('track.download', ['id' => $song[0]['id']])}}" class="track-download">
                                                <img class="fa-rotate-180" src="{{asset('assets/image/page-img/Icon-upload.svg')}}" alt="">
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            @else
                                <table class="table users-table" cellspacing="0">
                                    <thead >
                                    <tr class="page-title--2">
                                        <th class="page-title--2">#</th>
                                        <th class="page-title--2">Cover</th>
                                        <th class="page-title--2">Track Name</th>
                                        <th class="page-title--2">Duration</th>
                                        <th class="page-title--2">Size</th>
                                        <th class="page-title--2">Upload Date</th>
                                        <th class="page-title--2">Download</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="green-bg">
                                        <td class="block-1--description">1</td>
                                        <td class="block-1--description">
                                            <img class="photo-track-tab" src="<?php echo ($which == 'song' ? url('/').'/storage/uploads/cover_photos/'.$song[0]['cover_name'] : asset('assets/image/music/song-pic.svg')); ?>" alt="">
                                        </td>
                                        <td class="block-1--description">{{$song[0]['songTitle']}}</td>
                                        <td class="block-1--description">{{$song[0]['file_duration']}}</td>
                                        <td class="block-1--description">{{$song[0]['file_size']}}</td>
                                        <td class="block-1--description">{{$song[0]['created_at']}}</td>
                                        <td class="action-icons">
                                            <a  href="{{route($which == 'song'?'track.download':'content.id.download', ['id' => $song[0]['id']])}}" class="track-download">
                                                <img class="fa-rotate-180" src="{{asset('assets/image/page-img/Icon-upload.svg')}}" alt="">
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        function tabChange(el) {
            if ($(el).attr('data-tab') == 'info') {
                $('#content-page ul li').eq(0).addClass('active');
                $('#content-page ul li').eq(1).removeClass('active');
                $('#info-tab').css('display', 'block');
                $('#track-tab').css('display', 'none');
            } else {
                $('#content-page ul li').eq(1).addClass('active');
                $('#content-page ul li').eq(0).removeClass('active');
                $('#info-tab').css('display', 'none');
                $('#track-tab').css('display', 'block');
            }
        }
    </script>
@endsection

