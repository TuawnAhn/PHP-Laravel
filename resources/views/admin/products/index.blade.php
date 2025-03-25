@extends('layouts.admin')

@section('title', 'Danh sách sản phẩm')

@section('content')
    <h1 class="mb-4">Danh sách sản phẩm</h1>
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary btn-sm">Thêm sản phẩm</a>


    <!-- Form tìm kiếm -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><i class="fas fa-search"></i> Tìm kiếm sản phẩm</h5>
        </div>
        <div class="card-body">
            <form method="GET" action="{{ route('admin.products.index') }}">
                <div class="row g-3">
                    <!-- Mã sản phẩm -->
                    <div class="col-md-2">
                        <label class="form-label">Mã sản phẩm</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                            <input type="text" name="ma_san_pham" class="form-control" placeholder="Nhập mã"
                                value="{{ request('ma_san_pham') }}">
                        </div>
                    </div>

                    <!-- Tên sản phẩm -->
                    <div class="col-md-2">
                        <label class="form-label">Tên sản phẩm</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            <input type="text" name="ten_san_pham" class="form-control" placeholder="Nhập tên"
                                value="{{ request('ten_san_pham') }}">
                        </div>
                    </div>

                    <!-- Danh mục -->
                    <div class="col-md-2">
                        <label class="form-label">Danh mục</label>
                        <select name="category_id" class="form-select">
                            <option value="">-- Tất cả --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->ten_danh_muc }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Khoảng giá -->
                    <div class="col-md-3">
                        <label class="form-label">Khoảng giá</label>
                        <div class="input-group">
                            <span class="input-group-text">₫</span>
                            <input type="number" name="gia_min" class="form-control" placeholder="Từ"
                                value="{{ request('gia_min') }}">
                            <span class="input-group-text">-</span>
                            <input type="number" name="gia_max" class="form-control" placeholder="Đến"
                                value="{{ request('gia_max') }}">
                        </div>
                    </div>

                    <!-- Ngày nhập -->
                    <div class="col-md-2">
                        <label class="form-label">Ngày nhập</label>
                        <input type="date" name="ngay_nhap" class="form-control" value="{{ request('ngay_nhap') }}">
                    </div>

                    <!-- Trạng thái -->
                    <div class="col-md-2">
                        <label class="form-label">Trạng thái</label>
                        <select name="trang_thai" class="form-select">
                            <option value="">-- Tất cả --</option>
                            <option value="1" {{ request('trang_thai') == '1' ? 'selected' : '' }}>Đang bán</option>
                            <option value="0" {{ request('trang_thai') == '0' ? 'selected' : '' }}>Ngừng bán</option>
                        </select>
                    </div>

                    <!-- Nút tìm kiếm & Làm mới -->
                    <div class="col-12 col-md-auto d-flex align-items-end justify-content-md-end">
                        <button type="submit" class="btn btn-primary btn-md me-1 px-3 py-1.5 text-nowrap">
                            <i class="fas fa-search"></i> Tìm kiếm
                        </button>
                        <a href="{{ route('admin.products.index') }}"
                            class="btn btn-secondary btn-md ms-1 px-3 py-1.5 text-nowrap">
                            <i class="fas fa-sync"></i> Làm mới
                        </a>
                    </div>

                </div>
            </form>
        </div>
    </div>




    <table class="table table-striped table-bordered">
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
                <th>Trạng thái</th>
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
                        @if ($product->trang_thai)
                            <span class="badge bg-success">Đang bán</span>
                        @else
                            <span class="badge bg-danger">Ngừng bán</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-secondary btn-sm">Xem</a>
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                            style="display:inline;"
                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Hiển thị phân trang -->
    <div class="d-flex justify-content-end mt-3">
        {{ $products->links('pagination::bootstrap-4') }}
    </div>

    @if (session('success'))
        <script>
            window.onload = function() {
                alert("{{ session('success') }}");
            }
        </script>
    @endif

@endsection
