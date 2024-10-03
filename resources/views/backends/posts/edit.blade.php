@extends('backends.layout.master')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="mb-3">
                @if (session()->has('success'))
                    <span class="alert alert-success">{{ session()->get('success') }}</span>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <div class="table-responsive">

                <h2 class="mb-3">Thêm bài đăng mới</h2>

                <form action="{{ route('posts.update',$post) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="" class="form-label">Hình ảnh</label>
                        <input type="file" class="form-control" name="image" id=""
                            placeholder="Nhập tên thẻ mới">
                            <img src="{{ \Storage::url($post->image)}}" width="100px" alt="">

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tên bài đăng</label>
                        <input type="name" class="form-control" name="name" id=""
                            placeholder="Nhập tên thẻ mới" value="{{ $post->name }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Mô tả ngắn</label>
                        <input type="text" class="form-control" name="title" id=""
                            placeholder="Nhập tên thẻ mới"value="{{ $post->title }}">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Ngày đăng</label>
                        <input type="date" class="form-control" name="date_add" id=""
                            placeholder="Nhập tên thẻ mới" value="{{ $post->date_add }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nội dung</label>
                        <textarea type="text" class="form-control" name="main_content" id="" placeholder="Nhập tên thẻ mới"
                                 cols="30" rows="10">{{ $post->main_content }}
                        </textarea>
                        @error('main_content')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="">Thẻ danh mục</label>
                        <select class="form-select" name="tags[]" multiple id="">
                            @foreach ($tags as $id => $name)
                                <option @selected(in_array($id, $postTag)) value="{{$id}}">{{$name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 d-flex justify-content-center gap-1">
                        <button type="submit" class="btn btn-success">Sửa bài viết</button>
                        <a href="{{ route('posts.index') }}" class="btn btn-info">Danh sách</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
