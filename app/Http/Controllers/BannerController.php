<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index(Request $request)
    {
        $query = Banner::query();

        // Tìm kiếm theo ID
        if ($request->filled('id')) {
            $query->where('id', $request->id);
        }

        $banners = $query->orderBy('id', 'desc')->paginate(10);
        return view('admin.banners.index', compact('banners'));
    }

    public function show($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.banners.show', compact('banner'));
    }
    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        $dataNew = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'trang_thai' => 'required|boolean'
        ]);

        // Lưu ảnh
        if ($request->hasFile('image')) {
            $imgPath = $request->file('image')->store('images/banners', 'public');
            $dataNew['image'] = $imgPath;
        }

        Banner::create($dataNew);
        return redirect()->route('admin.banners.index')->with('success', 'Banner đã được thêm thành công!');
    }

    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);

        $dataNew = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'trang_thai' => 'required|boolean'
        ]);

        if ($request->hasFile('image')) {
            $imgPath = $request->file('image')->store('images/banners', 'public');

            // Xóa ảnh cũ nếu có
            if ($banner->image) {
                Storage::disk('public')->delete($banner->image);
            }

            $dataNew['image'] = $imgPath;
        }

        $banner->update($dataNew);
        return redirect()->route('admin.banners.index')->with('success', 'Banner đã được cập nhật!');
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);

        // // Xóa ảnh
        // if ($banner->image) {
        //     Storage::disk('public')->delete($banner->image);
        // }

        $banner->delete();
        return redirect()->route('admin.banners.index')->with('success', 'Banner đã bị xóa.');
    }
    public function bin()
    {
        $banners = Banner::onlyTrashed()->get();
        return view('admin.banners.bin', compact('banners'));
    }

    public function restore($id)
    {
        $banner = Banner::onlyTrashed()->findOrFail($id);
        $banner->restore();
        return redirect()->route('admin.banners.index')->with('success', 'Banner đã được khôi phục.');
    }
    public function forceDelete($id)
    {
        $banner = Banner::withTrashed()->findOrFail($id);

        $banner->forceDelete();

        return redirect()->route('admin.banners.bin')->with('success', 'Xóa vĩnh viễn thành công!');
    }
}
