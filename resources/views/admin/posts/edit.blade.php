@extends('layouts.admin')

@section('title', 'Chỉnh sửa bài viết')

@section('content')
    <h1 class="mb-4">Chỉnh sửa bài viết</h1>

    <div class="card">
        <div class="card-header bg-warning text-white">Cập nhật thông tin bài viết</div>
        <div class="card-body">
            <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Tiêu đề -->
                <div class="mb-3">
                    <label class="form-label">Tiêu đề</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $post->title) }}">
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tác giả -->
                <div class="mb-3">
                    <label class="form-label">Tác giả</label>
                    <input type="text" name="author" class="form-control" value="{{ old('author', $post->author) }}">
                    @error('author')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Ảnh bài viết -->
                <div class="mb-3">
                    <label class="form-label">Ảnh bài viết</label>
                    <input type="file" name="image" class="form-control">
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="mt-2" width="150">
                    @endif
                    @error('image')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Nội dung -->
                <div class="mb-3">
                    <label class="form-label">Nội dung</label>
                    <textarea name="content" class="form-control" rows="5">{{ old('content', $post->content) }}</textarea>
                    @error('content')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Trạng thái -->
                <div class="mb-3">
                    <label class="form-label">Trạng thái</label>
                    <select name="trang_thai" class="form-control">
                        <option value="1" {{ old('trang_thai', $post->trang_thai) == '1' ? 'selected' : '' }}>Công khai
                        </option>
                        <option value="0" {{ old('trang_thai', $post->trang_thai) == '0' ? 'selected' : '' }}>Nháp
                        </option>
                    </select>
                    @error('trang_thai')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-warning text-white">Cập nhật</button>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
    </div>
@endsection
