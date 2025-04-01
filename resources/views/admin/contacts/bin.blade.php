@extends('layouts.admin')

@section('title', 'Thùng rác danh mục')

@section('content')
    <h1 class="mb-4">Thùng rác danh mục</h1>
    <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary btn-sm">Quay lại danh sách</a>


    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped table-bordered mt-3">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Tên Contact</th>
                <th>Email</th>
                <th>Điện thoại</th>
                <th>Tin nhắn</th>
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
                    <td>
                        <form action="{{ route('admin.contacts.restore', $contact->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success btn-sm">Khôi phục</button>
                        </form>
                        <form action="{{ route('admin.contacts.forceDelete', $contact->id) }}" method="POST"
                            style="display:inline;"
                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa vĩnh viễn liên hệ này không?');">
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
