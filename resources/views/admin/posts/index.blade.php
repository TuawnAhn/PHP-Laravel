@extends('layouts.admin')

@section('title', 'Danh sách bài viết')

@section('content')
    <h1 class="mb-4">Danh sách bài viết</h1>
    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary btn-sm">Thêm bài viết</a>
    <a href="{{ route('admin.posts.bin') }}" class="btn btn-danger btn-sm">Thùng rác</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form tìm kiếm -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><i class="fas fa-search"></i> Tìm kiếm bài viết</h5>
        </div>
        <div class="card-body">
            <form method="GET" action="{{ route('admin.posts.index') }}">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label">Tiêu đề</label>
                        <input type="text" name="title" class="form-control" placeholder="Nhập tiêu đề"
                            value="{{ request('title') }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Tác giả</label>
                        <input type="text" name="author" class="form-control" placeholder="Nhập tên tác giả"
                            value="{{ request('author') }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Trạng thái</label>
                        <select name="trang_thai" class="form-select">
                            <option value="">-- Tất cả --</option>
                            <option value="1" {{ request('trang_thai') == '1' ? 'selected' : '' }}>Công khai</option>
                            <option value="0" {{ request('trang_thai') == '0' ? 'selected' : '' }}>Nháp</option>
                        </select>
                    </div>
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Tìm kiếm</button>
                        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary"><i class="fas fa-sync"></i> Làm
                            mới</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Danh sách bài viết -->
    <table class="table table-striped table-bordered">
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
                        <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-secondary btn-sm">Xem</a>
                        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" style="display:inline;"
                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa bài viết này không?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-end mt-3">
        {{ $posts->links('pagination::bootstrap-4') }}
    </div>
@endsection
