
@extends('layouts.main')

@section('content')




    <!-- Banner Area Start-->
    <section class="banner-area style-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="banner-user-area text-center h-100">
                        <div class="user-inner">
                            <h5>Hi Welcome {{ Auth::user()->name }}! ,</h5>
                            <p>Welcome to Edufie,Keep learning in the moments that matter.</p>
                            <a class="btn btn-base" href="#">Start my free month</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="banner-style-2">
                        <div class="row">
                            <div class="col-md-8 align-self-center">
                                <div class="banner-inner-2 text-md-start text-center">
                                    <h2>Find the Best Courses & Upgrade Your Skills.</h2>
                                    <div class="banner-content">
                                        <p>Increase your skills by using special features and professional courses from Edufie. </p>                         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- lesson Area Start-->
    <section class="lesson-area pd-top-135 pd-bottom-145">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Let's start learning, {{ Auth::user()->name }}</h2>                 
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="lesson-slider owl-carousel">
                        <div class="item">
                            <div class="single-course-wrap media">
                                <div class="thumb" style="background-image: url(/img/lesson/01.jpg)">
                                </div>
                                <div class="wrap-details">
                                    <h6><a href="#">PHP for Beginners - Become a PHP Master </a></h6>
                                    <div class="user-area">
                                        <div class="user-details">
                                            <img src="{{ URL::asset('img/author/1.png');}}" alt="img">
                                            <a href="#">Jessica Jessy</a>
                                        </div>
                                        <div class="user-rating">
                                            <span><i class="fa fa-star"></i>
                                                4.9</span>(76)
                                        </div>
                                    </div>
                                    <div class="progress-item">
                                        <div class="row align-items-center">
                                            <div class="col-5">
                                                <span>Total Lessons: <span>8</span></span>
                                            </div>
                                            <div class="col-7 text-end">
                                                <span>Completed Lessons: <span>1 / 8</span></span>
                                            </div>
                                        </div>
                                        <div class="progress-bg">
                                            <div id="progress-1" class="progress-rate" data-value="13">
                                                <div class="progress-count-wrap">
                                                    <span class="progress-count counting" data-count="13">0</span>
                                                    <span class="counting-icons">% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-course-wrap media">
                                <div class="thumb" style="background-image: url(/img/course/4.png);">
                                </div>
                                <div class="wrap-details">
                                    <h6><a href="#">Best way learn fundamentals of design.</a></h6>
                                    <div class="user-area">
                                        <div class="user-details">
                                            <img src="{{ URL::asset('img/author/1.png');}}" alt="img">
                                            <a href="#">Jessica Jessy</a>
                                        </div>
                                        <div class="user-rating">
                                            <span><i class="fa fa-star"></i>
                                                4.9</span>(76)
                                        </div>
                                    </div>
                                    <div class="progress-item">
                                        <div class="row align-items-center">
                                            <div class="col-5">
                                                <span>Total Lessons: <span>8</span></span>
                                            </div>
                                            <div class="col-7 text-end">
                                                <span>Completed Lessons: <span>2 / 8</span></span>
                                            </div>
                                        </div>
                                        <div class="progress-bg">
                                            <div id="progress-2" class="progress-rate" data-value="26">
                                                <div class="progress-count-wrap">
                                                    <span class="progress-count counting" data-count="26">0</span>
                                                    <span class="counting-icons">% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-course-wrap media">
                                <div class="thumb" style="background-image: url(assets/img/course/3.png);">
                                </div>
                                <div class="wrap-details">
                                    <h6><a href="#">About latest tips news and course for Illustration 2021</a></h6>
                                    <div class="user-area">
                                        <div class="user-details">
                                            <img src="{{ URL::asset('img/author/1.png');}}" alt="img">
                                            <a href="#">Jessica Jessy</a>
                                        </div>
                                        <div class="user-rating">
                                            <span><i class="fa fa-star"></i>
                                                4.9</span>(76)
                                        </div>
                                    </div>
                                    <div class="progress-item">
                                        <div class="row align-items-center">
                                            <div class="col-5">
                                                <span>Total Lessons: <span>8</span></span>
                                            </div>
                                            <div class="col-7 text-end">
                                                <span>Completed Lessons: <span>1 / 8</span></span>
                                            </div>
                                        </div>
                                        <div class="progress-bg">
                                            <div id="progress-3" class="progress-rate" data-value="13">
                                                <div class="progress-count-wrap">
                                                    <span class="progress-count counting" data-count="13">0</span>
                                                    <span class="counting-icons">% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- lesson Area End -->

    <!-- service Area Start-->
    <section class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title">
                        <h2>Find the right course</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in eget phasellus dui tincidunt nascetur nisl nunc consequat. Arcu ultricies pulvinar enim vulputate.</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="category-service">
                        <div class="item">
                            <div class="single-service-wrap">
                                <h6>Digital Marketing</h6>
                                <p>236 Course Available</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-service-wrap">
                                <h6>Web Development</h6>
                                <p>236 Course Available</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-service-wrap">
                                <h6>Photography</h6>
                                <p>236 Course Available</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-service-wrap">
                                <h6>Drawing</h6>
                                <p>236 Course Available</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-service-wrap">
                                <h6>UX Design</h6>
                                <p>236 Course Available</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-service-wrap">
                                <h6>JavaScript</h6>
                                <p>236 Course Available</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-service-wrap">
                                <h6>Graphics Design</h6>
                                <p>236 Course Available</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-service-wrap">
                                <h6>Web Marketing</h6>
                                <p>236 Course Available</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-service-wrap">
                                <h6>Digital Marketing</h6>
                                <p>236 Course Available</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-service-wrap">
                                <h6>UX Design</h6>
                                <p>236 Course Available</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-service-wrap">
                                <h6>JavaScript</h6>
                                <p>236 Course Available</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-service-wrap">
                                <h6>Graphics Design</h6>
                                <p>236 Course Available</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-service-wrap">
                                <h6>Digital Marketing</h6>
                                <p>236 Course Available</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-service-wrap">
                                <h6>JavaScript</h6>
                                <p>236 Course Available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service Area End -->

    <!-- trending courses Area Start-->
    <section class="trending-courses-area pd-top-120 pd-bottom-135">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Programming Courses
                        </h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="course-slider owl-nav-none owl-carousel">
                                            
                    @if(count($Course)> 0)
                    @foreach($Course as $Courses)
                        <div class="item">
                            <div class="single-course-wrap">
                                <div class="thumb">
                                    <a href="#" class="cat cat-blue">Beginner</a>
                                    <img src="storage/files/{{$Courses->photo}}" alt="img">
                                </div>
                                <div class="wrap-details">
                                    <h6><a href="/coursedetail/{{$Courses->id}}">{{$Courses->title}}</a></h6>
                                    <div class="user-area">
                                        <div class="user-details">
                                            <img src="{{ URL::asset('img/author/1.png');}}" alt="img">
                                            <a href="/coursedetail/{{$Courses->id}}">{{$Courses->instructor}}</a>
                                        </div>
                                        <div class="user-rating">
                                            <span><i class="fa fa-star"></i>
                                                4.9</span>(76)
                                        </div>
                                    </div>
                                    <div class="price-wrap">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <a href="#">Development</a>
                                            </div>
                                            <div class="col-6 text-end">
                                                <div class="/coursedetail/{{$Courses->id}}">{{$Courses->cost}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        @else
                        <p class="alert alert-danger"> No Programming course available <p>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- trending courses Area End -->

    <!-- trending courses Area Start-->
    <section class="trending-courses-area pd-bottom-135">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Crypto Courses
                        </h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="course-slider owl-nav-none owl-carousel">

                    @if(count($crypto_courses)> 0)
                    @foreach($crypto_courses as $crypto_course)
                      
                    <div class="item">
                            <div class="single-course-wrap">
                                <div class="thumb">
                                    <a href="#" class="cat cat-blue">Beginner</a>
                                    <img style="width:407px !important; height:303px !important;"  src="storage/files/{{$crypto_course->photo}}" alt="img">
                                </div>
                                <div class="wrap-details">
                                    <h6><a href="/coursedetail/{{$crypto_course->id}}">{{$crypto_course->title}}</a></h6>
                                    <div class="user-area">
                                        <div class="user-details">
                                            <img src="{{ URL::asset('img/author/1.png');}}" alt="img">
                                            <a href="/coursedetail/{{$crypto_course->id}}">{{$crypto_course->instructor}}</a>
                                        </div>
                                        <div class="user-rating">
                                            <span><i class="fa fa-star"></i>
                                                4.9</span>(76)
                                        </div>
                                    </div>
                                    <div class="price-wrap">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <a href="#">Development</a>
                                            </div>
                                            <div class="col-6 text-end">
                                                <div class="/coursedetail/{{$crypto_course->id}}">{{$crypto_course->cost}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         @endforeach

                        @else
                        <p class="alert alert-danger"> No Crypto course available <p>

                        @endif
                    </div>
                
                </div>
            </div>
        </div>
    </section>
    <!-- trending courses Area End -->

    <!-- trending courses Area Start-->
    <section class="trending-courses-area pd-bottom-135">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Forex Courses
                        </h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="course-slider owl-nav-none owl-carousel">

                    @if(count($forex_courses)> 0)
                    @foreach($forex_courses as $forex_course)

                        <div class="item">
                            <div class="single-course-wrap">
                                <div class="thumb">
                                    <a href="#" class="cat cat-blue">Beginner</a>
                                    <img src="storage/files/{{$forex_course->photo}}" alt="img">
                                </div>
                                <div class="wrap-details">
                                    <h6><a href="/coursedetail/{{$forex_course->id}}">{{$forex_course->title}}</a></h6>
                                    <div class="user-area">
                                        <div class="user-details">
                                            <img src="{{ URL::asset('img/author/1.png');}}" alt="img">
                                            <a href="/coursedetail/{{$forex_course->id}}">{{$forex_course->instructor}}</a>
                                        </div>
                                        <div class="user-rating">
                                            <span><i class="fa fa-star"></i>
                                                4.9</span>(76)
                                        </div>
                                    </div>
                                    <div class="price-wrap">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <a href="#">Development</a>
                                            </div>
                                            <div class="col-6 text-end">
                                                <div class="/coursedetail/{{$forex_course->id}}">{{$forex_course->cost}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        @else
                        <p class="alert alert-danger"> No Forex course available <p>

                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- trending courses Area End -->

    <!-- trending courses Area Start-->
    <section class="trending-courses-area pd-bottom-135">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Digital Marketing
                        </h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="course-slider owl-nav-none owl-carousel">
                        <div class="item">
                            <div class="single-course-wrap">
                                <div class="thumb">
                                    <a href="#" class="cat cat-blue">Beginner</a>
                                    <img src="{{ URL::asset('img/course/5.png');}}" alt="img">
                                </div>
                                <div class="wrap-details">
                                    <h6><a href="#">PHP for Beginners - Become a PHP Master - CMS Project</a></h6>
                                    <div class="user-area">
                                        <div class="user-details">
                                            <img src="{{ URL::asset('img/author/1.png');}}" alt="img">
                                            <a href="#">Jessica Jessy</a>
                                        </div>
                                        <div class="user-rating">
                                            <span><i class="fa fa-star"></i>
                                                4.9</span>(76)
                                        </div>
                                    </div>
                                    <div class="price-wrap">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <a href="#">Development</a>
                                            </div>
                                            <div class="col-6 text-end">
                                                <div class="price">$30</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-course-wrap">
                                <div class="thumb">
                                    <a href="#" class="cat cat-red">Expert</a>
                                    <img src="{{ URL::asset('img/course/6.png');}}" alt="img">
                                </div>
                                <div class="wrap-details">
                                    <h6><a href="#">Best way learn fundamentals of design.</a></h6>
                                    <div class="user-area">
                                        <div class="user-details">
                                            <img src="{{ URL::asset('img/author/1.png');}}" alt="img">
                                            <a href="#">Jessica Jessy</a>
                                        </div>
                                        <div class="user-rating">
                                            <span><i class="fa fa-star"></i>
                                                4.9</span>(76)
                                        </div>
                                    </div>
                                    <div class="price-wrap">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <a href="#">Development</a>
                                            </div>
                                            <div class="col-6 text-end">
                                                <div class="price">$30</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-course-wrap">
                                <div class="thumb">
                                    <a href="#" class="cat cat-green">All Level</a>
                                    <img src="{{ URL::asset('img/course/2.png');}}" alt="img">
                                </div>
                                <div class="wrap-details">
                                    <h6><a href="#">About latest tips news and course for Illustration 2021</a></h6>
                                    <div class="user-area">
                                        <div class="user-details">
                                            <img src="{{ URL::asset('img/author/1.png');}}" alt="img">
                                            <a href="#">Jessica Jessy</a>
                                        </div>
                                        <div class="user-rating">
                                            <span><i class="fa fa-star"></i>
                                                4.9</span>(76)
                                        </div>
                                    </div>
                                    <div class="price-wrap">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <a href="#">Development</a>
                                            </div>
                                            <div class="col-6 text-end">
                                                <div class="price">$30</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-course-wrap">
                                <div class="thumb">
                                    <a href="#" class="cat cat-blue">Beginner</a>
                                    <img src="{{ URL::asset('img/course/7.png');}}" alt="img">
                                </div>
                                <div class="wrap-details">
                                    <h6><a href="#">Email & Affiliate Marketing Mastermind</a></h6>
                                    <div class="user-area">
                                        <div class="user-details">
                                            <img src="{{ URL::asset('img/author/1.png');}}" alt="img">
                                            <a href="#">Jessica Jessy</a>
                                        </div>
                                        <div class="user-rating">
                                            <span><i class="fa fa-star"></i>
                                                4.9</span>(76)
                                        </div>
                                    </div>
                                    <div class="price-wrap">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <a href="#">Development</a>
                                            </div>
                                            <div class="col-6 text-end">
                                                <div class="price">$30</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- trending courses Area End -->

    <!-- trending courses Area Start-->
    <section class="trending-courses-area pd-bottom-140">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Digital Marketing
                        </h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="course-slider owl-nav-none owl-carousel">
                        <div class="item">
                            <div class="single-course-wrap">
                                <div class="thumb">
                                    <a href="#" class="cat cat-blue">Beginner</a>
                                    <img src="{{ URL::asset('img/course/5.png');}}" alt="img">
                                </div>
                                <div class="wrap-details">
                                    <h6><a href="#">PHP for Beginners - Become a PHP Master - CMS Project</a></h6>
                                    <div class="user-area">
                                        <div class="user-details">
                                            <img src="{{ URL::asset('img/author/1.png');}}" alt="img">
                                            <a href="#">Jessica Jessy</a>
                                        </div>
                                        <div class="user-rating">
                                            <span><i class="fa fa-star"></i>
                                                4.9</span>(76)
                                        </div>
                                    </div>
                                    <div class="price-wrap">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <a href="#">Development</a>
                                            </div>
                                            <div class="col-6 text-end">
                                                <div class="price">$30</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-course-wrap">
                                <div class="thumb">
                                    <a href="#" class="cat cat-red">Expert</a>
                                    <img src="{{ URL::asset('img/course/6.png');}}" alt="img">
                                </div>
                                <div class="wrap-details">
                                    <h6><a href="#">Best way learn fundamentals of design.</a></h6>
                                    <div class="user-area">
                                        <div class="user-details">
                                            <img src="{{ URL::asset('img/author/1.png');}}" alt="img">
                                            <a href="#">Jessica Jessy</a>
                                        </div>
                                        <div class="user-rating">
                                            <span><i class="fa fa-star"></i>
                                                4.9</span>(76)
                                        </div>
                                    </div>
                                    <div class="price-wrap">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <a href="#">Development</a>
                                            </div>
                                            <div class="col-6 text-end">
                                                <div class="price">$30</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-course-wrap">
                                <div class="thumb">
                                    <a href="#" class="cat cat-green">All Level</a>
                                    <img src="{{ URL::asset('img/course/2.png');}}" alt="img">
                                </div>
                                <div class="wrap-details">
                                    <h6><a href="#">About latest tips news and course for Illustration 2021</a></h6>
                                    <div class="user-area">
                                        <div class="user-details">
                                            <img src="{{ URL::asset('img/author/1.png');}}" alt="img">
                                            <a href="#">Jessica Jessy</a>
                                        </div>
                                        <div class="user-rating">
                                            <span><i class="fa fa-star"></i>
                                                4.9</span>(76)
                                        </div>
                                    </div>
                                    <div class="price-wrap">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <a href="#">Development</a>
                                            </div>
                                            <div class="col-6 text-end">
                                                <div class="price">$30</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-course-wrap">
                                <div class="thumb">
                                    <a href="#" class="cat cat-blue">Beginner</a>
                                    <img src="{{ URL::asset('img/course/7.png');}}" alt="img">
                                </div>
                                <div class="wrap-details">
                                    <h6><a href="#">Email & Affiliate Marketing Mastermind</a></h6>
                                    <div class="user-area">
                                        <div class="user-details">
                                            <img src="{{ URL::asset('img/author/1.png');}}" alt="img">
                                            <a href="#">Jessica Jessy</a>
                                        </div>
                                        <div class="user-rating">
                                            <span><i class="fa fa-star"></i>
                                                4.9</span>(76)
                                        </div>
                                    </div>
                                    <div class="price-wrap">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <a href="#">Development</a>
                                            </div>
                                            <div class="col-6 text-end">
                                                <div class="price">$30</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- trending courses Area End -->





@endsection


