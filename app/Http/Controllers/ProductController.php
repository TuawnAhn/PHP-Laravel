<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
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

        $categories = Category::all();

        return view('admin.products.index', compact('products', 'categories'));
    }

    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);
        return view('admin.products.show', compact('product'));
        //Hiển thị thông tin chi tiết của sản phẩm ra giao diện
        //Xây dựng giao diện trang thêm, sửa
    }
    public function create()
    {
        $categories = Category::all(); // Lấy danh sách danh mục để hiển thị trong form
        return view('admin.products.create', compact('categories'));
    }
    public function store(Request $request)
    {
        // $dataNew = [
        //     'ma_san_pham' => $request->ma_san_pham,
        //     'ten_san_pham' => $request->ten_san_pham,
        //     'category_id' => $request->category_id,
        //     'gia' => $request->gia,
        //     'gia_khuyen_mai' => $request->gia_khuyen_mai,
        //     'so_luong' => $request->so_luong,
        //     'ngay_nhap' => $request->ngay_nhap,
        //     'mo_ta' => $request->mo_ta,
        //     'trang_thai' => $request->trang_thai
        // ];

        //Validate dữ liệu
        // Validate dữ liệu với thông báo lỗi tiếng Việt
        $dataNew = $request->validate([
            'ma_san_pham'    => 'required|string|max:20|unique:products,ma_san_pham',
            'ten_san_pham'   => 'required|string|max:255',
            'category_id'    => 'required|exists:categories,id',
            'hinh_anh'       => 'nullable|image|mimes:jpg,png,jpeg,gif',
            'gia'            => 'required|numeric|min:0|max:99999999',
            'gia_khuyen_mai' => 'nullable|numeric|min:0|lt:gia',
            'so_luong'       => 'required|integer|min:1',
            'ngay_nhap'      => 'nullable|date',
            'mo_ta'          => 'nullable|string',
            'trang_thai'     => 'required|boolean'
        ], [
            'required'      => ':attribute không được để trống.',
            'string'        => ':attribute phải là chuỗi.',
            'max.string'    => ':attribute không được vượt quá :max ký tự.',
            'max.numeric'   => ':attribute không được lớn hơn :max.',
            'min.numeric'   => ':attribute phải lớn hơn hoặc bằng :min.',
            'integer'       => ':attribute phải là số nguyên.',
            'unique'        => ':attribute đã tồn tại.',
            'numeric'       => ':attribute phải là số.',
            'date'          => ':attribute phải là ngày hợp lệ.',
            'image'         => ':attribute phải là hình ảnh.',
            'in'            => ':attribute phải có giá trị hợp lệ: :values.',
            'boolean'       => ':attribute phải là đúng hoặc sai.',
            'same'          => ':attribute phải giống với :other.'
        ], [
            'ma_san_pham'    => 'Mã sản phẩm',
            'ten_san_pham'   => 'Tên sản phẩm',
            'category_id'    => 'Danh mục',
            'hinh_anh'       => 'Hình ảnh',
            'gia'            => 'Giá',
            'gia_khuyen_mai' => 'Giá khuyến mãi',
            'so_luong'       => 'Số lượng',
            'mo_ta'          => 'Mô tả',
            'trang_thai'     => 'Trạng thái'
        ]);


        //Xử lý hỉnh ảnh
        if ($request->hasFile('hinh_anh')) {
            $imgPath = $request->file('hinh_anh')->store('images/products', 'public');
            $dataNew['hinh_anh'] = $imgPath;
        }
        Product::create($dataNew);
        return redirect()->route('admin.products.index');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Xóa ảnh sản phẩm nếu có
        if ($product->hinh_anh) {
            Storage::disk('public')->delete($product->hinh_anh);
        }

        // Xóa sản phẩm
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Sản phẩm đã được xóa thành công.');
    }

    // public function edit($id)
    // {
    //     $product = Product::findOrFail($id);
    //     $categories = Category::all();
    //     return view('admin.products.edit', compact('product', 'categories'));
    // }
}
