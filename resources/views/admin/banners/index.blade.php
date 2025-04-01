@extends('layouts.admin')

@section('title', 'Danh sách Banner')

@section('content')
    <h1 class="mb-4">Danh sách Banner</h1>
    <a href="{{ route('admin.banners.create') }}" class="btn btn-primary btn-sm">Thêm Banner</a>
    <a href="{{ route('admin.banners.bin') }}" class="btn btn-danger btn-sm">Thùng rác</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped table-bordered mt-3">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Tên Banner</th>
                <th>Hình ảnh</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banners as $banner)
                <tr>
                    <td>{{ $banner->id }}</td>
                    <td>{{ $banner->name }}</td>
                    <td>
                        @if ($banner->image)
                            <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->name }}" width="100">
                        @else
                            Không có ảnh
                        @endif
                    </td>
                    <td>
                        @if ($banner->trang_thai)
                            <span class="badge bg-success">Đang bán</span>
                        @else
                            <span class="badge bg-danger">Ngừng bán</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.banners.show', $banner->id) }}" class="btn btn-secondary btn-sm">Xem</a>
                        <a href="{{ route('admin.banners.edit', $banner->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('admin.banners.destroy', $banner->id) }}" method="POST"
                            style="display:inline;"
                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa banner này không?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Hiển thị phân trang -->
    <div class="d-flex justify-content-end mt-3">
        {{ $banners->links('pagination::bootstrap-4') }}
    </div>
@endsection
