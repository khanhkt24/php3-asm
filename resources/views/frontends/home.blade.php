@extends('frontends.layouts.master')


@section('content')
    <section class="section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <h2 class="h5 section-title">Bài viết đã sửa</h2>
                    <article class="card mb-4">
                        @foreach ($latest as $item)
                        <div class="post-slider">
                            <img src="{{ Storage::url($item->image) }}" class="card-img-top" alt="post-thumb">
                        </div>
                        <div class="card-body">
                            <h5 class="mb-3"><a class="post-title" href="{{ route('front.detal',$item->id) }}">{{ $item->name }}</a></h5>
                            <ul class="card-meta list-inline">
                                <li class="list-inline-item">
                                    <a href="author-single.html" class="card-meta-author">
                                        <img src="client/images/john-doe.jpg">
                                        <span>Post Author</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-timer"></i>{{ $item->view }}
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-calendar"></i>{{ \Carbon\Carbon::parse($item->date_add)->format('d/m/Y') }}
                                </li>
                                <li class="list-inline-item">
                                    <ul class="card-meta-tag list-inline">
                                        @foreach ($item->tags as $key=>$value)
                                            <li class="list-inline-item"><a href="tags.html">{{ $value->name}}</a></li>
                                        @endforeach
                                </li>
                            </ul>
                            <p>{{ Str::limit($item->title, 100, '...') }}</p>
                            <a href="{{ route('front.detal',$item->id) }}" class="btn btn-outline-primary">Read More</a>
                        </div>
                        @endforeach
                      </article>
                </div>
                <div class="col-lg-4 mb-5">
                    <h2 class="h5 section-title">Trending Post</h2>

                    <article class="card mb-4">
                        <div class="card-body d-flex">
                            <img class="card-img-sm" src="client/images/post/post-3.jpg">
                            <div class="ml-3">
                                <h4><a href="post-details.html" class="post-title">Advice From a Twenty Something</a>
                                </h4>
                                <ul class="card-meta list-inline mb-0">
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-calendar"></i>14 jan, 2020
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-timer"></i>2 Min To Read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <article class="card mb-4">
                        <div class="card-body d-flex">
                            <img class="card-img-sm" src="client/images/post/post-2.jpg">
                            <div class="ml-3">
                                <h4><a href="post-details.html" class="post-title">The Design Files - Homes
                                        Minimalist</a></h4>
                                <ul class="card-meta list-inline mb-0">
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-calendar"></i>14 jan, 2020
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-timer"></i>2 Min To Read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <article class="card mb-4">
                        <div class="card-body d-flex">
                            <img class="card-img-sm" src="client/images/post/post-4.jpg">
                            <div class="ml-3">
                                <h4><a href="post-details.html" class="post-title">The Skinny Confidential</a></h4>
                                <ul class="card-meta list-inline mb-0">
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-calendar"></i>14 jan, 2020
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-timer"></i>2 Min To Read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 mb-5">
                    <h2 class="h5 section-title">Bài viết phổ biến nhất</h2>

                    <article class="card">
                        @foreach ($popolar as $item)
                        <div class="post-slider">
                            <img src="{{ Storage::url($item->image) }}" class="card-img-top" alt="post-thumb">
                        </div>
                        <div class="card-body">
                            <h5 class="mb-3"><a class="post-title" href="{{ route('front.detal',$item->id) }}">{{ $item->name }}</a></h5>
                            <ul class="card-meta list-inline">
                                <li class="list-inline-item">
                                    <a href="author-single.html" class="card-meta-author">
                                        <img src="client/images/john-doe.jpg">
                                        <span>Post Author</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-timer"></i>{{ $item->view }}
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-calendar"></i>{{ \Carbon\Carbon::parse($item->date_add)->format('d/m/Y') }}
                                </li>
                                <li class="list-inline-item">
                                    <ul class="card-meta-tag list-inline">
                                        @foreach ($item->tags as $key=>$value)
                                            <li class="list-inline-item"><a href="tags.html">{{ $value->name}}</a></li>
                                        @endforeach
                                </li>
                            </ul>
                            <p>{{ Str::limit($item->title, 100, '...') }}</p>
                            <a href="{{ route('front.detal',$item->id) }}" class="btn btn-outline-primary">Read More</a>
                        </div>
                        @endforeach
                    </article>
                </div>
                <div class="col-12">
                    <div class="border-bottom border-default"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8  mb-5 mb-lg-0">
                    <h2 class="h5 section-title">Recent Post</h2>
                    <article class="card mb-4">
                        @foreach ($query as $item)
                        <div class="post-slider">
                            <img src="{{ Storage::url($item->image) }}" class="card-img-top" alt="post-thumb">
                        </div>
                        <div class="card-body">
                            <h3 class="mb-3"><a class="post-title" href="{{ route('front.detal',$item->id) }}">{{ $item->name }}</a></h3>
                            <ul class="card-meta list-inline">
                                <li class="list-inline-item">
                                    <a href="author-single.html" class="card-meta-author">
                                        <img src="client/images/john-doe.jpg" alt="John Doe">
                                        <span>Post Author</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-timer"></i>{{ $item->view }}
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-calendar"></i>{{ $item->date_add }}
                                </li>
                                <li class="list-inline-item">
                                    <ul class="card-meta-tag list-inline">
                                            @foreach ($item->tags as $value)
                                                <li class="list-inline-item"><a href="{{route('tags.posts',$value->id)}}">{{$value->name}}</a></li>
                                            @endforeach
                                    </ul>
                                </li>
                            </ul>
                            <p>{{ $item->title }}</p>
                            <a href="{{ route('front.detal',$item->id) }}" class="btn btn-outline-primary">Read More</a>
                        </div>
                        @endforeach
                    </article>

                    <ul class="pagination justify-content-center">
                        <li class="page-item page-item active ">
                            <a href="#!" class="page-link">1</a>
                        </li>
                        <li class="page-item">
                            <a href="#!" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a href="#!" class="page-link">&raquo;</a>
                        </li>
                    </ul>
                </div>
                <aside class="col-lg-4 sidebar-home">
                    <!-- Search -->
                    <div class="widget">
                        <h4 class="widget-title"><span>Search</span></h4>
                        <form action="#!" class="widget-search">
                            <input class="mb-3" id="search-query" name="s" type="search"
                                placeholder="Type &amp; Hit Enter...">
                            <i class="ti-search"></i>
                            <button type="submit" class="btn btn-primary btn-block">Search</button>
                        </form>
                    </div>

                    <!-- about me -->
                    <div class="widget widget-about">
                        <h4 class="widget-title">Hi, I am Alex!</h4>
                        <img class="img-fluid" src="client/images/author.jpg" alt="Themefisher">
                        <p>Để trưởng thành được như ngày hôm nay chắc hẳn bạn đã trải qua rất nhiều những vấp ngã và tổn thương. Vậy để vượt qua những lúc như vậy, chúng ta cần có đọng lực để bước tiếp.</p>
                        <ul class="list-inline social-icons mb-3">

                            <li class="list-inline-item"><a href=""><i class="ti-facebook"></i></a></li>

                            <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>

                            <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>

                            <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>

                            <li class="list-inline-item"><a href="#"><i class="ti-youtube"></i></a></li>

                        </ul>
                        <a href="about-me.html" class="btn btn-primary mb-2">About me</a>
                    </div>

                    <!-- Promotion -->
                    <div class="promotion">
                        <img src="client/images/promotion.jpg" class="img-fluid w-100">
                        <div class="promotion-content">
                            <h5 class="text-white mb-3">Create Stunning Website!!</h5>
                            <p class="text-white mb-4">Lorem ipsum dolor sit amet, consectetur sociis. Etiam nunc amet
                                id dignissim. Feugiat id tempor vel sit ornare turpis posuere.</p>
                            <a href="https://themefisher.com/" class="btn btn-primary">Get Started</a>
                        </div>
                    </div>

                    <!-- authors -->

                    <!-- Search -->

                    <div class="widget">
                        <h4 class="widget-title"><span>Never Miss A News</span></h4>
                        <form action="#!" method="post" name="mc-embedded-subscribe-form" target="_blank"
                            class="widget-search">
                            <input class="mb-3" id="search-query" name="s" type="search"
                                placeholder="Your Email Address">
                            <i class="ti-email"></i>
                            <button type="submit" class="btn btn-primary btn-block" name="subscribe">Subscribe
                                now</button>
                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                <input type="text" name="b_463ee871f45d2d93748e77cad_a0a2c6d074" tabindex="-1">
                            </div>
                        </form>
                    </div>

                    <!-- categories -->
                    <div class="widget widget-categories">
                        <h4 class="widget-title"><span>Categories</span></h4>
                        <ul class="list-unstyled widget-list">
                            @foreach ($tag as $tags)
                                <li>
                                    <a href="{{route('tags.posts',$tags->id)}}" class="d-flex">
                                        {{ $tags->name }} <small class="ml-auto">({{ $tags->posts_count }})</small>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div><!-- tags -->
                    <div class="widget">
                        <h4 class="widget-title"><span>Tags</span></h4>
                        <ul class="list-inline widget-list-inline widget-card">
                            @foreach ($tag as $key => $value)
                                <li class="list-inline-item"><a href="{{route('tags.posts',$value->id)}}">{{ $value->name }}</a></li>
                            @endforeach
                        </ul>
                    </div><!-- recent post -->
                    <div class="widget">
                        <h4 class="widget-title">
                            Bài đăng gần đây</h4>

                        <!-- post-item -->
                        <article class="widget-card">
                            <div class="d-flex">
                                <img class="card-img-sm" src="client/images/post/post-10.jpg">
                                <div class="ml-3">
                                    <h5><a class="post-title" href="post/elements/">Elements That You Can Use In This
                                            Template.</a></h5>
                                    <ul class="card-meta list-inline mb-0">
                                        <li class="list-inline-item mb-0">
                                            <i class="ti-calendar"></i>15 jan, 2020
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>

                        <article class="widget-card">
                            <div class="d-flex">
                                <img class="card-img-sm" src="client/images/post/post-3.jpg">
                                <div class="ml-3">
                                    <h5><a class="post-title" href="post-details.html">Advice From a Twenty
                                            Something</a></h5>
                                    <ul class="card-meta list-inline mb-0">
                                        <li class="list-inline-item mb-0">
                                            <i class="ti-calendar"></i>14 jan, 2020
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>

                        <article class="widget-card">
                            <div class="d-flex">
                                <img class="card-img-sm" src="client/images/post/post-7.jpg">
                                <div class="ml-3">
                                    <h5><a class="post-title" href="post-details.html">Advice From a Twenty
                                            Something</a></h5>
                                    <ul class="card-meta list-inline mb-0">
                                        <li class="list-inline-item mb-0">
                                            <i class="ti-calendar"></i>14 jan, 2020
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Social -->
                    <div class="widget">
                        <h4 class="widget-title"><span>Social Links</span></h4>
                        <ul class="list-inline widget-social">
                            <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="ti-youtube"></i></a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection
