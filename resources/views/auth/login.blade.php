@extends('layouts.auth')

@section('content')
    <div class="auth-form">
        <h2>Đăng nhập</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li style="color: red; list-style-type: none;">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
            </div>
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
        </form>
        <div class="auth-switch">
            <p>Chưa có tài khoản? <a href="{{ route('register') }}">Đăng ký ngay</a></p>
        </div>
    </div>

@endsection
