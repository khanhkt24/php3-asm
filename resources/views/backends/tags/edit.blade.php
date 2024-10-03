@extends('backends.layout.master')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="mb-3">
                @if (session()->has('success'))
                <span class="alert alert-success">{{session()->get('success')}}</span>
                 @endif
            </div>

            <div class="table-responsive">

                <h2 class="mb-3">Sửa thẻ mới</h2>

                <form action="{{ route('tags.update',$tag) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="" class="form-label">name</label>
                        <input type="text" class="form-control" name="name" id=""
                            placeholder="Nhập tên thẻ mới" value="{{$tag->name}}">
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3 d-flex justify-content-center gap-1">
                        <button type="submit" class="btn btn-success">Sửa thẻ</button>
                        <a href="{{ route('tags.index') }}" class="btn btn-info">Danh sách</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
