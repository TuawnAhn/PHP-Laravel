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
                <th>Tên khách hàng</th>
                <th>Email</th>
                <th>Điện thoại</th>
                <th>Địa chỉ</th>
                <th>Ngày tạo</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone ?? 'Không có' }}</td>
                    <td>{{ $customer->address ?? 'Không có' }}</td>
                    <td>{{ $customer->created_at->format('d/m/Y') }}</td>
                    <td>
                        <form action="{{ route('admin.customers.restore', $customer->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success btn-sm">Khôi phục</button>
                        </form>
                        <form action="{{ route('admin.customers.forceDelete', $customer->id) }}" method="POST"
                            style="display:inline;"
                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa vĩnh viễn người dùng này không?');">
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
