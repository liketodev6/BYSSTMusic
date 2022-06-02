@extends('layouts.appMusic')

@section('content')
    <div id="content-page" class="content-page create-new">
        <div class="container-fluid">
            <div class="row row-eq-height">
                <div class="content">
                    <h3 class="content-text">Upload your music</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                    <div class="blocks_upload_music mt-5">
                        <!--                        <div class="block-item upload">-->
                        <!--                            <img class="mb-1" src="../../images/page-img/icone-videocam.svg" alt="">-->
                        <!--                            <p class="mb-4">Video Distribution</p>-->
                        <!--                            <a class="create-btn page-title&#45;&#45;2" href="../../upload-cover.html">Upload now</a>-->
                        <!--                        </div>-->
                        <div class="block-item distribute">
                            <img src="{{asset('assets/image/page-img/icon-audiotrack.svg')}}" alt="">
                            <p class="mb-4 distribute_audio_title">Distribute Audio</p>
                            <a class="create-btn page-title--2" href="{{route('distribute.audio')}}">Upload now</a>
                        </div>
                        <!--                        <div class="block-item ringback">-->
                        <!--                            <img src="../../images/page-img/ringbacktone.svg" alt="">-->
                        <!--                            <p class="mb-4">Ringbacktone</p>-->
                        <!--                            <a class="create-btn page-title&#45;&#45;2" href="../../ringbacktone.html">Upload now</a>-->
                        <!--                        </div>-->
                        <div class="block-item youtube-contentID">
                            <img src="{{asset('assets/image/page-img/Icon%20simple-youtube.svg')}}" alt="">
                            <p class="mb-4 youtube_contentID_title">Youtube ContentID</p>
                            <a class="create-btn page-title--2" style="cursor: pointer" href="{{route('youtubecontent')}}" data-modal="#modal-regards">Upload Now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
