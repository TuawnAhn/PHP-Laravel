@extends('layouts.admin')

@section('title', 'Chỉnh sửa Banner')

@section('content')
    <h1 class="mb-4">Chỉnh sửa Banner</h1>

    <div class="card">
        <div class="card-header bg-warning text-white">Cập nhật thông tin Banner</div>
        <div class="card-body">
            <form action="{{ route('admin.banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Tên Banner</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $banner->name) }}">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Ảnh Banner</label>
                    <input type="file" name="image" class="form-control">
                    @if ($banner->image)
                        <img src="{{ asset('storage/' . $banner->image) }}" class="mt-2" width="200">
                    @endif
                    @error('image')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Trạng thái</label>
                    <select name="trang_thai" class="form-control">
                        <option value="1" {{ old('trang_thai', $banner->trang_thai) == '1' ? 'selected' : '' }}>Hiển
                            thị
                        </option>
                        <option value="0" {{ old('trang_thai', $banner->trang_thai) == '0' ? 'selected' : '' }}>Ẩn
                        </option>
                    </select>
                    @error('trang_thai')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-warning text-white">Cập nhật</button>
                <a href="{{ route('admin.banners.index') }}" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
    </div>
@endsection
