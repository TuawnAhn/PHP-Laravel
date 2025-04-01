@extends('layouts.admin')

@section('title', 'Chi tiết Đánh giá')

@section('content')
    <h1 class="mb-4">Chi tiết Đánh giá</h1>

    <div class="card">
        <div class="card-header bg-primary text-white">
            Thông tin đánh giá
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID:</th>
                            <td>{{ $review->id }}</td>
                        </tr>
                        <tr>
                            <th>Khách hàng:</th>
                            <td>{{ $review->customer->name ?? 'Khách hàng không xác định' }}</td>
                        </tr>
                        <tr>
                            <th>Sản phẩm:</th>
                            <td>{{ $review->product->ten_san_pham ?? 'Sản phẩm không xác định' }}</td>
                        </tr>
                        <tr>
                            <th>Đánh giá:</th>
                            <td>{{ $review->rating }} / 5</td>
                        </tr>
                        <tr>
                            <th>Nội dung:</th>
                            <td>{{ $review->content }}</td>
                        </tr>
                        <tr>
                            <th>Ngày tạo:</th>
                            <td>{{ $review->created_at->format('d/m/Y') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="mt-3">
                <a href="{{ route('admin.reviews.index') }}" class="btn btn-secondary">Quay lại</a>
                <a href="{{ route('admin.reviews.edit', $review->id) }}" class="btn btn-warning">Sửa</a>
                <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST" style="display:inline;"
                    onsubmit="return confirm('Bạn có chắc chắn muốn xóa đánh giá này không?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
            </div>
        </div>
    </div>
@endsection
