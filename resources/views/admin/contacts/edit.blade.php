@extends('layouts.admin')

@section('title', 'Chỉnh sửa liên hệ')

@section('content')
    <h1 class="mb-4">Chỉnh sửa liên hệ</h1>

    <div class="card">
        <div class="card-header bg-warning text-white">Cập nhật thông tin liên hệ</div>
        <div class="card-body">
            <form action="{{ route('admin.contacts.update', $contact->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!--Họ và tên-->
                <div class="mb-3">
                    <label class="form-label">Họ và tên</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $contact->name) }}">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--Email-->
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $contact->email) }}">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--Số điện thoại-->
                <div class="mb-3">
                    <label class="form-label">Số điện thoại</label>
                    <input type="text" name="phone" class="form-control" value="{{ old('phone', $contact->phone) }}">
                    @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--Nội dung tin nhắn-->
                <div class="mb-3">
                    <label class="form-label">Nội dung</label>
                    <textarea name="message" class="form-control" rows="4">{{ old('message', $contact->message) }}</textarea>
                    @error('message')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--Trạng thái-->
                <div class="mb-3">
                    <label class="form-label">Trạng thái</label>
                    <select name="trang_thai" class="form-control">
                        <option value="1" {{ old('trang_thai', $contact->trang_thai) == '1' ? 'selected' : '' }}>Đã xử
                            lý</option>
                        <option value="0" {{ old('trang_thai', $contact->trang_thai) == '0' ? 'selected' : '' }}>Chờ
                            xử lý</option>
                    </select>
                    @error('trang_thai')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-warning text-white">Cập nhật</button>
                <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
    </div>
@endsection
