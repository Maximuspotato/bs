<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Bothsides - The Workplace Debates </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/')}}/assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="{{url('/')}}/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{url('/')}}/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{url('/')}}/assets/css/slicknav.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/gijgo.css">
	<link rel="stylesheet" href="{{url('/')}}/assets/css/animate.min.css">
	<link rel="stylesheet" href="{{url('/')}}/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="{{url('/')}}/assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="{{url('/')}}/assets/css/themify-icons.css">
	<link rel="stylesheet" href="{{url('/')}}/assets/css/slick.css">
	<link rel="stylesheet" href="{{url('/')}}/assets/css/nice-select.css">
	<link rel="stylesheet" href="{{url('/')}}/assets/css/style.css">    
    {{-- <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#51ef2d",
                    },
                },
            },
        };
    </script> --}}
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{url('/')}}/assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="{{url('/')}}"><img src="{{url('/')}}/assets/img/logo/logo.png" alt="" width="300" height="80"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{url('/')}}">Home</a></li>
                                            <li><a href="{{url('/')}}/about">About</a></li>
                                            <li><a href="{{url('/')}}/events">Events</a></li>
                                            <li><a href="{{url('/')}}/blogs">Blog</a></li>
                                            <li><a href="{{url('/')}}/contact">Contact</a></li>
                                            @auth
                                                <li>
                                                    <div class="dropdown" style="color:red">
                                                        <span>Admin</span>
                                                        <div class="dropdown-options" style="background: white; opacity: 89%">
                                                            <a href="{{url('/')}}/events/add">Add Event</a>
                                                            <a href="{{url('/')}}/attendees/all">Attendees</a>
                                                            <a href="{{url('/')}}/blogs/post">Post blog</a>
                                                            <form action="{{url('/')}}/users/logout" method="post">
                                                                @csrf
                                                                <button type="submit" class="btn header-btn" style="opacity:89%">Log out</button>
                                                            </form>
                                                        </div>
                                                      </div>
                                                </li>
                                            @endauth
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                    <a href="{{url('/')}}/attendees/register" class="btn header-btn">Register</a>
                                </div>
                            </div>
                        </div>   
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Footer Start-->
    <div class="footer-area footer-padding">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                   <div class="single-footer-caption mb-50">
                     <div class="single-footer-caption mb-30">
                         <div class="footer-tittle">
                             <h4>About Us</h4>
                             <div class="footer-pera">
                                 <p>A platform where seasoned professionals debate pertinent work-related issues</p>
                            </div>
                         </div>
                     </div>
                   </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Contact Info</h4>
                            <ul>
                                <li><a href="#">Email : letstalk@bothsides.co.ke</a></li>
                                <li><a href="#">Facebook: @bothsidesevents</a></li>
                                <li><a href="#">Twitter: @BothsidesEvent</a></li>
                                <li><a href="#">LinkedIn: BothSides Events</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Important Links</h4>
                            <ul>
                                <li><a href="{{url('/')}}/about">About Us</a></li>
                                <li><a href="{{url('/')}}/events">Events</a></li>
                                <li><a href="{{url('/')}}/blogs">Blog</a></li>
                                <li><a href="{{url('/')}}/contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Newsletter</h4>
                            <div class="footer-pera footer-pera2">
                             <p>Subscribe for BothSides Content</p>
                         </div>
                         <!-- Form -->
                         <div class="footer-form" >
                             <div id="mc_embed_signup">
                                 <form target="_blank" action=""
                                 method="get" class="subscribe_form relative mail_part">
                                     <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                     class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                     onblur="this.placeholder = ' Email Address '">
                                     <div class="form-icon">
                                         <button type="submit" name="submit" id="newsletter-submit"
                                         class="email_icon newsletter-submit button-contactForm"><img src="{{url('/')}}/assets/img/gallery/form.png" alt=""></button>
                                     </div>
                                     <div class="mt-10 info"></div>
                                 </form>
                             </div>
                         </div>
                        </div>
                    </div>
                </div>
            </div>
           <!--  -->
           <div class="row footer-wejed justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <!-- logo -->
                    {{-- <div class="footer-logo mb-20">
                    <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                    </div> --}}
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                <div class="footer-tittle-bottom">
                    <span>1000+</span>
                    <p>Attendees</p>
                </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="footer-tittle-bottom">
                        <span>50+</span>
                        <p>Debators</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <!-- Footer Bottom Tittle -->
                    <div class="footer-tittle-bottom">
                        <span>30+</span>
                        <p>Events</p>
                    </div>
                </div>
           </div>
        </div>
    </div>
    <!-- footer-bottom area -->
    <div class="footer-bottom-area footer-bg">
        <div class="container">
            <div class="footer-border">
                 <div class="row d-flex justify-content-between align-items-center">
                     <div class="col-xl-10 col-lg-8 ">
                         <div class="footer-copy-right">
                             <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> Bothsides. All rights reserved</p>
                         </div>
                     </div>
                     <div class="col-xl-2 col-lg-4">
                         <div class="footer-social f-right">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                         </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="{{url('/')}}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{url('/')}}/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{url('/')}}/assets/js/popper.min.js"></script>
<script src="{{url('/')}}/assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="{{url('/')}}/assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{url('/')}}/assets/js/owl.carousel.min.js"></script>
<script src="{{url('/')}}/assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{url('/')}}/assets/js/wow.min.js"></script>
<script src="{{url('/')}}/assets/js/animated.headline.js"></script>
<script src="{{url('/')}}/assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="{{url('/')}}/assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="{{url('/')}}/assets/js/jquery.nice-select.min.js"></script>
<script src="{{url('/')}}/assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint -->
<script src="{{url('/')}}/assets/js/jquery.counterup.min.js"></script>
<script src="{{url('/')}}/assets/js/waypoints.min.js"></script>
<script src="{{url('/')}}/assets/js/jquery.countdown.min.js"></script>
<!-- contact js -->
<script src="{{url('/')}}/assets/js/contact.js"></script>
<script src="{{url('/')}}/assets/js/jquery.form.js"></script>
<script src="{{url('/')}}/assets/js/jquery.validate.min.js"></script>
<script src="{{url('/')}}/assets/js/mail-script.js"></script>
<script src="{{url('/')}}/assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="{{url('/')}}/assets/js/plugins.js"></script>
<script src="{{url('/')}}/assets/js/main.js"></script>

<x-flash-message />

</body>
</html>