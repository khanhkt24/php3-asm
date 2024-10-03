@extends('backends.layout.master')

@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{ route('tags.create') }}" class="btn btn-success float-end">Thêm thẻ mới</a>
                @if (session()->has('success'))
                <span class="alert alert-success">{{session()->get('success')}}</span>
                @endif
                
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead>
                    <h2>Danh sách Tin tức</h2>
                    <tr>
                        <th>STT</th>
                        <th>Tên</th>

                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td class="d-flex gap-1">
                                <a href="{{ route('tags.edit',$item->id) }}" class="btn btn-warning" role="button">Sửa</a>
                                <form action="{{ route('tags.destroy',$item->id) }}" method="POST">
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
