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
                    <h2>Danh sách Tin tức</h2>
                    <tr>
                        <th>STT</th>
                        <th>Ảnh</th>
                        <th>Tên tiêu đề</th>
                        <th>Tiêu đề bài viết</th>
                        <th>View</th>
                        <th>Ngày đăng bài</th>
                        <th>Thẻ danh mục</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($posts as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>
                                <img src="{{ \Storage::url($item->image)}}" width="100px" alt="">
                            </td>
                            <td>{{ $item->name }}</td>

                            <td>{{ Str::limit($item->title, 100, '...') }}</td>

                            <td>{{ $item->view }}</td>

                            <td>
                                {{ \Carbon\Carbon::parse($item->date_add)->format('d/m/Y') }}
                            </td>

                            <td>
                                @foreach ($item->tags as $post)
                                     <span class="badge bg-info">{{ $post->name }}</span>
                                @endforeach
                            </td>

                            <td class="d-flex gap-1">
                                <a href="{{ route('posts.show',$item->id) }}" class="btn btn-primary" role="button">Show</a>

                                <a href="{{ route('posts.edit',$item->id) }}" class="btn btn-warning" role="button">Sửa</a>
                                <form action="{{ route('posts.destroy',$item->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('bạn muốn xóa không ?')">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
