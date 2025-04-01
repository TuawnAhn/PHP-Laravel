@extends('layouts.admin')

@section('title', 'Chỉnh sửa danh mục')

@section('content')
    <h1 class="mb-4">Chỉnh sửa danh mục</h1>

    <div class="card">
        <div class="card-header bg-warning text-white">Cập nhật thông tin danh mục</div>
        <div class="card-body">
            <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Tên danh mục -->
                <div class="mb-3">
                    <label class="form-label">Tên danh mục</label>
                    <input type="text" name="ten_danh_muc" class="form-control"
                        value="{{ old('ten_danh_muc', $category->ten_danh_muc) }}">
                    @error('ten_danh_muc')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Mô tả danh mục -->
                {{-- <div class="mb-3">
                    <label class="form-label">Mô tả</label>
                    <textarea name="mo_ta" class="form-control" rows="4">{{ old('mo_ta', $category->mo_ta) }}</textarea>
                    @error('mo_ta')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div> --}}

                <!-- Trạng thái -->
                <div class="mb-3">
                    <label class="form-label">Trạng thái</label>
                    <select name="trang_thai" class="form-control">
                        <option value="1" {{ old('trang_thai', $category->trang_thai) == '1' ? 'selected' : '' }}>Hoạt
                            động</option>
                        <option value="0" {{ old('trang_thai', $category->trang_thai) == '0' ? 'selected' : '' }}>Không
                            hoạt động</option>
                    </select>
                    @error('trang_thai')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-warning text-white">Cập nhật</button>
                <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
    </div>
@endsection
