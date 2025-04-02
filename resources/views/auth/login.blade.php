@extends('layouts.auth')

@section('content')

    <form action="{{ route('login') }}" method="POST" class="login-form">
        <h1 class="login-title">Đăng nhập</h1>
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
            <input type="email" name="email" placeholder="Email">
        </div>

        <div class="input-box">
            <i class='bx bxs-lock-alt'></i>
            <input type="password" name="password" placeholder="Mật khẩu">
        </div>

        <div class="remember-forgot-box">
            <label for="remember">
                <input type="checkbox" id="remember" name="remember" required>
                Nhớ tôi
            </label>
            <a href="#">Quên mật khẩu?</a>

        </div>

        <button type="submit" class="login-btn">Login</button>

        <p class="register">
            Bạn chưa có tài khoản?
            <a href="{{ route('register') }}">Đăng ký</a>
        </p>
    </form>

@endsection
