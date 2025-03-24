@extends('layouts.admin')

@section('title', 'Thêm sản phẩm')

@section('content')
    <h1 class="mb-4">Thêm sản phẩm mới</h1>

    <div class="card">
        <div class="card-header bg-primary text-white">Nhập thông tin sản phẩm</div>
        <div class="card-body">
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Mã sản phẩm</label>
                    <input type="text" name="ma_san_pham" class="form-control" value="{{ old('ma_san_pham') }}">
                    @error('ma_san_pham')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Tên sản phẩm</label>
                    <input type="text" name="ten_san_pham" class="form-control" value="{{ old('ten_san_pham') }}">
                    @error('ten_san_pham')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Danh mục</label>
                    <select name="category_id" class="form-control">
                        <option value="">-- Chọn danh mục --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->ten_danh_muc }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Ảnh sản phẩm</label>
                    <input type="file" name="hinh_anh" class="form-control">
                    @error('hinh_anh')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Giá</label>
                    <input type="number" name="gia" class="form-control" value="{{ old('gia') }}">
                    @error('gia')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Giá khuyến mãi</label>
                    <input type="number" name="gia_khuyen_mai" class="form-control" value="{{ old('gia_khuyen_mai') }}">
                    @error('gia_khuyen_mai')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Số lượng</label>
                    <input type="number" name="so_luong" class="form-control" value="{{ old('so_luong') }}">
                    @error('so_luong')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Ngày nhập</label>
                    <input type="date" name="ngay_nhap" class="form-control" value="{{ old('ngay_nhap') }}">
                    @error('ngay_nhap')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Mô tả sản phẩm</label>
                    <textarea name="mo_ta" class="form-control" rows="5">{{ old('mo_ta') }}</textarea>
                    @error('mo_ta')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Trạng thái</label>
                    <select name="trang_thai" class="form-control">
                        <option value="1" {{ old('trang_thai') == '1' ? 'selected' : '' }}>Đang bán</option>
                        <option value="0" {{ old('trang_thai') == '0' ? 'selected' : '' }}>Ngừng bán</option>
                    </select>
                    @error('trang_thai')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Thêm sản phẩm</button>
                <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
    </div>
@endsection
