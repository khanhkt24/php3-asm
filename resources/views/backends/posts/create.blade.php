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

                <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Hình ảnh</label>
                        <input type="file" class="form-control" name="image" id=""
                            placeholder="Nhập tên thẻ mới">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tên bài đăng</label>
                        <input type="name" class="form-control" name="name" id=""
                            placeholder="Nhập tên thẻ mới" value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Mô tả ngắn</label>
                        <input type="text" class="form-control" name="title" id=""
                            placeholder="Nhập tên thẻ mới" value="{{ old('title') }}">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Ngày đăng</label>
                        <input type="date" class="form-control" name="date_add" id=""
                            placeholder="Nhập tên thẻ mới" value="{{ old('date_add') }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nội dung</label>
                        <textarea class="form-control" name="main_content" id="" placeholder="Nhập tên thẻ mới"
                            value="{{ old('main_content') }}" cols="30" rows="10">
                         </textarea>
                        @error('main_content')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="">Thẻ danh mục</label>
                        <select class="form-select" name="tags[]" multiple id="">
                            @foreach ($tags as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 d-flex justify-content-center gap-1">
                        <button type="submit" class="btn btn-success">Thêm mới</button>
                        <a href="{{ route('posts.index') }}" class="btn btn-info">Danh sách</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
