@extends('backends.layout.master')

@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{ route('posts.create') }}" class="btn btn-success float-end">Thêm bài đăng mới</a>
                @if (session()->has('success'))
                <span class="alert alert-success">{{session()->get('success')}}</span>
                @endif

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead>
                    <h2>Danh sách Tin tức của {{$post->name}}</h2>
                    <tr>
                        <th>STT</th>
                        <th>Ảnh</th>
                        <th>Tên tiêu đề</th>
                        <th>Tiêu đề bài viết</th>
                        <th>View</th>
                        <th>Ngày đăng bài</th>
                        <th>Nội dung chính</th>
                        <th>Thẻ danh mục</th>
                        <th>Thao tác</th>

                    </tr>
                </thead>

                <tbody>

                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>
                                <img src="{{ \Storage::url($post->image)}}" width="100px" alt="">
                            </td>
                            <td>{{ $post->name }}</td>

                            <td>{{ $post->title }}</td>

                            <td>{{ $post->view }}</td>

                            <td>
                                {{ \Carbon\Carbon::parse($post->date_add)->format('d/m/Y') }}
                            </td>

                            <td>{{ $post->main_content }}</td>

                            <td>
                                @foreach ($post->tags as $post)
                                     <span class="badge bg-info">{{ $post->name }}</span>
                                @endforeach
                            </td>

                            <td class="d-flex gap-1">
                                <a href="{{ route('posts.index') }}" class="btn btn-warning" role="button">danh sách</a>
                            </td>
                        </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
