@extends('layouts.auth')

@section('content')
    <div class="auth-form">
        <h2>Đăng ký</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" name="name" placeholder="Họ và tên" required>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Mật khẩu" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Xác nhận mật khẩu"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Đăng ký</button>
        </form>
        <div class="auth-switch">
            <p>Đã có tài khoản? <a href="{{ route('login') }}">Đăng nhập ngay</a></p>
        </div>
    </div>
@endsection
