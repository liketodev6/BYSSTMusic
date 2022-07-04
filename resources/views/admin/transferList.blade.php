@extends('admin.layouts.app')
@section('content')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <h3 style="margin-bottom: 17px !important; padding-top: 30px" class="page-title--4 mb-1 text-dark">
                Transfer List</h3>
            <div class="block-3 users-tab" id="users-tab">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <table class="table users-table" cellspacing="0">
                            <thead>
                            <tr class="page-title--2">
                                <th class="page-title--2">Full name</th>
                                <th class="page-title--2">Amount</th>
                                <th class="page-title--2">Date</th>
                                <th class="page-title--2">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="green-bg">
                                <td class="block-1--description">
                                    <img class="user-circle" src="{{ asset('assets/image/page-img/user-circle.svg') }}" alt="">
                                    John Smith
                                </td>
                                <td class="block-1--description">$50 <span class="text-success"></span></td>
                                <td class="block-1--description">April 28th, 2021</td>
                                <td class="action-icons">
                                    <a href="" class="canceled_text">Canceled</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="block-1--description">
                                    <img class="user-circle" src="{{ asset('assets/image/page-img/user-circle.svg') }}" alt="">
                                    Jessica Doe
                                </td>
                                <td class="block-1--description">$50 <span class="text-success"></span></td>
                                <td class="block-1--description">April 28th, 2021</td>
                                <td class="action-icons">
                                    <a href="" class="canceled_text">Canceled</a>
                                </td>
                            </tr>
                            <tr class="green-bg">
                                <td class="block-1--description">
                                    <img class="user-circle" src="{{ asset('assets/image/page-img/user-circle.svg') }}" alt="">
                                    John Smith
                                </td>
                                <td class="block-1--description">$50 <span class="text-success"></span></td>
                                <td class="block-1--description">April 28th, 2021</td>
                                <td class="action-icons">
                                    <a href="">Done</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="block-1--description">
                                    <img class="user-circle" src="{{ asset('assets/image/page-img/user-circle.svg') }}" alt="">
                                    Jessica Doe
                                </td>
                                <td class="block-1--description">$50 <span class="text-success"></span></td>
                                <td class="block-1--description">April 28th, 2021</td>
                                <td class="action-icons">
                                    <a href="" class="canceled_text">Canceled</a>
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
