@extends('layouts.auth')

@section('content')
    <form action="{{ route('password.update') }}" method="POST" class="login-form">
        <h1 class="login-title">Đặt lại mật khẩu</h1>
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="input-box">
            <i class='bx bxs-envelope'></i>
            <input type="email" name="email" placeholder="Nhập email" required>
        </div>

        <div class="input-box">
            <i class='bx bxs-lock-alt'></i>
            <input type="password" name="password" placeholder="Mật khẩu mới" required>
        </div>

        <div class="input-box">
            <i class='bx bxs-lock-alt'></i>
            <input type="password" name="password_confirmation" placeholder="Xác nhận mật khẩu" required>
        </div>

        <button type="submit" class="login-btn">Đặt lại mật khẩu</button>
    </form>
@endsection
