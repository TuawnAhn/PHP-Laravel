@extends('layouts.admin')

@section('title', 'Chi tiết Khách hàng')

@section('content')
    <h1 class="mb-4">Chi tiết Khách hàng</h1>

    <div class="card">
        <div class="card-header bg-primary text-white">
            Thông tin khách hàng
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID:</th>
                            <td>{{ $customer->id }}</td>
                        </tr>
                        <tr>
                            <th>Tên khách hàng:</th>
                            <td>{{ $customer->name }}</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{{ $customer->email }}</td>
                        </tr>
                        <tr>
                            <th>Điện thoại:</th>
                            <td>{{ $customer->phone ?? 'Không có' }}</td>
                        </tr>
                        <tr>
                            <th>Địa chỉ:</th>
                            <td>{{ $customer->address ?? 'Không có' }}</td>
                        </tr>
                        <tr>
                            <th>Ngày tạo:</th>
                            <td>{{ $customer->created_at->format('d/m/Y') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="mt-3">
                <a href="{{ route('admin.customers.index') }}" class="btn btn-secondary">Quay lại</a>
                <a href="{{ route('admin.customers.edit', $customer->id) }}" class="btn btn-warning">Sửa</a>
                <form action="{{ route('admin.customers.destroy', $customer->id) }}" method="POST" style="display:inline;"
                    onsubmit="return confirm('Bạn có chắc chắn muốn xóa khách hàng này không?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
            </div>
        </div>
    </div>
@endsection
