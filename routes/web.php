<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\SliderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ForgotPasswordController::class, 'reset'])->name('password.update');


Route::prefix('admin')->middleware(['auth', 'admin'])->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    //Product
    Route::prefix('products')->name('products.')->group(function () {
        Route::get('/',                [ProductController::class, 'index'])->name('index');
        Route::get('/{id}/show',       [ProductController::class, 'show'])->name('show');
        Route::get('/create',          [ProductController::class, 'create'])->name('create');
        Route::post('/store',          [ProductController::class, 'store'])->name('store');
        Route::get('/{id}/edit',       [ProductController::class, 'edit'])->name('edit');
        Route::put('/{id}/update',     [ProductController::class, 'update'])->name('update');
        Route::delete('/{id}/destroy', [ProductController::class, 'destroy'])->name('destroy');
        Route::get('/bin',             [ProductController::class, 'bin'])->name('bin');
        Route::put('/{id}/restore',    [ProductController::class, 'restore'])->name('restore');
        Route::delete('/{id}/forceDelete',   [ProductController::class, 'forceDelete'])->name('forceDelete');
    });

    //Category
    Route::prefix('categories')->name('categories.')->group(function () {
        Route::get('/',                [CategoryController::class, 'index'])->name('index');
        Route::get('/{id}/show',       [CategoryController::class, 'show'])->name('show');
        Route::get('/create',          [CategoryController::class, 'create'])->name('create');
        Route::post('/store',          [CategoryController::class, 'store'])->name('store');
        Route::get('/{id}/edit',       [CategoryController::class, 'edit'])->name('edit');
        Route::put('/{id}/update',     [CategoryController::class, 'update'])->name('update');
        Route::delete('/{id}/destroy', [CategoryController::class, 'destroy'])->name('destroy');
        Route::get('/bin',             [CategoryController::class, 'bin'])->name('bin');
        Route::put('/{id}/restore',    [CategoryController::class, 'restore'])->name('restore');
        Route::delete('/{id}/forceDelete',   [CategoryController::class, 'forceDelete'])->name('forceDelete');
    });

    //Banner
    Route::prefix('banners')->name('banners.')->group(function () {
        Route::get('/',                [BannerController::class, 'index'])->name('index');
        Route::get('/{id}/show',       [BannerController::class, 'show'])->name('show');
        Route::get('/create',          [BannerController::class, 'create'])->name('create');
        Route::post('/store',          [BannerController::class, 'store'])->name('store');
        Route::get('/{id}/edit',       [BannerController::class, 'edit'])->name('edit');
        Route::put('/{id}/update',     [BannerController::class, 'update'])->name('update');
        Route::delete('/{id}/destroy', [BannerController::class, 'destroy'])->name('destroy');
        Route::get('/bin',             [BannerController::class, 'bin'])->name('bin');
        Route::put('/{id}/restore',    [BannerController::class, 'restore'])->name('restore');
        Route::delete('/{id}/forceDelete',   [BannerController::class, 'forceDelete'])->name('forceDelete');
    });

    //Contact
    Route::prefix('contacts')->name('contacts.')->group(function () {
        Route::get('/',                [ContactController::class, 'index'])->name('index');
        Route::get('/{id}/show',       [ContactController::class, 'show'])->name('show');
        Route::get('/create',          [ContactController::class, 'create'])->name('create');
        Route::post('/store',          [ContactController::class, 'store'])->name('store');
        Route::get('/{id}/edit',       [ContactController::class, 'edit'])->name('edit');
        Route::put('/{id}/update',     [ContactController::class, 'update'])->name('update');
        Route::delete('/{id}/destroy', [ContactController::class, 'destroy'])->name('destroy');
        Route::get('/bin',             [ContactController::class, 'bin'])->name('bin');
        Route::put('/{id}/restore',    [ContactController::class, 'restore'])->name('restore');
        Route::delete('/{id}/forceDelete',   [ContactController::class, 'forceDelete'])->name('forceDelete');
    });

    //Post
    Route::prefix('posts')->name('posts.')->group(function () {
        Route::get('/',                [PostController::class, 'index'])->name('index');
        Route::get('/{id}/show',       [PostController::class, 'show'])->name('show');
        Route::get('/create',          [PostController::class, 'create'])->name('create');
        Route::post('/store',          [PostController::class, 'store'])->name('store');
        Route::get('/{id}/edit',       [PostController::class, 'edit'])->name('edit');
        Route::put('/{id}/update',     [PostController::class, 'update'])->name('update');
        Route::delete('/{id}/destroy', [PostController::class, 'destroy'])->name('destroy');
        Route::get('/bin',             [PostController::class, 'bin'])->name('bin');
        Route::put('/{id}/restore',    [PostController::class, 'restore'])->name('restore');
        Route::delete('/{id}/forceDelete',   [PostController::class, 'forceDelete'])->name('forceDelete');
    });

    //Review
    Route::prefix('reviews')->name('reviews.')->group(function () {
        Route::get('/',                [ReviewController::class, 'index'])->name('index');
        Route::get('/{id}/show',       [ReviewController::class, 'show'])->name('show');
        Route::get('/create',          [ReviewController::class, 'create'])->name('create');
        Route::post('/store',          [ReviewController::class, 'store'])->name('store');
        Route::get('/{id}/edit',       [ReviewController::class, 'edit'])->name('edit');
        Route::put('/{id}/update',     [ReviewController::class, 'update'])->name('update');
        Route::delete('/{id}/destroy', [ReviewController::class, 'destroy'])->name('destroy');
        Route::get('/bin',             [ReviewController::class, 'bin'])->name('bin');
        Route::put('/{id}/restore',    [ReviewController::class, 'restore'])->name('restore');
        Route::delete('/{id}/forceDelete',   [ReviewController::class, 'forceDelete'])->name('forceDelete');
    });

    //Customer
    Route::prefix('customers')->name('customers.')->group(function () {
        Route::get('/',                [CustomerController::class, 'index'])->name('index');
        Route::get('/{id}/show',       [CustomerController::class, 'show'])->name('show');
        Route::get('/create',          [CustomerController::class, 'create'])->name('create');
        Route::post('/store',          [CustomerController::class, 'store'])->name('store');
        Route::get('/{id}/edit',       [CustomerController::class, 'edit'])->name('edit');
        Route::put('/{id}/update',     [CustomerController::class, 'update'])->name('update');
        Route::delete('/{id}/destroy', [CustomerController::class, 'destroy'])->name('destroy');
        Route::get('/bin',             [CustomerController::class, 'bin'])->name('bin');
        Route::put('/{id}/restore',    [CustomerController::class, 'restore'])->name('restore');
        Route::delete('/{id}/forceDelete',   [CustomerController::class, 'forceDelete'])->name('forceDelete');
    });
});
Route::prefix('clients')->name('clients.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
});
