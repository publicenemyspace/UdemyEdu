<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from themefie.com/html/edufie/home-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Mar 2022 03:18:23 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edufie - Online Courses Html Template</title>
    <!--fivicon icon-->
    <link rel="icon" href="{{ asset('img/fevicon.png')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset('css/animate.min.css');}}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css');}}">
    <link rel="stylesheet" href="{{ URL::asset('css/magnific.min.css');}}">
    <link rel="stylesheet" href="{{ URL::asset('css/nice-select.min.css');}}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.min.css');}}">
    <link rel="stylesheet" href="{{ URL::asset('css/fontawesome.min.css');}}">
    <link rel="stylesheet" href="{{ URL::asset('/css/style.css');}}">
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

    <!-- navbar start -->
    <header class="navbar-area">
        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#themefie_main_menu" 
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="logo">
                    <a class="main-logo" href="/"><img src="{{ URL::asset('img/logo.png');}}" alt="img"></a>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <ul>
                        <li><a class="search header-search" href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="themefie_main_menu">
                    <div class="single-input-wrap">
                        <input type="text" placeholder="Search your best courses">
                        <button><i class="fa fa-search"></i></button>
                    </div>
                    <ul class="navbar-nav menu-open text-end">
                        
                        <li class="menu-item-has-children">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                
                                <li><a href="/instructor">Instructor</a></li>
                                <li><a href="/single_instructor">Single Instructor</a></li>
                                <li><a href="/dashboard">Dashboard</a></li>
                                <li><a href="signin.html">Sign In</a></li>
                                <li><a href="signup.html">Sign Up</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/become_an_instructor">Become an Instructor</a>
                        </li>
                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <ul>
                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-basket"></i></a></li>
                        <li><a href="#"><img src="{{ URL::asset('img/author/2.png');}}" alt="img"></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="category-navbar navbar-area d-xl-block d-none">
        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav menu-open">
        
                       <li>
                            <a href="/development">Development</a>
                        </li>
                        <li>
                            <a href="/crypto">Crypto</a>
                        </li>
                        <li>
                            <a href="/forex">Forex</a>
                        </li>
                        <li>
                            <a href="/programming">Programming</a>
                        </li>
                  
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->
    




    @yield('content')


     <!-- footer area start -->
     <footer class="footer-area">
        <div class="footer-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-4 col-sm-6">
                        <div class="footer-widget widget widget_link">
                            <h4 class="widget-title">Categories</h4>
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="pe-5">
                                        <li><a href="category.html">Development</a></li>
                                        <li><a href="category.html">Business</a></li>
                                        <li><a href="category.html">Finance & Accounting</a></li>
                                        <li><a href="category.html">IT & Software</a></li>
                                        <li><a href="category.html">Office Productivity</a></li>
                                        <li><a href="category.html">Design</a></li>
                                        <li><a href="category.html">Marketing</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="pe-5">
                                        <li><a href="category.html">Lifiestyle</a></li>
                                        <li><a href="category.html">Photography & Video</a></li>
                                        <li><a href="category.html">Health & Fitness</a></li>
                                        <li><a href="category.html">Music</a></li>
                                        <li><a href="category.html">UX Design</a></li>
                                        <li><a href="category.html">Seo</a></li>
                                        <li><a href="category.html">Business Analysis and Strategy</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul>
                                        <li><a href="category.html">Customer Service</a></li>
                                        <li><a href="category.html">Human Resources</a></li>
                                        <li><a href="category.html">Leadership and Management
                                        </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-widget widget widget_link">
                            <h4 class="widget-title">Link</h4>
                            <ul class="pe-4">
                                <li><a href="blog.html">News & Blogs
                                </a></li>
                                <li><a href="blog-cat.html">Blog Category</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li><a href="course.html">Course</a></li>
                                <li><a href="course-details.html">Course Details</a></li>
                                <li><a href="instructor.html">Instructor</a></li>
                                <li><a href="instructor-details.html">Instructor Details</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-widget widget widget_link">
                            <h4 class="widget-title">Support</h4>
                            <ul class="pe-4">
                                <li><a href="home.html">Documentation</a></li>
                                <li><a href="faq.html">FAQS</a></li>
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer bottom-->
        <div class="container">
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-xl-7 align-self-center">
                        <div class="d-md-flex align-items-center mb-4 mb-xl-0">
                            <div class="logo d-inline-block">
                                <img src="{{ URL::asset('img/logo.png');}}" alt="img">
                            </div>
                            <div class="copyright-area">
                                <p>&copy {{ date("Y")}}  All Rights Reserved</p>       
                            </div>
                        </div>                        
                    </div>
                    <div class="col-xl-5 align-self-center text-xl-end">
                        <ul class="social-area d-inline-block">
                            <li><a class="active" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                        <select class="single-select float-sm-end">
                            <option>English</option>
                            <option value="asc">Bangla</option>
                            <option value="desc">Spanish</option>
                            <option value="pop">French</option>
                        </select>
                    </div>
                </div>                
            </div>
        </div>
        <!--Footer bottom-->
    </footer>
    <!-- footer area end -->      

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
    <script src="{{ URL::asset('js/magnific.min.js');}}"></script>
    <script src="{{ URL::asset('js/isotope.pkgd.min.js');}}"></script>
    <script src="{{ URL::asset('js/nice-select.min.js');}}"></script>
    <script src="{{ URL::asset('js/fontawesome.min.js');}}"></script>
    <script src="{{ URL::asset('js/ripple.js');}}"></script>
    <script src="{{ URL::asset('js/owl.min.js');}}"></script>
    <script src="{{ URL::asset('js/slick-slider.min.js');}}"></script>
    <script src="{{ URL::asset('js/wow.min.js');}}"></script>
    <!-- main js  -->
    <script src="{{ URL::asset('js/main.js');}}"></script>
</body>

<!-- Mirrored from themefie.com/html/edufie/home-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Mar 2022 03:19:12 GMT -->
</html>