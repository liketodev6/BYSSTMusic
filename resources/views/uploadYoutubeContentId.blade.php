@extends('layouts.appMusic')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <h3 class="page-title--4 mb-1" style="margin-left: -20px;">Youtube ContentID</h3>
            <div class="row">
                <div class="col-md-12">
                    <form class="release-form" action="{{route('uploadYoutubeContente')}}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-4 mt-3">
                            <label for="release-title">Song Title*</label>
                            <input type="text" class="form-control" id="release-title" name="songTitle">
                        </div>
                        @if(count($errors) > 0)
                            @if(key_exists('songTitle', json_decode($errors, true)))
                                <span class="alert-error alert-danger fade show"
                                      role="alert">{{json_decode($errors, true)['songTitle'][0]}}
                                </span>
                            @endif
                        @endif
                        <div class="form-row mb-4">
                            <div class="form-group col-md-12">
                                <label for="copyright-holder">Label name*</label>
                                <input type="text" class="form-control" id="copyright-holder" name="labelName"
                                       placeholder="">
                            </div>
                        </div>
                        @if(count($errors) > 0)
                            @if(key_exists('labelName', json_decode($errors, true)))
                                <span class="alert-error alert-danger fade show"
                                      role="alert">{{json_decode($errors, true)['labelName'][0]}}
                                </span>
                            @endif
                        @endif
                        <div class="form-row mb-4">
                            <div class="form-group col-md-12">
                                <label for="primary-genre">Artist name*</label>
                                <input type="text" class="form-control" id="copyright-holder" name="artistName"
                                       placeholder="">

                            </div>
                        </div>
                        @if(count($errors) > 0)
                            @if(key_exists('artistName', json_decode($errors, true)))
                                <span class="alert-error alert-danger fade show"
                                      role="alert">{{json_decode($errors, true)['artistName'][0]}}
                                </span>
                            @endif
                        @endif
                        <div class="form-row mb-4">
                            <div class="form-group col-md-12">
                                <label for="copyright-holder">Publisher</label>
                                <input type="text" class="form-control" id="copyright-holder" name="publisher"
                                       placeholder="">
                            </div>
                        </div>
                        <label for="copyright-holder">Music(wav or mp3)</label>
                        <div style="margin-bottom: 32px;" class="file-drop-area upload-file">
                            <div id="normal_state">
                                <div class="file-icon">
                                    <img src="{{asset('assets/image/page-img/icon-musical.svg')}}" alt="">
                                </div>
                            </div>
                            <span class="file-message">Upload fileds</span>
                            <input class="file-input" id="music-upload" name="file" type="file"
                                   accept="audio/mpeg3">
                            <input class="file-duration" id="file_duration" name="file_duration"
                                   type="hidden">
                            <input class="file-size" id="file_size" name="file_size" type="hidden">
{{--                            <input class="file-input" id="music-upload" name="music_upload" type="file"--}}
{{--                                   accept="audio/mpeg3">--}}
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
                            @if(key_exists('file', json_decode($errors, true)))
                                <span class="alert-error alert-danger fade show"
                                      role="alert">{{json_decode($errors, true)['file'][0]}}
                                </span>
                            @endif
                        @endif
                        <button href="{{route('uploadYoutubeContente')}}" class="upload-music--btn mb-5">Upload now
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <script>
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
            $("#audio").on("canplaythrough", function (e) {
                var seconds = e.currentTarget.duration;
                var duration = secondsToTimeString(seconds);
                $('#file_duration').val(duration);
                $('#normal_state').css('display', 'none');
                $('#uploaded_state').css('display', 'block');
                $("#track_length_duration span").text(duration);

                var loading = 0;
                var interval = setInterval(function () {
                    if (loading == 100) {
                        clearInterval(interval);
                        $('.loading_name').text('Loaded');
                        $('#track_length_duration').css('display', 'block');
                    }
                    $('.loading_inner').css('width', loading + '%');
                    loading = loading + 2;
                }, 20);
            });

            $("#music-upload").change(function (e) {
                var file = e.currentTarget.files[0];
                $("#file_size").val(bytesToSize(file.size));
                objectUrl = URL.createObjectURL(file);
                $("#audio").prop("src", objectUrl);
            });
        }, 2000);
    </script>
@endsection
