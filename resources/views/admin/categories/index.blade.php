@extends('layouts.admin')

@section('title', 'Danh sách danh mục')

@section('content')
    <h1 class="mb-4">Danh sách danh mục</h1>
    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary btn-sm">Thêm danh mục</a>
    <a href="{{ route('admin.categories.bin') }}" class="btn btn-danger btn-sm">Thùng rác</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form tìm kiếm -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><i class="fas fa-search"></i> Tìm kiếm danh mục</h5>
        </div>
        <div class="card-body">
            <form method="GET" action="{{ route('admin.categories.index') }}">
                <div class="row g-3">
                    <!-- Tên danh mục -->
                    <div class="col-md-4">
                        <label class="form-label">Tên danh mục</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            <input type="text" name="ten_danh_muc" class="form-control" placeholder="Nhập tên"
                                value="{{ request('ten_danh_muc') }}">
                        </div>
                    </div>

                    <!-- Trạng thái -->
                    <div class="col-md-3">
                        <label class="form-label">Trạng thái</label>
                        <select name="trang_thai" class="form-select">
                            <option value="">-- Tất cả --</option>
                            <option value="1" {{ request('trang_thai') == '1' ? 'selected' : '' }}>Hoạt động</option>
                            <option value="0" {{ request('trang_thai') == '0' ? 'selected' : '' }}>Không hoạt động
                            </option>
                        </select>
                    </div>

                    <!-- Nút tìm kiếm & Làm mới -->
                    <div class="col-12 col-md-auto d-flex align-items-end justify-content-md-end">
                        <button type="submit" class="btn btn-primary btn-md me-1 px-3 py-1.5 text-nowrap">
                            <i class="fas fa-search"></i> Tìm kiếm
                        </button>
                        <a href="{{ route('admin.categories.index') }}"
                            class="btn btn-secondary btn-md ms-1 px-3 py-1.5 text-nowrap">
                            <i class="fas fa-sync"></i> Làm mới
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->ten_danh_muc }}</td>
                    <td>
                        @if ($category->trang_thai)
                            <span class="badge bg-success">Hoạt động</span>
                        @else
                            <span class="badge bg-danger">Không hoạt động</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.categories.edit', $category->id) }}"
                            class="btn btn-warning btn-sm">Sửa</a>
                        <a href="{{ route('admin.categories.show', $category->id) }}"
                            class="btn btn-secondary btn-sm">Xem</a>

                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST"
                            style="display:inline;"
                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?');">
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
        {{ $categories->links('pagination::bootstrap-4') }}
    </div>
@endsection
