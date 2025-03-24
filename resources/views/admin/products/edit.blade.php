{{-- @extends('layouts.admin')

@section('title', 'Chỉnh sửa sản phẩm')

@section('content')
    <h1 class="mb-4">Chỉnh sửa sản phẩm</h1>

    <div class="card">
        <div class="card-header bg-warning text-white">Cập nhật thông tin sản phẩm</div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Mã sản phẩm</label>
                    <input type="text" name="ma_san_pham" class="form-control" value="{{ $product->ma_san_pham }}"
                        required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tên sản phẩm</label>
                    <input type="text" name="ten_san_pham" class="form-control" value="{{ $product->ten_san_pham }}"
                        required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Danh mục</label>
                    <select name="category_id" class="form-control" required>
                        <option value="">-- Chọn danh mục --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->ten_danh_muc }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Ảnh sản phẩm</label>
                    <input type="file" name="image" class="form-control">
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->ten_san_pham }}"
                            class="mt-2" width="100">
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label">Giá</label>
                    <input type="number" name="gia" class="form-control" value="{{ $product->gia }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Giá khuyến mãi</label>
                    <input type="number" name="gia_khuyen_mai" class="form-control" value="{{ $product->gia_khuyen_mai }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Số lượng</label>
                    <input type="number" name="so_luong" class="form-control" value="{{ $product->so_luong }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Ngày nhập</label>
                    <input type="date" name="ngay_nhap" class="form-control" value="{{ $product->ngay_nhap }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mô tả</label>
                    <textarea name="mo_ta" class="form-control" rows="4" required>{{ $product->mo_ta }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Trạng thái</label>
                    <select name="trang_thai" class="form-control">
                        <option value="1" {{ $product->trang_thai ? 'selected' : '' }}>Đang bán</option>
                        <option value="0" {{ !$product->trang_thai ? 'selected' : '' }}>Ngừng bán</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-warning text-white">Cập nhật</button>
                <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
    </div>
@endsection --}}
