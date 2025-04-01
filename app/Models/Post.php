<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, SoftDeletes; // Bắt buộc phải có để sử dụng Factory

    protected $fillable = ['title', 'content', 'author', 'image', 'trang_thai'];

    protected $dates = ['deleted_at'];
}
