@extends('admin.layouts.app')
@section('content')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="users-tab" id="users-tab">
                <h3 style="margin-bottom: 17px !important; padding-top: 30px" class="page-title--4 mb-1 text-dark">
                    Withdraw Request</h3>

                <div class="tab-content" id="nav-tabContent" style="margin-top: 35px">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <table class="table users-table" cellspacing="0">
                            <thead>
                            <tr class="page-title--2 text-black" style="background-color: white">
                                <th class="page-title--2" style="color: #182D53; font-weight:600 ">User</th>
                                <th class="page-title--2" style="color: #182D53; font-weight:600 ">Amount</th>
                                <th class="page-title--2" style="color: #182D53; font-weight:600 "></th>
                                <th class="page-title--2" style="color: #182D53; font-weight:600 ">Date</th>
                                <th class="page-title--2" style="color: #182D53; font-weight:600 ">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="green-bg" style="color: #182D53">
                                <td class="block-1--description">
                                    John Smith
                                </td>
                                <td class="block-1--description">$50</td>
                                <td class="block-1--description"></td>
                                <td class="block-1--description">April 28th, 2021</td>
                                <td class="action-icons">
                                    <button class="material-edit">
                                        <img src="{{ asset('assets/image/user/icon-success.svg') }}" alt="">
                                    </button>
                                    <button class="material-delet">
                                        <img src="{{ asset('assets/image/user/icon-error.svg') }}" alt="">
                                    </button>
                                </td>
                            </tr>
                            <tr style="background-color: white; color: #182D53">
                                <td class="block-1--description">
                                    Jessica Doe
                                </td>
                                <td class="block-1--description">$50</td>
                                <td class="block-1--description"></td>
                                <td class="block-1--description">April 28th, 2021</td>
                                <td class="action-icons">
                                    <button class="material-edit">
                                        <img src="{{ asset('assets/image/user/icon-success.svg') }}" alt="">
                                    </button>
                                    <button class="material-delet">
                                        <img src="{{ asset('assets/image/user/icon-error.svg') }}" alt="">
                                    </button>
                                </td>
                            </tr>
                            <tr class="green-bg" style="color: #182D53">
                                <td class="block-1--description">
                                    John Smith
                                </td>
                                <td class="block-1--description">$50</td>
                                <td class="block-1--description"></td>
                                <td class="block-1--description">April 28th, 2021</td>
                                <td class="action-icons">
                                    <button class="material-edit">
                                        <img src="{{ asset('assets/image/user/icon-success.svg') }}" alt="">
                                    </button>
                                    <button class="material-delet">
                                        <img src="{{ asset('assets/image/user/icon-error.svg') }}" alt="">
                                    </button>
                                </td>
                            </tr>
                            <tr style="background-color: white; color: #182D53">
                                <td class="block-1--description">
                                    Jessica Doe
                                </td>
                                <td class="block-1--description">$50</td>
                                <td class="block-1--description"></td>
                                <td class="block-1--description">April 28th, 2021</td>
                                <td class="action-icons">
                                    <button class="material-edit">
                                        <img src="{{ asset('assets/image/user/icon-success.svg') }}" alt="">
                                    </button>
                                    <button class="material-delet">
                                        <img src="{{ asset('assets/image/user/icon-error.svg') }}" alt="">
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
