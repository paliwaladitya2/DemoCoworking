@extends('mainweb\index_main')
@section('content')
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION PROPERTIES LISTING -->
        <section class="properties-right featured portfolio ho-17 blog pt-5">
            <div class="container">
               <section class="headings-2 pt-0 pb-55">
                    <div class="pro-wrapper">
                        <div class="detail-wrapper-body">
                            <div class="listing-title-bar">
                                <div class="text-heading text-left">
                                    <p class="pb-2"><a href="{{ Route('index') }}">Home </a> &nbsp;/&nbsp; <span>Listings</span></p>
                                </div>
                                <h3>Properties</h3>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <div class="col-lg-8 col-md-12 blog-pots">
                        <div class="row portfolio-items">
                            @foreach ($properties as $property)
                            <div class="item col-lg-6 col-md-6 col-xs-12 landscapes sale">
                                <a href="{{Route('single-property',['id'=>$property->id])}}" class="recent-16" data-aos="fade-up">
                                    <div class="recent-img16 img-center" style="background-image: url('{{ asset('PropertyImages/' . $property->image1) }}');"></div>
                                    <div class="recent-content"></div>
                                    <div class="recent-details">
                                        <div class="recent-title">{{ $property->title }}</div>
                                        <div class="recent-price">INR. {{ $property->price }}</div>
                                    </div>
                                    <div class="view-proper">View Details</div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <aside class="col-lg-4 col-md-12 car">
                        <div class="widget">
                            <!-- Search Fields -->
                            <div class="widget-boxed ">
                                <div class="widget-boxed-header mb-1">
                                    <h4>Recent Properties</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    
                                    @foreach($ps as $p)
                                    <div class="widget-boxed-body">
                                        <div class="recent-post">
                                            <div class="recent-main">
                                                <div class="recent-img">
                                                    <a href="{{Route('single-property', ['id'=>$p->id])}}" class="homes-img" style="color: #666">
                                            
                                                        <img src="../PropertyImages/{{$p->image1}}" alt="home-1" class="img-responsive">
                                                        <div class="homes-price">INR. {{$p->price}}/mo</div>
                                                    </a>
                                                </div>
                                                <div class="info-img" >
                                                    <h3 style="color: black"><a style="color: black" href="{{Route('single-property', ['id'=>$p->id])}}">{{ $p->title }}</a></h3>
                                                    
                                                </div>
                                            </div>
                                           
                                           
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="widget-boxed mt-5">
                                <div class="widget-boxed-header">
                                    <h4>Recent Blogs</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="recent-post">
                                        @foreach($blogs as $blog)
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
                                                        <span class="date">{{ $d }} </span>
                                                    </div>
                                                    <div class="news-item-descr big-news">
                                                        <p>{!! $blog->meta_description !!}</p>
                                                    </div>
                                                    <div class="news-item-bottom">
                                                        <a href="{{ Route('blog-details', ['slug'=>$blog->slug]) }}" class="news-link">Read more...</a>

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="widget-boxed popular mt-5 mb-0">
                                <div class="widget-boxed-header">
                                    <h4>Popular Tags</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="recent-post">
                                        <div class="tags mt-2">
                                            <span><a href="#" class="btn btn-outline-primary ml-1" style="color:white;">Coworking</a></span>
                                            <span><a href="#" class="btn btn-outline-primary ml-1" style="color:white;">Training Rooms</a></span>
                                        </div>
                                        <div class="tags mt-2">
                                            <span><a href="#" class="btn btn-outline-primary ml-1" style="color:white;">Meeting Rooms</a></span>
                                            <span><a href="#" class="btn btn-outline-primary ml-1" style="color:white;">Beds</a></span>
                                        </div>
                                        <div class="tags mt-2">
                                            <span><a href="#" class="btn btn-outline-primary ml-1" style="color:white;">Cabin</a></span>
                                            <span><a href="#" class="btn btn-outline-primary ml-1" style="color:white;">Cafeteria</a></span>
                                        </div>
                                        <div class="tags mt-2">
                                            <span><a href="#" class="btn btn-outline-primary ml-1" style="color:white;">Parking</a></span>
                                            <span><a href="#" class="btn btn-outline-primary ml-1" style="color:white;">Wifi</a></span>
                                        </div>
                                        <div class="tags mt-2">
                                            <span><a href="#" class="btn btn-outline-primary ml-1" style="color:white;">24x7</a></span>
                                            <span><a href="#" class="btn btn-outline-primary ml-1" style="color:white;">Price</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                
            </div>
        </section>
        <!-- END SECTION PROPERTIES LISTING -->
@endsection