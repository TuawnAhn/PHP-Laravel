<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $query = Category::query();

        // Tìm kiếm theo tên danh mục
        if ($request->filled('ten_danh_muc')) {
            $query->where('ten_danh_muc', 'LIKE', '%' . $request->ten_danh_muc . '%');
        }

        // Tìm kiếm theo trạng thái
        if ($request->filled('trang_thai')) {
            $query->where('trang_thai', $request->trang_thai);
        }

        $query->orderBy('id', 'desc');
        $categories = $query->paginate(10);

        return view('admin.categories.index', compact('categories'));
    }


    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.show', compact('category'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $dataNew = $request->validate([
            'ten_danh_muc' => 'required|string|max:255|unique:categories,ten_danh_muc',
            'trang_thai' => 'required|boolean'
        ], [
            'required' => ':attribute không được để trống.',
            'string' => ':attribute phải là chuỗi.',
            'max' => ':attribute không được vượt quá :max ký tự.',
            'unique' => ':attribute đã tồn tại.',
            'boolean' => ':attribute phải là đúng hoặc sai.'
        ], [
            'ten_danh_muc' => 'Tên danh mục',
            'trang_thai' => 'Trạng thái'
        ]);

        Category::create($dataNew);
        return redirect()->route('admin.categories.index')->with('success', 'Danh mục đã được thêm.');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $dataNew = $request->validate([
            'ten_danh_muc' => 'required|string|max:255|unique:categories,ten_danh_muc,' . $id,
            'trang_thai' => 'required|boolean'
        ]);

        $category->update($dataNew);
        return redirect()->route('admin.categories.index')->with('success', 'Danh mục đã được cập nhật.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete(); // Xóa mềm thay vì xóa vĩnh viễn
        return redirect()->route('admin.categories.index')->with('success', 'Danh mục đã được chuyển vào thùng rác!');
    }

    public function bin()
    {
        $category = Category::onlyTrashed()->get();
        return view('admin.categories.bin', compact('category'));
    }
    public function restore($id)
    {
        $category = Category::onlyTrashed()->findOrFail($id);
        $category->restore();
        return redirect()->route('admin.categories.index')->with('success', 'Danh mục đã được khôi phục.');
    }
    public function forceDelete($id)
    {
        $category = Category::withTrashed()->findOrFail($id);

        // Xóa tất cả sản phẩm trước khi xóa category
        $category->products()->forceDelete();

        $category->forceDelete();

        return redirect()->route('admin.categories.bin')->with('success', 'Xóa vĩnh viễn thành công!');
    }
}
