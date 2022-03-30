@extends('layouts.dashboard')

@section('content')



<div class="dashboard-area">
                <h5 class="dashboard-title">Dashboard</h5>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-dashboard-inner">
                            <img src="{{ URL::asset('img/icon/open-book.png');}}" alt="img">
                            <div class="media-body">
                                <h4>12</h4>
                                <p>Enrolled Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-dashboard-inner">
                            <img src="{{ URL::asset('img/icon/open-book.png');}}" alt="img">
                            <div class="media-body">
                                <h4>6</h4>
                                <p>Active Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-dashboard-inner">
                            <img src="{{ URL::asset('img/icon/open-book.png');}}" alt="img">
                            <div class="media-body">
                                <h4>1</h4>
                                <p>Completed Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-dashboard-inner">
                            <img src="{{ URL::asset('img/icon/open-book.png');}}" alt="img">
                            <div class="media-body">
                                <h4>12,273</h4>
                                <p>Total Student</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-dashboard-inner">
                            <img src="{{ URL::asset('img/icon/open-book.png');}}" alt="img">
                            <div class="media-body">
                                <h4>10</h4>
                                <p>Total Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-dashboard-inner">
                            <img src="{{ URL::asset('img/icon/open-book.png');}}" alt="img">
                            <div class="media-body">
                                <h4>$1,232</h4>
                                <p>Total Earnings</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endsection