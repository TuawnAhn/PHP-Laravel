@extends('layouts.admin')

@section('title', 'Thùng rác danh mục')

@section('content')
    <h1 class="mb-4">Thùng rác bài viết</h1>
    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary btn-sm">Quay lại danh sách</a>


    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped table-bordered mt-3">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Tác giả</th>
                <th>Ảnh</th>
                <th>Ngày đăng</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->author }}</td>
                    <td>
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="Hình ảnh" width="50">
                        @else
                            Không có ảnh
                        @endif
                    </td>
                    <td>{{ date('d/m/Y H:i', strtotime($post->created_at)) }}</td>
                    <td>
                        @if ($post->trang_thai)
                            <span class="badge bg-success">Công khai</span>
                        @else
                            <span class="badge bg-warning">Nháp</span>
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('admin.posts.restore', $post->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success btn-sm">Khôi phục</button>
                        </form>
                        <form action="{{ route('admin.posts.forceDelete', $post->id) }}" method="POST"
                            style="display:inline;"
                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa vĩnh viễn bài viết này không?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Xóa vĩnh viễn</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
