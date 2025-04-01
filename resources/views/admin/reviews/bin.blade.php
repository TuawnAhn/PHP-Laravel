@extends('layouts.admin')

@section('title', 'Thùng rác danh mục')

@section('content')
    <h1 class="mb-4">Thùng rác sản phẩm</h1>
    <a href="{{ route('admin.reviews.index') }}" class="btn btn-secondary btn-sm">Quay lại danh sách</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped table-bordered mt-3">
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
                        <form action="{{ route('admin.reviews.restore', $review->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success btn-sm">Khôi phục</button>
                        </form>
                        <form action="{{ route('admin.reviews.forceDelete', $review->id) }}" method="POST"
                            style="display:inline;"
                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa vĩnh viễn đánh giá này không?');">
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
