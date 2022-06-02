@extends('admin.layouts.app')

@section('content')
<div class="wrapper">
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
                    <img class="arrow-down" src="../images/arrow-down.png" alt="">
                </a>
                <div class="iq-sub-dropdown iq-user-dropdown">
                    <div class="iq-card shadow-none m-0">
                        <div class="iq-card-body p-0 ">
                            <a href="admin-my-account.html" class="iq-sub-card iq-bg-primary-hover">
                                <div class="media align-items-center">
                                    <div class="rounded iq-card-icon iq-bg-primary">
                                        <img src="../images/user/icon-account.svg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-0 ">Account overview</h6>
                                    </div>
                                </div>
                            </a>
                            <a href="admin-order-history.html" class="iq-sub-card iq-bg-primary-hover">
                                <div class="media align-items-center">
                                    <div class="rounded iq-card-icon iq-bg-primary">
                                        <img src="../images/user/icon-history.svg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-0 ">Order history</h6>
                                    </div>
                                </div>
                            </a>
                            <a href="../sign-in.html" class="iq-sub-card iq-bg-primary-hover">
                                <div class="media align-items-center">
                                    <div class="rounded iq-card-icon iq-bg-primary">
                                        <img src="../images/user/log-out.svg" alt="">
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
        <div class="iq-navbar-custom for-admin-revenue">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="iq-menu-bt d-flex align-items-center">
                    <div class="wrapper-menu">
                        <div class="main-circle"><i class="las la-bars"></i></div>
                    </div>
                    <div class="iq-navbar-logo d-flex justify-content-between">
                        <a href="" class="header-logo">
                            <img src="../images/dashboard/logo/logo.svg" class="img-fluid rounded-normal" alt="">
                            <div class="pt-2 pl-2 logo-title">
                                <span class="text-primary text-uppercase">Royality</span>
                            </div>
                        </a>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
                <div class="collapse navbar-collapse navbar-order mb-2" id="navbarUsersContent aaa">
                    <h3 class="page-title"> Users</h3>
                    <button class="add__new-user" data-modal="#add-new-user">
                        + Add new user
                    </button>
                </div>
            </nav>
            <div class="block-3 users-tab" id="users-tab">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <table class="table users-table" cellspacing="0">
                            <thead >
                            <tr class="page-title--2">
                                <th class="page-title--2">Full name</th>
                                <th class="page-title--2">Email</th>
                                <th class="page-title--2">Date</th>
                                <th class="page-title--2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($users as $user)
                            <tr class="green-bg">
                                <td class="block-1--description">
                                    <img class="user-circle" src="{{asset('assets/image/user/icon-user-circle.svg')}}" alt="">
                                   {{$user->name}}
                                </td>
                                <td class="block-1--description">{{$user->email}}</td>
                                <td class="block-1--description">{{explode(" ", $user->created_at)[0]}}</td>
                                <td class="action-icons">
                                    <button class="material-edit" data-modal="#edit">
                                        <img src="{{asset('assets/image/user/icon-material-edit.svg')}}" alt="">
                                    </button>
                                    <button class="material-delet" data-modal="#remove">
                                        <img src="{{asset('assets/image/user/icon-delet.svg')}}" alt="">
                                    </button>
                                    <button class="material-edit">
                                        <img src="{{asset('assets/image/user/icon-success.svg')}}" alt="">
                                    </button>
                                    <button class="material-delet">
                                        <img src="{{asset('assets/image/user/icon-error.svg')}}" alt="">
                                    </button>
                                </td>
                            </tr>
                            @empty
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="add-new-user" class="modal">
    <div class="modal-content">
        <button type="button" data-modal="#modal-regards" class="modal-close">&times;</button>
        <form class="modal-form" action="" method="POST">
            @csrf
            <div class="modal-form--title page-title mb-4">
                Add new user
            </div>
            <form action="" method="">
                <div class="form-group">
                    <label for="first-name">First Name</label>
                    <input type="text" class="form-control" id="first-name" name="firstName">
                </div>
                <div class="form-group">
                    <label for="last-name">Last Name</label>
                    <input type="text" class="form-control" id="last-name" name="lastName">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <button type="submit" class="add-btn mt-3">Add User</button>
            </form>

        </form>
    </div>
</div>
<!-- modal end Add new user modal-->

<!-- Edit modal -->
<div id="edit" class="modal">
    <div class="modal-content">
        <button type="button" data-modal="#modal-regards" class="modal-close">&times;</button>
        <div class="modal-form">
            <div class="modal-form--title page-title mb-5">
                Edit User
            </div>
            <div class="edit-modal__content">
                <div class="modal-avatar">
                    <div class="modal-avatar__img">
                        <img src="../images/page-img/change-avatar.png" alt="">
                    </div>
                    <a class="change-avatar__link" href="#">Change avatar</a>
                </div>
                <form class="edit-user" action="" method="">
                    <div class="form-group">
                        <label for="edit_first--name">First Name</label>
                        <input type="text" class="form-control" id="edit_first--name">
                    </div>
                    <div class="form-group">
                        <label for="edit_last--name">Last Name</label>
                        <input type="text" class="form-control" id="edit_last--name">
                    </div>
                    <div class="form-group">
                        <label for="edit_email">Email</label>
                        <input type="email" class="form-control" id="edit_email">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="new_pass">New Password</label>
                            <input type="password" class="form-control" id="new_pass">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="conf_pass">Confirm Password</label>
                            <input type="password" class="form-control" id="conf_pass">
                        </div>
                    </div>
                    <button type="submit" class="edit-btn mt-3">Done</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="remove" class="modal">
    <div class="modal-content remove-content">
        <button type="button" data-modal="#modal-remove" class="modal-close">&times;</button>
        <div class="remove-info">
            <div class="remove-content__icon">
                <img src="../images/page-img/remove.svg" alt="">
            </div>
            <div class="remove-content__title monthly_title">
                Are you sure?
            </div>
            <div class="remove-content__description">
                Do you really want to delete this user?
            </div>
            <form class="remove-form" action="" method="">
                <button class="remove-cancel" name="cancel" type="">Cancel</button>
                <button class="remove-button" name="delete" type="submit">Delete</button>
            </form>
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


@endsection
