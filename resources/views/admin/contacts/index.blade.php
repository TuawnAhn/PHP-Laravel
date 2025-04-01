@extends('layouts.admin')

@section('title', 'Danh sách liên hệ')

@section('content')
    <h1 class="mb-4">Danh sách liên hệ</h1>
    <a href="{{ route('admin.contacts.bin') }}" class="btn btn-danger btn-sm">Thùng rác</a>


    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form tìm kiếm -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><i class="fas fa-search"></i> Tìm kiếm liên hệ</h5>
        </div>
        <div class="card-body">
            <form method="GET" action="{{ route('admin.contacts.index') }}">
                <div class="row g-3">
                    <!-- Tên -->
                    <div class="col-md-3">
                        <label class="form-label">Tên</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" name="name" class="form-control" placeholder="Nhập tên"
                                value="{{ request('name') }}">
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="col-md-3">
                        <label class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" name="email" class="form-control" placeholder="Nhập email"
                                value="{{ request('email') }}">
                        </div>
                    </div>

                    <!-- Điện thoại -->
                    <div class="col-md-3">
                        <label class="form-label">Số điện thoại</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            <input type="text" name="phone" class="form-control" placeholder="Nhập số điện thoại"
                                value="{{ request('phone') }}">
                        </div>
                    </div>

                    <!-- Trạng thái -->
                    <div class="col-md-3">
                        <label class="form-label">Trạng thái</label>
                        <select name="trang_thai" class="form-select">
                            <option value="">-- Tất cả --</option>
                            <option value="1" {{ request('trang_thai') == '1' ? 'selected' : '' }}>Đã xử lý </option>
                            <option value="0" {{ request('trang_thai') == '0' ? 'selected' : '' }}>Chờ xử lý</option>
                        </select>
                    </div>

                    <!-- Nút tìm kiếm & Làm mới -->
                    <div class="col-12 col-md-auto d-flex align-items-end justify-content-md-end">
                        <button type="submit" class="btn btn-primary btn-md me-1 px-3 py-1.5 text-nowrap">
                            <i class="fas fa-search"></i> Tìm kiếm
                        </button>
                        <a href="{{ route('admin.contacts.index') }}"
                            class="btn btn-secondary btn-md ms-1 px-3 py-1.5 text-nowrap">
                            <i class="fas fa-sync"></i> Làm mới
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Danh sách liên hệ -->
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Tin nhắn</th>
                <th>Ngày gửi</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone ?? 'N/A' }}</td>
                    <td>{{ Str::limit($contact->message, 50) }}</td>
                    <td>{{ date('d/m/Y H:i', strtotime($contact->created_at)) }}</td>
                    <td>
                        @if ($contact->trang_thai)
                            <span class="badge bg-success">Đã xử lý</span>
                        @else
                            <span class="badge bg-danger">Chờ xử lý</span>
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('admin.contacts.show', $contact->id) }}" class="btn btn-secondary btn-sm">Xem</a>
                        <a href="{{ route('admin.contacts.edit', $contact->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST"
                            style="display:inline;"
                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa liên hệ này không?');">
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
        {{ $contacts->links('pagination::bootstrap-4') }}
    </div>

@endsection
