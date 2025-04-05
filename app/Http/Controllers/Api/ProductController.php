<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Product::with('category');

        // Tìm kiếm theo mã sản phẩm
        if ($request->filled('ma_san_pham')) {
            $query->where('ma_san_pham', 'LIKE', '%' . $request->ma_san_pham . '%');
        }

        // Tìm kiếm theo tên sản phẩm
        if ($request->filled('ten_san_pham')) {
            $query->where('ten_san_pham', 'LIKE', '%' . $request->ten_san_pham . '%');
        }

        // Tìm kiếm theo danh mục
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        // Tìm kiếm theo khoảng giá
        if ($request->filled('gia_min')) {
            $query->where('gia', '>=', $request->gia_min);
        }
        if ($request->filled('gia_max')) {
            $query->where('gia', '<=', $request->gia_max);
        }

        // Tìm kiếm theo ngày nhập
        if ($request->filled('ngay_nhap')) {
            $query->whereDate('ngay_nhap', '=', $request->ngay_nhap);
        }

        // Tìm kiếm theo trạng thái
        if ($request->filled('trang_thai')) {
            $query->where('trang_thai', $request->trang_thai);
        }

        $query->orderBy('id', 'desc');

        $products = $query->paginate(10);

        //hiển thị tất cả
        // return response()->json($products);

        //Hiển thị theo định dạng của ProductResource. Collection chỉ sử dụng để hiển thị nhiều bản ghi
        return ProductResource::collection($products); //Hiển thị theo định dạng của ProductResource. Collection chỉ sử dụng để hiển thị nhiều bản ghi
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);

        //Hiển thị thông tin chi tiết của sản phẩm ra giao diện
        //Xây dựng giao diện trang thêm, sửa
        // return view('admin.products.show', compact('product'));

        return response()->json([
            'message' => 'Lấy thông tin sản phẩm thành công',
            'data' => new ProductResource($product),
            'status' => 200,
            'author' => 'Tuấn Anh'
        ]);


        // return new ProductResource($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
