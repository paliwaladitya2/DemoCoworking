@extends('mainweb\index_main')
@section('csscontents')
<style>
    .owl-item {
  margin-left: px;
  justify-content: center;
}
.owl-item:first-child {
  margin-left: 0;
}
</style>
@endsection
@section('content')
        <!-- STAR HEADER SEARCH -->
        <div id="map-container" class="fullwidth-home-map dark-overlay">
            <!-- Video -->
            <div class="video-container">
                <video poster="images/bg/video-image.png" loop autoplay muted>
                    <source src="video/7.mp4" type="video/mp4">
                </video>
            </div>
            <div id="hero-area" class="main-search-inner search-2 vid">
                <div class="container vid" data-aos="zoom-in">
                    <div class="row" style="justify-content: center;">
                        <div class="col-md-9">
                            <div class="hero-inner2" style="display: flex;flex-direction: column;">
                                <!-- Welcome Text -->
                                <div class="welcome-text">
                                    <h1 class="h1">Find Your Perfect
                                    <br class="">
                                    <span class="typed border-bottom" style="text-transform: uppercase;"></span>
                                </h1>
                                    <p class="mt-4">We Have Over Million Properties For You.</p>
                                </div>
                                <!--/ End Welcome Text -->
                                <!-- Search Form -->
                                <div class="trip-search" style="display: inline-flex;justify-content: center">
                                    <form class="form">
                                        <!-- Form Location -->
                                        <div class="form-group location">
                                            <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-map-marker"></i>Location</span>
                                                <ul class="list">
                                                    <li data-value="1" class="option selected ">Indore</li>
                                                    <li data-value="2" class="option">Noida</li>
                                                    <li data-value="3" class="option">Gurgaon</li>
                                                    <li data-value="4" class="option">Banglore</li>
                                                    <li data-value="5" class="option">Mumbai</li>
                                                    <li data-value="6" class="option">Delhi</li>
                                                    <li data-value="7" class="option">Chennai</li>
                                                    <li data-value="8" class="option">Hyderabad</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--/ End Form Location -->
                                        <!-- Form Property Type -->
                                        <div class="form-group">
                                            <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>Property Type</span>
                                                <ul class="list">
                                                    <li data-value="1" class="option selected ">commerical</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--/ End Form Property Type -->
                                        <!-- Form Property Status -->
                                        <div class="form-group duration">
                                            <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>Property Status</span>
                                                <ul class="list">
                                                    <li data-value="2" class="option">For Rent</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--/ End Form Property Status -->
                                        
                                        <!-- Form Button -->
                                        <div class="form-group button">
                                            <button type="submit" style="@media only screen and (min-width: 450px) { margin-left: 2rem; }" class="btn">Search</button>
                                        </div>
                                        <!--/ End Form Button -->
                                    </form>
                                </div>
                                <!--/ End Search Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER SEARCH -->

        <!-- START SECTION FEATURED PROPERTIES -->
        <section class="featured portfolio bg-white-2 rec-pro rp2">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span>Featured </span>Properties</h2>
                    <p>These are our featured properties</p>
                </div>
                <div class="portfolio col-xl-12">
                    <div class="slick-lancers2">
                        <?php
                            $properties = DB::table('property_approveds')->get();
                        ?>
                        @foreach($properties as $property)
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="{{Route('single-property',['id'=>$property->id])}}" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">For Rent</div>
                                                <img src="PropertyImages/{{ $property->image1 }}" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="{{Route('single-property',['id'=>$property->id])}}" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="{{Route('single-property',['id'=>$property->id])}}" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="{{Route('single-property',['id'=>$property->id])}}">{{ $property->title }}</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="{{Route('single-property',['id'=>$property->id])}}">
                                                <i class="fa fa-map-marker"></i><span>{{ $property->address }}</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>Tag 1</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>Tag 2</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square" aria-hidden="true"></i>
                                                <span>{{ $property->no_of_seats}} seats</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="{{Route('single-property',['id'=>$property->id])}}">INR. {{ $property->price }}</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="flaticon-compare"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="flaticon-share"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION FEATURED PROPERTIES -->

        <!-- START SECTION WHY CHOOSE US -->
        <section class="how-it-works bg-white">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Why </span>Choose Us</h2>
                    <p>We provide full service at every step.</p>
                </div>
                <div class="row service-1">
                    <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="150">
                        <div class="serv-flex">
                            <div class="art-1 img-13">
                                <img src="images/icons/icon-4.svg" alt="">
                                <h3>Diverse Workspace Selection</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">Choose from a variety of thoughtfully designed spaces to match your work style, from private offices to collaborative hubs.</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="250">
                        <div class="serv-flex">
                            <div class="art-1 img-14">
                                <img src="images/icons/icon-5.svg" alt="">
                                <h3>Effortless Booking Process</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">Simplify your experience with our user-friendly platform for seamless reservations, saving you time and hassle.</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up" data-aos-delay="350">
                        <div class="serv-flex arrow">
                            <div class="art-1 img-15">
                                <img src="images/icons/icon-6.svg" alt="">
                                <h3>Productivity Amenities</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">Elevate your work with premium amenities like high-speed internet, ergonomic furnishings, and advanced equipment, ensuring peak efficiency.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- END SECTION WHY CHOOSE US -->

        <!-- START SECTION POPULAR PLACES -->
        <section class="feature-categories bg-white-2">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Popular </span>Places</h2>
                    <p>Properties In Most Popular Places.</p>
                </div>
                <div class="row">
                    <!-- Single category -->
                    <div class="col-xl-4 col-lg-6 col-sm-6" data-aos="zoom-in" data-aos-delay="150">
                        <div class="small-category-2">
                            <div class="small-category-2-thumb img-1">
                                <a href="{{ Route('properties-grid') }}"><img src="images/popular-places/12.jpg" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="{{ Route('properties-grid') }}">New York</a></h4>
                                <span>203 Properties</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single category -->
                    <div class="col-xl-4 col-lg-6 col-sm-6" data-aos="zoom-in" data-aos-delay="250">
                        <div class="small-category-2">
                            <div class="small-category-2-thumb img-2">
                                <a href="{{ Route('properties-grid') }}"><img src="images/popular-places/13.jpg" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="{{ Route('properties-grid') }}">Los Angeles</a></h4>
                                <span>307 Properties</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single category -->
                    <div class="col-xl-4 col-lg-6 col-sm-6" data-aos="zoom-in" data-aos-delay="350">
                        <div class="small-category-2">
                            <div class="small-category-2-thumb img-3">
                                <a href="{{ Route('properties-grid') }}"><img src="images/popular-places/14.jpg" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="{{ Route('properties-grid') }}">San Francisco</a></h4>
                                <span>409 Properties</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single category -->
                    <div class="col-xl-4 col-lg-6 col-sm-6" data-aos="zoom-in" data-aos-delay="150">
                        <div class="small-category-2 mob-mt pc-mb">
                            <div class="small-category-2-thumb img-8">
                                <a href="{{ Route('properties-grid') }}"><img src="images/popular-places/15.jpg" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="{{ Route('properties-grid') }}">Miami</a></h4>
                                <span>145 Properties</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single category -->
                    <div class="col-xl-4 col-lg-6 col-sm-6" data-aos="zoom-in" data-aos-delay="250">
                        <div class="small-category-2 pc-mb">
                            <div class="small-category-2-thumb img-10">
                                <a href="{{ Route('properties-grid') }}"><img src="images/popular-places/10.jpg" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="{{ Route('properties-grid') }}">Chicago</a></h4>
                                <span>112 Properties</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single category -->
                    <div class="col-xl-4 col-lg-6 col-sm-6" data-aos="zoom-in" data-aos-delay="350">
                        <div class="small-category-2 no-mb si-mt">
                            <div class="small-category-2-thumb img-11">
                                <a href="{{ Route('properties-grid') }}"><img src="images/popular-places/5.jpg" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="{{ Route('properties-grid') }}">Houston</a></h4>
                                <span>254 Properties</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </section>
        <!-- END SECTION POPULAR PLACES -->

        <!-- START SECTION RECENTLY PROPERTIES -->
        <section class="featured portfolio rec-pro disc">
            <div class="container-fluid">
                <div class="sec-title discover">
                    <h2><span>Discover </span>Popular Properties</h2>
                    <p>We provide full service at every step.</p>
                </div>
                <div class="portfolio col-xl-12">
                    <div class="slick-lancers">
                    <?php
                            $properties = DB::table('property_approveds')->get();
                        ?>
                        @foreach($properties as $property)
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="{{Route('single-property',['id'=>$property->id])}}" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">For Rent</div>
                                                <img src="PropertyImages/{{ $property->image1 }}" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="{{Route('single-property',['id'=>$property->id])}}" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="{{Route('single-property',['id'=>$property->id])}}" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="{{Route('single-property',['id'=>$property->id])}}">{{ $property->title }}</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="{{Route('single-property',['id'=>$property->id])}}">
                                                <i class="fa fa-map-marker"></i><span>{{ $property->address }}</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>Tag 1</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>Tag 2</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square" aria-hidden="true"></i>
                                                <span>{{ $property->no_of_seats}} seats</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="{{Route('single-property',['id'=>$property->id])}}">INR. {{ $property->price }}</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="flaticon-compare"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="flaticon-share"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION RECENTLY PROPERTIES -->

        <!-- START SECTION BLOG -->
        <section class="blog-section bg-white-2">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Articles &amp; </span>Tips</h2>
                    <p>Read the latest news from our blog.</p>
                </div>
                <div class="news-wrap">
                    <div class="row">
                        @foreach($blogs as $blog)
                        <div class="col-xl-4 col-md-6 col-xs-12">
                            <div class="news-item" data-aos="fade-up" data-aos-delay="150">
                                <a href="{{ Route('blog-details', ['slug'=>$blog->slug]) }}" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="images/blogs/{{ $blog->image_main }}" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="{{ Route('blog-details', ['slug'=>$blog->slug]) }}"><h3>{{ $blog->title }}</h3></a>
                                    <?php
                                        $date = explode(' ',$blog->created_at);
                                        $d = $date[0];
                                    ?>
                                    <div class="dates">
                                        <span class="date">{{ $d }} &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr big-news">
                                        <p>{!! $blog->meta_description !!}</p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="{{ Route('blog-details', ['slug'=>$blog->slug]) }}" class="news-link">Read more...</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION BLOG -->

        <!-- STAR SECTION PARTNERS -->
        <div class="partners bg-white">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Our </span>Partners</h2>
                    <p>The Companies That Represent Us.</p>
                </div>
                <div class="owl-carousel style2">
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/its.png" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/cv.png" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img style="background-color:black;" src="images/partners/eki.png" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img  src="images/partners/zerogravito.jpg" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img  src="images/partners/saxon.png" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img  src="images/partners/kotak.png" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img  src="images/partners/betterpeople.png" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img style="height:70px; width:70px;" src="images/partners/betterplanet.png" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img  src="images/partners/persistent.svg" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img  src="images/partners/hiddenbrains.svg" alt=""></div>
                </div>
            </div>
        </div>
        <!-- END SECTION PARTNERS -->
@endsection