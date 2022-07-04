@extends('admin.layouts.app')
@section('content')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <h3 class="page-title--4 mb-1 text-dark">Revenue</h3>
            <!--            <p class="page-title&#45;&#45;2 analytics-title">Some stores don’t provide live sales & streaming data,-->
            <!--                so these reports may not reflect your exact final sales figures.</p>-->
            <div class="block-4 analytics" style="margin-top: 30px">
                <div class="analytics-diagram2">
                    <div class="first-div">
                        <div class="item1">
                            <div class="img_user">
                                <img src="{{ asset('assets/image/royality/user.svg') }}" alt="">
                                <p class="title_royality_first">User</p>
                            </div>
                            <p class="count user-num" style="font-weight: 600">500</p>
                        </div>
                        <div class="item1">
                            <div class="img_user">
                                <img src="{{ asset('assets/image/royality/music.svg') }}" alt="">
                                <p class="title_royality_first">Music</p>
                            </div>
                            <p class="count music-num"  style="font-weight: 600">500</p>
                        </div>
                    </div>
                    <div class="second-div">
                        <div class="item1">
                            <div class="img_user">
                                <img src="{{ asset('assets/image/royality/store.svg') }}" alt="">
                                <p class="title_royality_first">Store</p>
                            </div>
                            <p class="count store-num"  style="font-weight: 600">500</p>
                        </div>
                    </div>
                </div>


                <div class="weekly-report2">
                    <div style="display: flex; justify-content: space-between;">
                        <div style="display: flex; flex-direction: column">
                            <div class="revenue-title">Total Sales</div>
                            <div class="revenue-price">$56565.985</div>
                        </div>
                        <div style="display: flex">
                            <select class="form-select2" aria-label="Default select example">
                                <option selected>Songs</option>
                                <option value="1">Song1</option>
                                <option value="2">Song1</option>
                                <option value="3">Song1</option>
                            </select>
                            <select class="form-select2" aria-label="Default select example">
                                <option selected>Month</option>
                                <option value="1">June</option>
                                <option value="2">Jule</option>
                                <option value="3">Sep</option>
                            </select>
                        </div>
                    </div>
                    <img class="revenue-img" src="{{ asset('assets/image/royality/revenue.svg') }}" alt="">
                </div>

            </div>
            <div class="block-2">
                <div class="block-2--countries block-bg">
                    <div  style="font-size:18px " class="page-title">
                        <b> Best Performing Countries</b>
                    </div>
                    <div class="block-2--map">
                        <img src="{{ asset('assets/image/royality/map.svg') }}" alt="">
                    </div>
                </div>
                <div class="block-2--stores block-bg">
                    <div  style="font-size:18px "  class="page-title">
                        <b>Best Performing Stores
                        </b>
                    </div>
                    <div class="block-2--diagram">
                        <img src="{{ asset('assets/image/royality/stores.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
