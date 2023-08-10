<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/{{ Route('index') }} by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Aug 2023 05:51:54 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>WorkVista</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-5-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/video.css') }}">
    <link rel="stylesheet" id="color" href="{{ asset('css/colors/pink.css') }}">
    @yield('csscontent')
</head>

<body class="homepage-9 hp-6 hd-white hmp7 mh">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->

        <header id="header-container" class="container">
            <!-- Header -->
            
            <div id="header">
                <div class="container container-header">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="{{ Route('index') }}"><img src="{{ asset('images/logo-red.svg') }}" alt=""></a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
							<span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1">
                            <ul id="responsive">
                                <li><a href="{{ Route('index') }}">Home</a></li>
                                <li><a href="{{ Route('about') }}">About Us</a></li>
                                <li><a href="{{ Route('blog-list') }}">Blog</a></li>
                                <li><a href="{{ Route('contact-us') }}">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->

                    <!-- Right Side Content / End -->
                    <div class="right-side d-none d-none d-lg-none d-xl-flex">
                        <!-- Header Widget -->
                        <div class="header-widget">
                            <a href="{{Route('add_properties')}}" class="button border">Add Listing<i class="fas fa-laptop-house ml-2"></i></a>
                        </div>
                        <!-- Header Widget / End -->
                    </div>
                    <!-- Right Side Content / End -->

                    <!-- Right Side Content / End -->
                    @if(Session::has('user'))
                    <div class="header-user-menu user-menu add">
                        <div class="header-user-name">
                            <span></span>Hi, {{ Session::get('user')->name }}
                        </div>
                        <ul>
                            <li><a href="{{Route('user-profile')}}"> Edit profile</a></li>
                            <li><a href="{{Route('add_properties')}}"> Add Property</a></li>
                            <li><a href="{{Route('payment-method')}}">  Payments</a></li>
                            <li><a href="{{Route('change-password')}}"> Change Password</a></li>
                            <li><a href="{{ Route('logout') }}">Log Out</a></li>
                        </ul>
                    </div>
                    @else
                    <div class="header-user-menu user-menu add">
                        <div class="header-user-name-1">
                            <a href="{{ Route('login') }}">Login</a>
                        </div>
                    </div>
                    @endif
                    
                    <!-- Right Side Content / End -->

                    
                    <!-- Right Side Content / End -->
                </div>
            </div>
            <!-- Header / End -->

        </header>
       
       
    
    
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        @yield('content')

        <!-- START FOOTER -->
        <footer class="first-footer">
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="netabout">
                                <a href="{{ Route('index') }}" class="logo">
                                    <img src="{{ asset('images/logo-footer.svg') }}" alt="netcom">
                                </a>
                                <p>Footer</p>
                            </div>
                            <div class="contactus">
                                <ul>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p class="in-p">95 South Park Avenue, USA</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p class="in-p">+91 9691565883</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p class="in-p ti">intouchsoftware.co.in</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="navigation">
                                <h3>Navigation</h3>
                                <div class="nav-footer">
                                    <ul>
                                        <li><a href="{{ Route('index') }}">Home</a></li>
                                        <li><a href="{{ Route('properties-grid') }}">Properties Right</a></li>
                                        <li><a href="{{ Route('properties-grid') }}">Properties List</a></li>
                                        <li><a href="{{Route('properties-details')}}">Property Details</a></li>
                                    </ul>
                                    <ul class="nav-right">
                                        <li><a href="{{ Route('about') }}">About Us</a></li>
                                        <li><a href="{{Route('blog-list')}}">Blog Default</a></li>
                                        <li><a href="{{ Route('blog-details', ['slug'=>$blog->slug]) }}">Blog Details</a></li>
                                        <li class="no-mgb"><a href="{{ Route('contact-us') }}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget">
                                <h3>Twitter Feeds</h3>
                                <div class="twitter-widget contuct">
                                    <div class="twitter-area">
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                                <h4>about 5 days ago</h4>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                                <h4>about 5 days ago</h4>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                                <h4>about 5 days ago</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="newsletters">
                                <h3>Newsletters</h3>
                                <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in your inbox.</p>
                            </div>
                            <form class="bloq-email mailchimp form-inline" method="post">
                                <label for="subscribeEmail" class="error"></label>
                                <div class="email">
                                    <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter Your Email">
                                    <input type="submit" value="Subscribe">
                                    <p class="subscription-success"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer">
                <div class="container">
                    <p>2021 © Copyright - All Rights Reserved.</p>
                    <ul class="netsocials">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

        <!--register form -->
        <div class="login-and-register-form modal">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
                    <div class="soc-log fl-wrap">
                        <p>Login</p>
                        <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                        <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                    </div>
                    <div class="log-separator fl-wrap"><span>Or</span></div>
                    <div id="tabs-container">
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1">Login</a></li>
                            <li><a href="#tab-2">Register</a></li>
                        </ul>
                        <div class="tab">
                            <div id="tab-1" class="tab-contents">
                                <div class="custom-form">
                                    <form method="post" name="registerform">
                                        <label>Username or Email Address * </label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>Password * </label>
                                        <input name="password" type="password" onClick="this.select()" value="">
                                        <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                        <div class="clearfix"></div>
                                        <div class="filter-tags">
                                            <input id="check-a" type="checkbox" name="check">
                                            <label for="check-a">Remember me</label>
                                        </div>
                                    </form>
                                    <div class="lost_password">
                                        <a href="#">Lost Your Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div id="tab-2" class="tab-contents">
                                    <div class="custom-form">
                                        <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                            <label>First Name * </label>
                                            <input name="name" type="text" onClick="this.select()" value="">
                                            <label>Second Name *</label>
                                            <input name="name2" type="text" onClick="this.select()" value="">
                                            <label>Email Address *</label>
                                            <input name="email" type="text" onClick="this.select()" value="">
                                            <label>Password *</label>
                                            <input name="password" type="password" onClick="this.select()" value="">
                                            <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->

        <!-- ARCHIVES JS -->
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('js/rangeSlider.js') }}"></script>
        <script src="{{ asset('js/tether.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/moment.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/mmenu.min.js') }}"></script>
        <script src="{{ asset('js/mmenu.js') }}"></script>
        <script src="{{ asset('js/animate.js') }}"></script>
        <script src="{{ asset('js/aos.js') }}"></script>
        <script src="{{ asset('js/aos2.js') }}"></script>
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <script src="{{ asset('js/fitvids.js') }}"></script>
        <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('js/typed.min.js') }}"></script>
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
        <script src="{{ asset('js/lightcase.js') }}"></script>
        <script src="{{ asset('js/search.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('js/newsletter.js') }}"></script>
        <script src="{{ asset('js/jquery.form.js') }}"></script>
        <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('js/searched.js') }}"></script>
        <script src="{{ asset('js/forms-2.js') }}"></script>
        <script src="{{ asset('js/leaflet.js') }}"></script>
        <script src="{{ asset('js/leaflet-gesture-handling.min.js') }}"></script>
        <script src="{{ asset('js/leaflet-providers.js') }}"></script>
        <script src="{{ asset('js/leaflet.markercluster.js') }}"></script>
        <script src="{{ asset('js/map-style2.js') }}"></script>
        <script src="{{ asset('js/range.js') }}"></script>
        <script src="{{ asset('js/color-switcher.js') }}"></script>

        <!-- Slider Revolution scripts -->
        <script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
        @yield('jscontent')
        <script>
            var typed = new Typed('.typed', {
                strings: ["Office Space ^2000", "Working Space ^2000", "Meeting Rooms ^4000", "Training Rooms ^2000"],
                smartBackspace: false,
                loop: true,
                showCursor: true,
                cursorChar: "|",
                typeSpeed: 50,
                backSpeed: 30,
                startDelay: 800
            });

        </script>
        <script>
            $('.slick-lancers2').slick({
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
                arrows: false,
                adaptiveHeight: true,
                responsive: [{
                    breakpoint: 1292,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false
                    }
                }]
            });

        </script>
        <script>
            $('.slick-lancers').slick({
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
                arrows: false,
                adaptiveHeight: true,
                responsive: [{
                    breakpoint: 1292,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false
                    }
                }]
            });

        </script>

        <script>
            $(".dropdown-filter").on('click', function() {

                $(".explore__form-checkbox-list").toggleClass("filter-block");

            });

        </script>

        <!-- MAIN JS -->
        <script src="{{ asset('js/script.js') }}"></script>

    </div>
    <!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/{{ Route('index') }} by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Aug 2023 05:51:56 GMT -->
</html>
