<?php

namespace App\Http\Controllers\Client;

use App\Models\Post;
use App\Models\Banner;
use App\Models\Review;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        // Lấy 8 sản phẩm mới nhất, sắp xếp theo ngày tạo (giả sử có trường `created_at`)
        $products = Product::orderBy('created_at', 'desc')->limit(8)->get();
        $categories = Category::all();
        $banners = Banner::all();
        $topReviews = Review::orderBy('rating', 'desc')->orderBy('created_at', 'desc')->limit(10)->get();
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('client.home', compact('products', 'banners', 'categories', 'topReviews', 'posts'));
    }
    public function blog()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        $latestPost = Post::orderBy('created_at', 'desc')->first();

        return view('client.blog', compact('posts', 'latestPost'));
    }
    public function showPost($id)
    {
        $post = Post::findOrFail($id);

        return view('client.blog-detail', compact('post'));
    }
}
