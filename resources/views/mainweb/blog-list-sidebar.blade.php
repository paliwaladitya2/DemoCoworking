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
                            <div class="col-md-12 col-xs-12">
                                <div class="news-item news-item-sm">
                                    <a href="{{ Route('blog-details') }}" class="news-img-link">
                                        <div class="news-item-img">
                                            <img class="resp-img" src="images/blog/b-1.jpg" alt="blog image">
                                        </div>
                                    </a>
                                    <div class="news-item-text">
                                        <a href="{{ Route('blog-details') }}"><h3>Real Estate News</h3></a>
                                        <div class="dates">
                                            <span class="date">April 11, 2020 &nbsp;/</span>
                                            <ul class="action-list pl-0">
                                                <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                                <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                                <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                            </ul>
                                        </div>
                                        <div class="news-item-descr">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, ea? Vitae pariatur ab amet iusto tempore neque a, deserunt eaque recusandae obcaecati eos atque delectus possimus repellendus. Impedit, labore, neque lorem Ipsum has...</p>
                                        </div>
                                        <div class="news-item-bottom">
                                            <a href="{{ Route('blog-details') }}" class="news-link">Read more...</a>
                                            <div class="admin">
                                                <p>By, Karl Smith</p>
                                                <img src="images/testimonials/ts-1.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12 space">
                                <div class="news-item news-item-sm">
                                    <a href="{{ Route('blog-details') }}" class="news-img-link">
                                        <div class="news-item-img">
                                            <img class="resp-img" src="images/blog/b-2.jpg" alt="blog image">
                                        </div>
                                    </a>
                                    <div class="news-item-text">
                                        <a href="{{ Route('blog-details') }}"><h3>Real Estate News</h3></a>
                                        <div class="dates">
                                            <span class="date">April 11, 2020 &nbsp;/</span>
                                            <ul class="action-list pl-0">
                                                <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                                <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                                <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                            </ul>
                                        </div>
                                        <div class="news-item-descr">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, ea? Vitae pariatur ab amet iusto tempore neque a, deserunt eaque recusandae obcaecati eos atque delectus possimus repellendus. Impedit, labore, neque lorem Ipsum has...</p>
                                        </div>
                                        <div class="news-item-bottom">
                                            <a href="{{ Route('blog-details') }}" class="news-link">Read more...</a>
                                            <div class="admin">
                                                <p>By, Karl Smith</p>
                                                <img src="images/testimonials/ts-2.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12">
                                <div class="news-item news-item-sm">
                                    <a href="{{ Route('blog-details') }}" class="news-img-link">
                                        <div class="news-item-img">
                                            <img class="resp-img" src="images/blog/b-3.jpg" alt="blog image">
                                        </div>
                                    </a>
                                    <div class="news-item-text">
                                        <a href="{{ Route('blog-details') }}"><h3>Real Estate News</h3></a>
                                        <div class="dates">
                                            <span class="date">April 11, 2020 &nbsp;/</span>
                                            <ul class="action-list pl-0">
                                                <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                                <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                                <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                            </ul>
                                        </div>
                                        <div class="news-item-descr">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, ea? Vitae pariatur ab amet iusto tempore neque a, deserunt eaque recusandae obcaecati eos atque delectus possimus repellendus. Impedit, labore, neque lorem Ipsum has...</p>
                                        </div>
                                        <div class="news-item-bottom">
                                            <a href="{{ Route('blog-details') }}" class="news-link">Read more...</a>
                                            <div class="admin">
                                                <p>By, Karl Smith</p>
                                                <img src="images/testimonials/ts-3.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12 space">
                                <div class="news-item news-item-sm">
                                    <a href="{{ Route('blog-details') }}" class="news-img-link">
                                        <div class="news-item-img">
                                            <img class="resp-img" src="images/blog/b-4.jpg" alt="blog image">
                                        </div>
                                    </a>
                                    <div class="news-item-text">
                                        <a href="{{ Route('blog-details') }}"><h3>Real Estate News</h3></a>
                                        <div class="dates">
                                            <span class="date">April 11, 2020 &nbsp;/</span>
                                            <ul class="action-list pl-0">
                                                <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                                <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                                <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                            </ul>
                                        </div>
                                        <div class="news-item-descr">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, ea? Vitae pariatur ab amet iusto tempore neque a, deserunt eaque recusandae obcaecati eos atque delectus possimus repellendus. Impedit, labore, neque lorem Ipsum has...</p>
                                        </div>
                                        <div class="news-item-bottom">
                                            <a href="{{ Route('blog-details') }}" class="news-link">Read more...</a>
                                            <div class="admin">
                                                <p>By, Karl Smith</p>
                                                <img src="images/testimonials/ts-4.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12 space2">
                                <div class="news-item news-item-sm">
                                    <a href="{{ Route('blog-details') }}" class="news-img-link">
                                        <div class="news-item-img">
                                            <img class="resp-img" src="images/blog/b-5.jpg" alt="blog image">
                                        </div>
                                    </a>
                                    <div class="news-item-text">
                                        <a href="{{ Route('blog-details') }}"><h3>Real Estate News</h3></a>
                                        <div class="dates">
                                            <span class="date">April 11, 2020 &nbsp;/</span>
                                            <ul class="action-list pl-0">
                                                <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                                <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                                <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                            </ul>
                                        </div>
                                        <div class="news-item-descr">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, ea? Vitae pariatur ab amet iusto tempore neque a, deserunt eaque recusandae obcaecati eos atque delectus possimus repellendus. Impedit, labore, neque lorem Ipsum has...</p>
                                        </div>
                                        <div class="news-item-bottom">
                                            <a href="{{ Route('blog-details') }}" class="news-link">Read more...</a>
                                            <div class="admin">
                                                <p>By, Karl Smith</p>
                                                <img src="images/testimonials/ts-5.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12 no-pb2">
                                <div class="news-item news-item-sm">
                                    <a href="{{ Route('blog-details') }}" class="news-img-link">
                                        <div class="news-item-img">
                                            <img class="resp-img" src="images/blog/b-6.jpg" alt="blog image">
                                        </div>
                                    </a>
                                    <div class="news-item-text">
                                        <a href="{{ Route('blog-details') }}"><h3>Real Estate News</h3></a>
                                        <div class="dates">
                                            <span class="date">April 11, 2020 &nbsp;/</span>
                                            <ul class="action-list pl-0">
                                                <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                                <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                                <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                            </ul>
                                        </div>
                                        <div class="news-item-descr">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, ea? Vitae pariatur ab amet iusto tempore neque a, deserunt eaque recusandae obcaecati eos atque delectus possimus repellendus. Impedit, labore, neque lorem Ipsum has...</p>
                                        </div>
                                        <div class="news-item-bottom">
                                            <a href="{{ Route('blog-details') }}" class="news-link">Read more...</a>
                                            <div class="admin">
                                                <p>By, Karl Smith</p>
                                                <img src="images/testimonials/ts-1.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>House</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Garages</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Real Estate</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Real Home</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Bath</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Beds</a></li>
                                </ul>
                            </div>
                            <div class="recent-post">
                                <h5 class="font-weight-bold mb-4">Popular Tags</h5>
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
                                <div class="tags">
                                    <span><a href="#" class="btn btn-outline-primary mb-0">Location</a></span>
                                    <span><a href="#" class="btn btn-outline-primary mb-0">Price</a></span>
                                </div>
                            </div>
                            <div class="recent-post pt-5">
                                <h5 class="font-weight-bold mb-4">Recent Posts</h5>
                                <div class="recent-main">
                                    <div class="recent-img">
                                        <a href="{{ Route('blog-details') }}"><img src="images/blog/b-1.jpg" alt=""></a>
                                    </div>
                                    <div class="info-img">
                                        <a href="{{ Route('blog-details') }}"><h6>Real Estate</h6></a>
                                        <p>May 10, 2020</p>
                                    </div>
                                </div>
                                <div class="recent-main my-4">
                                    <div class="recent-img">
                                        <a href="{{ Route('blog-details') }}"><img src="images/blog/b-2.jpg" alt=""></a>
                                    </div>
                                    <div class="info-img">
                                        <a href="{{ Route('blog-details') }}"><h6>Real Estate</h6></a>
                                        <p>May 10, 2020</p>
                                    </div>
                                </div>
                                <div class="recent-main">
                                    <div class="recent-img">
                                        <a href="{{ Route('blog-details') }}"><img src="images/blog/b-3.jpg" alt=""></a>
                                    </div>
                                    <div class="info-img">
                                        <a href="{{ Route('blog-details') }}"><h6>Real Estate</h6></a>
                                        <p>May 10, 2020</p>
                                    </div>
                                </div>
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