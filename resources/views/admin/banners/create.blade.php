@extends('layouts.admin')

@section('title', 'Thêm Banner')

@section('content')
    <h1 class="mb-4">Thêm Banner Mới</h1>

    <div class="card">
        <div class="card-header bg-primary text-white">Nhập thông tin Banner</div>
        <div class="card-body">
            <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Tên Banner</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Ảnh Banner</label>
                    <input type="file" name="image" class="form-control">
                    @error('image')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Trạng thái</label>
                    <select name="trang_thai" class="form-control">
                        <option value="1" {{ old('trang_thai') == '1' ? 'selected' : '' }}>Hiển thị</option>
                        <option value="0" {{ old('trang_thai') == '0' ? 'selected' : '' }}>Ẩn</option>
                    </select>
                    @error('trang_thai')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Thêm Banner</button>
                <a href="{{ route('admin.banners.index') }}" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
    </div>
@endsection
