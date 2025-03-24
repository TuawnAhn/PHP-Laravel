@extends('layouts.admin')

@section('title', 'Chi tiết sản phẩm')

@section('content')
    <h1 class="mb-4">Chi tiết sản phẩm</h1>

    <div class="card">
        <div class="card-header bg-primary text-white">
            Thông tin sản phẩm
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->ten_san_pham }}"
                            class="img-fluid rounded">
                    @else
                        <p>Không có ảnh</p>
                    @endif
                </div>
                <div class="col-md-8">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID:</th>
                            <td>{{ $product->id }}</td>
                        </tr>
                        <tr>
                            <th>Mã sản phẩm:</th>
                            <td>{{ $product->ma_san_pham }}</td>
                        </tr>
                        <tr>
                            <th>Tên sản phẩm:</th>
                            <td>{{ $product->ten_san_pham }}</td>
                        </tr>
                        <tr>
                            <th>Danh mục:</th>
                            <td>{{ $product->categories->ten_danh_muc ?? 'Chưa có danh mục' }}</td>
                        </tr>
                        <tr>
                            <th>Giá:</th>
                            <td>{{ number_format($product->gia, 0, ',', '.') }} VND</td>
                        </tr>
                        <tr>
                            <th>Giá khuyến mãi:</th>
                            <td>
                                @if ($product->gia_khuyen_mai)
                                    {{ number_format($product->gia_khuyen_mai, 0, ',', '.') }} VND
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Số lượng:</th>
                            <td>{{ $product->so_luong }}</td>
                        </tr>
                        <tr>
                            <th>Ngày nhập:</th>
                            <td>{{ date('d/m/Y', strtotime($product->ngay_nhap)) }}</td>
                        </tr>
                        <tr>
                            <th>Trạng thái:</th>
                            <td>
                                @if ($product->trang_thai)
                                    <span class="badge bg-success">Đang bán</span>
                                @else
                                    <span class="badge bg-danger">Ngừng bán</span>
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="mt-3">
                <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Quay lại</a>
                <a href="" class="btn btn-warning">Sửa</a>
                <a href="#" class="btn btn-danger">Xóa</a>
            </div>
        </div>
    </div>
@endsection
