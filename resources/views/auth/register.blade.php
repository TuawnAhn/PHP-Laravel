@extends('layouts.auth')

@section('content')
    <form action="{{ route('register') }}" method="POST" class="login-form">
        <h1 class="login-title">Đăng ký</h1>
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li style="color: red; list-style-type: none;">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="input-box">
            <i class='bx bxs-user'></i>
            <input type="text" name="name" placeholder="Nhập tên" required>
        </div>

        <div class="input-box">
            <i class='bx bxs-envelope'></i>
            <input type="email" name="email" placeholder="Nhập email" required>
        </div>

        <div class="input-box">
            <i class='bx bxs-lock-alt'></i>
            <input type="password" name="password" placeholder="Nhập mật khẩu" required>
        </div>

        <div class="input-box">
            <i class='bx bxs-lock-alt'></i>
            <input type="password" name="password_confirmation" placeholder="Xác nhận mật khẩu" required>
        </div>

        <button type="submit" class="login-btn">Đăng ký</button>

        <p class="register">
            Đã có tài khoản?
            <a href="{{ route('login') }}"> Đăng nhập</a>
        </p>
    </form>
@endsection
