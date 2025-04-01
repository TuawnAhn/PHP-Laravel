@extends('layouts.admin')

@section('title', 'Chi tiết liên hệ')

@section('content')
    <h1 class="mb-4">Chi tiết liên hệ</h1>

    <div class="card">
        <div class="card-header bg-primary text-white">
            Thông tin liên hệ
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID:</th>
                    <td>{{ $contact->id }}</td>
                </tr>
                <tr>
                    <th>Họ và tên:</th>
                    <td>{{ $contact->name }}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>{{ $contact->email }}</td>
                </tr>
                <tr>
                    <th>Số điện thoại:</th>
                    <td>{{ $contact->phone ?? 'Không có' }}</td>
                </tr>
                <tr>
                    <th>Nội dung tin nhắn:</th>
                    <td>{{ $contact->message }}</td>
                </tr>
                <tr>
                    <th>Ngày gửi:</th>
                    <td>{{ date('d/m/Y H:i', strtotime($contact->created_at)) }}</td>
                </tr>
                <tr>
                    <th>Trạng thái:</th>
                    <td>
                        @if ($contact->trang_thai)
                            <span class="badge bg-success">Đã xử lý</span>
                        @else
                            <span class="badge bg-danger">Chờ xử lý</span>
                        @endif
                    </td>
                </tr>
            </table>

            <div class="mt-3">
                <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">Quay lại</a>
                <a href="{{ route('admin.contacts.edit', $contact->id) }}" class="btn btn-warning">Sửa</a>
                <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" style="display:inline;"
                    onsubmit="return confirm('Bạn có chắc chắn muốn xóa liên hệ này không?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
            </div>
        </div>
    </div>
@endsection
