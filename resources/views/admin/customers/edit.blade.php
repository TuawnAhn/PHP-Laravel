@extends('layouts.admin')

@section('title', 'Chỉnh sửa khách hàng')

@section('content')
    <h1 class="mb-4">Chỉnh sửa khách hàng</h1>

    <div class="card">
        <div class="card-header bg-warning text-white">Cập nhật thông tin khách hàng</div>
        <div class="card-body">
            <form action="{{ route('admin.customers.update', $customer->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!--Tên khách hàng-->
                <div class="mb-3">
                    <label class="form-label">Tên khách hàng</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $customer->name) }}">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--Email-->
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $customer->email) }}">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--Điện thoại-->
                <div class="mb-3">
                    <label class="form-label">Điện thoại</label>
                    <input type="text" name="phone" class="form-control" value="{{ old('phone', $customer->phone) }}">
                    @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--Địa chỉ-->
                <div class="mb-3">
                    <label class="form-label">Địa chỉ</label>
                    <input type="text" name="address" class="form-control"
                        value="{{ old('address', $customer->address) }}">
                    @error('address')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--Trạng thái-->
                <div class="mb-3">
                    <label class="form-label">Trạng thái</label>
                    <select name="status" class="form-control">
                        <option value="1" {{ old('status', $customer->status) == '1' ? 'selected' : '' }}>Đang hoạt
                            động</option>
                        <option value="0" {{ old('status', $customer->status) == '0' ? 'selected' : '' }}>Ngừng hoạt
                            động</option>
                    </select>
                    @error('status')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-warning text-white">Cập nhật</button>
                <a href="{{ route('admin.customers.index') }}" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
    </div>
@endsection
