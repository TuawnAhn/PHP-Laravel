@extends('layouts.admin')

@section('title', 'Thêm khách hàng')

@section('content')
    <h1 class="mb-4">Thêm khách hàng mới</h1>

    <div class="card">
        <div class="card-header bg-primary text-white">Nhập thông tin khách hàng</div>
        <div class="card-body">
            <form action="{{ route('admin.customers.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Họ và tên</label>
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
                    <label class="form-label">Địa chỉ</label>
                    <input type="text" name="address" class="form-control" value="{{ old('address') }}">
                    @error('address')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Trạng thái</label>
                    <select name="status" class="form-control">
                        <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Hoạt động</option>
                        <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Ngừng hoạt động</option>
                    </select>
                    @error('status')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Thêm khách hàng</button>
                <a href="{{ route('admin.customers.index') }}" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
    </div>
@endsection
