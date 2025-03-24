<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'ma_san_pham',
        'ten_san_pham',
        'category_id',
        'gia',
        'gia_khuyen_mai',
        'so_luong',
        'ngay_nhap',
        'mo_ta',
        'trang_thai',
        'created_at',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
