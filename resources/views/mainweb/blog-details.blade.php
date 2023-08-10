@extends('mainweb\index_main')
@section('content')
        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>Blog Details</h1>
                    <h2><a href="{{ Route('index') }}">Home </a> &nbsp;/&nbsp; Blog Details</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION BLOG -->
        <section class="blog blog-section bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 blog-pots">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="news-item details no-mb2">
                                    <a href="{{ Route('blog-details', ['slug'=>$blog->slug]) }}" class="news-img-link">
                                        <div class="news-item-img">
                                            <img class="img-responsive" src="../images/blogs/{{ $blog->image_main }}" alt="blog image">
                                        </div>
                                    </a>
                                    <div class="news-item-text details pb-0">
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
                                        <div class="news-item-descr big-news details visib mb-0">
                                            <p class="mb-3">{!! $blog->meta_description !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <section class="comments">
                            <h3 class="mb-5">Comments</h3>
                            @foreach($comments as $comment)
                            <div class="row mb-4">
                                <ul class="col-12 commented">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="images/testimonials/ts-4.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info">
                                            <?php
                                                $date = explode(' ',$comment->created_at);
                                                $d = $date[0];
                                            ?>
                                            <h5 class="mb-1">{{ $comment->name}}</h5>
                                            <p class="mb-4">{{ $d }}</p>
                                            <p>{{ $comment->comment }}</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                        </section>
                        <section class="leve-comments wpb">
                            <h3 class="mb-5">Leave a Comment</h3>
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
                                    <form action="{{ Route('savecomment') }}" method="post">
                                        @csrf
                                        <div class="col-md-12">
                                            <input type="hidden" name="id" class="form-control" value="{{ $blog->id }}">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <textarea class="form-control" id="exampleTextarea" name="comment" rows="8" placeholder="Message" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg mt-2">Submit Comment</button>
                                    </form>
                                </div>
                            </div>
                        </section>
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
                                <div class="tags">
                                    @if($blog->tag1)
                                    <span><a href="#" style="color:white;" class="btn btn-outline-primary ml-1 mt-2">{{ $blog->tag1 }}</a></span>
                                    @endif
                                    @if($blog->tag2)
                                    <span><a href="#" style="color:white;" class="btn btn-outline-primary ml-1 mt-2">{{ $blog->tag2 }}</a></span>
                                    @endif
                                    @if($blog->tag3)
                                    <span><a href="#" style="color:white;" class="btn btn-outline-primary ml-1 mt-2">{{ $blog->tag3 }}</a></span>
                                    @endif
                                    @if($blog->tag4)
                                    <span><a href="#" style="color:white;" class="btn btn-outline-primary ml-1 mt-2">{{ $blog->tag4 }}</a></span>
                                    @endif
                                    @if($blog->tag5)
                                    <span><a href="#" style="color:white;" class="btn btn-outline-primary ml-1 mt-2">{{ $blog->tag5 }}</a></span>
                                    @endif
                                    @if($blog->tag6)
                                    <span><a href="#" style="color:white;" class="btn btn-outline-primary ml-1 mt-2">{{ $blog->tag6 }}</a></span>
                                    @endif
                                    @if($blog->tag7)
                                    <span><a href="#" style="color:white;" class="btn btn-outline-primary ml-1 mt-2">{{ $blog->tag7 }}</a></span>
                                    @endif
                                    @if($blog->tag8)
                                    <span><a href="#" style="color:white;" class="btn btn-outline-primary ml-1 mt-2">{{ $blog->tag8 }}</a></span>
                                    @endif
                                    @if($blog->tag9)
                                    <span><a href="#" style="color:white;" class="btn btn-outline-primary ml-1 mt-2">{{ $blog->tag9 }}</a></span>
                                    @endif
                                    @if($blog->tag10)
                                    <span><a href="#" style="color:white;" class="btn btn-outline-primary ml-1 mt-2">{{ $blog->tag10 }}</a></span>
                                    @endif
                                    
                                </div>
                                
                            </div>
                            <div class="recent-post pt-5">
                                <h5 class="font-weight-bold mb-4">Recent Posts</h5>
                                @foreach($blogs as $blog)
                                <?php
                                    $date = explode(' ',$blog->created_at);
                                    $d = $date[0];
                                ?>
                                <div class="recent-main">
                                    <div class="recent-img">
                                        <a href="{{ Route('blog-details', ['slug'=>$blog->slug]) }}"><img src="../images/blogs/{{ $blog->image_main}}" alt=""></a>
                                    </div>
                                    <div class="info-img">
                                        <a href="{{ Route('blog-details', ['slug'=>$blog->slug]) }}"><h6>{{ $blog->title }}</h6></a>
                                        <p>{{ $d }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <!-- END SECTION BLOG -->
@endsection