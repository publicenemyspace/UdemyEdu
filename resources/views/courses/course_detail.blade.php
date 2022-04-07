@extends('layouts.main')

@section('content')

 
 <!-- courses-details Area Start-->
 <section class="courses-details-area pd-top-135 pd-bottom-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-course-wrap mb-0">
                        <div class="thumb">
                            <a class="play-btn" href="#"><i class="fa fa-play"></i></a>
                            
                            <video width="320" height="240" controls>
                            <source src="storage/files/{{$Course->video}}" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                            </video>
                            
                        </div>
                        <div class="wrap-details">
                            <h5><a href="#">{{$Course->title}}</a></h5>
                            <p>{{$Course->description}}</p>
                            <div class="user-area">
                                <div class="user-details">
                                    <img src="{{ URL::asset('img/author/1.png');}}" alt="img">
                                    <a href="#">{{$Course->instructor}}</a>
                                </div>
                                <div class="date ms-auto">
                                    <i class="fa fa-calendar-alt me-2" style="color: var(--main-color);"></i>Last updated 9/2020
                                </div>
                                <div class="ms-auto">
                                    <i class="fa fa-user me-2" style="color: var(--main-color);"></i>5k already enrolled
                                </div>
                                <div class="user-rating">
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-alt"></i>
                                    4.9</span>(76)
                                </div>
                            </div>
                            <div class="buying-wrap d-flex align-items-center">
                                <h2 class="price d-inline-block mb-0">{{$Course->cost}}</h2>
                                <a class="btn btn-base ms-auto" href="#">Add to Cart</a>
                                <a class="btn btn-base-light ms-3" href="#">Buy Now</a>
                                <div class="ms-auto d-425-none">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a class="ms-4" href="#"><i class="fa fa-share me-2"></i>share</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="course-tab nav nav-pills pd-top-100">
                        <li class="nav-item">
                          <button class="nav-link active" id="pill-1" data-bs-toggle="pill" data-bs-target="#pills-01" type="button" role="tab" aria-controls="pills-01" aria-selected="true">Overview</button>
                        </li>
                        <li class="nav-item">
                          <button class="nav-link" id="pill-2" data-bs-toggle="pill" data-bs-target="#pills-02" type="button" role="tab" aria-controls="pills-02" aria-selected="false">Exercise Files</button>
                        </li>
                        <li class="nav-item">
                          <button class="nav-link" id="pill-3" data-bs-toggle="pill" data-bs-target="#pills-03" type="button" role="tab" aria-controls="pills-03" aria-selected="false">Reviews</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-01" role="tabpanel" aria-labelledby="pill-1">
                            <div class="overview-area">
                                <h5>Course details</h5>
                                <p>New to web design? Start here first. Instructor James Williamson introduces the fundamental concepts, tools, and learning paths for web design. He explains what it means to be a web designer, the various areas of specialization, and whether web design is the right hobby or career for you. Along the way, he talks to five prominent designers and developers, who have each found success in a different corner of the web.
                                </p>
                                <div class="bg-gray">
                                    <h6>What Will I Learn?
                                    </h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i>Know how to configure Wordpress for best results
                                                </li>
                                                <li><i class="fa fa-check"></i>Understand plugins & themes and how to find/install them</li>
                                                <li><i class="fa fa-check"></i>Protect their Wordpress website from hackers and spammers</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i>Create a static homepage useful for most websites, or a blog like homepage useful for bloggers.</li>
                                                <li><i class="fa fa-check"></i>Create an affiliate site for passive, recurring income
                                                </li>
                                                <li><i class="fa fa-check"></i>Create a Responsive Website that looks good on any browser.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h6>Requirements</h6>
                                <ul>
                                    <li><i class="fa fa-check"></i>No previous experience or software needed!
                                    </li>
                                    <li><i class="fa fa-check"></i>An open mind!</li>
                                </ul>
                                <h6 class="mt-5">Skills covered in this course
                                </h6>
                                <ul>
                                    <li><i class="fa fa-check"></i>This course is great for beginners who are still learning the financial markets.
                                    </li>
                                    <li><i class="fa fa-check"></i>This course is perfect for you if you are taking over an existing Wordpress website, or want to build one from scratch, but don't know where to start.</li>
                                    <li><i class="fa fa-check"></i>If you want to learn to master Wordpress without getting bogged down with technical jargon, this course is for you.
                                    </li>
                                </ul>
                                <div class="reviewers-area">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="media d-flex align-items-center">
                                                <div class="thumb">
                                                    <img src="{{ URL::asset('img/author/01.png');}}" alt="img">
                                                </div>
                                                <div class="media-body">
                                                    <h6>Jessica Jessy</h6>
                                                    <span>Product Designer</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <p class="review-content">Great for the people that are willing to improve and learn. Please show up to the course with an open mind because the instructor got his own views and philosophy towards design that might challenge your own. This course will teach you...</p>
                                        </div>
                                    </div>
                                    <div class="meta-area d-flex">
                                        <div class="user-rating ms-0">
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-alt"></i>
                                            4.9</span>(76)
                                        </div>
                                        <div class="ms-auto">
                                            <i class="fa fa-user me-2" style="color: var(--main-color);"></i>6794 students
                                        </div>
                                        <div class="ms-md-5 ms-auto mb-0">
                                            <i class="far fa-user me-2" style="color: var(--main-color);"></i>6794 students
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-02" role="tabpanel" aria-labelledby="pill-2">...</div>
                        <div class="tab-pane fade" id="pills-03" role="tabpanel" aria-labelledby="pill-3">...</div>
                    </div>
                </div>
                <div class="col-lg-4 sidebar-area">
                    <div class="widget widget-accordion-inner">
                        <h5 class="widget-title border-0">Course Syllabus</h5>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Introduction
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>

                                    @if(count($course_category)> 0)
                                  @foreach($course_category as $course_categories)
                                        <li>
                                            <a class="play-btn" href="#"><i class="fa fa-play"></i></a>
                                            <span>
                                                <p>{{$course_categories->title}}</p>
                                                
                                            </span>
                                        </li>

                                    @endforeach

                                    @endif
                                    </ul>                                    
                                </div>
                              </div>
                            </div>
                            
                        </div> 
                    </div>
                    <div class="widget widget-course-details mb-0">
                        <h5 class="widget-title">Course Details</h5>
                        <ul>
                            <li>Level: <span>Beginner</span></li>
                            <li>Categories: <span><a href="#">Business</a><a href="#">Design</a><a href="#">Development</a><a href="#">Marketing</a><a href="#">WordPress</a></span></li>
                            <li>Total Hour: <span>07h 30m</span></li>
                            <li>Total Lessons: <span>15</span></li>
                            <li>Total Enrolled: <span>5000</span></li>
                            <li>Last Update: <span>August 23, 2021</span></li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- courses-details Area End -->
    @endsection
