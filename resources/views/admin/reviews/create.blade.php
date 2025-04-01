
@extends('layouts.admin')

@section('title', 'Thêm Đánh Giá')

@section('content')
    <h1 class="mb-4">Thêm đánh giá mới</h1>

    <div class="card">
        <div class="card-header bg-primary text-white">Nhập thông tin đánh giá</div>
        <div class="card-body">
            <form action="{{ route('admin.reviews.store') }}" method="POST">
                @csrf

                <!-- Chọn khách hàng -->
                <div class="mb-3">
                    <label class="form-label">Khách hàng</label>
                    <select name="customer_id" class="form-control">
                        <option value="">-- Chọn khách hàng --</option>
                        @foreach ($customers as $customer)
                            <option value="{{ $customer->id }}" {{ old('customer_id') == $customer->id ? 'selected' : '' }}>
                                {{ $customer->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('customer_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Chọn sản phẩm -->
                <div class="mb-3">
                    <label class="form-label">Sản phẩm</label>
                    <select name="product_id" class="form-control">
                        <option value="">-- Chọn sản phẩm --</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}" {{ old('product_id') == $product->id ? 'selected' : '' }}>
                                {{ $product->ten_san_pham }}
                            </option>
                        @endforeach
                    </select>
                    @error('product_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Chọn số sao -->
                <div class="mb-3">
                    <label class="form-label">Đánh giá</label>
                    <select name="rating" class="form-control">
                        <option value="">-- Chọn số sao --</option>
                        <option value="1" {{ old('rating') == '1' ? 'selected' : '' }}>⭐ 1</option>
                        <option value="2" {{ old('rating') == '2' ? 'selected' : '' }}>⭐⭐ 2</option>
                        <option value="3" {{ old('rating') == '3' ? 'selected' : '' }}>⭐⭐⭐ 3</option>
                        <option value="4" {{ old('rating') == '4' ? 'selected' : '' }}>⭐⭐⭐⭐ 4</option>
                        <option value="5" {{ old('rating') == '5' ? 'selected' : '' }}>⭐⭐⭐⭐⭐ 5</option>
                    </select>
                    @error('rating')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Nội dung đánh giá -->
                <div class="mb-3">
                    <label class="form-label">Nội dung</label>
                    <textarea name="content" class="form-control" rows="5">{{ old('content') }}</textarea>
                    @error('content')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Nút thao tác -->
                <button type="submit" class="btn btn-success">Thêm đánh giá</button>
                <a href="{{ route('admin.reviews.index') }}" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
    </div>
@endsection
