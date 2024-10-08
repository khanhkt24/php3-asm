@extends('frontends.layouts.detail1')

@section('content-detail')
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class=" col-lg-9   mb-5 mb-lg-0">
                    <article>
                        <h1 class="h2">{{ $data->name }}
                        </h1>
                            <div class="post-slider mb-4">
                                <img src="{{ Storage::url($data->image) }}" class="card-img-top" alt="post-thumb">
                            </div>

                            <h4 >{{ $data->title }}
                            </h4>
                            <ul class="card-meta my-3 list-inline">
                                <li class="list-inline-item">
                                    <a href="author-single.html" class="card-meta-author">
                                        <img src="C:\laragon\www\php3-asm\public\client\images\john-doe.jpg">
                                        <span>Hồng Đăng</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-timer"></i>{{ $data->view }}
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-calendar"></i>{{ $data->date_add }}
                                </li>
                                <li class="list-inline-item">
                                    <ul class="card-meta-tag list-inline">
                                        @foreach ($data->tags as $key=>$value)
                                            <li class="list-inline-item"><a href="tags.html">{{ $value->name}}</a></li>
                                        @endforeach

                                    </ul>
                                </li>
                            </ul>
                            <div class="content">
                                <p>{{ $data->main_content }}</p>
                            </div>

                    </article>

                </div>

                <div class="col-lg-9 col-md-12">
                    <div class="mb-5 border-top mt-4 pt-5">
                        <h3 class="mb-4">Comments</h3>

                        <div class="media d-block d-sm-flex mb-4 pb-4">
                            <a class="d-inline-block mr-2 mb-3 mb-md-0" href="#">
                                <img src="fontend/images/post/user-01.jpg" class="mr-3 rounded-circle" alt="">
                            </a>
                            <div class="media-body">
                                <a href="#!" class="h4 d-inline-block mb-3">Đình Hà</a>

                                <p>Ngày mai nên rảnh rỗi, không có thai. Trước đây không hề sợ sô cô la
                                    bận tâm Ngày mai hận thù thuần khiết, tiền đình trong vulputate, tempus viverra turpis.
                                    Bây giờ trộn nước sốt và nếu không thì sẽ vulputate friingilla. Hãy hoàn thành bài tập
                                    về nhà ở Lacinia
                                    họng</p>

                                <span class="text-black-800 mr-3 font-weight-600">july 15, 2024 at 6.25 pm</span>

                                <a class="text-primary font-weight-600" href="#!">Reply</a>
                            </div>
                        </div>
                        <div class="media d-block d-sm-flex">
                            <div class="d-inline-block mr-2 mb-3 mb-md-0" href="#">
                                <img class="mr-3" src="fontend/images/post/arrow.png" alt="">
                                <a href="#!"><img src="fontend/images/post/user-02.jpg" class="mr-3 rounded-circle"
                                        alt=""></a>
                            </div>
                            <div class="media-body">
                                <a href="#!" class="h4 d-inline-block mb-3">Hanna Phạm</a>

                                <p>Ngày mai nên rảnh rỗi, không có thai. Trước đây không hề sợ sô cô la
                                    bận tâm Ngày mai hận thù thuần khiết, tiền đình trong vulputate, tempus viverra turpis.
                                    Bây giờ trộn nước sốt và nếu không thì sẽ vulputate friingilla. Hãy hoàn thành bài tập
                                    về nhà ở Lacinia
                                    họng</p>

                                <span class="text-black-800 mr-3 font-weight-600">july 15, 2024 at 6.25 pm</span>
                                <a class="text-primary font-weight-600" href="#!">Reply</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="mb-4">Để lại bình luận</h3>
                        <form method="POST">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <textarea class="form-control shadow-none" name="comment" rows="7" required></textarea>
                                </div>
                                <div class="form-group col-md-4">
                                    <input class="form-control shadow-none" type="text" placeholder="Tên" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input class="form-control shadow-none" type="text" placeholder="email" required>

                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Viết bình luận</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
