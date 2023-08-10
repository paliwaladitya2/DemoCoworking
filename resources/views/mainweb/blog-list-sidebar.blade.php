@extends('mainweb\index_main')
@section('content')
        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>Blog</h1>
                    <h2><a href="{{ Route('index') }}">Home </a> &nbsp;/&nbsp; Blog</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION BLOG -->
        <section class="blog blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-xs-12">
                        <div class="row">
                            @foreach($blogs as $blog)
                            <div class="col-md-12 col-xs-12">
                                <div class="news-item news-item-sm">
                                    <a href="{{ Route('blog-details', ['slug'=>$blog->slug]) }}" class="news-img-link">
                                        <div class="news-item-img">
                                            <img class="resp-img" src="images/blogs/{{ $blog->image_main }}" alt="blog image">
                                        </div>
                                    </a>
                                    <div class="news-item-text">
                                        <a href="{{ Route('blog-details', ['slug'=>$blog->slug]) }}"><h3>{{ $blog->title }}</h3></a>
                                        <div class="dates">
                                            <?php
                                                $date = explode(' ',$blog->created_at);
                                                $d = $date[0];
                                            ?>
                                            <span class="date">{{ $d }}&nbsp;</span>
                                            <ul class="action-list pl-0">
                                                <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                                <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                                <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                            </ul>
                                        </div>
                                        <div class="news-item-descr">
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
                    <aside class="col-lg-3 col-md-12">
                        <div class="widget">
                            <h5 class="font-weight-bold mb-4">Search</h5>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                            <button class="btn btn-primary" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </span>
                            </div>
                            <div class="recent-post py-5">
                                <h5 class="font-weight-bold">Category</h5>
                                <ul>
                                    <?php
                                        $categories = DB::table('blog_category')->get();
                                    ?>
                                    @foreach($categories as $category)
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="recent-post">
                                <h5 class="font-weight-bold mb-4">Popular Tags</h5>
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
                            <div class="recent-post pt-5">
                                <?php
                                    $c = 1;
                                ?>
                                <h5 class="font-weight-bold mb-4">Recent Posts</h5>
                                @foreach($blogs as $blog)
                                @if($c < 4)
                                <?php
                                    $date = explode(' ',$blog->created_at);
                                    $d = $date[0];
                                ?>
                                <div class="recent-main">
                                    <div class="recent-img">
                                        <a href="{{ Route('blog-details', ['slug'=>$blog->slug]) }}"><img src="images/blogs/{{ $blog->image_main}}" alt=""></a>
                                    </div>
                                    <div class="info-img">
                                        <a href="{{ Route('blog-details', ['slug'=>$blog->slug]) }}"><h6>{{ $blog->title }}</h6></a>
                                        <p>{{ $d }}</p>
                                    </div>
                                </div>
                                @else
                                    @break
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </aside>
                </div>
                <nav aria-label="..." class="agents pt-55">
                    <ul class="pagination disabled">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
        <!-- END SECTION BLOG -->
        @endsection