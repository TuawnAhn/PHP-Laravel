<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'products';

    protected $fillable = [
        'ma_san_pham',
        'ten_san_pham',
        'category_id',
        'hinh_anh',
        'gia',
        'gia_khuyen_mai',
        'so_luong',
        'ngay_nhap',
        'mo_ta',
        'trang_thai',
        'created_at',
    ];

    protected $dates = ['deleted_at'];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    // Trong model Product
    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id');
    }
}
