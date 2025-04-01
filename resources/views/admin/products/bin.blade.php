@extends('layouts.admin')

@section('title', 'Thùng rác danh mục')

@section('content')
    <h1 class="mb-4">Thùng rác sản phẩm</h1>
    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary btn-sm">Quay lại danh sách</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped table-bordered mt-3">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Mã SP</th>
                <th>Tên sản phẩm</th>
                <th>Danh mục</th>
                <th>Ảnh</th>
                <th>Giá</th>
                <th>Giá KM</th>
                <th>Số lượng</th>
                <th>Ngày nhập</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->ma_san_pham }}</td>
                    <td>{{ $product->ten_san_pham }}</td>
                    <td>{{ $product->category->ten_danh_muc ?? 'Chưa có danh mục' }}</td>
                    <td>
                        @if ($product->hinh_anh)
                            <img src="{{ asset('storage/' . $product->hinh_anh) }}" alt="" width="100">
                        @else
                            Không có ảnh
                        @endif

                    </td>
                    <td>{{ number_format($product->gia, 0, ',', '.') }} VND</td>
                    <td>
                        @if ($product->gia_khuyen_mai)
                            {{ number_format($product->gia_khuyen_mai, 0, ',', '.') }} VND
                        @else
                            -
                        @endif
                    </td>
                    <td>{{ $product->so_luong }}</td>
                    <td>{{ date('d/m/Y', strtotime($product->ngay_nhap)) }}</td>
                    <td>
                        <form action="{{ route('admin.products.restore', $product->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success btn-sm">Khôi phục</button>
                        </form>
                        <form action="{{ route('admin.products.forceDelete', $product->id) }}" method="POST"
                            style="display:inline;"
                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa vĩnh viễn sản phẩm này không?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Xóa vĩnh viễn</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
