<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

//Mặc định apiResource sẽ trỏ tới 5 phương thức mặc định trong Controller api
//Nếu muốn tạo thêm phương thức mới trong Controller API
//Thì ta cần toạ thêm đường dẫn riêng để trỏ đến phương thức đó
//Và Route đó phải được đặt ở bên trên route apiResource
Route::apiResource('products', ProductController::class)->only([
    'index',
    'show',
    'store',
    'update',
    'destroy'
]);
