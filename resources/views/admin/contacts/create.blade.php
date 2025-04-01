@extends('layouts.admin')

@section('title', 'Thêm liên hệ')

@section('content')
    <h1 class="mb-4">Thêm liên hệ mới</h1>

    <div class="card">
        <div class="card-header bg-primary text-white">Nhập thông tin liên hệ</div>
        <div class="card-body">
            <form action="{{ route('admin.contacts.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Tên</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Số điện thoại</label>
                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                    @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Tin nhắn</label>
                    <textarea name="message" class="form-control">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Thêm liên hệ</button>
                <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
    </div>
@endsection
