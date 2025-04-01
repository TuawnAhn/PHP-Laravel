<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::query();

        // Tìm kiếm theo tiêu đề
        if ($request->filled('title')) {
            $query->where('title', 'LIKE', '%' . $request->title . '%');
        }

        // Tìm kiếm theo tác giả
        if ($request->filled('author')) {
            $query->where('author', 'LIKE', '%' . $request->author . '%');
        }

        // Tìm kiếm theo trạng thái
        if ($request->filled('trang_thai')) {
            $query->where('trang_thai', $request->trang_thai);
        }

        $query->orderBy('id', 'desc');
        $posts = $query->paginate(10);

        return view('admin.posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.show', compact('post'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'content'     => 'required|string',
            'author'      => 'required|string|max:100',
            'image'       => 'nullable|image|mimes:jpg,png,jpeg,gif',
            'trang_thai'  => 'required|boolean'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images/posts', 'public');
        }

        Post::create($data);
        return redirect()->route('admin.posts.index');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'content'     => 'required|string',
            'author'      => 'required|string|max:100',
            'image'       => 'nullable|image|mimes:jpg,png,jpeg,gif',
            'trang_thai'  => 'required|boolean'
        ]);

        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $data['image'] = $request->file('image')->store('images/posts', 'public');
        }

        $post->update($data);
        return redirect()->route('admin.posts.index');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        // if ($post->image) {
        //     Storage::disk('public')->delete($post->image);
        // }

        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Bài viết đã được xóa thành công.');
    }

    public function bin()
    {
        $posts = Post::onlyTrashed()->get();
        return view('admin.posts.bin', compact('posts'));
    }

    public function restore($id)
    {
        $post = Post::onlyTrashed()->findOrFail($id);
        $post->restore();
        return redirect()->route('admin.posts.index')->with('success', 'Bài viết đã được khôi phục.');
    }

    public function forceDelete($id)
    {
        $post = Post::onlyTrashed()->findOrFail($id);
        $post->forceDelete();
        return redirect()->route('admin.posts.bin')->with('success', 'Xóa vĩnh viễn thành công!');
    }
}
