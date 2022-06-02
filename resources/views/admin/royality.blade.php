@extends('admin.layouts.app')
@section('content')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <h3 class="page-title--4 mb-5 text-dark">Royality</h3>
            <!--            <p class="page-title&#45;&#45;2 analytics-title">Some stores don’t provide live sales & streaming data, so these reports may not reflect your exact final sales figures.</p>-->
            <div class="block-4 analytics">

                <form class="analytics-diagram" method="POST" action="{{route('addRoyality')}}"
                      enctype="multipart/form-data">
                    @if(count($errors) > 0)
                        <div class="p-1">
                            @foreach($errors->all() as $error)
                                <div class="alert alert-warning alert-danger fade show" role="alert">{{$error}}
                                    <button type="button" class="close"
                                            data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    @csrf
                    <p class="analytics-diagram-text1">Upload CSV file</p>
                    <label for="user" class="select_user_label">Select User</label><br>
                    <select class="form-select" aria-label="Default select example" name="userId">
                        <option selected></option>
                        @foreach($users as $user)
                            <option value="{{$user['id']}}"> {{$user['name']}} </option>
                        @endforeach
                    </select>

                    <label for="user" class="select_user_label">Service</label><br>
                    <select class="form-select" aria-label="Default select example" name="service">
                        <option selected></option>
                        <option value="2">Distribute Audio</option>
                        <option value="4">Youtube ContentID</option>
                    </select>
                    <div class="row row-media">
                        <div class="col-md-12 upload-file-style">
                            <div class="file-drop-area upload-file">
                                <div class="file-icon">
                                    <img src="{{asset('assets/image/page-img/Icon-upload.svg')}}" alt="">
                                </div>
                                <span class="file-message">Upload Release Cover</span>
                                <input type="file" class="file-input" name="file">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="sidebar-link2">Send</button>


                </form>


                <div class="weekly-report">
                    <img src="{{asset('assets/image/royality/diagrama.svg')}}" alt="">

                </div>

            </div>
            <div class="block-3 project-tab" id="tabs">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <table class="table analytics-table" cellspacing="0">
                            <thead>
                            <tr class="page-title--2">
                                <th class="page-title--2 text-success">Overview</th>
                                <th class="page-title--2"></th>
                                <th class="page-title--2"></th>
                                <th class="page-title--2"></th>

                            </tr>
                            </thead>
                            <thead>
                            <tr class="page-title--2">
                                <th class="page-title--2">User</th>
                                <th class="page-title--2">Track</th>
                                <th class="page-title--2">Total Sales</th>
                                <th class="page-title--2">Total Earnings</th>

                            </tr>
                            </thead>
                            <tbody>
                            {{--                            <tr class="green-bg">--}}
                            {{--                                <td class="orange-line analytics-table--td">John Smith</td>--}}
                            {{--                                <td class="analytics-table--td">Track Downloads</td>--}}
                            {{--                                <td class="text-dark">0</td>--}}
                            {{--                                <td class="text-dark">$0.00</td>--}}

                            {{--                            </tr>--}}
                            {{--                            <tr class="green-bg">--}}
                            {{--                                <td class="orange-line analytics-table--td">John Smith</td>--}}
                            {{--                                <td class="analytics-table--td">Track Downloads</td>--}}
                            {{--                                <td class="text-dark">0</td>--}}
                            {{--                                <td class="text-dark">$0.00</td>--}}

                            {{--                            </tr>--}}
                            {{--                            <tr class="green-bg">--}}
                            {{--                                <td class="orange-line analytics-table--td"></td>--}}
                            {{--                                <td class="font-weight-bold">Totals</td>--}}
                            {{--                                <td class="font-weight-bold">8,305,790</td>--}}
                            {{--                                <td style="color: red" class="font-weight-bold">$0.00</td>--}}
                            {{--                            </tr>--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
