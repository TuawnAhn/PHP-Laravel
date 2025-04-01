<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    //Để làm việc được với Factory ta phải sử dụng thư viện HasFactory
    use HasFactory, SoftDeletes;

    // Muốn Model làm việc với bảng làm ta cần quy định trong thuộc tính
    protected $table = 'categories';

    // Muốn làm việc với Eloquent ta cần phải xác định các trường dữ liệu vào fillable
    protected $fillable = ['ten_danh_muc', 'trang_thai'];
    protected $dates = ['deleted_at'];


    //Tạo mối quan hệ với bảng products
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($category) {
            $category->products()->delete(); // Xóa tất cả sản phẩm trước khi xóa danh mục
        });
    }
}
