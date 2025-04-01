@extends('layouts.admin')

@section('title', 'Danh sách Khách hàng')

@section('content')
    <h1 class="mb-4">Danh sách Khách hàng</h1>
    <a href="{{ route('admin.customers.create') }}" class="btn btn-primary btn-sm">Thêm khách hàng</a>
    <a href="{{ route('admin.customers.bin') }}" class="btn btn-danger btn-sm">Thùng rác</a>


    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form tìm kiếm -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><i class="fas fa-search"></i> Tìm kiếm khách hàng</h5>
        </div>
        <div class="card-body">
            <form method="GET" action="{{ route('admin.customers.index') }}">
                <div class="row g-3">
                    <!-- Tìm kiếm theo tên khách hàng -->
                    <div class="col-md-3">
                        <label class="form-label">Tên khách hàng</label>
                        <input type="text" name="name" class="form-control" placeholder="Nhập tên khách hàng"
                            value="{{ request('name') }}">
                    </div>

                    <!-- Tìm kiếm theo email -->
                    <div class="col-md-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Nhập email"
                            value="{{ request('email') }}">
                    </div>

                    <!-- Nút tìm kiếm & Làm mới -->
                    <div class="col-12 col-md-auto d-flex align-items-end justify-content-md-end">
                        <button type="submit" class="btn btn-primary btn-md me-1 px-3 py-1.5 text-nowrap">
                            <i class="fas fa-search"></i> Tìm kiếm
                        </button>
                        <a href="{{ route('admin.customers.index') }}"
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
                        <a href="{{ route('admin.customers.show', $customer->id) }}"
                            class="btn btn-secondary btn-sm">Xem</a>
                        <a href="{{ route('admin.customers.edit', $customer->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('admin.customers.destroy', $customer->id) }}" method="POST"
                            style="display:inline;"
                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa khách hàng này không?');">
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
        {{ $customers->links('pagination::bootstrap-4') }}
    </div>
@endsection
