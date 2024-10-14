@extends('frontends.layouts.tag')

@section('tag-content')
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8  mb-5 mb-lg-0">
                    <h1 class="h2 mb-4">Hiển thị các mục từ <mark>{{$Bag->name}}</mark></h1>
                    <article class="card mb-4">
                        @foreach ($posts as $item)
                            <div class="post-slider mb-4">
                                <img src="{{ Storage::url($item->image) }}" class="card-img-top" alt="post-thumb">
                            </div>

                            <h4>{{ $item->title }}
                            </h4>
                            <ul class="card-meta my-3 list-inline">
                                <li class="list-inline-item">
                                    <a href="author-single.html" class="card-meta-author">
                                        <img src="C:\laragon\www\php3-asm\public\client\images\john-doe.jpg">
                                        <span>Hồng Đăng</span>
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
                                        @foreach ($item->tags as $key => $value)
                                            <li class="list-inline-item"><a href="{{route('tags.posts',$value->id)}}">{{ $value->name }}</a></li>
                                        @endforeach

                                    </ul>
                                </li>
                                <a href="{{ route('front.detal',$item->id) }}" class="btn btn-outline-primary">Read More</a>
                            </ul>

                        @endforeach

                    </article>
                </div>

                <aside class="col-lg-4 @@sidebar">
                    <!-- Search -->
                    <div class="widget">
                        <h4 class="widget-title"><span>Tìm kiếm</span></h4>
                        <form action="#!" class="widget-search">
                            <input class="mb-3" id="search-query" name="s" type="search"
                                placeholder="Nhập &amp; từ cần tìm kiếm">
                            <i class="ti-search"></i>
                            <button type="submit" class="btn btn-primary btn-block">Tìm kiếm</button>
                        </form>
                    </div>

                    <!-- about me -->
                    <div class="widget widget-about">
                        <h4 class="widget-title">{{Auth::user()->name}}</h4>
                        <img class="img-fluid" src="{{asset('client/images/My.jpg')}}" alt="Themefisher">
                        <p>Để trưởng thành được như ngày hôm nay chắc hẳn bạn đã trải qua rất nhiều những vấp
                            ngã và tổn thương.
                            Vậy để vượt qua những lúc như vậy, chúng ta cần có đọng lực để bước tiếp.</p>
                        <ul class="list-inline social-icons mb-3">

                            <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>

                            <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>

                            <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>

                            <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>

                            <li class="list-inline-item"><a href="#"><i class="ti-youtube"></i></a></li>

                        </ul>
                        <a href="about-me.html" class="btn btn-primary mb-2">About me</a>
                    </div>

                    <!-- Search -->

                    <div class="widget">
                        <h4 class="widget-title"><span>Không bao giờ lỡ tin mới nhất</span></h4>
                        <form action="#!" method="post" name="mc-embedded-subscribe-form" target="_blank"
                            class="widget-search">
                            <input class="mb-3" id="search-query" name="s" type="search"
                                placeholder="Email của bạn">
                            <i class="ti-email"></i>
                            <button type="submit" class="btn btn-primary btn-block" name="subscribe">Theo dõi ngay</button>
                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                <input type="text" name="b_463ee871f45d2d93748e77cad_a0a2c6d074" tabindex="-1">
                            </div>
                        </form>
                    </div>

                    <!-- categories -->
                    <div class="widget widget-categories">
                        <h4 class="widget-title"><span>Danh mục</span></h4>
                        <ul class="list-unstyled widget-list">
                            @foreach ($tag as $tags)
                            <li>
                                <a href="{{route('users.tag')}}" class="d-flex">
                                    {{ $tags->name }} <small class="ml-auto">({{ $tags->posts_count }})</small>
                                </a>
                            </li>
                            @endforeach

                        </ul>
                    </div><!-- tags -->
                    <div class="widget">
                        <h4 class="widget-title"><span>Các trang</span></h4>
                        <ul class="list-inline widget-list-inline widget-card">
                            <li class="list-inline-item"><a href="{{route('tags.posts',$Bag->id)}}">Tin mới nhất</a></li>
                            <li class="list-inline-item"><a href="{{route('tags.posts',$Bag->id)}}">Thể thao</a></li>
                            <li class="list-inline-item"><a href="{{route('tags.posts',$Bag->id)}}">Kinh doanh</a></li>
                            <li class="list-inline-item"><a href="{{route('tags.posts',$Bag->id)}}">Xã hội</a></li>
                            <li class="list-inline-item"><a href="{{route('tags.posts',$Bag->id)}}">Thế giới</a></li>
                            <li class="list-inline-item"><a href="{{route('tags.posts',$Bag->id)}}">Giải trí</a></li>
                            <li class="list-inline-item"><a href="{{route('tags.posts',$Bag->id)}}">Sức khỏe</a></li>
                            <li class="list-inline-item"><a href="{{route('tags.posts',$Bag->id)}}">Việc làm</a></li>
                            <li class="list-inline-item"><a href="{{route('tags.posts',$Bag->id)}}">Giáo dục</a></li>
                            <li class="list-inline-item"><a href="{{route('tags.posts',$Bag->id)}}">An ninh</a></li>
                            <li class="list-inline-item"><a href="{{route('tags.posts',$Bag->id)}}">Pháp luật</a></li>

                        </ul>
                    </div><!-- recent post -->


                    <!-- Social -->
                    <div class="widget">
                        <h4 class="widget-title"><span>Mạnh xã hội</span></h4>
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
