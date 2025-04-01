@extends('layouts.admin')

@section('title', 'Thêm bài viết')

@section('content')
    <h1 class="mb-4">Thêm bài viết mới</h1>

    <div class="card">
        <div class="card-header bg-primary text-white">Nhập thông tin bài viết</div>
        <div class="card-body">
            <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Tiêu đề</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Tác giả</label>
                    <input type="text" name="author" class="form-control" value="{{ old('author') }}">
                    @error('author')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Ảnh đại diện</label>
                    <input type="file" name="image" class="form-control">
                    @error('image')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Nội dung</label>
                    <textarea name="content" class="form-control" rows="5">{{ old('content') }}</textarea>
                    @error('content')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Trạng thái</label>
                    <select name="trang_thai" class="form-control">
                        <option value="1" {{ old('trang_thai') == '1' ? 'selected' : '' }}>Công khai</option>
                        <option value="0" {{ old('trang_thai') == '0' ? 'selected' : '' }}>Nháp</option>
                    </select>
                    @error('trang_thai')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Thêm bài viết</button>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
    </div>
@endsection
