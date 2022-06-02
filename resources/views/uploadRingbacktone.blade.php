@extends('layouts.appMusic')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <h3 class="page-title--4 mb-1" style="margin-left: -20px;">Ringbacktone</h3>
            <div class="row">
                <div class="col-md-12">

                    <form class="release-form" action="{{route('uploadRingbacktone')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-4 mt-3">
                            <label for="release-title">Song Title</label>
                            <input type="text" class="form-control" id="release-title" name="songTitle">
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-12">


                                <label for="copyright-holder">Artist name</label>
                                <input type="text" class="form-control" id="copyright-holder" name="artistName"
                                       placeholder="">
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-12">
                                <label for="primary-genre">Lyrics</label>
                                <input type="text" class="form-control" id="copyright-holder" name="lyrics"
                                       placeholder="">
                            </div>
                        </div>
                        <label for="copyright-holder">Music(wav or mp3)</label>
                        <div style="margin-bottom: 32px;" class="file-drop-area upload-file">


                            <div class="file-icon">
                                <img style=" filter: invert(1);" src="{{asset('assets/image/music-icon.svg')}}" alt="">
                            </div>
                            <span class="file-message">Upload files</span>
                            <input class="file-input" type="file" name="file">
                            {{--                            <input class="file-input" type="file" multiple>--}}
                        </div>
                        <button type="submit" class="upload-music--btn mb-5">Upload now</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
