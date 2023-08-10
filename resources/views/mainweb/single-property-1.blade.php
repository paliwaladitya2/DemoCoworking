@extends('mainweb.index_main')
@section('content')
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
               
                        <div class="property-location map">
                            <h5>Location</h5>
                            <div class="divider-fade"></div>
                            <div id="map-contact" class="contact-map"></div>
                        </div>
                        <!-- Star Reviews -->
                        
                        <section class="reviews comments">
                            <h3 class="mb-5">Reviews</h3>
                            @foreach ($reviews as $review )
                            @if ($id==$review->fid)
                            <div class="row mb-5">
                                <ul class="col-12 commented pl-0">
                                   
                                    <?php
                                        $date = explode(' ',$review->created_at);
                                        $d = $date[0];
                                        ?>
                                    <li class="comm-inf">
                                        <div class="col-md-10 comments-info">
                                            <div class="conra">
                                                <h5 class="mb-2">{{$review->name}}</h5>
                                                
                                            </div>
                                            <p class="mb-4">{{$d}}</p>
                                            <p>{{$review->message}}</p>
                                        
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                            @endif
                            @endforeach
                            
                        </section>
                        <!-- End Reviews -->
                        <!-- Star Add Review -->
                        <section class="single reviews leve-comments details">
                            <div id="add-review" class="add-review-box">
                                <!-- Add Review -->
                                <h3 class="listing-desc-headline margin-bottom-20 mb-4">Add Review</h3>
                            
                                <!-- Rating / Upload Button -->
                               @if (Session('success'))
                                   <script>
                                    alert("{{Session('success')}}")
                                   </script>
                               @endif
                               @if ($errors->any())
                                   <ul>
                                       @foreach ($errors->all() as $error)
                                           <script>
                                               alert("{{$error}}")
                                           </script>
                                       @endforeach
                                   </ul>
                           @endif
                                <div class="row">
                                    <div class="col-md-12 data">
                                        <form action="{{Route('savereview')}}" method="post">
                                            @csrf
                                            <input type="hidden" class="form-control" name="fid" value="{{ $id }}">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" placeholder=" Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" oninput="validateInput(event)" name="phone" class="form-control" placeholder=" Phone No." required>
                                                </div>
                                            </div>
                                           
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <textarea class="form-control" name="message" id="exampleTextarea" rows="8" placeholder="Review" required></textarea>
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
                                        @foreach($properties as $property)
                                        <div class="widget-boxed-body">
                                            <div class="recent-post">
                                                <div class="recent-main">
                                                    <div class="recent-img">
                                                        <a href="{{Route('single-property', ['id'=>$property->id])}}" class="homes-img" style="color: #666">
                                                
                                                            <img src="../PropertyImages/{{$property->image1}}" alt="home-1" class="img-responsive">
                                                            <div class="homes-price">INR. {{$property->price}}/mo</div>
                                                        </a>
                                                    </div>
                                                    <div class="info-img" >
                                                        <h3 style="color: black"><a style="color: black" href="{{Route('single-property', ['id'=>$property->id])}}">{{ $property->title }}</a></h3>
                                                        
                                                    </div>
                                                </div>
                                               
                                               
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                  
                                    <!-- Start: Specials offer -->
                                   
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
@endsection
@section('jscontent')
<script>
    function validateInput(event){
        const input = event.target;
        const sanitizedValue = input.value.replace(/[^0-9]/g, '');
        input.value =sanitizedValue;
    }
</script>
@endsection