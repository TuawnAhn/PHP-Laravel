@extends('layouts.admin')

@section('title', 'Chi tiết danh mục')

@section('content')
    <h1 class="mb-4">Chi tiết danh mục</h1>

    <div class="card">
        <div class="card-header bg-primary text-white">
            Thông tin danh mục
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID:</th>
                    <td>{{ $category->id }}</td>
                </tr>
                <tr>
                    <th>Tên danh mục:</th>
                    <td>{{ $category->ten_danh_muc }}</td>
                </tr>
                {{-- <tr>
                    <th>Mô tả:</th>
                    <td>{{ $category->mo_ta }}</td>
                </tr> --}}
                <tr>
                    <th>Trạng thái:</th>
                    <td>
                        @if ($category->trang_thai)
                            <span class="badge bg-success">Hiển thị</span>
                        @else
                            <span class="badge bg-danger">Ẩn</span>
                        @endif
                    </td>
                </tr>
            </table>
            <div class="mt-3">
                <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Quay lại</a>
                <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning">Sửa</a>
                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display:inline;"
                    onsubmit="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
            </div>
        </div>
    </div>
@endsection
