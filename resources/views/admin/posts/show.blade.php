@extends('layouts.admin')

@section('title', 'Chi tiết bài viết')

@section('content')
    <h1 class="mb-4">Chi tiết bài viết</h1>

    <div class="card">
        <div class="card-header bg-primary text-white">
            Thông tin bài viết
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid rounded">
                    @else
                        <p>Không có ảnh</p>
                    @endif
                </div>
                <div class="col-md-8">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID:</th>
                            <td>{{ $post->id }}</td>
                        </tr>
                        <tr>
                            <th>Tiêu đề:</th>
                            <td>{{ $post->title }}</td>
                        </tr>
                        <tr>
                            <th>Tác giả:</th>
                            <td>{{ $post->author }}</td>
                        </tr>
                        <tr>
                            <th>Ngày đăng:</th>
                            <td>{{ date('d/m/Y H:i', strtotime($post->created_at)) }}</td>
                        </tr>
                        <tr>
                            <th>Nội dung:</th>
                            <td>{{ $post->content }}</td>
                        </tr>
                        <tr>
                            <th>Trạng thái:</th>
                            <td>
                                @if ($post->trang_thai)
                                    <span class="badge bg-success">Công khai</span>
                                @else
                                    <span class="badge bg-danger">Nháp</span>
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="mt-3">
                <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Quay lại</a>
                <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning">Sửa</a>
                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" style="display:inline;"
                    onsubmit="return confirm('Bạn có chắc chắn muốn xóa bài viết này không?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
            </div>
        </div>
    </div>
@endsection
