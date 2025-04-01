<?php

namespace App\Models;

use App\Models\Review;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'customers';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
    ];
    protected $dates = ['deleted_at'];


    /**
     * Một khách hàng có thể có nhiều đánh giá (reviews)
     */
    public function reviews()
    {
        return $this->hasMany(Review::class, 'customer_id');
    }
}
