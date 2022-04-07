<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edufie - Online Courses Html Template</title>
    <!--fivicon icon-->
    <link rel="icon" href="{{ URL::asset('img/fevicon.png');}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset('/css/animate.min.css');}}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css');}}">
    <link rel="stylesheet" href="{{ URL::asset('css/magnific.min.css');}}">
    <link rel="stylesheet" href="{{ URL::asset('css/nice-select.min.css');}}">
    <link rel="stylesheet" href="{{ URL::asset('/css/owl.min.css');}}">
    <link rel="stylesheet" href="{{ URL::asset('/css/slick-slide.min.css');}}">
    <link rel="stylesheet" href="{{ URL::asset('css/fontawesome.min.css');}}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css');}}">
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css');}}">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">


</head>
<body class='sc5'>
    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div id="wave1">
            </div>
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->
    <div class="body-overlay" id="body-overlay"></div>

    <!-- search popup area start -->
    <div class="search-popup" id="search-popup">
        <form action="https://themefie.com/html/edufie/home.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->

    <section class="admin-dashboard-section">
        <div class="admin-dashboard-right-side">
            <!-- top header start  -->
            <div class="main-header">
                <div class="header-wraper">
                    <div class="row">
                        <div class="col-xl-6">
                            <span class="header-user">
                                <a href="#"><img src="{{ URL::asset('img/author/02.png');}}" alt="img"></a>
                                <span>Hello,
                                    <h5>Ramjan Ali Anik</h5>
                                </span>
                            </span>
                        </div>
                        <div class="col-xl-6 align-self-center text-lg-end">
                            <div class="d-lg-flex align-items-center">
                                <div class="user-rating text-center d-inline-block">
                                    <span class="d-block">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    4.0 (172 Ratings)
                                </div>
                                <a class="header-btn btn btn-white" href="#">Create a new course</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top header end  -->

            
       
            @yield('content')

        <!-- dashboard-left-menu start  -->
        <div class="dashboard-left-menu">
            <a href="/" class="logo"><img src="{{ URL::asset('img/logo.png');}}" alt="img"></a>
            <ul>
                <li class="nav-item">
                    <a class="dashboard-item-menu"  href="/dashboard"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu"  href="/dashboard/add"><i class="fas fa-plus"></i></i>Add Course</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu"  href="/myprofile"><i class="fa fa-user"></i> My Profile</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu"  href="dashboard-course.html"><i class="fas fa-graduation-cap"></i>Enrolled Courses</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu"  href="dashboard-wishlist.html"><i class="fas fa-bookmark"></i>Wishlist</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu"  href="dashboard-review.html"><i class="fas fa-star"></i>Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu"  href="#"><i class="fab fa-buffer"></i>My Quiz Attempts</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu"  href="#"><i class="fa fa-shopping-cart"></i>Purchase History</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu"  href="/mycourses"><i class="fas fa-book"></i>My Courses</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu"  href="#"><i class="fas fa-money-check"></i>Earnings</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu"  href="#"><i class="fas fa-wallet"></i>Withdrawal</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu"  href="#"><i class="fas fa-question-circle"></i>Quiz Attempts</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu"  href="#"><i class="fas fa-user-graduate"></i>Question & Answer</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu"  href="#"><i class="fas fa-book"></i>Assignments</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu"  href="#"><i class="fas fa-cog"></i>Settings</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu"  href="#"><i class="fas fa-sign-out-alt"></i>Logout</a>
                </li>
            </ul>
        </div>
    </section> 

    <!-- back-to-top end -->
    <div class="back-to-top">
        <span class="back-top"><i class="fas fa-angle-double-up"></i></span>
    </div>

    

    <!-- all plugins here -->
    <script src="{{ URL::asset('js/jquery.3.6.min.js');}}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js');}}"></script>
    <script src="{{ URL::asset('js/imageloded.min.js');}}"></script>
    <script src="{{ URL::asset('js/counterup.js');}}"></script>
    <script src="{{ URL::asset('js/waypoint.js');}}"></script>
    <script src="{{ URL::asset('/magnific.min.js');}}"></script>
    <script src="{{ URL::asset('js/isotope.pkgd.min.js');}}"></script>
    <script src="{{ URL::asset('js/nice-select.min.js');}}"></script>
    <script src="{{ URL::asset('js/fontawesome.min.js');}}"></script>
    <script src="{{ URL::asset('js/ripple.js');}}"></script>
    <script src="{{ URL::asset('js/owl.min.js');}}"></script>
    <script src="{{ URL::asset('js/slick-slider.min.js');}}"></script>
    <script src="{{ URL::asset('/js/wow.min.js');}}"></script>
    <!-- main js  -->
    <script src="{{ URL::asset('js/main.js');}}"></script>
</body>

</html>