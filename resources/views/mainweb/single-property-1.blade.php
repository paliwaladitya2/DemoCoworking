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
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="../font/flaticon.css">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/aos2.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/lightcase.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/video.css">
    <link rel="stylesheet" id="color" href="../css/colors/pink.css">
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
                            <a href="{{ Route('index') }}"><img src="../images/logo-red.svg" alt=""></a>
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
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION PROPERTIES LISTING -->
        <section class="single-proper blog details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 blog-pots">
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                    $property = DB::table('property_approveds')->where('id',$id)->first();
                                ?>

                                <section class="headings-2 pt-0">
                                    <div class="pro-wrapper">
                                        <div class="detail-wrapper-body">
                                            <div class="listing-title-bar">
                                                <h3>{{ $property->title }}<span class="mrg-l-5 category-tag">For Rent</span></h3>
                                                <div class="mt-0">
                                                    <a href="#listing-location" class="listing-address">
                                                        <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i>{{ $property->address }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single detail-wrapper mr-2">
                                            <div class="detail-wrapper-body">
                                                <div class="listing-title-bar">
                                                    <h4>{{ $property->price }}</h4>
                                                    <div class="mt-0">
                                                        <a href="#listing-location" class="listing-address">
                                                            <p>{{ $property->price }}</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- main slider carousel items -->
                                <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                                    <h5 class="mb-4">Gallery</h5>
                                    <div class="carousel-inner">
                                        <div class="active item carousel-item" data-slide-number="0">
                                            <img src="../PropertyImages/{{ $property->image1 }}" class="img-fluid" alt="slider-listing">
                                        </div>
                                        @if($property->image2)
                                        <div class="item carousel-item" data-slide-number="1">
                                            <img src="../PropertyImages/{{ $property->image2 }}" class="img-fluid" alt="slider-listing">
                                        </div>
                                        @endif
                                        @if($property->image3)
                                        <div class="item carousel-item" data-slide-number="2">
                                            <img src="../PropertyImages/{{ $property->image3 }}" class="img-fluid" alt="slider-listing">
                                        </div>
                                        @endif
                                        @if($property->image4)
                                        <div class="item carousel-item" data-slide-number="3">
                                            <img src="../PropertyImages/{{ $property->image4 }}" class="img-fluid" alt="slider-listing">
                                        </div>
                                        @endif
                                        @if($property->image5)
                                        <div class="item carousel-item" data-slide-number="4">
                                            <img src="../PropertyImages/{{ $property->image5 }}" class="img-fluid" alt="slider-listing">
                                        </div>
                                        @endif
                                        @if($property->image6)
                                        <div class="item carousel-item" data-slide-number="5">
                                            <img src="../PropertyImages/{{ $property->image6 }}" class="img-fluid" alt="slider-listing">
                                        </div>
                                        @endif
                                        @if($property->image7)
                                        <div class="item carousel-item" data-slide-number="6">
                                            <img src="../PropertyImages/{{ $property->image7 }}" class="img-fluid" alt="slider-listing">
                                        </div>
                                        @endif
                                        <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                        <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>

                                    </div>
                                    <!-- main slider carousel nav controls -->
                                    <ul class="carousel-indicators smail-listing list-inline">
                                        <li class="list-inline-item active">
                                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#listingDetailsSlider">
                                                <img src="../PropertyImages/{{ $property->image1 }}" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        @if($property->image2)
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-1" data-slide-to="1" data-target="#listingDetailsSlider">
                                                <img src="../PropertyImages/{{ $property->image2 }}" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        @endif
                                        @if($property->image3)
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-2" data-slide-to="2" data-target="#listingDetailsSlider">
                                                <img src="../PropertyImages/{{ $property->image3 }}" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        @endif
                                        @if($property->image4)
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-3" data-slide-to="3" data-target="#listingDetailsSlider">
                                                <img src="../PropertyImages/{{ $property->image4 }}" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        @endif
                                        @if($property->image5)
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-4" data-slide-to="4" data-target="#listingDetailsSlider">
                                                <img src="../PropertyImages/{{ $property->image5 }}" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        @endif
                                        @if($property->image6)
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-5" data-slide-to="5" data-target="#listingDetailsSlider">
                                                <img src="../PropertyImages/{{ $property->image6 }}" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        @endif
                                        @if($property->image7)
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-6" data-slide-to="6" data-target="#listingDetailsSlider">
                                                <img src="../PropertyImages/{{ $property->image7 }}" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        @endif
                                    </ul>
                                    <!-- main slider carousel items -->
                                </div>
                                <div class="single homes-content details mb-30">
                                    <h5 class="mb-4">Description</h5>
                                    <p>{{ $property->description }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="single homes-content details mb-30">
                            <!-- title -->
                            <h5 class="mb-4">Property Details</h5>
                            <ul class="homes-list clearfix">
                                <li>
                                    <span class="font-weight-bold mr-1">Property ID:</span>
                                    <span class="det">V254680</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Property Type:</span>
                                    <span class="det">House</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Property status:</span>
                                    <span class="det">For Rent</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Property Price:</span>
                                    <span class="det">INR. {{ $property->price }}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Cabins:</span>
                                    <span class="det">6</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Open Seats:</span>
                                    <span class="det">7</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Training Rooms</span>
                                    <span class="det">4</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Meeting Rooms:</span>
                                    <span class="det">3</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Parking:</span>
                                    <span class="det">2</span>
                                </li>
                            </ul>
                            
                            <!-- title -->
                            <h5 class="mt-5">Amenities</h5>
                            <!-- cars List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Air Cond</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Balcony</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Internet</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Dishwasher</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Bedding</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Cable TV</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Parking</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Pool</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Fridge</span>
                                </li>
                            </ul>
                        </div>
                        <div class="floor-plan property wprt-image-video w50 pro">
                            <h5>Floor Plans</h5>
                            <img alt="image" src="../images/bg/floor-plan-1.png">
                        </div>
                        <!-- <div class="floor-plan property wprt-image-video w50 pro">
                            <h5>What's Nearby</h5>
                            <div class="property-nearby">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="nearby-info mb-4">
                                            <span class="nearby-title mb-3 d-block text-info">
                                               <i class="fas fa-graduation-cap mr-2"></i><b class="title">Education</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="property-list list-unstyled mb-0">
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">Education Mandarin</h6>
                                                        <span>(15.61 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">Marry's Education</h6>
                                                        <span>(15.23 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">The Kaplan</h6>
                                                        <span>(15.16 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="nearby-info mb-4">
                                            <span class="nearby-title mb-3 d-block text-success">
                                              <i class="fas fa-user-md mr-2"></i><b class="title">Health & Medical</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="property-list list-unstyled mb-0">
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">Natural Market</h6>
                                                        <span>(13.20 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">Food For Health</h6>
                                                        <span>(13.22 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">A Matter of Health</h6>
                                                        <span>(13.34 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="nearby-info">
                                            <span class="nearby-title mb-3 d-block text-danger">
                                                <i class="fas fa-car mr-2"></i><b class="title">Transportation</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="property-list list-unstyled mb-0">
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">Airport Transportation</h6>
                                                        <span>(11.36 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">NYC Executive Limo</h6>
                                                        <span>(11.87 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">Empire Limousine</h6>
                                                        <span>(11.52 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="property wprt-image-video w50 pro">
                            <h5>Property Video</h5>
                            <img alt="image" src="../images/slider/home-slider-4.jpg">
                            <a class="icon-wrap popup-video popup-youtube" href="https://www.youtube.com/watch?v=14semTlwyUY">
                                <i class="fa fa-play"></i>
                            </a>
                            <div class="iq-waves">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div> -->
                        <div class="property-location map">
                            <h5>Location</h5>
                            <div class="divider-fade"></div>
                            <div id="map-contact" class="contact-map"></div>
                        </div>
                        <!-- Star Reviews -->
                        <section class="reviews comments">
                            <h3 class="mb-5">3 Reviews</h3>
                            <div class="row mb-5">
                                <ul class="col-12 commented pl-0">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="../images/testimonials/ts-5.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info">
                                            <div class="conra">
                                                <h5 class="mb-2">Mary Smith</h5>
                                                <div class="rating-box">
                                                    <div class="detail-list-rating mr-0">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-4">May 30 2020</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                            <div class="rest"><img src="../images/single-property/s-1.jpg" class="img-fluid" alt=""></div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="row">
                                <ul class="col-12 commented pl-0">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="../images/testimonials/ts-4.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info">
                                            <div class="conra">
                                                <h5 class="mb-2">Abraham Tyron</h5>
                                                <div class="rating-box">
                                                    <div class="detail-list-rating mr-0">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-4">june 1 2020</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="row mt-5">
                                <ul class="col-12 commented mb-0 pl-0">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="../images/testimonials/ts-3.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info">
                                            <div class="conra">
                                                <h5 class="mb-2">Lisa Williams</h5>
                                                <div class="rating-box">
                                                    <div class="detail-list-rating mr-0">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-4">jul 12 2020</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                            <div class="resti">
                                                <div class="rest"><img src="../images/single-property/s-2.jpg" class="img-fluid" alt=""></div>
                                                <div class="rest"><img src="../images/single-property/s-3.jpg" class="img-fluid" alt=""></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <!-- End Reviews -->
                        <!-- Star Add Review -->
                        <section class="single reviews leve-comments details">
                            <div id="add-review" class="add-review-box">
                                <!-- Add Review -->
                                <h3 class="listing-desc-headline margin-bottom-20 mb-4">Add Review</h3>
                                <span class="leave-rating-title">Your rating for this listing</span>
                                <!-- Rating / Upload Button -->
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <!-- Leave Rating -->
                                        <div class="clearfix"></div>
                                        <div class="leave-rating margin-bottom-30">
                                            <input type="radio" name="rating" id="rating-1" value="1" />
                                            <label for="rating-1" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="rating-2" value="2" />
                                            <label for="rating-2" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="rating-3" value="3" />
                                            <label for="rating-3" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="rating-4" value="4" />
                                            <label for="rating-4" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="rating-5" value="5" />
                                            <label for="rating-5" class="fa fa-star"></label>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Uplaod Photos -->
                                        <div class="add-review-photos margin-bottom-30">
                                            <div class="photoUpload">
                                                <span><i class="sl sl-icon-arrow-up-circle"></i> Upload Photos</span>
                                                <input type="file" class="upload" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 data">
                                        <form action="#">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" placeholder="First Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" placeholder="Last Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="8" placeholder="Review" required></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-lg mt-2">Submit Review</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                        <!-- End Add Review -->
                    <aside class="col-lg-4 col-md-12 car">
                        <div class="single widget">
                            <!-- Start: Schedule a Tour -->
                            <div class="schedule widget-boxed mt-33 mt-0">
                                <div class="widget-boxed-header">
                                    <h4><i class="fa fa-calendar pr-3 padd-r-10"></i>Schedule a Tour</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 book">
                                            <input type="text" id="reservation-date" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
                                        </div>
                                        <div class="col-lg-6 col-md-12 book2">
                                            <input type="text" id="reservation-time" class="form-control" readonly="">
                                        </div>
                                    </div>
                                    <div class="row mrg-top-15 mb-3">
                                        <div class="col-lg-6 col-md-12 mt-4">
                                            <label class="mb-4">Adult</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
										 <button type="button" class="btn counter-btn theme-cl btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
											 <i class="fa fa-minus"></i>
										 </button>
									        </span>
                                                <input type="text" name="quant[1]" class="border-0 text-center form-control input-number" data-min="0" data-max="10" value="0">
                                                <span class="input-group-btn">
											 <button type="button" class="btn counter-btn theme-cl btn-number" data-type="plus" data-field="quant[1]">
											  <i class="fa fa-plus"></i>
											 </button>
									        </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 mt-4">
                                            <label class="mb-4">Children</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
										 <button type="button" class="btn counter-btn theme-cl btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
											 <i class="fa fa-minus"></i>
										 </button>
									        </span>
                                                <input type="text" name="quant[2]" class="border-0 text-center form-control input-number" data-min="0" data-max="10" value="0">
                                                <span class="input-group-btn">
											 <button type="button" class="btn counter-btn theme-cl btn-number" data-type="plus" data-field="quant[2]">
											  <i class="fa fa-plus"></i>
											 </button>
									        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{Route('payment-method')}}" class="btn reservation btn-radius theme-btn full-width mrg-top-10">Submit Request</a>
                                </div>
                            </div>
                            <!-- End: Schedule a Tour -->
                            <!-- end author-verified-badge -->
                            <div class="sidebar">
                                <div class="widget-boxed mt-33 mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Agent Information</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="sidebar-widget author-widget2">
                                            <div class="author-box clearfix">
                                                <img src="../images/testimonials/ts-1.jpg" alt="author-image" class="author__img">
                                                <h4 class="author__title">Lisa Clark</h4>
                                                <p class="author__meta">Agent of Property</p>
                                            </div>
                                            <ul class="author__contact">
                                                <li><span class="la la-map-marker"><i class="fa fa-map-marker"></i></span>302 Av Park, New York</li>
                                                <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="#">(234) 0200 17813</a></li>
                                                <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">lisa@gmail.com</a></li>
                                            </ul>
                                            <div class="agent-contact-form-sidebar">
                                                <h4>Request Inquiry</h4>
                                                <form name="contact_form" method="post" action="https://code-theme.com/html/findhouses/functions.php">
                                                    <input type="text" id="fname" name="full_name" placeholder="Full Name" required />
                                                    <input type="number" id="pnumber" name="phone_number" placeholder="Phone Number" required />
                                                    <input type="email" id="emailid" name="email_address" placeholder="Email Address" required />
                                                    <textarea placeholder="Message" name="message" required></textarea>
                                                    <input type="submit" name="sendmessage" class="multiple-send-message" value="Submit Request" />
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-search-field-2">
                                    <div class="widget-boxed mt-5">
                                        <div class="widget-boxed-header">
                                            <h4>Recent Properties</h4>
                                        </div>
                                        <div class="widget-boxed-body">
                                            <div class="recent-post">
                                                <div class="recent-main">
                                                    <div class="recent-img">
                                                        <a href="{{ Route('blog-details') }}"><img src="../images/feature-properties/fp-1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="info-img">
                                                        <a href="{{ Route('blog-details') }}"><h6>Family Home</h6></a>
                                                        <p>$230,000</p>
                                                    </div>
                                                </div>
                                                <div class="recent-main my-4">
                                                    <div class="recent-img">
                                                        <a href="{{ Route('blog-details') }}"><img src="../images/feature-properties/fp-2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="info-img">
                                                        <a href="{{ Route('blog-details') }}"><h6>Family Home</h6></a>
                                                        <p>$230,000</p>
                                                    </div>
                                                </div>
                                                <div class="recent-main">
                                                    <div class="recent-img">
                                                        <a href="{{ Route('blog-details') }}"><img src="../images/feature-properties/fp-3.jpg" alt=""></a>
                                                    </div>
                                                    <div class="info-img">
                                                        <a href="{{ Route('blog-details') }}"><h6>Family Home</h6></a>
                                                        <p>$230,000</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-boxed mt-5">
                                        <div class="widget-boxed-header mb-5">
                                            <h4>Feature Properties</h4>
                                        </div>
                                        <div class="widget-boxed-body">
                                            <div class="slick-lancers">
                                                <div class="agents-grid mr-0">
                                                    <div class="listing-item compact">
                                                        <a href="{{Route('properties-details')}}" class="listing-img-container">
                                                            <div class="listing-badges">
                                                                <span class="featured">$ 230,000</span>
                                                                <span>For Sale</span>
                                                            </div>
                                                            <div class="listing-img-content">
                                                                <span class="listing-compact-title">House Luxury <i>New York</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="../images/feature-properties/fp-1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="agents-grid mr-0">
                                                    <div class="listing-item compact">
                                                        <a href="{{Route('properties-details')}}" class="listing-img-container">
                                                            <div class="listing-badges">
                                                                <span class="featured">$ 6,500</span>
                                                                <span class="rent">For Rent</span>
                                                            </div>
                                                            <div class="listing-img-content">
                                                                <span class="listing-compact-title">House Luxury <i>Los Angles</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="../images/feature-properties/fp-2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="agents-grid mr-0">
                                                    <div class="listing-item compact">
                                                        <a href="{{Route('properties-details')}}" class="listing-img-container">
                                                            <div class="listing-badges">
                                                                <span class="featured">$ 230,000</span>
                                                                <span>For Sale</span>
                                                            </div>
                                                            <div class="listing-img-content">
                                                                <span class="listing-compact-title">House Luxury <i>San Francisco</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="../images/feature-properties/fp-3.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="agents-grid mr-0">
                                                    <div class="listing-item compact">
                                                        <a href="{{Route('properties-details')}}" class="listing-img-container">
                                                            <div class="listing-badges">
                                                                <span class="featured">$ 6,500</span>
                                                                <span class="rent">For Rent</span>
                                                            </div>
                                                            <div class="listing-img-content">
                                                                <span class="listing-compact-title">House Luxury <i>Miami FL</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="../images/feature-properties/fp-4.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="agents-grid mr-0">
                                                    <div class="listing-item compact">
                                                        <a href="{{Route('properties-details')}}" class="listing-img-container">
                                                            <div class="listing-badges">
                                                                <span class="featured">$ 230,000</span>
                                                                <span>For Sale</span>
                                                            </div>
                                                            <div class="listing-img-content">
                                                                <span class="listing-compact-title">House Luxury <i>Chicago IL</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="../images/feature-properties/fp-5.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="agents-grid mr-0">
                                                    <div class="listing-item compact">
                                                        <a href="{{Route('properties-details')}}" class="listing-img-container">
                                                            <div class="listing-badges">
                                                                <span class="featured">$ 6,500</span>
                                                                <span class="rent">For Rent</span>
                                                            </div>
                                                            <div class="listing-img-content">
                                                                <span class="listing-compact-title">House Luxury <i>Toronto CA</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="../images/feature-properties/fp-6.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Start: Specials offer -->
                                    <div class="widget-boxed popular mt-5">
                                        <div class="widget-boxed-header">
                                            <h4>Specials of the day</h4>
                                        </div>
                                        <div class="widget-boxed-body">
                                            <div class="banner"><img src="../images/single-property/banner.jpg" alt=""></div>
                                        </div>
                                    </div>
                                    <!-- End: Specials offer -->
                                    <div class="widget-boxed popular mt-5">
                                        <div class="widget-boxed-header">
                                            <h4>Popular Tags</h4>
                                        </div>
                                        <div class="widget-boxed-body">
                                            <div class="recent-post">
                                                <div class="tags">
                                                    <span><a href="#" class="btn btn-outline-primary">Houses</a></span>
                                                    <span><a href="#" class="btn btn-outline-primary">Real Home</a></span>
                                                </div>
                                                <div class="tags">
                                                    <span><a href="#" class="btn btn-outline-primary">Baths</a></span>
                                                    <span><a href="#" class="btn btn-outline-primary">Beds</a></span>
                                                </div>
                                                <div class="tags">
                                                    <span><a href="#" class="btn btn-outline-primary">Garages</a></span>
                                                    <span><a href="#" class="btn btn-outline-primary">Family</a></span>
                                                </div>
                                                <div class="tags">
                                                    <span><a href="#" class="btn btn-outline-primary">Real Estates</a></span>
                                                    <span><a href="#" class="btn btn-outline-primary">Properties</a></span>
                                                </div>
                                                <div class="tags no-mb">
                                                    <span><a href="#" class="btn btn-outline-primary">Location</a></span>
                                                    <span><a href="#" class="btn btn-outline-primary">Price</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <!-- START SIMILAR PROPERTIES -->
                <section class="similar-property featured portfolio p-0 bg-white-inner">
                    <div class="container">
                        <h5>Similar Properties</h5>
                        <div class="row portfolio-items">
                            @foreach($properties as $property)
                            <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="{{Route('single-property', ['id'=>$property->id])}}" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">For Rent</div>
                                                <div class="homes-price">INR. {{$property->price}}/mo</div>
                                                <img src="../PropertyImages/{{$property->image1}}" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="{{Route('single-property', ['id'=>$property->id])}}" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="{{Route('single-property', ['id'=>$property->id])}}" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="{{Route('single-property', ['id'=>$property->id])}}" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="{{Route('single-property', ['id'=>$property->id])}}">{{ $property->title }}</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="{{Route('single-property', ['id'=>$property->id])}}">
                                                <i class="fa fa-map-marker"></i><span>{{ $property->address }}</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix pb-3">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <div class="footer">
                                            <a href="agent-details.html">
                                                <img src="../images/testimonials/ts-1.jpg" alt="" class="mr-2"> Lisa Jhonson
                                            </a>
                                            <span>2 months ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </section>
                <!-- END SIMILAR PROPERTIES -->
            </div>
        </section>
        <!-- END SECTION PROPERTIES LISTING -->
        <footer class="first-footer">
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="netabout">
                                <a href="{{ Route('index') }}" class="logo">
                                    <img src="../images/logo-footer.svg" alt="netcom">
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum incidunt architecto soluta laboriosam, perspiciatis, aspernatur officiis esse.</p>
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
                                        <li><a href="{{ Route('blog-details') }}">Blog Details</a></li>
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
        <script src="../js/jquery-3.5.1.min.js"></script>
        <script src="../js/rangeSlider.js"></script>
        <script src="../js/tether.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/moment.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/mmenu.min.js"></script>
        <script src="../js/mmenu.js"></script>
        <script src="../js/animate.js"></script>
        <script src="../js/aos.js"></script>
        <script src="../js/aos2.js"></script>
        <script src="../js/slick.min.js"></script>
        <script src="../js/fitvids.js"></script>
        <script src="../js/jquery.waypoints.min.js"></script>
        <script src="../js/typed.min.js"></script>
        <script src="../js/jquery.counterup.min.js"></script>
        <script src="../js/imagesloaded.pkgd.min.js"></script>
        <script src="../js/isotope.pkgd.min.js"></script>
        <script src="../js/smooth-scroll.min.js"></script>
        <script src="../js/lightcase.js"></script>
        <script src="../js/search.js"></script>
        <script src="../js/owl.carousel.js"></script>
        <script src="../js/jquery.magnific-popup.min.js"></script>
        <script src="../js/ajaxchimp.min.js"></script>
        <script src="../js/newsletter.js"></script>
        <script src="../js/jquery.form.js"></script>
        <script src="../js/jquery.validate.min.js"></script>
        <script src="../js/searched.js"></script>
        <script src="../js/forms-2.js"></script>
        <script src="../js/leaflet.js"></script>
        <script src="../js/leaflet-gesture-handling.min.js"></script>
        <script src="../js/leaflet-providers.js"></script>
        <script src="../js/leaflet.markercluster.js"></script>
        <script src="../js/map-style2.js"></script>
        <script src="../js/range.js"></script>
        <script src="../js/color-switcher.js"></script>

        <!-- Slider Revolution scripts -->
        <script src="../revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="../revolution/js/jquery.themepunch.revolution.min.js"></script>
        
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
        <script src="../js/script.js"></script>

    </div>
    <!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/{{ Route('index') }} by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Aug 2023 05:51:56 GMT -->
</html>