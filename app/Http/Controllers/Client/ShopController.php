<?php

namespace App\Http\Controllers\Client;

use App\Models\Review;
use App\Models\Product;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        // Lấy danh sách các danh mục
        $categories = Category::all();

        $query = Product::query();

        // Tìm kiếm theo tên sản phẩm
        if ($request->has('search') && $request->search != '') {
            $query->where('ten_san_pham', 'like', '%' . $request->search . '%');
        }

        // Lọc theo danh mục
        if ($request->has('category') && $request->category != '') {
            $query->where('category_id', $request->category);
        }

        // Lọc theo khoảng giá
        if ($request->has('min_price') && $request->has('max_price')) {
            $minPrice = floatval($request->min_price);
            $maxPrice = floatval($request->max_price);
            if ($minPrice >= 0 && $maxPrice >= $minPrice) {
                $query->whereBetween('gia', [$minPrice, $maxPrice]);
            }
        }

        // Sắp xếp theo giá
        if ($request->has('sort_by')) {
            if ($request->sort_by === 'price-low-high') {
                $query->orderBy('gia', 'asc');
            } elseif ($request->sort_by === 'price-high-low') {
                $query->orderBy('gia', 'desc');
            } else {
                $query->orderBy('created_at', 'desc'); // Mặc định
            }
        } else {
            $query->orderBy('created_at', 'desc'); // Mặc định
        }

        // Phân trang
        $products = $query->paginate(10);

        return view('client.shop', compact('products', 'categories'));
    }
    public function detail($id)
    {
        // Lấy thông tin sản phẩm
        $product = Product::with('category')->findOrFail($id);

        // Lấy 5 sản phẩm cùng danh mục (ngoại trừ sản phẩm hiện tại)
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->limit(5)
            ->get();

        // Lấy toàn bộ đánh giá của sản phẩm (chỉ hiển thị nếu đã đăng nhập)
        $reviews = Auth::check()
            ? Review::where('product_id', $product->id)
            ->with('customer') // Giả sử quan hệ với User
            ->orderBy('created_at', 'desc')
            ->get()
            : collect(); // Trả về collection rỗng nếu chưa đăng nhập

        return view('client.detail', compact('product', 'relatedProducts', 'reviews'));
    }

    public function storeReview(Request $request, $id)
    {
        // Kiểm tra đăng nhập
        if (!Auth::check()) {
            return redirect()->route('client.login')->with('error', 'Vui lòng đăng nhập để đánh giá sản phẩm.');
        }

        // Tìm customer dựa theo email của user đang đăng nhập
        $customer = Customer::where('email', Auth::user()->email)->first();

        if (!$customer) {
            return redirect()->back()->with('error', 'Không tìm thấy thông tin khách hàng để gửi đánh giá.');
        }

        // Kiểm tra xem khách hàng đã đánh giá sản phẩm này chưa
        $existingReview = Review::where('customer_id', $customer->id)
            ->where('product_id', $id)
            ->first();

        if ($existingReview) {
            return redirect()->back()->with('success', 'Bạn đã đánh giá sản phẩm này rồi. Mỗi khách hàng chỉ được đánh giá 1 lần.');
        }

        // Validate dữ liệu từ form
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'content' => 'nullable|string|max:1000',
        ]);

        // Lưu đánh giá vào database
        Review::create([
            'product_id'  => $id,
            'customer_id' => $customer->id,
            'rating'      => $request->rating,
            'content'     => $request->content,
        ]);

        return redirect()->back()->with('success', 'Đánh giá của bạn đã được gửi thành công!');
    }
}
