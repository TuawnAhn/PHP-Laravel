@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <h1>Bảng điều khiển</h1>
    <p>Chào mừng bạn đến với hệ thống quản trị Laravel.</p>

    <div class="row">
        <div class="col-md-4">
            <div class="card text-bg-primary mb-3">
                <div class="card-header">Sản phẩm</div>
                <div class="card-body">
                    <h5 class="card-title">150 sản phẩm</h5>
                    <p class="card-text">Quản lý các sản phẩm trong hệ thống.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-bg-success mb-3">
                <div class="card-header">Người dùng</div>
                <div class="card-body">
                    <h5 class="card-title">300 người dùng</h5>
                    <p class="card-text">Quản lý thông tin người dùng.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-bg-warning mb-3">
                <div class="card-header">Đơn hàng</div>
                <div class="card-body">
                    <h5 class="card-title">25 đơn hàng</h5>
                    <p class="card-text">Theo dõi và quản lý đơn hàng.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
