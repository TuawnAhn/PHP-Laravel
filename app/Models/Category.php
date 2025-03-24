<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    //Để làm việc được với Factory ta phải sử dụng thư viện HasFactory
    use HasFactory;

    // Muốn Model làm việc với bảng làm ta cần quy định trong thuộc tính
    protected $table = 'categories';

    // Muốn làm việc với Eloquent ta cần phải xác định các trường dữ liệu vào fillable
    protected $fillable = ['ten_danh_muc', 'trang_thai'];

    //Tạo mối quan hệ với bảng products
    public function product()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
