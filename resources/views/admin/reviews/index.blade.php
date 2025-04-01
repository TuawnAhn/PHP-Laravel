@extends('layouts.admin')

@section('title', 'Danh sách Đánh giá')

@section('content')
    <h1 class="mb-4">Danh sách Đánh giá</h1>
    <a href="{{ route('admin.reviews.create') }}" class="btn btn-primary btn-sm">Thêm đánh giá</a>
    <a href="{{ route('admin.reviews.bin') }}" class="btn btn-danger btn-sm">Thùng rác</a>


    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form tìm kiếm -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><i class="fas fa-search"></i> Tìm kiếm đánh giá</h5>
        </div>
        <div class="card-body">
            <form method="GET" action="{{ route('admin.reviews.index') }}">
                <div class="row g-3">
                    <!-- Tìm kiếm theo customer_id -->
                    <div class="col-md-3">
                        <label class="form-label">Khách hàng</label>
                        <select name="customer_id" class="form-select">
                            <option value="">-- Tất cả --</option>
                            @foreach ($customers as $customer)
                                <option value="{{ $customer->id }}"
                                    {{ request('customer_id') == $customer->id ? 'selected' : '' }}>
                                    {{ $customer->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Tìm kiếm theo sản phẩm -->
                    <div class="col-md-3">
                        <label class="form-label">Sản phẩm</label>
                        <select name="product_id" class="form-select">
                            <option value="">-- Tất cả --</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}"
                                    {{ request('product_id') == $product->id ? 'selected' : '' }}>
                                    {{ $product->ten_san_pham }}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <!-- Tìm kiếm theo rating -->
                    <div class="col-md-3">
                        <label class="form-label">Đánh giá</label>
                        <select name="rating" class="form-select">
                            <option value="">-- Tất cả --</option>
                            <option value="1" {{ request('rating') == '1' ? 'selected' : '' }}>1</option>
                            <option value="2" {{ request('rating') == '2' ? 'selected' : '' }}>2</option>
                            <option value="3" {{ request('rating') == '3' ? 'selected' : '' }}>3</option>
                            <option value="4" {{ request('rating') == '4' ? 'selected' : '' }}>4</option>
                            <option value="5" {{ request('rating') == '5' ? 'selected' : '' }}>5</option>
                        </select>
                    </div>

                    <!-- Nút tìm kiếm & Làm mới -->
                    <div class="col-12 col-md-auto d-flex align-items-end justify-content-md-end">
                        <button type="submit" class="btn btn-primary btn-md me-1 px-3 py-1.5 text-nowrap">
                            <i class="fas fa-search"></i> Tìm kiếm
                        </button>
                        <a href="{{ route('admin.reviews.index') }}"
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
                <th>Khách hàng</th>
                <th>Sản phẩm</th>
                <th>Đánh giá</th>
                <th>Nội dung</th>
                <th>Ngày tạo</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $review)
                <tr>
                    <td>{{ $review->id }}</td>
                    <td>{{ $review->customer->name }}</td>
                    <td>{{ $review->product->ten_san_pham }}</td>
                    <td>
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($review->rating >= $i)
                                <i class="fas fa-star text-warning"></i>
                            @endif
                        @endfor
                    </td>

                    <td>{{ $review->content }}</td>
                    <td>{{ $review->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('admin.reviews.show', $review->id) }}" class="btn btn-secondary btn-sm">Xem</a>
                        <a href="{{ route('admin.reviews.edit', $review->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST"
                            style="display:inline;"
                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa đánh giá này không?');">
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
        {{ $reviews->links('pagination::bootstrap-4') }}
    </div>
@endsection
