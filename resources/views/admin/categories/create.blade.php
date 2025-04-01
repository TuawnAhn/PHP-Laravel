@extends('layouts.admin')

@section('title', 'Thêm danh mục')

@section('content')
    <h1 class="mb-4">Thêm danh mục mới</h1>

    <div class="card">
        <div class="card-header bg-primary text-white">Nhập thông tin danh mục</div>
        <div class="card-body">
            <form action="{{ route('admin.categories.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Tên danh mục</label>
                    <input type="text" name="ten_danh_muc" class="form-control" value="{{ old('ten_danh_muc') }}">
                    @error('ten_danh_muc')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                {{-- <div class="mb-3">
                    <label class="form-label">Mô tả danh mục</label>
                    <textarea name="mo_ta" class="form-control" rows="4">{{ old('mo_ta') }}</textarea>
                    @error('mo_ta')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div> --}}

                <div class="mb-3">
                    <label class="form-label">Trạng thái</label>
                    <select name="trang_thai" class="form-control">
                        <option value="1" {{ old('trang_thai') == '1' ? 'selected' : '' }}>Hoạt động</option>
                        <option value="0" {{ old('trang_thai') == '0' ? 'selected' : '' }}>Không hoạt động</option>
                    </select>
                    @error('trang_thai')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Thêm danh mục</button>
                <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
    </div>
@endsection
