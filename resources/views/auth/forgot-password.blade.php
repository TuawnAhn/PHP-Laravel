@extends('layouts.auth')

@section('content')
    <form action="{{ route('password.email') }}" method="POST" class="login-form">
        <h1 class="login-title">Quên mật khẩu</h1>
        @csrf

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="input-box">
            <i class='bx bxs-envelope'></i>
            <input type="email" name="email" placeholder="Nhập email" required>
        </div>

        <button type="submit" class="login-btn">Gửi link đặt lại mật khẩu</button>

        <p class="register">
            <a href="{{ route('login') }}">Quay lại đăng nhập</a>
        </p>
    </form>
@endsection
